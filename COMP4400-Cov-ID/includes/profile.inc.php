<?php
if(isset($_POST["submit"])){
    session_start();
    $age = $_POST["age"];
    $ethnicity = $_POST["ethnicity"];
    $race = $_POST["race"];
    $address = $_POST["address"];
    $birthdate = $_POST["birthdate"];
    $vaccinetype = $_POST["vaccinetype"];
    $dosis = $_POST["dosis"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyInputProfile($age, $ethnicity, $race, $address, $birthdate, $vaccinetype, $dosis) !== false){ // If it is anything that it is not false
        header("location: ../profile.php?error=emptyinputprofile");
        exit();
    }
    else{

            if(recordExist($conn, $_SESSION["userid"])){
                header("location: ../profile.php?error=recordexist");
                exit();
            }
            createMedicalRecord($conn, $_SESSION["userid"], $age, $ethnicity, $race, $address, "", $birthdate, $vaccinetype, $dosis);

    }
}