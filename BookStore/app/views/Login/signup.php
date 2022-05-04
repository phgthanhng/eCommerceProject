<?php require APPROOT . '/views/includes/header.php';  ?>
<form class="px-4 py-3" method="post" action="">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" id="login-box">
            <div class="login-box-header">
                <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">Signup</h4>
            </div>

            <div class="email-login" style="background-color:#ffffff;">
            <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="email-imput form-control" style="margin-top:10px;" required="" placeholder="Email">
            <input type="text" name="username" id="username" class="email-imput form-control" style="margin-top:10px;" required="" placeholder="Username" minlength="4">
            <input type="password" name="password" id="password" class="password-input form-control" style="margin-top:10px;" required="" placeholder="Password" minlength="6">
            <input type="password" name="verify_password" id="verify_password" class="password-input form-control <?php echo (!empty($data['password_match_error'])) ? 'is-invalid' : ''; ?>"  style="margin-top:10px;" required="" placeholder="Re-enter password" minlength="6">
            <span class="invalid-feedback"><?php echo $data['password_match_error']; ?> </span>
    
        </div>   
            <div class="email-login" style="background-color:#ffffff;">
            <input type="text" name="fname" id="fname" class="form-control" style="margin-top:10px;" required="" placeholder="First Name">
            <input type="text" name="lname" id="lname" class="form-control" style="margin-top:10px;" required="" placeholder="Last Name">
            <input type="text" name="address" id="address" class="form-control" style="margin-top:10px;" required="" placeholder="Address" minlength="6">
            <input type="tel" name="phone" id="phone" class="form-control" style="margin-top:10px;" pattern="^\d{3}-\d{3}-\d{4}$" title="put your telephone number like this: xxx-xxx-xxxx" required="" placeholder="Phone xxx-xxx-xxxx" minlength="12">
            </div>   

            <div class="submit-row" style="margin-bottom:8px;padding-top:0px;">
            <button class="btn btn-primary d-block box-shadow w-100" id="submit-id-submit" name="signup" type="submit">sign
                    up</button>
                <div class="d-flex justify-content-between">
                    <div class="form-check form-check-inline" id="form-check-rememberMe"><input class="form-check-input" type="checkbox" id="formCheck-1" for="remember" 
                    style="cursor:pointer;" name="newsletter" value="yes" checked>
                    <label class="form-check-label" for="formCheck-1"><span class="label-text">Subscribe to our newsletter</span></label></div>
                </div>
            </div>
            <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
                <p style="margin-bottom:0px;">Already have an account?<a id="register-link" href="<?php echo URLROOT; ?>/Login/index">LogIn!</a></p>
            </div>
        </div>
    </div>
</form>

<?php require APPROOT . '/views/includes/footer.php';  ?>