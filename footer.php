<div class="container">
    <style>
        .adminActions {
          position: fixed;
          bottom: 35px; left: 35px;
          z-index: 9;
        }

        .adminButton {
            height: 60px;
            width: 60px;
            background-color: rgb(0 92 157);
            border-radius: 50%;
            display: block;
            color: #fff;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .adminButton i {
            font-size: 22px;
        }
        
          
        .adminActions a i {
          position: absolute;
          top: 50%; left: 50%;
          transform: translate(-50%, -50%);
        }
        .adminActions a:hover {
          color: #fff;
        }
    </style>
        <div class="footer-top-1 bg-theme" style="background-image: url(assets/img/gallery/footer.jpg);">
            <div class="footer-logo">
                <a href="/"><img src="assets/img/logo.png" alt="Fixturbo" style="height:100px"></a>
            </div>
            <div class="call-media-wrap">
                <div class="icon">
                    <img src="assets/img/icon/phone-1.svg" alt="img">
                </div>
                <div class="media-body">
                    <h6 class="title text-white">Call Now:</h6>
                    <h4 class="link">
                        <a class="text-white" href="tel:<?= $cContact ?>"><?= $cContact ?></a>
                    </h4>
                </div>
            </div>
            <div class="social-btn">
                <a href="https://www.facebook.com/MobiGuardz.Accessories"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/MGuardz24095"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/mobi.guardz?igsh=enB0ajRtM2tkbTVs"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/84638346"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.youtube.com/@mobiguardzbengaluru"><i class="fab fa-youtube"></i></a>
                <a href="https://in.pinterest.com/mobiguardz/"><i class="fab fa-pinterest"></i></a>
            </div>
        </div>
    </div>
    <!--==============================
        Footer Area
    ==============================-->
    <footer class="footer-wrapper footer-layout1" style="background-image: url(assets/img/bg/footer.png);">    
        <div class="container">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Company</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about">About</a></li>
                                    <li><a href="product-gallery">Gallery</a></li>
                                    <li><a href="contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Other</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="/">Prices</a></li>
                                    <li><a href="product-feature">Product Features</a></li>
                                    <li><a href="warranty">Warranty</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contact</h3>
                            <div class="widget-contact">
                                <p><a href="tel:<?= $cContact ?>"><?= $cContact ?></a></p>
                                <p><a href="<?= $cEmail ?>"><?= $cEmail ?></a></p>
                                <p><?= $cAddress ?>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget widget-newsletter">
                            <h3 class="widget_title">Get In Touch</h3>
                            <p class="footer-text mb-50">Lorem Ipsum is simply is dumiomy is text Lorem Ipsum is simply</p>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Your Email Address" required="">
                                </div>
                                <button type="submit" class="btn"><i class="fas fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>                     -->
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-3 justify-content-md-between justify-content-center">
                    <div class="col-auto align-self-center"><p class="copyright-text text-center">© <a href="#"><?= $cName ?></a> 2024 | All Rights Reserved</p></div>
                    <div class="col-auto">
                        <div class="footer-links">
                            <a href="terms-and-conditions">Terms & Conditions</a>
                            <a href="privacy-policy">Privacy Policy</a>
                            <a href="contact">Contact Us</a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <div class="adminActions">
	<a class="adminButton" href="tel:<?= $cContact ?>"><i class="fa fa-phone"></i></a>
    </div>
    <!--==============================
    All Js File
    ============================== -->
    <script>
                var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?47423';
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url;
                var options = {
                "enabled":true,
                "chatButtonSetting":{
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "marginLeft": "0",
                    "marginRight": "32",
                    "marginBottom": "90",
                    "ctaIconWATI":false,
                    "position":"right"
                },
                "brandSetting":{
                    "brandName":"Mobi-Guardz",
                    "brandSubTitle":"undefined",
                    "brandImg":"https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
                    "welcomeText":"Hi there!\nHow can I help you?",
                    "messageText":"Hello, %0A I have a question about {{page_link}}",
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "autoShow":false,
                    "phoneNumber":"919663922405"
                }
                };
                s.onload = function() {
                    CreateWhatsappChatWidget(options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            </script>
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Marquee -->
    <script src="assets/js/jquery.marquee.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
</body>

</html>