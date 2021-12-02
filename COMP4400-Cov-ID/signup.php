<?php
include_once 'header.php';
?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <div class="signup-form-form">
        <form action="includes/signup.inc.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" >
            </div>
            <div class="mb-3">
                <label for="uid" class="form-label">Username:</label>
                <input type="text" class="form-control" name="uid" id="uid" placeholder="Username" >
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" >
            </div>
            <div class="mb-3">
                <label for="pwdrepeat" class="form-label">Repeat Password:</label>
                <input type="password" class="form-control" name="pwdrepeat" id="pwdrepeat" placeholder="Repeat Password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
        </form>
    </div>
<!--    Maybe we can put did error in a pop message instead of like this, bootstrap does have away to do this.-->
    <?php
    // Catches the error sent by signup .inc.php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invaliduid"){
            echo "<p>Fill in username!</p>";
        }
        else if ($_GET["error"] == "invalidemail"){
            echo "<p>Fill in email!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch"){
            echo "<p>Password does not match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed"){
            echo "<p>Something happened try again!</p>";
        }
        else if ($_GET["error"] == "usernametaken"){
            echo "<p>Username already exists!</p>";
        }
        else if ($_GET["error"] == "none"){
            echo "<p>Signed up successfully!</p>";
        }
    }
    ?>
</section>



<?php
include_once 'footer.php';
?>
