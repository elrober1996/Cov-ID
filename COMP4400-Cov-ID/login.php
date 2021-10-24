<?php
include_once 'header.php';
?>

<section class="signup-form">
    <h2>Log In</h2>
    <div class="signup-form-form">
        <form action="includes/login.inc.php" method="post">
            <input type="text" class="form-control" name="uid" placeholder="Username or Email">
            <br>
            <input type="password" class="form-control" name="pwd" placeholder="Password" >
            <button type="submit" class="btn btn-primary" name="submit">Log In</button>
        </form>
    </div>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all field!</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect username!</p>";
        }
    }
    ?>
</section>

<?php
include_once 'footer.php';
?>
