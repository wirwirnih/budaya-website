<?php 
    
    // allow the config
    define('__CONFIG__', true);

    // require the config
    require_once "../inc/config.php"; 

    

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // always return JSON format
        header('Content-Type: application/json');
        
        $return = [];

        // make sure the user does not exist

        // make sure the user can be added

        // return the proper information back to Javascript to redirect us
        $return['redirect'] = '/login.php';

        echo json_encode($return, JSON_PRETTY_PRINT);
        exit;

    } else {
        // kill the script
        exit('test');
    }

   

    

?>