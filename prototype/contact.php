<?php $pageClass = "contact-page"; 
  $activePage = 'contact';
  include("includes/header.php");
?>
<?php include("includes/navbar.php");?>


  <main class="main">






  <!-- Sign Up Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h5 class="modal-title" id="registerModalLabel">Create Your Account</h5>
            <!-- If using Bootstrap 5 -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
            <!-- If using Bootstrap 4, use this instead:
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            -->
          </div>
          
          <!-- Registration Form -->
          <form action="register.php" method="POST">
            <div class="modal-body">
              <!-- Username -->
              <div class="form-group mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
              </div>
              
              <!-- Email -->
              <div class="form-group mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="youremail@example.com" required>
              </div>
              
              <!-- User Type (Example for a Mechanic Site) -->
              <div class="form-group mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select name="gender" class="form-select" id="usertype" required>
                  <option value="gender" selected>Male/Female</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              
              <!-- Password -->
              <div class="form-group mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
              </div>
              
              <!-- Confirm Password -->
              <div class="form-group mb-3">
                <label for="confirm_password" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Re-enter password" required>
              </div>

              <div class="form-group mb-3">
                <label for="accountvoucher" class="form-label">AccountValidation:</label>
                <input type="text" class="form-control" name="accountvoucher" id="accountvoucher" placeholder="Enter you voucher ID or buy now" required>
              </div>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
              <!-- If using Bootstrap 5 -->
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              
              <!-- If using Bootstrap 4, use data-dismiss="modal" instead of data-bs-dismiss="modal" -->
              <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> -->
              
              <button type="submit" class="btn btn-danger" name="registerbtn">Register</button>
            </div>
          </form>
          
        </div>
      </div>
    </div>






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
                <p>curiouslearner@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

<?php include("includes/footer.php");?>