<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function emptyInputProfile($age, $ethnicity, $race, $address, $birthdate){
    $result;
    if(empty($age) || empty($ethnicity) || empty($race) || empty($address) || empty($birthdate)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result;

    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result;
    if($pwd !== $pwdRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    // Passes the data to the already validated statement, ss stands for strings/text
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){ // we are gonna use the data returned by the condition inside the if
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersname, usersemail, usersUid, usersPwd) VALUES (?, ?, ?, ?) ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    // Passes the data to the already validated statement, ss stands for strings/text
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

// Need to make a creation medical record function method
function createMedicalRecord($conn, $usersId, $age, $ethnicity, $race, $address, $image_location, $birthdate){
    $sql = "INSERT INTO medical_record (usersId, age, ethnicity, race, address,image_location, birthdate) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../profile.php?error=stmtfailed");
        exit();
    }

    // Passes the data to the already validated statement, ss stands for strings/text
    mysqli_stmt_bind_param($stmt, "iisssss", $usersId, $age, $ethnicity, $race, $address, $image_location, $birthdate);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../profile.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result;
    if( empty($username) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd,$pwdHashed );

    if($checkPwd === false){
        header("location: ../login.php?error=wrongpassword");
        exit();
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"]; // user id
        $_SESSION["useruid"] = $uidExists["usersUid"]; // username
        header("location: ../index.php");
        exit();
    }
}