<?php require APPROOT . '/views/includes/header.php';  ?>
<form class="px-4 py-3" method="post" action="" style="margin-top: 30px; margin-bottom: 30px">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" id="login-box">
            <div class="login-box-header">
                <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">Edit editCredentials</h4>
            </div>

            <div class="email-login" style="background-color:#ffffff;">
                <input type="text" name="username" id="username" class="email-imput form-control" style="margin-top:10px;" required="" placeholder="Username" minlength="4" value="<?php echo $data->username?>">
                <input type="password" name="password" id="password" class="password-input form-control" style="margin-top:10px;" required="" placeholder="New Password" minlength="6">
                <input type="password" name="verify_password" id="verify_password" class="password-input form-control"  style="margin-top:10px;" required="" placeholder="Re-enter password" minlength="6">

            </div>

            <div class="submit-row" style="margin-bottom:8px;padding-top:0px;">
                <button class="btn btn-primary d-block box-shadow w-100" id="submit-id-submit" name="editCredentials" type="submit">Update</button>
                <div class="d-flex justify-content-between">
                </div>
            </div>

        </div>
    </div>
</form>

<?php require APPROOT . '/views/includes/footer.php';  ?>