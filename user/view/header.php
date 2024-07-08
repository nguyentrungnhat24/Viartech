<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Moderna Bootstrap Template - Index 2 without slider</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon" />
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="../vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="../vendor/aos/aos.css" rel="stylesheet" />
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="../vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="../vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="../css/style.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- <div class="site-wrap"> -->
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light">
          <a href="index.html"><span>Viartech</span></a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index.html">TRANG CHỦ</a></li>
          <li><a href="about.html">GIỚI THIỆU</a></li>
          <li><a href="controllers.php?act=dungcu">CÔNG NGHỆ</a></li>
          <!-- <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="team.html">Team</a></li>
          <li><a href="blog.html">Blog</a></li> -->
          <li class="dropdown">
            <a href="#"><span>DANH MỤC</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- <li class="dropdown">
                <a href="#"><span>Deep Drop Down</span>
                  <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              
              <?php
              if (isset($dsdmdc) && (count($dsdmdc) > 0)) {
                $i = 1;
                foreach ($dsdmdc as $dmdc) {
                  echo '
                   <li><a href="#">' . $dmdc['tendmdc'] . '</a></li>
                  ';
                  $i++;
                }
              }
              ?>
            </ul>
          </li>
          <li><a href="contact.html">LIÊN HỆ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->
  <!-- ======= Hero No Slider Section ======= -->
  <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h2>VIARTECH</h2>
          <p>
          Chào mừng bạn đến với Viartech - nơi hội tụ sức sáng tạo Việt Nam (Vi), nghệ thuật đẳng cấp (Art) và công nghệ tân tiến (Tech).
           Chúng tôi, được thành lập vào năm 2019, không chỉ là một công ty nội thất,
            mà là một hành trình kỳ diệu, nơi nghệ thuật gặp gỡ với công nghệ để tạo nên những tác phẩm độc đáo và tiên tiến.
          </p>
          <a href="" class="btn-get-started">BẮT ĐẦU</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero No Slider Sectio -->