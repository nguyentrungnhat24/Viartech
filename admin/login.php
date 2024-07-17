<?php
session_start();
ob_start();
include "../model/db.php";
include "../model/user.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ======== Favicon ======= -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <!-- ======== Boxicons ======= -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- ======== Slider Js ======= -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ======== StyleSheet ======= -->
    <link rel="stylesheet" href="css/styles.css" />
    <title>Quản lý phòng GYM</title>
  </head>
  <body>
  <div id="id01" class="modal">

  <?php
    include('signin_signup/signin.php');
  ?>
  
  
</div>
<script>
    function ktNhap(idTag, idMsg, msg) {
            var idTag = document.getElementById(idTag);
            var idMsg = document.getElementById(idMsg);
            var valueInput = idTag.value;
            if (valueInput == "") {
                idMsg.style.display = "block";
                idMsg.innerHTML = msg;
                return false;
            } else {
                idMsg.style.display = "none";
                return true;
            }
        }
</script>
    <header class="header" id="header">
      <!-- Navigation -->
      <div class="navigation">
        <nav class="nav d-flex">
          <div class="logo">
            <a href="/">
              <img src="uploaded/icon.jpg" />
            </a>
          </div>
          <ul class="nav-list d-flex">
            <li class="nav-item">
              <a href="#header" class="nav-link">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">Giới thiệu</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Địa chỉ</a>
            </li>
          </ul>

          <button class="btn sign-up bg-info" style="width:auto;" onclick="document.getElementById('id01').style.display='block'">Đăng nhập</button>
          <div class="hamburger">
            <i class="bx bx-menu-alt-left"></i>
          </div>
        </nav>
      </div>

      <!-- Hero -->
      <div class="swiper-container slider-1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="https://cdn.shopify.com/s/files/1/1876/4703/articles/sam-moqadam-W8CyjblrF8U-unsplash_2000x.jpg?v=1617748274" alt="" />
          </div>

          <div class="swiper-slide">
            <img src="images/nenphong2.jpg" alt="hero image" />
          </div>
          <div class="swiper-slide">
            <video muted loop autoplay>
              <source src="./images/video1 ‐ Được tạo bằng Clipchamp.mp4" type="video/mp4" />
            </video>
          </div>
          <div class="swiper-slide">
            <img src="images/nenphong4.jpg" alt="hero image" />
          </div>

          <div class="swiper-slide">
            <video muted loop autoplay>
              <source src="./images/video2 ‐ Được tạo bằng Clipchamp.mp4" type="video/mp4" />
             
            </video>
          </div>
          <div class="swiper-slide">
            <img src="images/nenphong5.jpg" alt="" />
          </div>

          <div class="swiper-slide">
            <video muted loop autoplay>
              <source src="./images/video3 ‐ Được tạo bằng Clipchamp.mp4" type="video/mp4" />
            </video>
          </div>
        </div>
      </div>

      <div class="content">
        <h1 style="width: auto;">
        QUẢN LÝ <br />
          VIARTECH
        </h1>
      </div>

      <div class="arrows d-flex">
        <div class="swiper-prev d-flex">
          <i class="bx bx-chevron-left swiper-icon"></i>
        </div>
        <div class="swiper-next d-flex">
          <i class="bx bx-chevron-right swiper-icon"></i>
        </div>
      </div>
    </header>

    <!-- ======== SwiperJS ======= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
    <!-- ======== SCROLL REVEAL ======= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js"></script>
    <!-- ======== SliderJS ======= -->
    <script src="js/slider.js"></script>
    <!-- ======== IndexJS ======= -->
    <script src="js/index.js"></script>
  </body>
</html>
