<?php require APPROOT . '/views/includes/header.php';  ?>



<body>
    <nav class="navbar navbar-light navbar-expand-md text-center" style="padding-bottom: 0; background: #bdc696">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-size: 30px">AllBookedUp!</a><button data-bs-toggle="collapse"
                class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown"
                            href="#">Categories</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../Categories/classic.html">Classic</a><a
                                class="dropdown-item" href="../Categories/fiction.html">Fiction</a><a
                                class="dropdown-item" href="#">Non-fiction</a><a class="dropdown-item"
                                href="../Categories/romance.html">Romance</a><a class="dropdown-item"
                                href="../Categories/self_helf.html">Self-help &amp; wellness</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">&nbsp;About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_reviews.html">Contact us</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">dashboard</a></li>
                </ul>
                <form class="d-flex me-auto navbar-form" target="_self">
                    <div class="d-flex align-items-center">
                        <label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search"
                                style="margin: 10px"></i></label><input class="form-control search-field" type="search"
                            id="search-field-1" name="search" placeholder="search by author or title" />
                    </div>
                </form>
                <button class="btn btn-primary" type="button">
                    <a href="../Cart/cart.html" style="margin: auto"><i
                            class="fa fa-shopping-cart text-center d-xl-flex"
                            style="font-size: 20px; margin: auto; color: rgb(241, 236, 236)"></i></a></button><span
                    class="navbar-text">
                    <a class="login" href="../Login/login.html" style="margin: 20px">Log In</a></span><span
                    class="navbar-text">
                    <a class="login" href="#" style="margin: 10px">Sign up</a></span>
            </div>
        </div>
    </nav>
    <div class="text-center d-lg-flex flex-column justify-content-center align-content-center align-items-lg-center"
        style="
        min-height: 100vh;
        background: url('../assets/img/admin_dashboard.jpg');
        margin: 0px;
        padding: 0px;
      "></div>
    <footer class="footer-basic" style="background: #bdc696">
        <div class="social">
            <a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
                    class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a
                href="#"><i class="icon ion-social-facebook"></i></a>
        </div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright" style="color: #ffffff">AllBookedUp © 2022</p>
    </footer>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/script.min.js"></script>
</body>

</html>