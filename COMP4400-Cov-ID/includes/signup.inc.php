<?php

if (isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once  "dbh.inc.php";
    require_once  "functions.inc.php";

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){ // If it is anything that it is not false
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false){ // If it is anything that it is not false
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false){ // If it is anything that it is not false
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd,$pwdRepeat ) !== false){ // If it is anything that it is not false
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }


    if (isset($conn)) {
        if (uidExists($conn, $username, $email) !== false){ // If it is anything that it is not false
            header("location: ../signup.php?error=usernametaken");
            exit();
        }
    }

    createUser($conn, $name, $email, $username, $pwd);
//    $usersId = mysqli_insert_id($conn);
//    createMedicalRecord($conn, 0, 0, '', '', '', '', '1900-01-01');
}
else {
    header("location: ../signup.php");
    exit();
}