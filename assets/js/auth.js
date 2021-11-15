const mysql = require("mysql");
const jwt = require("jsonwebtoken");
const bcrypt = require("bcryptjs");
const { promisify } = require("util");
const async = require("hbs/lib/async");

const db = mysql.createConnection({
    host: process.env.DATABASE_HOST,
    user: process.env.DATABASE_USER,
    password: process.env.DATABASE_PASSWORD,
    database: process.env.DATABASE
});

exports.login = async (req, res) => {
    try {
        const { username, password } = req.body;

        if(!username || !password) {
            return res.status(400).render("login", {
                message: 'Insert an username and password'
            })
        }

        db.query('SELECT * FROM users WHERE username = ?', [username], async (error, results) => {

            if(!results || !(await bcrypt.compare(password, results[0].password))) {
                res.status(401).render("login", {
                    message: 'Username or Password is incorrect'
                })
            } else {
                const id = results[0].id;

                const token = jwt.sign({ id: id }, process.env.JWT_SECRET, {
                    expiresIn: process.env.JWT_EXPIRES_IN
                });

                console.log("The token is: " + token);

                const cookieOptions = {
                    expires: new Date(
                        Date.now() + process.env.JWT_COOKIE_EXPIRES * 24 * 60 * 60 * 1000
                    ),
                    httpOnly: true
                }

                res.cookie('jwt', token, cookieOptions);
                res.status(200).redirect("/");
            }

        })

    } catch (error) {
        console.log(error);
    }
}

exports.register = (req, res) => {
    console.log(req.body);

    const { name, username, password, passwordConfirm } = req.body;

    db.query('SELECT username FROM users WHERE username = ?', [username], async (error, results) => {
        if(error) {
            console.log(error);
        } 

        if(!username || !password) {
            return res.status(400).render("register", {
                message: 'Insert an username and password'
            })
        } else if(password !== passwordConfirm) {
            return res.render('register', {
                message: 'Password do not match'
            });
        }

        let hashedPassword = await bcrypt.hash(password, 8);
        console.log(hashedPassword);

        db.query('INSERT INTO users SET ?', { name: name, username: username, password: hashedPassword }, (error, results) => {
            if(error) {
                console.log(error);
            } else {
                console.log(results)
                return res.render('register', {
                    message: 'User registered'
                })
            }
        })
        

    });
}

exports.isLoggedIn = async (req, res, next) => {
    // console.log(req.cookies);
    if(req.cookies.jwt) {
        try {
            // verify the token
            const decoded = await promisify(jwt.verify)(req.
                cookies.jwt,
                process.env.JWT_SECRET
            );

            // console.log(decoded);

            // check if the user still exist
            db.query('SELECT * FROM users WHERE id = ?', [decoded.id], (error, result) => {
                // console.log(result);

                if(!result) {
                    return next();
                }

                req.user = result[0];
                return next();
            });
        } catch(error) {
            console.log(error);
            return next();
        }
    } else {
        next();
    }
}

exports.changePassword = (req, res) => {
    console.log(req.body);

    const { password, newPassword, newPasswordConfirm } = req.body;

    db.query('UPDATE users SET password = ? WHERE id = ?', [password, req.params.id], async (error, rows) => {
        if(!error) {

            let hashedPassword = await bcrypt.hash(password, 8);
            console.log(hashedPassword);

            db.query('UPDATE users SET ?', { password: hashedPassword }, (error) => {

                if(!error) {

                    db.query('SELECT password FROM users WHERE id = ?', [req.params.id], (error, rows) => {

                        if(!error) {
                            res.render('profile', { rows, message: 'Password has been updated'});
                        } else {
                            console.log(error);
                        }
                        console.log('The data from users table: \n', rows);
                    })
                } else {
                    console.log(error)
                }
            })

            
        } else {
            console.log(error)
        }
        console.log('The data from users table: \n', rows);
    });
    
}
