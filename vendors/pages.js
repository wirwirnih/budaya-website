const express = require("express");
const authController = require("../controllers/auth");

const router = express.Router();

router.get('/', authController.isLoggedIn, (req, res) => {
    
    if(req.user) {
        res.render('index', {
            user: req.user
        });
    } else {
        res.redirect('login');
    }
});

router.get('/login', authController.isLoggedIn, (req, res) => {

    if(req.user) {
        res.redirect('index', {
            user: req.user
        });
    } else {
        res.render('login');
    }
})

router.get('/register', (req, res) => {
    res.render('register');
});

router.get('/profile', authController.isLoggedIn, (req, res) => {
    
    if(req.user) {
        res.render('profile', {
            user: req.user
        });
    } else {
        res.redirect('/');
    }
});

// router.get('/home', authController.isLoggedIn, (req, res) => {
    
//     if(req.user) {
//         res.render('home', {
//             user: req.user
//         });
//     } else {
//         res.redirect('/');
//     }
// });

router.get('/tentang', authController.isLoggedIn, (req, res) => {
    
    if(req.user) {
        res.render('tentang', {
            user: req.user
        });
    } else {
        res.redirect('/');
    }
});

router.get('/kawasan', authController.isLoggedIn, (req, res) => {
    
    if(req.user) {
        res.render('kawasan', {
            user: req.user
        });
    } else {
        res.redirect('/');
    }
});

router.get('/kontak', authController.isLoggedIn, (req, res) => {
    
    if(req.user) {
        res.render('kontak', {
            user: req.user
        });
    } else {
        res.redirect('/');
    }
});

module.exports = router;