<?php
if(isset($_POST["submit"])){

    $age = $_POST["age"];
    $ethnicity = $_POST["ethnicity"];
    $race = $_POST["race"];
    $address = $_POST["address"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyInputProfile($age, $ethnicity, $race, $address) !== false){ // If it is anything that it is not false
        header("location: ../profile.php?error=emptyinputprofile");
        exit();
    }
}