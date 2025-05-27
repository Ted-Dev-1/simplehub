<?php $pageClass = "index-page"; 
  $activePage = 'home';
  include("includes/header.php");
?>
<?php include("includes/navbar.php");?>
 

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img1/mec13.jpg" alt="">
          <div class="carousel-container">
            <h2>Welcome to Gear Nexus<br></h2>
            <p>Your trusted source for expert car and aircraft maintenance, delivering top-tier service with transparent pricing and swift turnarounds.Count on expert solutions for your cars or planes. Truly care, every mile or flight, is our promise.</p>
            <a href="booking.php" class="btn-get-started">Book Now!</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img1/mec4.jpg" alt="">
          <div class="carousel-container">
            <h2>At Gear Nexus</h2>
            <p>Experience precision repairs from certified technicians who put your safety first, ensuring every journey is smooth and worry free. Trust our seasoned technicians to safeguard your vehicle or aircraft, delivering thorough maintenance</p>
            <a href="booking.php" class="btn-get-started">Book Now!</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img1/mec10.png" alt="">
          <div class="carousel-container">
            <h2>Gear Nexus</h2>
            <p>Your hub for seamless motion</p>
            <a href="booking.php" class="btn-get-started">Book Now!</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->


    <!-- Authentication Modal -->
    <?php /*include("signupnmodal.php")*/?>






    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>About Us<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              At Gear Nexus, we understand that your car is more than just a means of transportation it's a vital part of your daily life. 
            
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>We offer expert car repair and maintenance services.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Our skilled team provides professional aircraft maintenance and repairs.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>We also deliver premium car wash services and other auto care solutions.</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>
              Our team of experienced, certified technicians is dedicated to providing honest, high-quality service to keep your vehicle running smoothly.
               
            </p>

            <p>Customer satisfaction is at the heart of everything we do. We take pride in our 
              transparent pricing, timely service, and personalized approach, making sure you feel confident and informed every step of the way.
            </p>
            <a href="about.php" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/mec1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/mec2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/mec3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/mec1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/mec2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/mec3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
    <!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Service Overview</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Car</li>
            <li data-filter=".filter-product">Plane</li>
            <li data-filter=".filter-branding">Others</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img1/MechanicGirl.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tire works</h4>
                <p></p>
                <a href="assets/img1/MechanicGirl.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img1/mec7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Aircraft Engine Overhaul</h4>
                <p></p>
                <a href="assets/img1/mec7.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img1/mec10.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Premium car wash</h4>
                <p></p>
                <a href="assets/img1/mec10.png" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img1/mec17.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Engine & Oil works</h4>
                <p></p>
                <a href="assets/img1/mec17.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img1/mec20.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Avionics Maintenance & Upgrades</h4>
                <p></p>
                <a href="assets/img1/mec20.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img1/mec18.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Standard car wash</h4>
                <p></p>
                <a href="assets/img1/mec18.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img1/mec11.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>System checks</h4>
                <p></p>
                <a href="assets/img1/mec11.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img1/mec5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Airframe Structural Inspections</h4>
                <p></p>
                <a href="assets/img1/mec5.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img1/mec15.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Custom car wash</h4>
                <p></p>
                <a href="assets/img1/mec15.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

  </main>

<?php include("includes/footer.php");?>