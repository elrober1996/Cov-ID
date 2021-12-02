<?php
include_once 'header.php';
?>


<h1>Dashboard</h1>
<!--<section class="signup-form" id="form-test">-->
<!--    <div class="profile-form">-->
<!--        <form action="includes/profile.inc.php" name="dashboard" method="post">-->
<!--            <input type="text" name="fullname" id="fullname" placeholder="Full Name">-->
<!--            <input type="text" name="email" id="email" placeholder="Email">-->
<!--            <button type="button" name="select" class="btn btn-info" onclick="php_Select()">Select</button>-->
<!--        </form>-->
<!--    </div>-->
<!--</section>-->
<div>
    <iframe width="900" height="450" src="https://datastudio.google.com/embed/reporting/7fa5795a-41f4-4bcc-a853-2ca99dd93c78/page/u1rgC" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Warning!!!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="modalMsg" name ="modalMsg"></p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>
