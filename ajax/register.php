<?php 
    
    // allow the config
    define('__CONFIG__', true);

    // require the config
    require_once "../inc/config.php"; 

    

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // always return JSON format
        header('Content-Type: application/json');
        
        $return = [];

        $username = Filter::String($_POST['username']);

        // make sure the user does not exist
        $findUser = $con -> prepare("SELECT user_id FROM users WHERE username = :username LIMIT 1");
        $findUser -> bindParam(':username', $username, PDO::PARAM_STR);
        $findUser -> execute();

        if($findUser -> rowCount() == 1) {
            // user exist
            // we can also check to see if they are able to login
            $return['error'] = "You already have an account";
            $return['is_logged_in'] = false;
        } else {
            // user does not exist

            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $addUser = $con -> prepare("INSERT INTO users(username, password) VALUES (:username, :password)");
            $addUser -> bindParam(':username', $username, PDO::PARAM_STR);
            $addUser -> bindParam(':password', $password, PDO::PARAM_STR);
            $addUser -> execute();

            $user_id = $con -> lastInsertId();

            $_SESSION['user_id'] = (int) $user_id;

            $return['redirect'] = '/';
            $return['is_logged_in'] = true;
        }

        echo json_encode($return, JSON_PRETTY_PRINT);
        exit;

    } else {
        // kill the script
        exit('Invalid URL');
    }

   

    

?>