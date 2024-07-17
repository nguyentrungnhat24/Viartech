<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap");

    /* =========== Browser Reset ============ */
    :root {
      /* Color Variables */
      --primary: #ffc400;
      --text-1: #0f2341;
      --text-2: #a9a9a9;
      --white: #fff;
      --shadow-300: 0 5px 5px rgba(0, 0, 0, 0.3);
      --shadow-500: 0 5px 5px rgba(0, 0, 0, 0.5);
      --transition-300: all 300ms ease-in-out;
      --transition-500: all 500ms ease-in-out;
    }



    a {
      text-decoration: none;
    }

    li {
      list-style: none;
    }

    /* =========== Footer ============ */
    .footer {
      height: 295px;
      background-color: var(--text-1);
    }

    .footer .row {
      margin-left: -80px;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      padding: 30px 10px;
    }

    .footer .row .col:last-child {
      display: grid;
      grid-template-columns: repeat(2, minmax(10rem, 1fr));
      gap: 2rem;
    }

    .footer .row .col:last-child img {
      height: 90px;
      width: 150px;
    }

    .footer .row .col {
      display: flex;
      flex-direction: column;
    }

    .footer .row .col h3 {
      font-size: 19px;
      color: var(--white);
      margin-bottom: 2rem;
    }

    .footer .row .col a {
      display: inline-block;
      color: var(--white);
      font-size: 15px;
      margin-bottom: 0.5rem;
    }

    .footer .row .col .social i {
      font-size: 25px;
    }

    @media (max-width: 767px) {
      .footer .row {
        row-gap: 7rem;
        grid-template-columns: repeat(2, 1fr);
      }

    }

    @media (max-width: 567px) {

      #b,
      #c {
        display: none;
      }

      #a {
        margin-left: 180px;
      }
    }

    /* @media screen and (max-width: 576px) {
#header{
  display: none;
}
#font{
  margin-left: 60px;
}
  } */
  </style>
</head>

<body>
  <!-- Footer -->
  <footer class="footer">
    <div class="row container">
      <div class="col">
      </div>
      <div id="a" class="col">
        <h3>Địa chỉ</h3>
        <ul style="margin-left:-50px">
          <li><a href="#"> Lô 09, Khu B2-130</a></li>
          <li><a href="#">Khu đô thị công nghệ FPT</a></li>
          <li><a href="#">Ngũ Hành Sơn, Đà Nẵng</a></li>
          <li><a href="#"> 0936 119 523 - 0933 777 056</a></li>
          <li><a href="#"> info@viartech.com </a></li>
        </ul>
      </div>

      <div id="b" class="col">
        <h3>Liên hệ</h3>
        <div class="social ">
          <a href="#"><i class='bx bxl-facebook'></i></a>
          <a href="#"><i class='bx bxl-instagram'></i></a>
          <a href="#"><i class='bx bxl-twitter'></i></a>
          <a href="#"><i class='bx bxl-linkedin'></i></a>
        </div>
      </div>

      <div id="c" class="col">
        <img src="../images/footer/image_65ebfc3c9dc59_13-1400x900.png" alt="" />
        <img src="../images/footer/Z PRODUCTION-26-max-1400x900.jpg" alt="" />
        <img src="../images/footer/Z PRODUCTION-114-1400x900.jpg" alt="" />
        <img src="../images/footer/Z PRODUCTION-127-1400x900.jpg" alt="" />
      </div>
    </div>
  </footer>
  <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

<script type="text/javascript">
    CKEDITOR.replace( 'editor' );
    CKEDITOR.replace( 'editor_header' );
    CKEDITOR.replace( 'editor_gioithieu' );
    CKEDITOR.replace( 'editor_slidebody' );

</script>
</body>

</html>