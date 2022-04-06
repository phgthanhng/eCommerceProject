<?php require APPROOT . '/views/includes/header.php';  ?>
<!-- <form class="px-4 py-3" method="post" action=""> -->
<div class="container" style="margin-top: 50px; margin-bottom:50px">
    <div class="d-flex flex-column justify-content-center" id="login-box" style="margin-top: 100px;">
        <div class="login-box-header">
            <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">Login</h4>
        </div>
        <div class="login-box-content"></div>
        <form class="px-4 py-3" method="post" action="">
            <div class="email-login" style="background-color:#ffffff;">
                <input class="email-imput form-control" id="username" name="username" style="margin-top:10px;" required="" placeholder="Username">
                <input type="password" id="password" name="password" class="password-input form-control" style="margin-top:10px;" required="" placeholder="Password" minlength="6">
            </div>
            <div class="submit-row" style="margin-bottom:8px;padding-top:0px;">
                <button name="login" type="submit" class="btn btn-primary d-block box-shadow w-100" id="submit-id-submit">Login</button>
                <div class="d-flex justify-content-between">
                    <div class="form-check form-check-inline" id="form-check-rememberMe"><input class="form-check-input" type="checkbox" id="formCheck-1" for="remember" style="cursor:pointer;" name="check"><label class="form-check-label" for="formCheck-1"><span class="label-text">Remember Me</span></label>
                    </div>
                </div>
            </div>
            <?php

            if (!empty($data['msg'])) {
                echo '<div class="alert alert-danger" role="alert">' .
                    $data['msg'] . '
                             </div>';
            }
            ?>
            <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
                <p style="margin-bottom:0px;">Don't you have an account?<a id="register-link" href="<?php echo URLROOT; ?>/Login/signup">Sign Up!</a></p>
            </div>
        </form>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php';  ?>