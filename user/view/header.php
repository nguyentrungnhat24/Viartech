<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Viartech</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
  <link href="../css/style.css" type="text/css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <a href="controllers.php?"><img style="width: 270px;height:45px" src="../controller/assets/img/team/logo-new20241.jpg" alt=""></a>
        <h1 class="text-light"><a href="index.html"><span></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="controllers.php?">TRANG CHỦ</a></li>
          <li><a href="controllers.php?act=gioithieu">GIỚI THIỆU</a></li>
          <li><a href="controllers.php?act=congnghe">CÔNG NGHỆ</a></li>
          <li class="dropdown"><a href="?act=dungcu"><span>SẢN PHẨM</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php
              if (isset($dsdmdc) && (count($dsdmdc) > 0)) {
                $i = 1;
                foreach ($dsdmdc as $dmdc) {
                  echo '
                   <li><a href="?act=dungcu&idsp='.$dmdc['id'].'">' . $dmdc['tendmdc'] . '</a></li>
                  ';
                  $i++;
                }
              }
              ?>
            </ul>
          </li>
          <li><a href="controllers.php?act=contact">LIÊN HỆ</a></li>

          <?php

          if (!isset($_SESSION['google_loggedin'])) {
            echo '<li><a href="../google-login/login.php">ĐĂNG NHẬP</a></li>';
          }
          if (isset($_SESSION['google_loggedin'])) {
            echo '
             <li class="dropdown"><a href="#"><span><img  src="' . $google_picture . '" alt="<?=$google_name?>" width="50" height="50" style="border-radius: 50%; margin-left:15px"></span></a>
                      <ul style="width: 135px">
                          <li ><a href="../google-login/logout.php" >
                          <div style="display:flex ;justify-content:center;align-items: center; ">
                            <div> ĐĂNG XUẤT</div>
                            <div ><i style="font-size:25px" class="fa fa-sign-out" aria-hidden="true"></i></div>
                          </div>
                         
                          </a></li>
                      </ul>
             </li>
            ';
          }

          ?>




        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <?php
      if (isset($dssh) && (count($dssh) > 0)) {
        $i = 1;
        foreach ($dssh as $ds) {
          $activeClass = ($i == 1) ? ' active' : '';
          echo '
                   <div class="carousel-item ' . $activeClass . '">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">' . $ds['tieude'] . '</span></h2>
          <p class="animate__animated animate__fadeInUp"> ' . $ds['mota'] . '</p>
          <a href="controllers.php?act=gioithieu" class="btn-get-started animate__animated animate__fadeInUp">BẮT ĐẦU</a>
        </div>
      </div>
                  ';
          $i++;
        }
      }
      ?>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->