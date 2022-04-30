<?php require APPROOT . '/views/includes/header.php';  ?>
<div class="container">
    <form class="px-4 py-3" method="post" action="" style="margin-top:50px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" id="login-box">
                <div class="login-box-header">
                    <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">EDIT PROFILE
                    </h4>
                </div>

                <div class="email-login" style="background-color:#ffffff;">
                    <label for="email" style="margin-top:10px;">Email</label>
                    <input type="email" name="email" id="email" class="email-imput form-control" style="margin-top:10px;" required="" placeholder="Email" value="<?php echo $data->email ?>">
                    <label for="username" style="margin-top:10px;">Username</label>
                    <input type="text" name="username" id="username" class="form-control" style="margin-top:10px;" required="" placeholder="Username" value="<?php echo $data->username ?>">
                    <label for="fname" style="margin-top:10px;">First Name:</label>
                    <input type="text" name="fname" id="fname" class="form-control" style="margin-top:10px;" required="" placeholder="First Name" value="<?php echo $data->firstname ?>">
                    <label for="lname" style="margin-top:10px;">Last Name:</label>
                    <input type="text" name="lname" id="lname" class="form-control" style="margin-top:10px;" required="" placeholder="Last Name" value="<?php echo $data->lastname ?>">
                    <label for="address" style="margin-top:10px;">Address:</label>
                    <input type="text" name="address" id="address" class="form-control" style="margin-top:10px;" required="" placeholder="Address" minlength="6" value="<?php echo $data->address ?>">
                    <label for="phoneNum" style="margin-top:10px;">Telephone Number: (xxx-xxx-xxxx)</label>
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
                    <?php if (!empty($msg['msg'])) {
                        echo '<div class="alert alert-danger" role="alert">' .
                            $msg['msg'] .
                            '</div>';
                    } ?> 
                </div>

            </div>
        </div>
    </form>
</div>

<?php require APPROOT . '/views/includes/footer.php';  ?>