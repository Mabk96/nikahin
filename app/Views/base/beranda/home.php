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
              <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
              <li class="scroll-to-section"><a href="#about">Tentang</a></li>
              <li class="scroll-to-section"><a href="#services">Fitur</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Tema</a></li>
              <li class="scroll-to-section"><a href="#blog">Harga</a></li>
              <li class="scroll-to-section"><a href="#contact">Testimoni</a></li>
              <li class="scroll-to-section"><a href="#contact">Kontak</a></li>
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
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>E-Rabi</h2>
                    <!-- <h6>Digital Invitation</h6> -->
                    <p>
                      E-Rabi - Digital Invitation merupakan undangan berformat digital yang hadir untuk menjawab kebutuhan masyarakat, tanpa perlu memikirkan jarak dan juga dikemas dengan tampilan yang menarik.</br></br><b>Ayo Buat Undangan Online Anda Sekarang dan Berikan Kesan Tak Terlupakan Kepada Setiap Tamu Undangan Anda!</b>
                    </p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a class="btn1" href="<?= base_url() ?>/tema" target="_blank">Demo</a>
                      <a class="btn2" href="<?= base_url() ?>/tema" target="_blank">Pesan</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight " data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="items owl-carousel">
                  <?php
                  $i = 1;
                  foreach ($tema->getResult() as $row) {
                  ?>
                    <img src="<?php echo base_url() ?>/assets/themes/<?= $row->nama_theme ?>/preview.png" alt="">
                  <?php
                    if ($i++);
                  }
                  ?>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about section">
    <div class="services section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
              <h4>Tentang <em>E-Rabi</em></h4>
              <div class="line-dec"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?php echo base_url() ?>/assets/base/img/about-dec-v2.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <!-- <h6>Tentang Kami</h6> -->
                  <h6>Siapa E-Rabi ?</h6>
                  <div class="line-dec"></div>
                </div>
                <p>E-Rabi - Digital Invitation menyediakan banyak tema design undangan pernikahan yang bersifat digital, E-Rabi didesain untuk memberikan kesan yang tak akan terlupakan oleh setiap tamu undangan Anda dengan berbagai pilihan desain undangan, E-Rabi juga dapat menyempurnakan moment berharga Anda.</p>
                <div class="section-heading">
                  <h6>Kenapa Pilih E-Rabi ?</h6>
                  <div class="line-dec"></div>
                </div></br>
                <div class="row">
                  <div class="col-lg-3 col-sm-4 col-6">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="100">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            100%<br>
                            <span>Terjangkau</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-4 col-6">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="100">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            100%<br>
                            <span>Responsive</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-4 col-6">
                    <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="100">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            100%<br>
                            <span>Banyak Fitur</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-4 col-6">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="100">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            100%<br>
                            <span>Berkesan</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <!-- <h6>Fitur</h6> -->
            <h4>Fitur <em>E-Rabi</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Detail &amp; Fitur</h4>
                                <div class="ticks-list">

                                  <table>
                                    <tr>
                                      <td class="icon-fitur"><i class="fa fa-laptop faicon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                      <td class="title-fitur">Responsive Di Semua Device</td>
                                    </tr>
                                    <tr>
                                      <td class="icon-fitur"><i class="fa fa-cogs faicon"></i></td>
                                      <td class="title-fitur">Dashboard Untuk Mengelola Undangan Anda</td>
                                    </tr>
                                    <tr>
                                      <td class="icon-fitur"><i class="fa fa-heart user faicon"></i></td>
                                      <td class="title-fitur">Sapa Tamu Anda Saat Membuka Undangan</td>
                                    </tr>
                                    <tr>
                                      <td class="icon-fitur"><i class="fa fa-music faicon"></i></td>
                                      <td class="title-fitur">Mengganti Background Musik Sesuka Anda</td>
                                    </tr>
                                    <tr>
                                      <td class="icon-fitur"><i class="fa fa-heart faicon"></i></td>
                                      <td class="title-fitur">Para Tamu Dapat Memberikan Ucapan & Doa</td>
                                    </tr>
                                    <tr>
                                      <td class="icon-fitur"><i class="fa fa-columns faicon"></i></td>
                                      <td class="title-fitur">Detail Acara Akad Dan Resepsi</td>
                                    </tr>
                                    <tr>
                                      <td class="icon-fitur"><i class="fa fa-map-marker faicon"></i></td>
                                      <td class="title-fitur">Titik Lokasi Akad Dan Resepsi</td>
                                    </tr>
                                    <tr>
                                      <td class="icon-fitur"><i class="fa fa-picture-o faicon"></i></td>
                                      <td class="title-fitur">Album Untuk Menampilkan Foto - Foto</td>
                                    </tr>
                                    <tr>
                                      <td class="icon-fitur"><i class="fa fa-video-camera faicon"></i></td>
                                      <td class="title-fitur">Video Story Perjalanan Kisah Cinta Anda</td>
                                    </tr>
                                    <tr>
                                      <td class="icon-fitur"><i class="fa fa-pencil-square-o faicon"></i></td>
                                      <td class="title-fitur">Story Line Perjalan Kisah Cinta Anda </td>
                                    </tr>
                                  </table>
                                </div>
                                <!-- <p>Masih Banyak Lagi Loh Fitur - Fitur Dari E-Rabi </p> -->
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="<?php echo base_url() ?>/assets/base/img/services-image-02.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="free-quote" class="free-quote">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Get Your Free Quote</h6>
            <h4>Grow With Us Now</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
          <form id="search" action="#" method="GET">
            <div class="row">
              <div class="col-lg-4 col-sm-4">
                <fieldset>
                  <input type="web" name="web" class="website" placeholder="Your website URL..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4 col-sm-4">
                <fieldset>
                  <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4 col-sm-4">
                <fieldset>
                  <button type="submit" class="main-button">Get Quote Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div id="portfolio" class="our-portfolio section">
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <!-- <h6>Our Portofolio</h6> -->
              <h4>Tema <em>E-Rabi</em></h4>
              <div class="line-dec"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <?php
            $i = 1;
            foreach ($tema->getResult() as $row) {
            ?>
              <div class="item">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="<?php echo base_url() ?>/assets/themes/<?= $row->nama_theme ?>/preview.png" alt="">
                  </div>
                  <div class="down-content">
                    <h4>- <?= $row->nama_theme ?> -</h4>
                    <div class="col-lg-12">
                      <div class="border-first-button scroll-to-section">
                        <a href="<?= base_url('demo/' . $row->nama_theme) ?>" target="_blank">Demo</a>
                        <a class="btn2" href="<?= base_url() ?>/tema" target="_blank">Pesan</a>
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
    </div>
  </div>
  <div class="d-flex justify-content-center">
    <div class="border-first-button scroll-to-section">
      <a href="<?= base_url() ?>/tema" target="_blank">Lihat Lebih Banyak</a>
    </div>
  </div>

  <div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <!-- <h6>Recent News</h6> -->
            <h4>Harga <em>Undangan</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="#"><img src="<?php echo base_url() ?>/assets/base/img/blog-post-01.jpg" alt=""></a>
            </div>
            <div class="down-content" style="padding-left: 40px;">
              <span class="category col-lg-6 col-md-6 col-sm-6">Premium</span>
              <p>- Sudah Include Semua Fitur -</p>
              <h4><em>Rp. 200.000,00</em></h4>
              <span class="category-btnpesan"><a href="#">Pesan Sekarang</a></span>
            </div>
          </div>
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