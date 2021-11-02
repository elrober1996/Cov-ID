<?php
include_once 'header.php';
?>
<div>
    <h1>Vaccine Side Effect Form</h1>
</div>
<section class="signup-form">
    <div class="profile-form">
        <form action="includes/vaccinereport.inc.php" method="post">
            <div class="mb-3">
                <label for="vaccineType" class="form-label">Vaccine Type (If applies):</label>
                <select class="form-select" aria-label="Default select example" id="vaccineType" name="vaccineType">
                    <option selected>Select Vaccine</option>
                    <option value="pfizer">Pfizer</option>
                    <option value="moderna">Moderna</option>
                    <option value="j&j">Johnson & Johnson</option>
                    <option value="n/a">N/A</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="locationTakenName" class="form-label">Where did you take it: (Name of the lab, Walmart, Walgreens, etc)</label>
                <input type="text" class="form-control" id="locationTakenName" name="locationTakenName" placeholder="Enter name of where you took it" >
            </div>
            <div class="mb-3">
                <label for="locationTaken" class="form-label">Name of the state it was taken: (state or common wealth)</label>
                <input type="text" class="form-control" id="locationTaken" name="locationTaken" placeholder="Enter the state" >
            </div>
            <div class="mb-3">
                <label for="dosis" class="form-label">Dosis (If applies):</label>
                <select class="form-select" aria-label="Default select example" id="dosis" name="dosis">
                    <option selected>Which Dosis: (If it applies)</option>
                    <option value="first-dosis">First Dosis</option>
                    <option value="second-dosis">Second Dosis</option>
                    <option value="booster-dosis">Booster Dosis</option>
                    <option value="n/a">N/A</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="vaccineDate" class="form-label">When was the last shot taken?</label>
                <input type="date" class="form-control" id="vaccineDate"  name="vaccineDate" min="2020-11-15">
            </div>
            <div class="mb-3">
                <label for="sideEffect" class="form-label">Race</label>
                <select class="form-select" aria-label="Default select example" id="sideEffect" name="sideEffect[]" multiple>
                    <option selected>Select side effects:</option>
                    <option value="tiredness">Tiredness</option>
                    <option value="headache">Headache</option>
                    <option value="muscle-ache">Muscle or joint aches</option>
                    <option value="chills">Chills</option>
                    <option value="nausea">Nausea and vomiting</option>
                    <option value="underarm-swelling">Underarm swelling</option>
                    <option value="fever">Fever</option>
                    <option value="injection-site-swelling">Injection Site Swelling</option>
                    <option value="inection-site-pain">Injection Site Pain</option>
                    <option value="redness">Redness</option>
                    <option value="swelling">Swelling</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="undescribedEffect" class="form-label">Side effect that haven't been described:</label>
                <input type="text" class="form-control" id="undescribedEffect" name="undescribedEffect" placeholder="Enter your side effect" >
            </div>
            <button type="submit"  class="btn btn-primary" name="submit">Create Side Effect reporting</button>
        </form>
    </div>
    <?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "stmtfailed"){
            echo "<p>Something happened try again!</p>";
        }
        else if ($_GET["error"] == "emptyfields"){
            echo "<p>Empty Fields!</p>";
        }
        else if ($_GET["error"] == "stmtfailedprepare"){
            echo "<p>Prepare Statement failed!</p>";
        }
        else if ($_GET["error"] == "stmtfailedbind"){
            echo "<p>Bind Statement failed!</p>";
        }
    }
    ?>

<?php
include_once 'footer.php';
?>
