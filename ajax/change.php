<?php 
    
    // allow the config
    define('__CONFIG__', true);

    // require the config
    require_once "../inc/config.php"; 

    

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // always return JSON format
        header('Content-Type: application/json');

        $user_id = $_SESSION['user_id'];

        $getUserInfo = $con -> prepare("SELECT username FROM users WHERE user_id = :user_id LIMIT 1");
        $getUserInfo -> bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $getUserInfo -> execute();

        if($getUserInfo == true) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $changePass = $con -> prepare("UPDATE users SET password = :password WHERE user_id = ? LIMIT 1");
            $changePass -> bindParam(':password', $password, PDO::PARAM_STR);
            $changePass -> execute();

            if($changePass == true) {
                $return['redirect'] = '/';
                $return['error'] = "Password berhasil diubah";
            } else {
                $return['error'] = "Gagal mengubah Password";
            }
            

            $user_id = $con -> lastInsertId();

            $_SESSION['user_id'] = (int) $user_id;
        } else {

        }

        




        echo json_encode($return, JSON_PRETTY_PRINT);
        exit;

        

    } else {
        // kill the script
        exit('Invalid URL');
    }
    

?>