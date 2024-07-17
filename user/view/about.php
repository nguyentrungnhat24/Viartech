<main id="main">
<!-- Tran Xuan Duc Commit 17/07/2024-->
  <!-- ======= About Us Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Giới thiệu</h2>
        <ol>
          <li><a href="index.html">Trang chủ</a></li>
          <li>Giới thiệu</li>
        </ol>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= About Section ======= -->
  <section class="about" data-aos="fade-up">
    <div class="container">

      <div class="row">

        <?php
        if (isset($dskh)) {
          $i = 1;
          foreach ($dskh as $kh) {
            echo '
              <div class="col-lg-6">
            <img  src="../../admin/controller/' . $kh['image'] . '" class="img-fluid" alt="">
            
          </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
             ' . $kh['mota'] . '
            </p>
          </div>
              
              ';
            $i++;
          }
        }
        ?>



      </div>


      
        <div class="star-wrapper">
  
          <form class="d-flex" action="controllers.php?act=danhgia" method="post" enctype="multipart/form-data">
            <input type="hidden" id="sao" value="" name="sao">
            <div>
              <button style="background-color: white;border:none" type="submit" name="capnhap" value="submit"  onclick="setRating(1)">
                <i class="fas fa-star s1" aria-hidden="true"></i>
              </button>
            </div>
            <div>
              <button style="background-color: white;border:none" type="submit" name="capnhap" value="submit"  onclick="setRating(2)">
                <i class="fas fa-star s2" aria-hidden="true"></i>
              </button>
            </div>
            <div>
              <button style="background-color: white;border:none" type="submit" name="capnhap" value="submit"  onclick="setRating(3)">
                <i class="fas fa-star s3" aria-hidden="true"></i>
              </button>
            </div>
            <div>
              <button style="background-color: white;border:none" type="submit" name="capnhap" value="submit"  onclick="setRating(4)">
                <i class="fas fa-star s4" aria-hidden="true"></i>
              </button>
            </div>
            <div>
              <button style="background-color: white;border:none" type="submit" name="capnhap" value="submit"  onclick="setRating(5)">
                <i class="fas fa-star s5" aria-hidden="true"></i>
              </button>
            </div>
          

            <div class="m-auto ms-3">
              <?php echo '' . $danhgia . '' ?>
            </div>
          </form>
         
        </div>
        <script src="https://kit.fontawesome.com/5ea815c1d0.js"></script>
        <script>
          function setRating(rating) {
              document.getElementById('sao').value = rating;
          }
         </script>
        <!-- <div> <button><i class="fa fa-star" aria-hidden="true"></i></button></div>
            <div> <button><i class="fa fa-star" aria-hidden="true"></i></button></div>
            <div> <button><i class="fa fa-star" aria-hidden="true"></i></button></div>
            <div> <button ><i class="fa fa-star" aria-hidden="true"></i></button></div>
            <div>
            <form class="modal-content animate" action="controllers.php?act=danhgia" method="post" enctype="multipart/form-data">
        <input type="hidden" value="5" name="sao">
        <button type="submit" name="capnhap" value="submit" >
        <i style='color:yellow' class='fa fa-star' aria-hidden='true'></i>
        </button>
        
        </form>
            </div> -->







    </div>
  </section><!-- End About Section -->

  <!-- ======= Facts Section ======= -->
  <section class="facts section-bg" data-aos="fade-up">
    <div class="container">

      <div class="row counters">




        <?php
        if (isset($dskh)) {
          $i = 1;
          foreach ($dskh as $ds) {
            $datetime = $ds['ngaydang'];
            $date = date('Y-m-d', strtotime($datetime));
            echo '
                    <div class="col-lg-6 col-6 text-center">
                   
                        <span  class="">' . $date . '</span>
                        <p>Ngày đăng</p>
                    </div>
                    <div class="col-lg-6 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="' . $ds['luotxem'] . '" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Lượt xem</p>
                    </div>
                    ';
          }
          $i++;
        }
        ?>



      </div>

    </div>
  </section><!-- End Facts Section -->

  <!-- ======= Our Skills Section ======= -->
  <section class="skills" data-aos="fade-up">
    <div class="container">

      <div class="section-title">
        <h2>Đánh giá</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <div class="skills-content">

        
          <?php
          if (isset($kqdg)) {
            $i = 1;
            foreach ($kqdg as $kq) {
              if($kq['sao']==1 ){
                echo '
                <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="' . $kq['total'] . '" aria-valuemin="0" aria-valuemax="100">
             
                  <span class="skill">
                      
                    1
                    
                    <i class="fa fa-star" aria-hidden="true"></i></span>
                </div>
              </div>
              
             
               ';
             
              }
              if($kq['sao']==2){
                echo '
                <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="' . $kq['total'] . '" aria-valuemin="0" aria-valuemax="100">
             
                  <span class="skill">
                      
                    2
                    
                    <i class="fa fa-star" aria-hidden="true"></i></span>
                </div>
              </div>
              
             
               ';
             
              }
              if($kq['sao']==3){
                echo '
                <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="' . $kq['total'] . '" aria-valuemin="0" aria-valuemax="100">
             
                  <span class="skill">
                      
                    3
                    
                    <i class="fa fa-star" aria-hidden="true"></i></span>
                </div>
              </div>
              
             
               ';
             
              }
              if($kq['sao']==4){
                echo '
                <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="' . $kq['total'] . '" aria-valuemin="0" aria-valuemax="100">
             
                  <span class="skill">
                      
                    4
                    
                    <i class="fa fa-star" aria-hidden="true"></i></span>
                </div>
              </div>
              
             
               ';
             
              }
              if($kq['sao']==5){
                echo '
                <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="' . $kq['total'] . '" aria-valuemin="0" aria-valuemax="100">
             
                  <span class="skill">
                      
                    5
                    
                    <i class="fa fa-star" aria-hidden="true"></i></span>
                </div>
              </div>
              
             
               ';
             
              }
             
            }
            $i++;
          }
          ?>


         

          <!-- <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">3 <i class="fa fa-star" aria-hidden="true"></i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">2 <i class="fa fa-star" aria-hidden="true"></i> </span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">1 <i class="fa fa-star" aria-hidden="true"></i></span>
            </div>
          </div> -->

        </div>

      </div>
  </section><!-- End Our Skills Section -->

  <!-- ======= Tetstimonials Section ======= -->
  <section class="testimonials" data-aos="fade-up">
    <div class="container">

      <!-- <div class="section-title">
          <h2>Tetstimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div> -->

      <div class="testimonials-carousel swiper">
        <div class="swiper-wrapper">
        <?php
        if (isset($dssb)) {
          $i = 1;
          foreach ($dssb as $ds) {
            echo '
        
           <div class="testimonial-item swiper-slide">

              <img src="../../admin/controller/'.$ds['image'].'" class="testimonial-img" alt="">
              <h3> ' . $ds['tieude'] . '</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <p style="text-align: center;"> ' . $ds['mota'] . '</p>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
          </div>
              
              ';
            $i++;
          }
        }
        ?>
         

          <!-- <div class="testimonial-item swiper-slide">
            <img src="../controller/assets/img/banner3_3.png" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            <p style="text-align: center;"><strong><span id="6tg86_5lugd_4hi65" class="" data-text="true">VIARTECH</span></strong><span id="6tg86_5lugd_1hbnp" class="" data-text="true"> được kết hợp của Việt Nam (</span><span id="6tg86_5lugd_3dgoq" class="" data-text="true"><strong>V</strong>i</span><span id="6tg86_5lugd_86p53" class="" data-text="true">etnam), Nghệ thuật (</span><strong><span id="6tg86_5lugd_6cmhn" class="" data-text="true">Art</span></strong><span id="6tg86_5lugd_4d57t" class="" data-text="true">) và Công nghệ (T</span><strong><span id="6tg86_5lugd_8p75f" class="" data-text="true">ech</span></strong><span id="6tg86_5lugd_c6962" class="" data-text="true">nology). Chúng tôi mong muốn phát triển các sản phẩm chất lượng cao cho người Việt bằng cách kết hợp nghệ thuật với công nghệ mới. Sản phẩm của chúng tôi là nội thất giả gỗ từ gỗ phế thải bằng cách sử dụng công nghệ in 3D. Với sức mạnh của in 3D tốc độ cao và độ phân giải cao, Viartech đang mang lại một cuộc sống mới cho rác thải gỗ để tạo ra các sản phẩm giả gỗ đẹp mắt và thân thiện.</span></p>
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item swiper-slide">
            <img src="../controller/assets/img/banner3_3.png" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            <p style="text-align: center;"><strong><span id="6tg86_5lugd_4hi65" class="" data-text="true">VIARTECH</span></strong><span id="6tg86_5lugd_1hbnp" class="" data-text="true"> được kết hợp của Việt Nam (</span><span id="6tg86_5lugd_3dgoq" class="" data-text="true"><strong>V</strong>i</span><span id="6tg86_5lugd_86p53" class="" data-text="true">etnam), Nghệ thuật (</span><strong><span id="6tg86_5lugd_6cmhn" class="" data-text="true">Art</span></strong><span id="6tg86_5lugd_4d57t" class="" data-text="true">) và Công nghệ (T</span><strong><span id="6tg86_5lugd_8p75f" class="" data-text="true">ech</span></strong><span id="6tg86_5lugd_c6962" class="" data-text="true">nology). Chúng tôi mong muốn phát triển các sản phẩm chất lượng cao cho người Việt bằng cách kết hợp nghệ thuật với công nghệ mới. Sản phẩm của chúng tôi là nội thất giả gỗ từ gỗ phế thải bằng cách sử dụng công nghệ in 3D. Với sức mạnh của in 3D tốc độ cao và độ phân giải cao, Viartech đang mang lại một cuộc sống mới cho rác thải gỗ để tạo ra các sản phẩm giả gỗ đẹp mắt và thân thiện.</span></p>

            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item swiper-slide">
            <img src="../controller/assets/img/banner3_3.png" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            <p style="text-align: center;"><strong><span id="6tg86_5lugd_4hi65" class="" data-text="true">VIARTECH</span></strong><span id="6tg86_5lugd_1hbnp" class="" data-text="true"> được kết hợp của Việt Nam (</span><span id="6tg86_5lugd_3dgoq" class="" data-text="true"><strong>V</strong>i</span><span id="6tg86_5lugd_86p53" class="" data-text="true">etnam), Nghệ thuật (</span><strong><span id="6tg86_5lugd_6cmhn" class="" data-text="true">Art</span></strong><span id="6tg86_5lugd_4d57t" class="" data-text="true">) và Công nghệ (T</span><strong><span id="6tg86_5lugd_8p75f" class="" data-text="true">ech</span></strong><span id="6tg86_5lugd_c6962" class="" data-text="true">nology). Chúng tôi mong muốn phát triển các sản phẩm chất lượng cao cho người Việt bằng cách kết hợp nghệ thuật với công nghệ mới. Sản phẩm của chúng tôi là nội thất giả gỗ từ gỗ phế thải bằng cách sử dụng công nghệ in 3D. Với sức mạnh của in 3D tốc độ cao và độ phân giải cao, Viartech đang mang lại một cuộc sống mới cho rác thải gỗ để tạo ra các sản phẩm giả gỗ đẹp mắt và thân thiện.</span></p>

            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item swiper-slide">
            <img src="../controller/assets/img/banner3_3.png" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            <p style="text-align: center;"><strong><span id="6tg86_5lugd_4hi65" class="" data-text="true">VIARTECH</span></strong><span id="6tg86_5lugd_1hbnp" class="" data-text="true"> được kết hợp của Việt Nam (</span><span id="6tg86_5lugd_3dgoq" class="" data-text="true"><strong>V</strong>i</span><span id="6tg86_5lugd_86p53" class="" data-text="true">etnam), Nghệ thuật (</span><strong><span id="6tg86_5lugd_6cmhn" class="" data-text="true">Art</span></strong><span id="6tg86_5lugd_4d57t" class="" data-text="true">) và Công nghệ (T</span><strong><span id="6tg86_5lugd_8p75f" class="" data-text="true">ech</span></strong><span id="6tg86_5lugd_c6962" class="" data-text="true">nology). Chúng tôi mong muốn phát triển các sản phẩm chất lượng cao cho người Việt bằng cách kết hợp nghệ thuật với công nghệ mới. Sản phẩm của chúng tôi là nội thất giả gỗ từ gỗ phế thải bằng cách sử dụng công nghệ in 3D. Với sức mạnh của in 3D tốc độ cao và độ phân giải cao, Viartech đang mang lại một cuộc sống mới cho rác thải gỗ để tạo ra các sản phẩm giả gỗ đẹp mắt và thân thiện.</span></p>

            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div> -->
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Ttstimonials Section -->

</main><!-- End #main -->