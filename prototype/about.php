<?php $pageClass = "about-page"; 
  $activePage = 'about';
  include("includes/header.php");
?>
<?php include("includes/navbar.php");?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About 2 Section -->
    <section id="about-2" class="about-2 section">

      <div class="container">

        <div class="row g-4 g-lg-5" data-aos-delay="200">

          <div class="col-lg-5">
            <div class="about-img">
              <img src="assets/img/about-portrait.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-7">
            <h3 class="pt-0 pt-lg-5" style="font-weight: bold; /*color: #000;*/">Gear Nexus: Your hub for seamless motion</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#about-2-tab1">Who are we?</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-2-tab2">Mission</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-2-tab3">Updates</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-2-tab4">Vehicle-Update</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="about-2-tab1">

                <?php 
                    include('facultyadmin/dbconfig1.php');

                    $query = "SELECT * FROM aboutus";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0){
                    while ($row = mysqli_fetch_assoc($query_run)){
                    ?>

                <p class="fst-italic"><?php echo $row['intro'] ?></p>

                <div class="d-flex align-items-center mt-4">
                  <h4>What we offer:</h4>
                </div>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  
                  <h4><?php echo $row['f_title'];?></h4>
                </div>
                <p><?php echo $row['f_parag'];?></p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4><?php echo $row['s_title'];?></h4>
                </div>
                <p><?php echo $row['s_parag'];?></p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4><?php echo $row['t_title'];?></h4>
                </div>
                <p><?php echo $row['t_parag'];?></p>

                <?php
                  }

                  }   else {
                  echo"No Record Found";
                  }

                ?>

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade" id="about-2-tab2">

                <p class="fst-italic">We are committed to delivering top-tier maintenance and repair solutions, prioritizing safety, performance, and customer satisfaction. Whether you're on the road or in the air, our goal is to keep you moving with confidence, knowing your vehicle or aircraft is in expert hands.</p>

                <div class="d-flex align-items-center mt-4">
                  <h4>Why Choose Us?</h4>
                </div>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Expertise You Can Trust</h4>
                </div>
                <p>Our certified mechanics and aviation engineers bring years of hands-on experience to every service.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Cutting-Edge Technology</h4>
                </div>
                <p>We utilize advanced diagnostic tools and top-quality parts to ensure your vehicle or aircraft is in peak condition.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Transparent & Honest Service</h4>
                </div>
                <p>No hidden fees, no unnecessary repairs—just honest work and clear communication.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Customer-Centric Approach</h4>
                </div>
                <p>We believe in building relationships, not just fixing problems. Your satisfaction is our top priority!</p>

              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade" id="about-2-tab3">

                <p class="fst-italic">our latest work this month 🚗 Gear Nexus – Where Innovation Meets Reliability! ✈️</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Complete Transmission Overhaul</h4>
                </div>
                <p>We recently undertook a complete transmission overhaul for a high-performance sports car, ensuring every gear shift is seamless and precise. </p>
                <p>Our certified technicians meticulously disassembled and inspected each component, replacing worn parts with premium-grade alternatives.</p>
                <p>This project highlights our commitment to rigorous standards, where even the smallest details receive the same level of care as major repairs.</p>
                <p>From the initial diagnostics to final test drives, we keep our clients fully informed, emphasizing transparency and trust.</p>
                <p>The result is a reinvigorated vehicle that delivers exceptional performance on every journey</p>

                <p><a data-bs-toggle="pill" href="#about-2-tab4" class="nav-link">Check it out</a></p>

              </div>

              <div class="tab-pane fade" id="about-2-tab4">

                <img src="assets/img1/test12.jpg" class="img-fluid mt-3" >

              </div><!-- End Tab 3 Content -->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /About 2 Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img1/pro5.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer & Chief Engineer</span>
                <p></p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img1/pro4.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>George Jhonson</h4>
                <span>Car Mechanic major</span>
                <p></p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img1/pro7.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Plane Mechanic major</span>
                <p></p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img1/pro9.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Secetary</span>
                <p></p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Check Our Skills<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>Automotive Systems Knowledge</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Diagnostics & Troubleshooting</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Electrical & Electronic Systems</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>Aviation Systems Knowledge</span> <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Airframe & Powerplant Proficiency</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Customer Service & Communication</span> <i class="val">98%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

  </main>

 <?php include("includes/footer.php");?>