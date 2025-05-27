<?php $pageClass = "pricing-page"; 
  $activePage = 'pricing';
  include("includes/header.php");
?>
<?php include("includes/navbar.php");?>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Pricing</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Vocher Pricing</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <div class="container">

        <div class="row gy-3">

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Free ID</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Visit Us At Spintex</li>
                <li>Patronize Our Service Once</li>
                <li class="na">Pharetra massa</li>
                <!-- <li class="na">Massa ultricies mi</li>-->
                <!--<li>Active For 1 Month Only</li>-->
                <li>Will remain active if </li>
                <li>You patronize with us once a month</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-bs-toggle="modal"   data-bs-target="#buyVoucherModal">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3 style="background-color: #FFD700;">Premium Gold ID</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Valid for 6 months</li>
                <li>5% discount on Service Patronize</li>
                <li class="na">Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-bs-toggle="modal"   data-bs-target="#buyVoucherModal">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="pricing-item featured">
              <h3 style="background-color: #0dcaf0;">Premium Diamond ID</h3>
              <h4><sup>$</sup>29<span> / year</span></h4>
              <ul>
                <li>Valid for a year</li>
                <li>10% discount on service patronized</li>
                <li>Free custom painting design</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-bs-toggle="modal"   data-bs-target="#buyVoucherModal">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="pricing-item featured">
              <span class="advanced">Advanced</span>
              <h3 style="background-color: #6f42c1;">Premium Platinum ID</h3>
              <h4><sup>$</sup>49<span> / year & half</span></h4>
              <ul>
                <li>Valid for 1.5 years</li>
                <li>15% discount on service patronized</li>
                <li>Free custom painting design</li>
                <li>Free electronic system upgrade</li>
                <li>Vehicle House keeping service</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-bs-toggle="modal"   data-bs-target="#buyVoucherModal">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->


    <!--Pricing Modal-->
    <?php include("pricingmodal.php");?>

  </main>

<?php include("includes/footer.php");?>