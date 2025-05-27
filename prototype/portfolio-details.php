<?php $pageClass = "portfolio-details-page"; include("includes/header.php");?>
<?php include("includes/navbar.php");?>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img1/mec30.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img1/mec31.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img1/mec32.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img1/mec33.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Working Hours</h3>
              <ul>
                <li><strong>Category</strong>: Mechanics</li>
                <li><strong>Clients</strong>: Cars & Plane Users</li>
                <li><strong>Working Days</strong>: Mondays-Fridays</li>
                <li><strong>Home URL</strong>: <a href="Ted.html">www.gearnexus.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Precision and Excellence in Every Repair</h2>
              <p>
                At Gear Nexus, we strive to exceed expectations by combining expert diagnostics with state-of-the-art equipment. Whether you need routine maintenance or complex repairs, our dedicated technicians handle each vehicle or aircraft with meticulous care. Through transparent communication and unwavering professionalism, we ensure a seamless experience for every client.
              </p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <?php include("includes/footer.php");?>