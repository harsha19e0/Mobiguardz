<?php require_once("header.php"); ?>
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper">
        <!-- bg animated image/ -->   
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Contact</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none">
                    <div class="breadcumb-thumb">
                        <img src="assets/img/bg/img1.jpg" alt="img">
                    </div>            
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Contact Area  
    ==============================-->
    <div class="contact-area space">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h6 class="contact-info_title">Get in touch with us.</h6>
                        <p class="contact-info_text">Give us a call: <a href="tel:<?= $CContact ?>"><?= $cContact ?></a></p><br>
                        <p class="contact-info_text">Email us: <a href="mail:<?= $cEmail?>"><?= $cEmail?></a></p>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h6 class="contact-info_title">Find the nearest</h6>
                        <p class="contact-info_text justify-content-center">Mobi-Guardz Outlet With Presence across the Globe we’re confident
                             we can help you with all of your gadget problems.</p>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h6 class="contact-info_title">Frequently Asked Questions</h6>
                        <p class="contact-info_text justify-content-center">if you have questions about products or warranties,
                             connect with us on <?= $cEmail?>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6 text-lg-end">
                    <div class="faq-thumb2 mb-xl-0 mb-50">
                        <div class="about-counter-grid jump">
                            <img src="assets/img/icon/repair1.png" style="height: 80px;" alt="img">
                            <div class="media-right">
                                <h3 class="about-counter"><span class="counter-number">250</span>+</h3>
                                <h4 class="about-counter-text">Services we provide</h4>
                            </div>
                        </div>
                        <img src="assets/img/gallery/img2.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-wrap p-0">
                        <div class="title-area">
                            <span class="sub-title">Contact form
                            </span>
                            <h2 class="sec-title">Protect Your Mobile Today</h2>
                        </div>
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['userName'] !=="") {
                                // Collect and sanitize input data
                                $userName = htmlspecialchars(trim($_POST['userName']));
                                $userEmail = htmlspecialchars(trim($_POST['userEmail']));
                                $brand = htmlspecialchars(trim($_POST['brand']));
                                $model_no = htmlspecialchars(trim($_POST['model_no']));
                                $location = htmlspecialchars(trim($_POST['location']));
                                $requirement = htmlspecialchars(trim($_POST['requirement']));
                                $userNumber = htmlspecialchars(trim($_POST['userNumber']));
                                $subject = htmlspecialchars(trim($_POST['model_no']));
                                // Validate email
                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    $error = "Invalid email format.";
                                } 
                                echo sendContactForm($userName, $userEmail, $userNumber, $subject, $message, $brand, $location, $requirement);
                            }
                         ?>
                        <form method="POST" class="appointment-form ajax-contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="userName" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" id="userEmail" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="number" id="userNumber" placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="brand" id="brand" placeholder="Brand" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="model_no" id="model_no" placeholder="Model No" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="location" id="location" placeholder="Location" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="requirement" id="requirement" placeholder="Requirement" required>
                                    </div>
                                </div>
                            </div>  

                            <div class="form-btn col-12">
                                <button class="btn style2" type="submit">Send Message <i class="fas fa-arrow-right ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
    </div>

<?php require_once("footer.php"); ?>