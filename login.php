<?php 
    
    // allow the config
    define('__CONFIG__', true);
    // require the config
    require_once "inc/config.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguruan Budaya</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.2/dist/css/uikit.min.css" />
</head>
<body>
    <div class="uk-section uk-container">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
            <form action="#" class="uk-form-stacked js-login">
                <h2>Login</h2>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Username</label>
                    <div class="uk-form-controls">
                        <input type="text" required id="username" placeholder="Username" class="uk-input">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Password</label>
                    <div class="uk-form-controls">
                        <input type="Password" required id="password" placeholder="Password" class="uk-input">
                    </div>
                </div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-default" type="submit">Login</button>
                </div>
                
            </form>
        </div>
    </div>

    <?php require_once "inc/footer.php"; ?>

    
    
</body>
</html>