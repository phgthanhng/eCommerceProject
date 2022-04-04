<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>
        <?php echo SITENAME; ?>
    </title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&amp;display=swap" />
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/fonts/ionicons.min.css" />
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
        crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md text-center" style="padding-bottom: 0; background: #bdc696">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo URLROOT; ?>/Home/index"
                style="font-size: 30px">AllBookedUp!</a><button data-bs-toggle="collapse" class="navbar-toggler"
                data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown show">
                        <a class="dropdown-toggle nav-link" aria-expanded="true" data-bs-toggle="dropdown"
                            href="#">Categories</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo URLROOT; ?>/Categories/classic">Classic</a><a
                                class="dropdown-item" href="<?php echo URLROOT; ?>/Categories/fiction">Fiction</a><a
                                class="dropdown-item"
                                href="<?php echo URLROOT; ?>/Categories/non_fiction">Non-fiction</a><a
                                class="dropdown-item" href="<?php echo URLROOT; ?>/Categories/romance">Romance</a><a
                                class="dropdown-item" href="<?php echo URLROOT; ?>/Categories/self_help">Self-help &amp;
                                wellness</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/Home/bestSellers">NYT Best Sellers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/Contact/contactUs">Contact us</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                </ul>
                <form class="d-flex me-auto navbar-form" target="_self">
                    <div class="d-flex align-items-center">
                        <label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search"
                                style="margin: 10px"></i></label><input class="form-control search-field" type="search"
                            id="search-field-1" name="search" placeholder="search by author or title" />
                    </div>
                </form>
                <a href="<?php echo URLROOT; ?>/Cart/cart"><button class="btn btn-primary" type="submit">
                        style="margin: auto">
                        <i class="fa fa-shopping-cart text-center d-xl-flex"
                            style="font-size: 20px; margin: auto; color: rgb(241, 236, 236)">
                        </i>
                    </button>
                </a>
                <span class="navbar-text">
                    <a class="login" href="<?php echo URLROOT; ?>/Login/login" style="margin: 20px">Log
                        In</a></span><span class="navbar-text">
                    <a class="login" href="<?php echo URLROOT; ?>/Login/signup" style="margin: 10px">Sign up</a>
                </span>
            </div>
        </div>
    </nav>