<?php session_start(); ?>
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="http://localhost/prototype/facultyadmin/dashboard.php" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Gear Nexus</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="<?= $activePage==='home'    ? 'active':'' ?>">Home</a></li>
          <li class="dropdown"> <a href="about.php" class="<?= $activePage==='about'   ? 'active':'' ?>"> <span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="team.php">Team</a></li>
              <li><a href="testimonials.php">Testimonials</a></li>
            </ul>
          </li>
          <li><a href="services.php" class="<?= $activePage==='services'   ? 'active':'' ?>">Services</a></li>
          <li><a href="portfolio.php" class="<?= $activePage==='portfolio'   ? 'active':'' ?>">Portfolio</a></li>
          <li><a href="pricing.php" class="<?= $activePage==='pricing'   ? 'active':'' ?>">Voucher ID</a></li>
          <li><a href="booking.php" class="<?= $activePage==='booking'   ? 'active':'' ?>">Book A Service</a></li>
          <li><a href="contact.php" class="<?= $activePage==='contact'   ? 'active':'' ?>">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

        <?php include("facultyadmin/navprofile.php");?>

    </div>
</header>

<!--Sign Up Modal-->
<?php include("signupmodal.php")?>


<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-end">  <!-- This aligns the modal to the right of the page -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModalLabel"><?php echo $_SESSION['user']['email'] ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <?php if (isset($_SESSION['user'])): ?>
          <!-- Current Profile Image & Info -->
          <img src="<?php echo $_SESSION['user']['profile']; ?>" alt="Profile Image" style="width:100px; height:100px; border-radius:50%;">
          <h4><?php echo $_SESSION['user']['username']; ?></h4>
          <p>Welcome to your profile</p>

          <!-- Form to upload a new Profile Image -->
          <form action="facultyadmin/updateprofile.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <input type="file" name="profile_image" accept="image/*" required>
            </div>
            <button type="submit" name="update_profile" class="btn btn-primary">Update Profile Image</button>
          </form>

          <hr>
          <form action="includes/logout.php" method="post">
            <button type="submit" class="btn btn-danger" name="logoutbtn">Logout</button>
          </form>
          
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>