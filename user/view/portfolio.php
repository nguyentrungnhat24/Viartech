<main id="main">











<!-- Tran Xuan Duc s -->

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>SẢN PHẨM</h2>
          <ol>
            <li><a href="controllers.php?">Trang chủ</a></li>
            <li>Sản Phẩm</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <?php
              if (isset($dsdc) && (count($dsdc) > 0)) {
                $i = 1;
                foreach ($dsdc as $dc) {
                  echo '
                   
                   <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
                    <div class="portfolio-item">
                      <img src="../../admin/controller/' . $dc['image'] . '" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h3>' . $dc['tendc'] . '</h3>
                <div>
                  <a href="../../admin/controller/' . $dc['image'] . '" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="controllers.php?act=chitietsanpham&idsp=' . $dc['id'] . '" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
                  ';
                  $i++;
                }
              }
              ?>
          


        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->