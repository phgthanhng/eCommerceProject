<?php require APPROOT . '/views/includes/header.php';  ?>

<body style="margin-top: 0px;">
    <nav class="navbar navbar-light navbar-expand-md text-center">
        <div class="container-fluid"><a class="navbar-brand" href="../Home/index.html" style="font-size: 30px;">AllBookedUp!</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Categories</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="../Categories/classic.html">Classic</a><a class="dropdown-item" href="../Categories/fiction.html">Fiction</a><a class="dropdown-item" href="../Categories/non_fiction.html">Non-fiction</a><a class="dropdown-item"
                                href="../Categories/romance.html">Romance</a><a class="dropdown-item" href="../Categories/self_helf.html">Self-help &amp; wellness</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../Home/popularBooks.html">Popular books</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                </ul>
                <form class="d-flex me-auto navbar-form" target="_self">
                    <div class="d-flex align-items-center"><label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search" style="margin: 10px;"></i></label><input class="form-control search-field" type="search" id="search-field-1" name="search"></div>
                </form><span class="navbar-text"> <a class="login" href="login.html" style="margin: 20px;">Log In</a></span><span class="navbar-text"> <a class="login" href="signup.html" style="margin: 10px;">Sign up</a></span></div>
        </div>
    </nav>
    <div class="container" style="margin-top: 50px;">
        <div class="d-flex flex-column justify-content-center" id="login-box" style="margin-top: 100px;">
            <div class="login-box-header">
                <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">Login</h4>
            </div>
            <div class="login-box-content"></div>
            <div class="email-login" style="background-color:#ffffff;"><input type="email" class="email-imput form-control" style="margin-top:10px;" required="" placeholder="Email" minlength="6"><input type="password" class="password-input form-control" style="margin-top:10px;" required="" placeholder="Password"
                    minlength="6"></div>
            <div class="submit-row" style="margin-bottom:8px;padding-top:0px;"><button class="btn btn-primary d-block box-shadow w-100" id="submit-id-submit" type="submit">Login</button>
                <div class="d-flex justify-content-between">
                    <div class="form-check form-check-inline" id="form-check-rememberMe"><input class="form-check-input" type="checkbox" id="formCheck-1" for="remember" style="cursor:pointer;" name="check"><label class="form-check-label" for="formCheck-1"><span class="label-text">Remember Me</span></label></div><a id="forgot-password-link"
                        href="#">Forgot Password?</a></div>
            </div>
            <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
                <p style="margin-bottom:0px;">Don't you have an account?<a id="register-link" href="signup.html">Sign Up!</a></p>
            </div>
        </div>
    </div>

    <?php require APPROOT . '/views/includes/footer.php';  ?>