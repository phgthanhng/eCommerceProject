    <?php require APPROOT . '/views/includes/header.php';  ?>
<body>
    <nav class="navbar navbar-light navbar-expand-md text-center">
        <div class="container-fluid"><a class="navbar-brand" href="../Home/index.html" style="font-size: 30px;">AllBookedUp!</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown show"><a class="dropdown-toggle nav-link" aria-expanded="true" data-bs-toggle="dropdown" href="#">Categories</a>
                        <div class="dropdown-menu show"><a class="dropdown-item" href="classic.html">Classic</a><a class="dropdown-item" href="fiction.html">Fiction</a><a class="dropdown-item" href="#">Non-fiction</a><a class="dropdown-item" href="romance.html">Romance</a><a class="dropdown-item"
                                href="self_helf.html">Self-help &amp; wellness</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../Home/popularBooks.html">Popular books</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                </ul>
                <form class="d-flex me-auto navbar-form" target="_self">
                    <div class="d-flex align-items-center"><label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search" style="margin: 10px;"></i></label><input class="form-control search-field" type="search" id="search-field-1" name="search"></div>
                </form><button class="btn btn-primary" type="button"><a href="../Cart/cart.html" style="margin: auto;"><i class="fa fa-shopping-cart text-center d-xl-flex" style="font-size: 20px;margin: auto;color: rgb(241,236,236);"></i></a></button><span class="navbar-text"> <a class="login" href="../Login/login.html" style="margin: 20px;">Log In</a></span>
                <span class="navbar-text"> <a class="login" href="../Login/signup.html" style="margin: 10px;">Sign up</a></span>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 style="margin-bottom: 25px;margin-top: 30px;">Romance</h1>
        <div data-reflow-type="product-list" data-reflow-layout="cards" data-reflow-order="date_desc" data-reflow-product-link="/product.html?product={id}"></div>
    </div>
    <?php require APPROOT . '/views/includes/footerV2.php';  ?>