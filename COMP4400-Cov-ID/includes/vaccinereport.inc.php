<?php
if(isset($_POST["submit"])){
    session_start();
    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    $vaccineType = $_POST["vaccineType"];
    $locationTakenName = $_POST["locationTakenName"];
    $locationTaken = $_POST["locationTaken"];
    $dosis = $_POST["dosis"];
    $sideEffect = $_POST["sideEffect"];
    $undescribedEffect = $_POST["undescribedEffect"];
    $side = implode(",",$sideEffect);
    if (emptySideEffect($vaccineType, $locationTakenName, $locationTaken, $dosis, $side)){
        header("location: ../vaccinereport.php?error=emptyfields");
        exit();
    }
    createSideEffectRecord($conn, $_SESSION["userid"], $vaccineType, $locationTakenName, $locationTaken, $dosis, $side, $undescribedEffect);

}
