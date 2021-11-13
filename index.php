<?php

    // allow the config
    define('__CONFIG__', true);
    // require the config
    require_once 'inc/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.2/dist/css/uikit.min.css" />
</head>
<body>
    <div class="uk-section uk-container">
        <?php
            echo "Hello world, today is:<br>";
            echo date("Y M D");
        ?>

        <p>
            <a href="/login.php">Login</a>
            <a href="/register.php">Register</a>
        </p>
    </div>

    <?php require "inc/footer.php"; ?>

    
    
</body>
</html>