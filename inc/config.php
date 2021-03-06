<?php 
    
    // if there is no constant defined called __CONFIG__, do not load this file
    if(!defined('__CONFIG__')) {
        exit('You do not have a config file');
    }

    // sessions are always turn on
    if(!isset($_SESSION)) {
        session_start();
    }

    // our config is below
    // allow errors
    error_reporting(-1);
    ini_set('display_errors', 'On');

    // include the DB.php file
    include_once "classes/DB.php";
    include_once "classes/Filter.php";
    include_once "function.php";

    $con = DB::getConnection();

?>