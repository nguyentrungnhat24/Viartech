<!DOCTYPE html>
<html lang="en">

<head>
  <title>Stamina &mdash; Free Website Template by Free-Template.co</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Free-Template.co" />

  <link rel="shortcut icon" href="../ftco-32x32.png">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../css/aos.css">
  <link href="../css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="../css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">


    <div class="site-section" id="schedule-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
            <!-- <span class="subheading">Fitness Class</span> -->
            <h2 class="heading mb-3">Lớp tập</h2>
            <p>Hãy nhớ rằng, mỗi buổi tập là một bước nhỏ nhưng chắc chắn trên con đường chinh phục mục tiêu sức khỏe và thể chất của bạn. Đừng so sánh mình với người khác; hãy so sánh bản thân bạn với phiên bản một ngày trước đó, và hãy là người đánh bại chính mình mỗi ngày.</p>
          </div>
        </div>

        <?php $conn = mysqli_connect("localhost", "root", "", "databasegym"); ?>
        <?php
        $sql = "SELECT * FROM tb_danhmucloptap ";
        $result = mysqli_query($conn, $sql);

        // Hiển thị danh sách gói tập
        echo '<div class="row">';
        while ($row = mysqli_fetch_array($result)) {
          $idpt = $row['idpt'];
        
          // Truy vấn để lấy thông tin tenpt từ bảng tb_pt dựa vào idpt
          $pt_sql = "SELECT tenpt FROM tb_pt WHERE id = $idpt";
          $pt_result = mysqli_query($conn, $pt_sql);
          $pt_row = mysqli_fetch_array($pt_result);
          echo '<div class="col-lg-6">
          <a href="?act=Chitietgoitap&idlt= ' . $row['id'] . '">
                 <div class="class-item d-flex align-items-center">
                     <a href="?act=Chitietgoitap&idlt= ' . $row['id'] . '" class="class-item-thumbnail">
                         <img src="../images/img_1.jpg" alt="">
                     </a>
                     <div class="class-item-text col-5">
                     <h2><a href="">' . $row["tenloptap"] . '</a></h2>
                         <span>Giá: ' . $row["gia"] . 'VND</span><br>

                         <span>Thời gian : ' . $row["thoigian"] . '</span><br>
                         <span>Tên PT: ' . $pt_row["tenpt"] . '</span>
                     </div>
                     <div class="d-flex justify-content-end col-5">
                     <a href="?act=Chitietgoitap&idlt= ' . $row['id'] . '" class="class-item-thumbnail">
                     <input type="submit" class="btn btn-warning" value="Xem">
                     </a>
                     </div>
                      </div>
                      </a>
                   </div>';
        }
        echo '</div>';
        ?>

      






      </div>
      <!-- .site-wrap -->

      <script src="../js/jquery-3.3.1.min.js"></script>
      <script src="../js/jquery-migrate-3.0.1.min.js"></script>
      <script src="../js/jquery-ui.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/owl.carousel.min.js"></script>
      <script src="../js/jquery.stellar.min.js"></script>
      <script src="../js/jquery.countdown.min.js"></script>
      <script src="../js/bootstrap-datepicker.min.js"></script>
      <script src="../js/jquery.easing.1.3.js"></script>
      <script src="../js/aos.js"></script>
      <script src="../js/jquery.fancybox.min.js"></script>
      <script src="../js/jquery.sticky.js"></script>
      <script src="../js/jquery.mb.YTPlayer.min.js"></script>




      <script src="../js/main.js"></script>

</body>

</html>