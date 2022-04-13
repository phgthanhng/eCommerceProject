<?php require APPROOT . '/views/includes/header.php';?>
<form class="px-4 py-3" method="post" action="">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" id="login-box">
            <div class="login-box-header">
                <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">Edit editCredentials</h4>
            </div>

            <div class="email-login" style="background-color:#ffffff;">
            <input type="email" name="email" id="email" class="email-imput form-control" style="margin-top:10px;" required="" placeholder="Email">
            <input type="text" name="username" id="username" class="email-imput form-control" style="margin-top:10px;" required="" placeholder="Username" minlength="4">
            <input type="password" name="password" id="password" class="password-input form-control" style="margin-top:10px;" required="" placeholder="Password" minlength="6">
            <input type="password" name="verify_password" id="verify_password" class="password-input form-control"  style="margin-top:10px;" required="" placeholder="Re-enter password" minlength="6">
    
        </div>   
            <div class="submit-row" style="margin-bottom:8px;padding-top:0px;">
            <button class="btn btn-primary d-block box-shadow w-100" id="submit-id-submit" name="editCredentials" type="submit">sign
                    up</button>
            </div>
        
        </div>
    </div>
</form>

<?php require APPROOT . '/views/includes/footer.php';  ?>