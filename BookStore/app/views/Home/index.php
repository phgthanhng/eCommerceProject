<!-- <?php
    // $SITENAME="All Booked Up! Home";
?> -->
<?php require APPROOT . '/views/includes/header.php';  ?>

<body>
    <nav class="navbar navbar-light navbar-expand-md text-center" style="padding-bottom: 0;">
        <div class="container-fluid"><a class="navbar-brand" href="<?php echo URLROOT; ?>/Home"
                style="font-size: 30px;">AllBookedUp!</a><button data-bs-toggle="collapse" class="navbar-toggler"
                data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
                            data-bs-toggle="dropdown" href="#">Categories</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo URLROOT; ?>/Categories/classic.php">Classic</a>
                            <a class="dropdown-item" href="../Categories/fiction.php">Fiction</a><a
                                class="dropdown-item" href="#">Non-fiction</a><a class="dropdown-item"
                                href="<?php echo URLROOT; ?>/Categories/romance.php">Romance</a>
                            <a class="dropdown-item" href="<?php echo URLROOT; ?>/Categories/self_helf.php">Self-help
                                &amp; wellness</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/Home/popularBooks">Popular
                            books</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                </ul>
                <form class="d-flex me-auto navbar-form" target="_self">
                    <div class="d-flex align-items-center"><label class="form-label d-flex mb-0" for="search-field"><i
                                class="fa fa-search" style="margin: 10px;"></i></label><input
                            class="form-control search-field" type="search" id="search-field-1" name="search"></div>
                </form><button class="btn btn-primary" type="button"><a href="../Cart/cart.php" style="margin: auto;"><i
                            class="fa fa-shopping-cart text-center d-xl-flex"
                            style="font-size: 20px;margin: auto;color: rgb(241,236,236);"></i></a></button><span
                    class="navbar-text"> <a class="login" href="../Login/login.html" style="margin: 20px;">Log
                        In</a></span>
                <span class="navbar-text"> <a class="login" href="#" style="margin: 10px;">Sign up</a></span>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 20px;">
        <img src="<?php echo URLROOT; ?>/img/PROD-23104_EBOOKFIVE.jpg " style="width: 100%;height: 100%; ">
    </div>
    <div class="container ">
        <h1 style="margin-bottom: 25px;margin-top: 30px; ">New Arrivals</h1>
        <!-- <div data-reflow-type="product-list " data-reflow-layout="cards " data-reflow-order="date_desc " data-reflow-product-link="/product.html?product={id} "></div> -->
        <div data-reflow-type="product-list" data-reflow-layout="cards" data-reflow-order="date_desc"
            data-reflow-product-link="/product.html?product={id}">
            <div class="reflow-product-list ref-cards">
                <div class="ref-products"><a class="ref-product" href="/product.html?product=722349115"><img
                            class="ref-image"
                            src="https://cdn.reflowhq.com/media/267418190/722349115/ca49e4426d2776c051dc369a856582d5_md.jpg"
                            loading="lazy">
                        <div class="ref-product-data">
                            <div class="ref-product-info">
                                <h5 class="ref-name">Sodales Aptent</h5>
                                <p class="ref-excerpt">Lorem ipsum cras sed vitae, auctor turpis. Torquent neque
                                    sollicitudin volutpat, mi gravida proin tempor. Fermentum torq..</p>
                            </div>
                            <p class="ref-price">$89.00</p>
                        </div>
                    </a><a class="ref-product" href="/product.html?product=372721366"><img class="ref-image"
                            src="https://cdn.reflowhq.com/media/267418190/372721366/d271a324fa00761d1ec510d7a170a521_md.jpg"
                            loading="lazy">
                        <div class="ref-product-data">
                            <div class="ref-product-info">
                                <h5 class="ref-name">Ipsum Laoreet</h5>
                                <p class="ref-excerpt">Tortor urna turpis nostra. Ac lobortis sodales aptent dictum,
                                    cras eget curae ad placerat. Lorem ipsum cras sed vitae, a..</p>
                            </div>
                            <p class="ref-price">$32.49</p>
                        </div>
                    </a><a class="ref-product" href="/product.html?product=366797633"><img class="ref-image"
                            src="https://cdn.reflowhq.com/media/267418190/366797633/592ad36972e511bf6202f35f056b2cc1_md.jpg"
                            loading="lazy">
                        <div class="ref-product-data">
                            <div class="ref-product-info">
                                <h5 class="ref-name">Interdum Aliquam</h5>
                                <p class="ref-excerpt">Lorem ipsum cras sed vitae, auctor turpis. Torquent neque
                                    sollicitudin volutpat, mi gravida proin tempor. Fermentum torq..</p>
                            </div>
                            <p class="ref-price">$65.00</p>
                        </div>
                    </a><a class="ref-product" href="/product.html?product=277093884"><img class="ref-image"
                            src="https://cdn.reflowhq.com/media/267418190/277093884/ecbd06ecf015f4150b735a96aa8d4a1e_md.jpg"
                            loading="lazy">
                        <div class="ref-product-data">
                            <div class="ref-product-info">
                                <h5 class="ref-name">Fames Aptent</h5>
                                <p class="ref-excerpt">Lorem ipsum cras sed vitae, auctor turpis. Torquent neque
                                    sollicitudin volutpat, mi gravida proin tempor. Fermentum torq..</p>
                            </div>
                            <p class="ref-price">$38.85</p>
                        </div>
                    </a><a class="ref-product" href="/product.html?product=531478127"><img class="ref-image"
                            src="https://cdn.reflowhq.com/media/267418190/531478127/b619760045c207ef23e27048d9dccfe7_md.jpg"
                            loading="lazy">
                        <div class="ref-product-data">
                            <div class="ref-product-info">
                                <h5 class="ref-name">Cras Sed Vitae</h5>
                                <p class="ref-excerpt">Lorem ipsum cras sed vitae, auctor turpis. Torquent neque
                                    sollicitudin volutpat, mi gravida proin tempor. Fermentum torq..</p>
                            </div>
                            <p class="ref-price">$7.99</p>
                        </div>
                    </a><a class="ref-product" href="/product.html?product=458412058"><img class="ref-image"
                            src="https://cdn.reflowhq.com/media/267418190/458412058/8127e0e1d6dbdd87a8f9314869aecda4_md.jpg"
                            loading="lazy">
                        <div class="ref-product-data">
                            <div class="ref-product-info">
                                <h5 class="ref-name">Auctor Turpis</h5>
                                <p class="ref-excerpt">Lorem ipsum cras sed vitae, auctor turpis. Torquent neque
                                    sollicitudin volutpat, mi gravida proin tempor. Fermentum torq..</p>
                            </div>
                            <p class="ref-price">$450.00</p>
                        </div>
                    </a><a class="ref-product" href="/product.html?product=108661429"><img class="ref-image"
                            src="https://cdn.reflowhq.com/media/267418190/108661429/7fab6c4edc35c70cb1a2cafd871cd878_md.jpg"
                            loading="lazy">
                        <div class="ref-product-data">
                            <div class="ref-product-info">
                                <h5 class="ref-name">Dermentum Quisque</h5>
                                <p class="ref-excerpt">Lorem ipsum cras sed vitae, auctor turpis. Torquent neque
                                    sollicitudin volutpat, mi gravida proin tempor. Fermentum torq..</p>
                            </div>
                            <p class="ref-price">$199.99</p>
                        </div>
                    </a><a class="ref-product" href="/product.html?product=86222624"><img class="ref-image"
                            src="https://cdn.reflowhq.com/media/267418190/86222624/9268c673dd479cbf793f588b01d293ad_md.jpg"
                            loading="lazy">
                        <div class="ref-product-data">
                            <div class="ref-product-info">
                                <h5 class="ref-name">Torquent Mauris</h5>
                                <p class="ref-excerpt">Lorem ipsum cras sed vitae, auctor turpis. Torquent neque
                                    sollicitudin volutpat, mi gravida proin tempor. Fermentum torq..</p>
                            </div>
                            <p class="ref-price">$15.99</p>
                        </div>
                    </a><a class="ref-product" href="/product.html?product=13156819"><img class="ref-image"
                            src="https://cdn.reflowhq.com/media/267418190/13156819/f237b6cdae583ce358f7fccbb6b3304b_md.jpg"
                            loading="lazy">
                        <div class="ref-product-data">
                            <div class="ref-product-info">
                                <h5 class="ref-name">Aptent Dictum</h5>
                                <p class="ref-excerpt">Lorem ipsum cras sed vitae, auctor turpis. Torquent neque
                                    sollicitudin volutpat, mi gravida proin tempor. Fermentum torq..</p>
                            </div>
                            <p class="ref-price">$44.95</p>
                        </div>
                    </a><a class="ref-product" href="/product.html?product=267418190"><img class="ref-image"
                            src="https://cdn.reflowhq.com/media/267418190/267418190/1aeedd527ce647b4ca61f1621f95e850_md.jpg"
                            loading="lazy">
                        <div class="ref-product-data">
                            <div class="ref-product-info">
                                <h5 class="ref-name">Sed Vitae</h5>
                                <p class="ref-excerpt">Lorem ipsum cras sed vitae, auctor turpis. Torquent neque
                                    sollicitudin volutpat, mi gravida proin tempor. Fermentum torq..</p>
                            </div>
                            <p class="ref-price">$125.00</p>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>

    <?php require APPROOT . '/views/includes/footer.php';  ?>