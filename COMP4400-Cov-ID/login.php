<?php
include_once 'header.php';
?>

<section class="signup-form">
    <h2>Log In</h2>
    <div class="signup-form-form">
        <form action="includes/login.inc.php" method="post">
            <div class="mb-3">
                <label for="uid" class="form-label">Username/Email:</label>
                <input type="text" class="form-control" id="uid" name="uid" placeholder="Username or Email">
            </div>
            <div class="mb-3">
                <label for="uid" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" >
            </div>
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
