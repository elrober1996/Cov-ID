<?php
  session_start(); // needed for the session to strat in every page
  include_once 'includes/functions.inc.php';
  include_once  'includes/db_select.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Project 01</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="javascript/report.js"></script>
  </head>
  <body>

    <!--A quick navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<!--      <div class="wrapper">-->
<!--        <a href="index.php"><img src="img/logo-white.png" alt="Blogs logo"></a>-->
          <a class="navbar-brand" href="#">
              <img src="images/devUse/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul>
<!--            <li><img src="images/devUse/logo.png"></li>-->
            <li class="nav-item"><a href="index.php">Home</a></li>
            <li class="nav-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="nav-item"><a href="covinfo.php">Covid News</a></li>
            <?php
                if(isset($_SESSION["useruid"])){
                    echo "<li class='nav-item'><a href='profile.php'>Profile Page</a></li>";
                    echo "<li class='nav-item'><a href='vaccinereport.php'>Vaccine Side Effects Report</a></li>";
                    echo "<li class='nav-item'>Hello, ". $_SESSION["useruid"]."!</li>";
                    echo "<li class='nav-item'><a href='includes/logout.inc.php'>Log Out</a></li>";
                }
                else{
                    echo "<li class='nav-item'><a href='signup.php'>Sign up</a></li>";
                    echo "<li class='nav-item'><a href='login.php'>Log In</a></li>";
                }
          ?>
            </ul>
          </div>
<!--      </div>-->
    </nav>


<!--A quick wrapper to align the content (ends in footer.php)-->
<div class="wrapper">
