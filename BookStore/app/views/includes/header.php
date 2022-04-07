<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>
        <?php echo SITENAME; ?>
    </title>
    <!-- added this line because it will not show the icons in firefox -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&amp;display=swap" />
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/fonts/ionicons.min.css" />
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.reflowhq.com/v1/toolkit.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md text-center" style="padding-bottom: 0; background: #bdc696">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo URLROOT; ?>/Home/index"
                style="font-size: 28px">AllBookedUp!</a><button data-bs-toggle="collapse" class="navbar-toggler"
                data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" aria-expanded="false"
                            data-bs-toggle="dropdown">Categories</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo URLROOT;?>/Categories/classic">Classic</a>
                            <a class="dropdown-item" href="<?php echo URLROOT;?>/Categories/fiction">Fiction</a>
                            <a class="dropdown-item" href="<?php echo URLROOT;?>/Categories/non_fiction">Non-fiction</a>
                            <a class="dropdown-item" href="<?php echo URLROOT;?>/Categories/romance">Romance</a>
                            <a class="dropdown-item" href="<?php echo URLROOT;?>/Categories/self_help">Self-help &amp;
                                wellness</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/API/index">NYT Best Sellers </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/Contact/contactUs">Contact us</a>
                    </li>

                    <!-- Check if logged in | Still havent implemented the code here -->
                    <?php 
                    if (!isLoggedIn()) { 
                        echo ' 
                        <li class="nav-item"><a class="nav-link" href="'.URLROOT.'/Login/index">dashboard</a></li>
                        '; 
                    }
                    // logged in as user
                    else {
                        if (!isAdmin()) {
                            echo ' 
                            <li class="nav-item"><a class="nav-link" href="'.URLROOT.'/User/index">dashboard</a></li>
                            ';
                        } 
                        else {
                            echo ' 
                            <li class="nav-item"><a class="nav-link" href="'.URLROOT.'/Admin/index">dashboard</a></li>
                            ';
                        }
                    }
                    ?>
                    <?php 
                    if (isLoggedIn() && !isAdmin() || !isLoggedIn()) { 
                    echo '
                    <li class="nav-item">
                        <a class="nav-link" href="'.URLROOT.'/Login/index">
                              <i class="fa fa-heart-o fs-3 d-xxl-flex align-items-center align-content-center justify-content-xxl-start" style="margin: auto; margin-bottom: 0px; padding-bottom: 5px">
                              </i>
                        </a>
                    </li> ';
                    }
                    ?>

                </ul>
                <!-- SEARCH BAR -->
                <form class="d-flex me-auto navbar-form" target="_self">
                    <div class="d-flex align-items-center">
                        <label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search"
                                style="margin: 10px"></i></label><input class="form-control search-field" type="search"
                            id="search-field-1" name="search" placeholder="search by author or title" />
                    </div>
                </form>
                <!-- CART -->
                <?php
                if (!isLoggedIn() || isLoggedIn() && !isAdmin()) { 
                    echo '
                        <a href="'.URLROOT.'/Cart/cart.php" style="margin: auto"> <button class="btn btn-primary"
                        type="submit"><i class="fa fa-shopping-cart text-center d-xl-flex"
                            style="font-size: 20px; margin: auto; color: rgb(241, 236, 236)"></i></button></a>';
                }
                ?>
                <?php
                    if (isLoggedIn()) {
                        echo '<span class="navbar-text"> <a class="login" href="'.URLROOT.'/Login/logout" style="margin: 10px"><i class="fa fa-sign-out" aria-hidden="true"></i>
                    Logout  ' . $_SESSION['user_username'] . '</a></span>';
                    } else {
                        echo '<span class="navbar-text"> <a class="login" href="'.URLROOT.'/Login/index" style="margin: 10px"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></span><span class="navbar-text">
                    <a class="login" href="'.URLROOT.'/Login/signup" style="margin: 10px"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign up</a></span>';
                    }
                    ?>
            </div>
        </div>
    </nav>