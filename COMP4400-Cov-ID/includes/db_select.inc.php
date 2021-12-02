<?php
$serverName = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dbName = "phplogsys";

//$fullname = $_POST['fullname'];

$conn = mysqli_connect($serverName, $dBUsername, $dbPassword, $dbName); // native function from php

if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

if(isset($_POST["select"])){
    $fullname = $_POST['fullname'];
    //$sql = "SELECT usersname, usersemail FROM users WHERE usersname = '$fullname';";
    ////$stmt = mysqli_stmt_init($conn);
    //$query_result = $conn ->query($sql);
    //
    //if($query_result->num_rows > 0) {
    //    while($row = $query_result->fetch_assoc()){
    //        $usersRecord = array(
    //            "usersname"=> $row["usersname"],
    //            "usersemail" => $row["usersemail"]
    //        );
    //        echo json_encode($usersRecord);
    //    }
    //}
    //else{
    //    echo (false);
    //}
    //
    //$conn -> close();

    $sql = "SELECT usersname, usersemail FROM users WHERE usersname = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../dashboard.php?error=stmtfailed");
        exit();
    }
    // Passes the data to the already validated statement, ss stands for strings/text
    mysqli_stmt_bind_param($stmt, "s", $fullname);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($resultData) > 0){
        while ($row = mysqli_fetch_assoc($resultData) ){
            $usersRecord = array(
                "usersname"=> $row["usersname"],
                "usersemail" => $row["usersemail"]
            );
            echo json_encode($usersRecord);
            header("location: ../dashboard.php?error=stmtsucc");
            exit();
        }
    }
    //if($row = mysqli_fetch_assoc($resultData)){ // we are gonna use the data returned by the condition inside the if
    //    return $row;
    //}
    else{
    //    $result = false;
    //    return $result;
        echo (false);
    }

mysqli_stmt_close($stmt);
}