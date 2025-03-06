<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $confirmPassword = $_POST['confirmpassword'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emtyInputs = emptyInputsSignup($username, $password, $fullname, $email, $confirmPassword);
    $invalidusername = invalidUsername($username);
    $invalidEmail = invalidEmail($email);
    $passwordMatch = passwordMatch($password, $confirmPassword);
    $userExists = usernameExists($conn, $username, $email);

    if($emtyInputs !== false) {
        header("Location: ../signup.php?error=emptyinput");
        exit();
    }
    if($invalidusername !== false) {
        header("Location: ../signup.php?error=invalidusername");
        exit();
    }
    if($invalidEmail !== false) {
        header("Location: ../signup.php?error=invalidemail");
        exit();
    }
    if($passwordMatch !== false) {
        header("Location: ../signup.php?error=passwordnotmatch");
        exit();
    }
    if($userExists !== false) {
        header("Location: ../signup.php?error=usernametaken");
        exit();
    }
    
    createUser($conn, $username, $password, $fullname, $email);
}



else {
    header("Location: ../login.php");
    exit();
} 