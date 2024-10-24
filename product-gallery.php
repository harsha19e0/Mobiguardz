<?php require_once("header.php"); ?>
<link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
<link rel="stylesheet" href="assets/css/myStyle.css">

    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper">
        <!-- bg animated image/ -->   
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Gallery</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li class="active">Gallery</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none">
                    <div class="breadcumb-thumb">
                        <img src="assets/img/bg/img3.png" alt="img">
                    </div>            
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Product Details
    ==============================-->
    <section class="product-details space-top mb-4">
    <div class="container gallery-container">
        <div class="tz-gallery">
            <div class="row">
                <?php 
                $allImages = getAllImageFiles("assets/gallery"); 
                  foreach ($allImages as $img) {
                ?>
                <div class="col-sm-6 col-md-4 mb-2">
                    <a class="lightbox" href="<?= $img->path ?>">
                        <img class="tz-gallery-item" src="<?= $img->path ?>" alt="Bridge">
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    </section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
<?php require_once("footer.php"); ?>