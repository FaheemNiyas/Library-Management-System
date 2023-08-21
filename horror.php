<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>U-Library | Borrow Book</title>
    <meta content="" name="description">
    <meta content="" name="keywords">



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1><a href="index.html"><img src="assets/img/logo1.png"></a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a class="active " href="login.php">Borrow Book</a></li>
                    <li><a href="register.php">Become a Member</a></li>
                    <li><a href="admin_login.php">Admin login</a></li>
                    <li><a href="contact.php">Contact Us</a></li> <br>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Categories <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="horror.php">Horror</a></li>
                            <li><a href="novels.php">Novel</a></li>
                            <li><a href="action.php">Action</a></li>
                        </ul>
                    </li>
                    <li class="input-group formoutline mx-3" style="width: 30vh;">
                        <form method="POST" action="search.php">
                            <div class="input-group">
                                <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search for Product" required>
                                <span class="input-group-btn" id="searchBtn" style="display:none;">
                                    <button type="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i> </button>
                                </span>
                            </div>
                        </form>

                        <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Books" title="Type the Name"> -->
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section class="hero-section" id="hero" style="min-height: 400px;">

        <div class="wave">

            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
                    </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-12 text-center mb-5">
                            <h1 data-aos="fade-right">Horror</h1>
                            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <div class="container py-5">
        <div class="row mt-4">

            <?php

            //Listing datas from the database
            $select = "SELECT * FROM image where cat_id = 1 ";
            $con = mysqli_connect("localhost", "root", "", "library");
            $result = $con->query($select);

            $x = 1;

            while ($row = $result->fetch_assoc()) : ?>
                <div class="col-md-3" id="myUl">
                    <div class="card shadow p-3 mb-5 bg-white">
                        <div class="card-body">
                            <img src="book_img/<?php echo $row['image'] ?>" alt="" class="card-img-top mb-3" style="height: 350px;">
                            <h3 class="card-title text-center mb-3"><?php echo $row['bookname'] ?></h3>
                            <h4 class="card-title text-center mb-3"><?php echo $row['author'] ?></h4>

                            <p class="card-text text-center">
                                <?php echo $row['description'] ?>
                            </p>
                            <div class="text-center">
                                <a href="" class="btn btn-dark btn-sm"> Borrow Book</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
    </div>


    <!-- ======= Footer ======= -->
    <footer class="footer bg-light" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h3>About Ulibrary</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam
                        dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi.</p>
                    <p class="social">
                        <a href="#"><span class="bi bi-twitter"></span></a>
                        <a href="#"><span class="bi bi-facebook"></span></a>
                        <a href="#"><span class="bi bi-instagram"></span></a>
                        <a href="#"><span class="bi bi-linkedin"></span></a>
                    </p>
                </div>
                <div class="col-md-7 ms-auto">
                    <div class="row site-section pt-0">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Navigation</h3>
                            <ul class="list-unstyled">
                                <li><a href="login.php">Borrow book</a></li>
                                <li><a href="register.php">Become a Member</a></li>
                                <li><a href="admin_login.php">Admin login</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Services</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Collaboration</a></li>
                                <li><a href="#">Todos</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Downloads</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Get from the App Store</a></li>
                                <li><a href="#">Get from the Play Store</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="dotted">

            <div class="row justify-content-center text-center   pt-3">
                <div class="col-md-7">
                    <p class="copyright"> 2022 &copy; Reserved to <a href="#">Faheem Niyas</a>

                </div>
            </div>
    </footer>







    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


</body>

</html>