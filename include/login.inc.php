<?php
// Debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    // Your existing code
    // ...

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';
    
        if(emptyInputLogin($username, $password) !== false) {
            header("Location: ../login.php?error=emptyinput");
            exit();
        }
        
        // Make sure you're passing the username correctly
        loginUser($conn, $username, $password);
    }
    else {
        header("Location: ../login.php");
        exit();
    }
}