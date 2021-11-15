<?php

// force the user to be logged in or redirect
function ForceLogin() {

    if(isset($_SESSION['user_id'])) {
        // the user is allowed here  
    } else {
        // the user is not allowed
        header("location: /login");
        exit;
    }
}

function ForceDashboard() {
    if(isset($_SESSION['user_id'])) {
        header("location: /dashboard");
    } else {
        
    }
}

?>