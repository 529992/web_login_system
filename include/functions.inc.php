<?php 

function emptyInputsSignup($username, $password, $fullname, $email, $confirmPassword) {
    $result;
    if (empty($username) || empty($password) || empty($fullname) || empty($email) || empty($confirmPassword)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emptyInputLogin($username, $password) {
    $result;
    if (empty($username) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password) {
    $userExists = usernameExists($conn, $username, $username);
    
    if ($userExists === false) {
        header("Location: ../login.php?error=wronglogin");
        exit();
    }
    
    $passwordHashed = $userExists["usersPassword"];
    $checkPassword = password_verify($password, $passwordHashed);
    
    if ($checkPassword === false) {
        header("Location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPassword === true) {
        session_start();
        $_SESSION["userid"] = $userExists["usersId"];
        $_SESSION["useruid"] = $userExists["usersUid"];
        $_SESSION["username"] = $userExists["usersName"];
        header("Location: ../index.php");
        exit();
    }
}

function invalidUsername($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $confirmPassword) {
    $result;
    if ($password !== $confirmPassword) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function usernameExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    
    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $password, $fullname, $email) {
    $sql = "INSERT INTO users (usersUid, usersPassword, usersName, usersEmail) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $username, $hashedPassword, $fullname, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../login.php?error=none");
    exit();
}