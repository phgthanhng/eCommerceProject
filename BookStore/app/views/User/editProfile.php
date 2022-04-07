<?php require APPROOT . '/views/includes/header.php';  ?>
<div class="container" style="min-height: 100vh;">
    <form class="px-4 py-3" method="post" action="" style="margin-top:50px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" id="login-box">
                <div class="login-box-header">
                    <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">EDIT PROFILE
                    </h4>
                </div>

                <div class="email-login" style="background-color:#ffffff;">
                    <input type="email" name="email" id="email" class="email-imput form-control" style="margin-top:10px;" required="" placeholder="Email" value="<?php echo $data->email ?>">

                    <input type="text" name="fname" id="fname" class="form-control" style="margin-top:10px;" required="" placeholder="First Name" value="<?php echo $data->firstname ?>">
                    <input type="text" name="lname" id="lname" class="form-control" style="margin-top:10px;" required="" placeholder="Last Name" value="<?php echo $data->lastname ?>">
                    <input type="text" name="address" id="address" class="form-control" style="margin-top:10px;" required="" placeholder="Address" minlength="6" value="<?php echo $data->address ?>">
                    <input type="tel" name="phone" id="phone" class="form-control" style="margin-top:10px;" pattern="^\d{3}-\d{3}-\d{4}$" required="" placeholder="Phone: xxx-xxx-xxxx" value="<?php echo $data->phone ?>">
                </div>

                <div class="submit-row" style="margin-bottom:8px;padding-top:0px;">

                    <div class="d-flex justify-content-between">
                        <div class="form-check form-check-inline" id="form-check-rememberMe"><input class="form-check-input mb-3" type="checkbox" id="formCheck-1" for="remember" style="cursor:pointer;" name="newsletter" value="yes" <?php echo ($data->newsletter == 'yes' ? 'checked="checked"' : ''); ?>>
                            <label class="form-check-label" for="formCheck-1"><span class="label-text">Unsubscribe to
                                    our newsletter</span></label>
                        </div>
                    </div>
                    <button class="btn btn-primary d-block box-shadow w-100" id="submit-id-submit" name="editProfile" type="submit">UPDATE</button>
                </div>

            </div>
        </div>
    </form>
</div>

<?php require APPROOT . '/views/includes/footer.php';  ?>