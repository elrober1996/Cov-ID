<?php

if(isset($_POST["submit"])){ // user accessed the page the proper way

    // It will grab either the username or the email
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyInputLogin($username, $pwd) !== false){ // If it is anything that it is not false
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else{
    header("location: ../login.php");
    exit();
}