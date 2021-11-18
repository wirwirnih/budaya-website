<?php 

if(!defined('__CONFIG__')) {
    exit('You do not have a config file');
}

class DB {

    protected static $con;

    private function __construct() {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user_budaya";
    
        try {

            self::$con = new PDO(
                "mysql:host=$servername;
                dbname=$database", 
                $username, 
                $password
            );
            self::$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$con -> setAttribute(PDO::ATTR_PERSISTENT, false);

        } catch(PDOException $e) {
            echo "Could not connect to database.";
            exit;
        }
    }

    public static function getConnection() {
        // if this instance was not been started, start it
        if(!self::$con) {
            new DB();
        }

        // return the writeable db connection
        return self::$con;
    }
}
?>