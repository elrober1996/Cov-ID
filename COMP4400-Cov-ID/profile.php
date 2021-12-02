<?php
include_once 'header.php';
include_once 'includes/functions.inc.php';
include_once 'includes/dbh.inc.php';
?>
    <div>
        <h1>Medical Record Form</h1>
    </div>

<!--    remember to add birthdate to both the form and the column in medical_record-->
    <section class="signup-form" id="form-test">
        <div class="profile-form">
            <form action="includes/profile.inc.php" method="post">
<!--                Format for most of the form controls, have to make this change for all of the forms-->
<!--                <div class="mb-3">-->
<!--                    <label for="exampleFormControlInput1" class="form-label">Email address</label>-->
<!--                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">-->
<!--                </div>-->
                <div class="mb-3">
                    <label for="agebox" class="form-label">Age</label>
                    <input type="number" class="form-control" id="agebox" min="0" name="age" placeholder="Enter your age" rows="3"/>
                </div>
                <div class="mb-3">
                    <label for="birthdate" class="form-label">Birthdate</label>
                    <input type="date" class="form-control" id="birthdate"  name="birthdate">
                </div>
                <div class="mb-3">
                    <label for="ethnicity" class="form-label">Ethnicity</label>
                    <select class="form-select" aria-label="Default select example" id="ethnicity" name="ethnicity">
                        <option selected>Select Ethnicity</option>
                        <option value="hispanic/latino">Hispanic or Latino</option>
                        <option value="asian">Asian</option>
                        <option value="northamerican">North American</option>
                        <option value="european">European</option>
                        <option value="african">African</option>
                        <option value="indigenous">Indigenous</option>
                        <option value="northamerican">North American</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="race" class="form-label">Race</label>
                    <select class="form-select" aria-label="Default select example" id="race" name="race">
                        <option selected>Select Race</option>
                        <option value="american-indian">American Indian</option>
                        <option value="asian">Asian</option>
                        <option value="alaska-native">Alaska Native</option>
                        <option value="black">Black</option>
                        <option value="white">White</option>
                        <option value="pacific-islander">Pacific Islander</option>
                        <option value="other-pacific">Other Pacific Islander</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" >
                </div>
                <div class="mb-3">
                    <label for="vaccinetype" class="form-label">Vaccine Type (If applies):</label>
                    <select class="form-select" aria-label="Default select example" id="vaccinetype" name="vaccinetype">
                        <option selected>Select Vaccine</option>
                        <option value="pfizer">Pfizer</option>
                        <option value="moderna">Moderna</option>
                        <option value="j&j">Johnson & Johnson</option>
                        <option value="n/a">N/A</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="dosis" class="form-label">Dosis: (If applies):</label>
                    <select class="form-select" aria-label="Default select example" id="dosis" name="dosis">
                        <option selected>Select Dosis</option>
                        <option value="first-dosis">First Dosis</option>
                        <option value="second-dosis">Second Dosis</option>
                        <option value="booster-dosis">Booster Dosis</option>
                        <option value="n/a">N/A</option>
                    </select>
                </div>
<!--                <input type="image" class="form-control" name="image_location"/>-->
                <button type="submit"  class="btn btn-primary" name="submit">Create Medical Record</button>
            </form>
        </div>
    <section class="signup-form">
        <div class="profile-form">
            <form action="includes/profile.inc.php" method="post" id="update-form">
                    <legend>Profile</legend>
                <div class="mb-3">
                    <label for="agebox" class="form-label">Age</label>
                    <input type="number" class="form-control" id="agebox" min="0" name="age" placeholder="Enter your age" rows="3"/>
                </div>
                <div class="mb-3">
                    <label for="birthdate" class="form-label">Birthdate</label>
                    <input type="date" class="form-control" id="birthdate"  name="birthdate">
                </div>
                <div class="mb-3">
                    <label for="ethnicity" class="form-label">Ethnicity</label>
                    <select class="form-select" aria-label="Default select example" id="ethnicity" name="ethnicity">
                        <option selected>Select Ethnicity</option>
                        <option value="hispanic/latino">Hispanic or Latino</option>
                        <option value="asian">Asian</option>
                        <option value="northamerican">North American</option>
                        <option value="european">European</option>
                        <option value="african">African</option>
                        <option value="indigenous">Indigenous</option>
                        <option value="northamerican">North American</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="race" class="form-label">Race</label>
                    <select class="form-select" aria-label="Default select example" id="race" name="race">
                        <option selected>Select Race</option>
                        <option value="american-indian">American Indian</option>
                        <option value="asian">Asian</option>
                        <option value="alaska-native">Alaska Native</option>
                        <option value="black">Black</option>
                        <option value="white">White</option>
                        <option value="pacific-islander">Pacific Islander</option>
                        <option value="other-pacific">Other Pacific Islander</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" >
                </div>
                <div class="mb-3">
                    <label for="vaccinetype" class="form-label">Vaccine Type (If applies):</label>
                    <select class="form-select" aria-label="Default select example" id="vaccinetype" name="vaccinetype">
                        <option selected>Select Vaccine</option>
                        <option value="pfizer">Pfizer</option>
                        <option value="moderna">Moderna</option>
                        <option value="j&j">Johnson & Johnson</option>
                        <option value="n/a">N/A</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="dosis" class="form-label">Vaccine Type (If applies):</label>
                    <select class="form-select" aria-label="Default select example" id="dosis" name="dosis">
                        <option selected>Select Race</option>
                        <option value="first-dosis">First Dosis</option>
                        <option value="second-dosis">Second Dosis</option>
                        <option value="booster-dosis">Booster Dosis</option>
                        <option value="n/a">N/A</option>
                    </select>
                </div>
                <!--                <input type="image" class="form-control" name="image_location"/>-->
                <button type="submit"  class="btn btn-primary" name="submit">Create Medical Record</button>
            </form>
        </div>
        <?php
        // Catches the error sent by profile.inc.php
        if (isset($_GET["error"])){
            if($_GET["error"] == "emptyinputprofile"){
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "stmtfailed"){
                echo "<p>Something happened try again!</p>";
            }
            else if ($_GET["error"] == "stmtfailedprepare"){
                echo "<p>Prepare Statement failed!</p>";
            }
            else if ($_GET["error"] == "stmtfailedbind"){
                echo "<p>Bind Statement failed!</p>";
            }
            else if ($_GET["error"] == "recordexist"){
                echo "<p>Record Exists!</p>";
            }
            else if ($_GET["error"] == "norow"){
                echo "<p>No medical records!</p>";
            }
        }
        ?>
    </section>
<?php
include_once 'footer.php';
?>