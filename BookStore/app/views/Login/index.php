<?php require APPROOT . '/views/includes/header.php';  ?>

<div class="container" style="margin-top: 50px;">
    <div class="d-flex flex-column justify-content-center" id="login-box" style="margin-top: 100px;">
        <div class="login-box-header">
            <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">Login</h4>
        </div>
        <div class="login-box-content"></div>
        <div class="email-login" style="background-color:#ffffff;"><input type="email" class="email-imput form-control"
                style="margin-top:10px;" required="" placeholder="Email" minlength="6"><input type="password"
                class="password-input form-control" style="margin-top:10px;" required="" placeholder="Password"
                minlength="6"></div>
        <div class="submit-row" style="margin-bottom:8px;padding-top:0px;"><button
                class="btn btn-primary d-block box-shadow w-100" id="submit-id-submit" type="submit">Login</button>
            <div class="d-flex justify-content-between">
                <div class="form-check form-check-inline" id="form-check-rememberMe"><input class="form-check-input"
                        type="checkbox" id="formCheck-1" for="remember" style="cursor:pointer;" name="check"><label
                        class="form-check-label" for="formCheck-1"><span class="label-text">Remember Me</span></label>
                </div><a id="forgot-password-link" href="#">Forgot Password?</a>
            </div>
        </div>
        <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
            <p style="margin-bottom:0px;">Don't you have an account?<a id="register-link"
                    href="<?php echo URLROOT; ?>/Login/signup">Sign
                    Up!</a></p>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php';  ?>