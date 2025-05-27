<?php $pageClass = "contact-page"; 
  $activePage = 'booking';
  include("includes/header.php");
?>
<?php include("includes/navbar.php");?>



  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <p class="mb-4">
          Please fill out the form below to schedule a service appointment with us. Whether you need routine maintenance, a quick fix, or a comprehensive overhaul, we’re here to help.
        </p>

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>


          


          <div class="col-lg-8">
            <form action="facultyadmin/viewbookingcode.php" method="post" class="my-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="row gy-3">
                  <!-- Name -->
                  <div class="col-md-6">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
  
                  <!-- Email -->
                  <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>
                  </div>
  
                  <!-- Phone -->
                  <div class="col-md-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="(+1) 123 4567" required>
                  </div>
  
                  <!-- Service Category -->
                  <div class="col-md-6">
                    <label for="service" class="form-label">Service Category</label>
                    <select class="form-select" id="service" name="service" required>
                      <option value="" selected disabled>Select a Category</option>
                      <option value="Car Maintenance">Car Maintenance</option>
                      <option value="Plane Maintenance">Plane Maintenance</option>
                      <option value="Car Wash & Detailing">Car Wash & Detailing</option>
                    </select>
                  </div>
  
                  <!-- Preferred Date -->
                  <div class="col-md-6">
                    <label for="date" class="form-label">Preferred Date</label>
                    <input type="date" class="form-control" name="date" id="date" required>
                  </div>
  
                  <!-- Preferred Time -->
                  <div class="col-md-6">
                    <label for="time" class="form-label">Preferred Time</label>
                    <input type="time" class="form-control" name="time" id="time" required>
                  </div>
  
                  <!-- Additional Message -->
                  <div class="col-12">
                    <label for="message" class="form-label">Additional Details</label>
                    <textarea class="form-control" name="message" id="message" rows="4" placeholder="Describe any specific issues or requests..." required></textarea>
                  </div>
  
                  <!-- Submit Button -->
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-danger" name="bookbtn" id="bookbtn" >Book Now</button>
                  </div>
  
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->
          
          
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  
<?php include("includes/footer.php");?>