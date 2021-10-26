<?php
if(isset($_POST["submit"])){

    $age = $_POST["age"];
    $ethnicity = $_POST["ethnicity"];
    $race = $_POST["race"];
    $address = $_POST["address"];
    $birthdate = $_POST["birthdate"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";




    if (emptyInputProfile($age, $ethnicity, $race, $address, $birthdate) !== false){ // If it is anything that it is not false
        header("location: ../profile.php?error=emptyinputprofile");
        exit();
    }
    else{
        $sql = "SELECT usersId FROM medical_record WHERE usersId = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../profile.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "i", $_SESSION["userid"] );
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);
        $resultCheck = mysqli_num_rows($resultData);

        if($resultCheck == 0){ // It is working correctly
            if (!mysqli_stmt_prepare($stmt, $sql)){ // If the query runs, returns true. But we inverted since we don't want this if to run
                header("location: ../profile.php?error=norow");
                exit();
            }
//
        }

        header("location: ../profile.php");
    }
}