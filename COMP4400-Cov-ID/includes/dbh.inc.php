<?php

$serverName = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dbName = "phpLogSys";

$conn = "mysqli_connect($serverName, $dBUsername, $dbPassword, $dbName)"; // native function from php

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}