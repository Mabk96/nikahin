<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title><?= SITE_NAME ?> - Digital Invitation</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>/assets/base/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/templatemo-digimedia-v2.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/animated.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/owl.css">
    <!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Pre-header Starts -->
    <!-- <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="#"><i class="fa fa-envelope"></i>digimedia@company.com</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>010-020-0340</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div> -->
    <!-- Pre-header End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="<?php echo base_url() ?>/assets/base/img/logo-v2.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="<?= base_url('base') ?>">Beranda</a></li>
                            <li class="scroll-to-section"><a href="<?= base_url('base') ?> #about">Tentang</a></li>
                            <li class="scroll-to-section"><a href="<?= base_url('base') ?> #services">Fitur</a></li>
                            <li class="scroll-to-section"><a href="<?= base_url('base') ?> #portfolio" class="active">Tema</a></li>
                            <li class="scroll-to-section"><a href="<?= base_url('base') ?> #blog">Harga</a></li>
                            <li class="scroll-to-section"><a href="<?= base_url('base') ?> #contact">Testimoni</a></li>
                            <li class="scroll-to-section"><a href="<?= base_url('base') ?> #contact">Kontak</a></li>
                            <li class="scroll-to-section">
                                <div class="border-first-button"><a href="<?= base_url('login') ?>">Login</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="portfolio" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- <h6>Contact Us</h6> -->
                        <h4>Tema <em>E-Rabi</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="fill-form">
                                    <div class="row">
                                        <?php
                                        $i = 1;
                                        foreach ($tema->getResult() as $row) {
                                        ?>
                                            <div class="col-lg-4">
                                                <div class="info-post">
                                                    <div class="icon">
                                                        <div class="thumb">
                                                            <img src="<?php echo base_url() ?>/assets/themes/<?= $row->nama_theme ?>/preview.png" alt="">
                                                        </div>
                                                        <div class="down-content">
                                                            <h4>- <?= $row->nama_theme ?> -</h4>
                                                            <div class="col-lg-12">
                                                                <div class="border-first-button scroll-to-section">
                                                                    <a href="<?= base_url('demo/' . $row->nama_theme) ?>" target="_blank">Demo</a>
                                                                    <a class="btn2" href="<?= base_url('order/' . $row->nama_theme) ?>" target="_blank">Pesan</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                            if ($i++);
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- <h6>Contact Us</h6> -->
                        <h4>Kontak <em>Kami</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-dec">
                                    <img src="<?php echo base_url() ?>/assets/base/img/contact-dec-v2.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="fill-form">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <i class=" fa fa-envelope faicon"></i>
                                                    <a href="#">- admin@e.rabi.com -</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <i class="fa fa-whatsapp faicon"> </i>
                                                    <a href="#">- 085155339354 -</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <i class="fa fa-instagram faicon"></i>
                                                    <a href="#">- e-rabi_ -</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <i class="fa fa-facebook-square faicon"></i>
                                                    <a href="#">- E-Rabi -</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>© 2021 <a a href="https://mycoding.com" target="_blank"> E-Rabi - Digital Invitation</a>
                        <br>© Theme Script By <a href="https://mycoding.com" target="_blank">MC Project</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="<?php echo base_url() ?>/assets/base/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/owl-carousel.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/animation.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/imagesloaded.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/custom.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/owl-carousel-banner.js"></script>

</body>

</html>