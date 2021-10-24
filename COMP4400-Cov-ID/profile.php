<?php
include_once 'header.php';
?>
    <div>
        <?php
        if(isset($_SESSION["useruid"])){
            echo "<h1>" . $_SESSION["useruid"] ." profile</h1>";
        }
        ?>
    </div>
<!--    remember to add birthdate to both the form and the column in medical_record-->
    <section class="signup-form">
        <div class="profile-form">
            <form action="includes/profile.inc.php" method="post">
                <input type="number" class="form-control" name="age" placeholder="Enter your age">
                <br>
                <input type="text" class="form-control" name="ethnicity" placeholder="Choose your ethnicity" >
                <br>
                <input type="text" class="form-control" name="race" placeholder="Choose your race" >
                <br>
                <input type="text" class="form-control" name="address" placeholder="Enter your address" >
                <br>
                <input type="image" class="form-control" name="image_location"/>
                <br>
                <button type="submit"  class="btn btn-primary" name="submit">Sign Up</button>
            </form>
        </div>
        <?php
        // Catches the error sent by profile.inc.php
        if (isset($_GET["error"])){
            if($_GET["error"] == "emptyinputprofile"){
                echo "<p>Fill in all fields!</p>";
            }
        }
        ?>
    </section>
<?php
include_once 'footer.php';
?>