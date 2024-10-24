<!doctype html>
<html class="no-js" lang="zxx">
<?php require_once("config.php");
$pageDetails = getPageNameByURL();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $cName ?></title>
    <meta name="<?= $pageDetails['metaDes'] ?>" content="<?= $pageDetails['metaCntn'] ?>" />
    <meta name="keywords" content="Mobi-Guardz - Hammer Proof Protection for your Devices">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!--********************************
   		Code Start From Here 
	******************************** -->




    <!--==============================
     Preloader
    ==============================-->
    <div class="preloader ">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area">
            <div class="mobile-logo">
                <a href="/"><img src="assets/img/logo.png" alt="logo" style="height: 70px;"></a>
                <button class="menu-toggle"><i class="fa fa-times"></i></button>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="">
                        <a href="/">Home</a>
                    </li>
                    <li>
                         <a href="about">About</a>
                    </li>
                    <li>
                        <a href="product-feature">Product Features</a>
                    </li>
                    <li>
                       <a href="warranty">Warranty</a>
                    </li>
                    <li>
                        <a href="store-locations">Store Locations</a>
                    </li>
                    <li>
                        <a href="product-gallery">Gallery</a>
                    </li>
                    <li>
                        <a href="contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
	Header Area
    ==============================-->
    <header class="nav-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="fas fa-envelope"></i><a href="mailto:<?= $cEmail ?>"><?= $cEmail ?></a></li>
                                <!--<li><i class="fas fa-map-marker-alt"></i><//?=$cAddress ?></li>-->
                                <li><i class="fas fa-clock"></i>Monday  - Sunday </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links ps-0">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <a href="https://www.facebook.com/MobiGuardz.Accessories"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/MGuardz24095"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.instagram.com/mobi.guardz?igsh=enB0ajRtM2tkbTVs"><i class="fab fa-instagram"></i></a>
                                        <a href="https://www.linkedin.com/company/84638346"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://www.youtube.com/@mobiguardzbengaluru"><i class="fab fa-youtube"></i></a>
                                        <a href="https://in.pinterest.com/mobiguardz/"><i class="fab fa-pinterest"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="header-navbar-logo">
                    <a href="/"><img src="assets/img/logo.png" alt="logo" style="height:110px;margin-top:-10px;"></a>
                </div>
                <div class="container">
                    <div class="row align-items-center justify-content-lg-start justify-content-between">
                        <div class="col-auto d-xl-none d-block">
                            <div class="header-logo">
                                <a href="/"><img src="assets/img/logo.png" alt="logo" style="height: 60px"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li class="">
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="about">About</a>
                                </li>
                                <li>
                                    <a href="product-features">Product Features</a>
                                </li>
                                <li>
                                    <a href="warranty">Warranty</a>
                                </li>
                                <li>
                                    <a href="store-locations">Store Locations</a>
                                </li>
                                <li>
                                    <a href="product-gallery">Gallery</a>
                                </li>
                                <li>
                                    <a href="contact">Contact Us</a>
                                </li>
                            </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i class="fas fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto ms-auto d-xl-block d-none">
                            <div class="navbar-right-desc">
                                <img src="assets/img/icon/chat.svg" alt="img">
                                <div class="navbar-right-desc-details">
                                    <h6 class="title">Need help?</h6>
                                    <a class="link" href="tel:<?= $cContact ?>"><?= $cContact ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-bg"></div>
            </div>
        </div>
    </header>