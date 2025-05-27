<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert a new record with a default image
$name = "John Doe";
$email = "johndoe@example.com";
$defaultImage = "uploads/default.jpg"; // Path to your default image

$sql = "INSERT INTO Profile (Name, Email, Image) VALUES ('$name', '$email', '$defaultImage')";
if ($conn->query($sql) === TRUE) {
    echo "Record created with default image!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Fetch and display all records
$sql = "SELECT Name, Email, Image FROM Profile";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Email</th><th>Image</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Name']}</td>
                <td>{$row['Email']}</td>
                <td><img src='{$row['Image']}' alt='Profile Image' width='100'></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['voucher_id']; ?></td>
<td><?php echo "<img src='" . $row['profile'] . "' alt='Profile Image' style='width: 100px; height: 100px; border-radius: 50%;'>"; ?></td>
<td><?php echo $row['registration_date']; ?></td>






<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch and display all records
$sql = "SELECT Name, Email, Image FROM Profile";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
    echo "<tr><th>Name</th><th>Email</th><th>Image</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Name']}</td>
                <td>{$row['Email']}</td>
                <td><img src='{$row['Image']}' alt='Profile Image' style='width: 100px; height: 100px; border-radius: 50%;'></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>














<?php


include "dbconfig1.php";

//Inserting into the database
if(isset($_POST['registerbtn'])){
    $username = $_POST['registerusername'];
    $email = $_POST['registeremail'];
    $password = $_POST['registerpassword'];
    $confirm_password = $_POST['Cregisterpassword'];
    $voucher = $_POST['voucherid'];
    $defaultimage = "img/default.jpg";
    $voucher = trim($_POST['voucherid']);


    if($password === $confirm_password){
        // Check if voucher exists and is unused
        $voucher_query = "SELECT * FROM voucher WHERE voucher_id = '$voucher' AND status = 'unused'";
        $voucher_query_run = mysqli_query($conn, $voucher_query);

        if(mysqli_num_rows($voucher_query_run) > 0){
            // Proceed with registration if the voucher is valid
            $query = "INSERT INTO customer_acct (username, email, password, voucher_id, profile) VALUES('$username','$email','$password', '$voucher', '$defaultimage')";
            $query_run = mysqli_query($conn, $query);

            if($query_run){
                // Update voucher status to 'used'
                $update_voucher_query = "UPDATE voucher SET status = 'used' WHERE voucher_id = '$voucher'";
                $update_voucher_query_run = mysqli_query($conn, $update_voucher_query);

                if($update_voucher_query_run){
                    $_SESSION['success'] = "<script> alert('Profile Added and Voucher Updated') </script>";
                    echo $_SESSION['success'];
                } else {
                    $_SESSION['status'] = "Profile Added but Voucher Update Failed";
                    echo $_SESSION['status'];
                }
                header('Location: register_user.php');
            } else {
                $_SESSION['status'] = "Profile Not Added";
                echo $_SESSION['status'];
                header('Location: register_user.php');
            }
        } else {
            // Alert if voucher is invalid
            $_SESSION['voucher_error'] = "<script> alert('Voucher ID is not valid or already used') </script>";
            echo $_SESSION['voucher_error'];
            header('Location: register_user.php');
        }
    } else {
        $_SESSION['match'] = "<script> alert('Password and Confirm Password Does Not Match') </script>";
        echo $_SESSION['match'];
        header('Location: register_user.php');
    }
}?>












<!--login logic-->
<?php
session_start();
include("dbconfig1.php");

if (isset($_POST['signinbtn'])) {
    $email = $_POST['signinemail'];
    $password = $_POST['signinpassword'];
    
    // Fetch the user by email
    $query = "SELECT * FROM customer_acct WHERE email = '$email'";
    $query_run = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($query_run) > 0) {
        $row = mysqli_fetch_assoc($query_run);
        
        // Compare passwords. If using hashing, utilize password_verify() here.
        if ($password == $row['password']) {
            // Set session variables for the user details
            $_SESSION['user'] = [
                'id'       => $row['id'],
                'username' => $row['username'],
                'email'    => $row['email'],
                'profile'  => $row['profile']  // path to the profile image
            ];
            
            // Redirect to homepage (or dashboard)
            header('Location: index.php');
            exit;
        } else {
            $_SESSION['error'] = "Invalid password.";
            header('Location: login.php');
            exit;
        }
    } else {
        $_SESSION['error'] = "Email not found.";
        header('Location: login.php');
        exit;
    }
}
?>




<!--nav bar-->
<?php
session_start(); // Ensure session is started
?>
<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="index.php" class="logo d-flex align-items-center me-auto">
      <!-- Optionally use an image logo or text logo -->
      <h1 class="sitename">Gear Nexus</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li class="dropdown">
          <a href="about.php"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="team.php">Team</a></li>
            <li><a href="testimonials.php">Testimonials</a></li>
          </ul>
        </li>
        <li><a href="services.php">Services</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="pricing.php">Voucher ID</a></li>
        <li><a href="booking.php">Book A Service</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <?php if (isset($_SESSION['user'])): ?>
      <!-- If user is logged in, show profile image as the button -->
      <img src="<?php echo $_SESSION['user']['profile']; ?>" 
           id="profileImage" 
           alt="Profile" 
           style="width:40px; height:40px; border-radius:50%; cursor:pointer;">
    <?php else: ?>
      <!-- Otherwise, show the default "Sign Up" button -->
      <a class="btn-getstarted" href="#" data-bs-toggle="modal" data-bs-target="#authModal">Sign Up</a>
    <?php endif; ?>

  </div>
</header>


<!--or-->
<img src="<?php echo $_SESSION['user']['profile']; ?>" 
    id="profileImage" 
    alt="Profile" 
    style="width:40px; height:40px; border-radius:50%; cursor:pointer;"
    data-bs-toggle="modal" 
    data-bs-target="#profileModal"
>

<!--Profile modal-->

<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-end">  <!-- Aligns the modal to the right -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModalLabel">Welcome to your profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <?php if (isset($_SESSION['user'])): ?>
          <img src="<?php echo $_SESSION['user']['profile']; ?>" alt="Profile Image" style="width:100px; height:100px; border-radius:50%;">
          <h4><?php echo $_SESSION['user']['username']; ?></h4>
          <p>Welcome to your profile</p>
          <a href="logout.php" class="btn btn-danger">Logout</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>



<!--modal java script-->
<script>
  // Wait until the document is fully loaded
  document.addEventListener("DOMContentLoaded", function() {
    var profileImage = document.getElementById("profileImage");
    if (profileImage) {
      profileImage.addEventListener("click", function(){
        var profileModal = new bootstrap.Modal(document.getElementById("profileModal"));
        profileModal.show();
      });
    }
  });
</script>

<!--Logout-->
<?php
session_start();
session_destroy();
header("Location: index.php");
exit;
?>





<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-end">  <!-- This aligns the modal to the right of the page -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModalLabel">Welcome to your profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <?php if (isset($_SESSION['user'])): ?>
          <!-- Current Profile Image & Info -->
          <img src="<?php echo $_SESSION['user']['profile']; ?>" alt="Profile Image" style="width:100px; height:100px; border-radius:50%;">
          <h4><?php echo $_SESSION['user']['username']; ?></h4>
          <p>Welcome to your profile</p>

          <!-- Form to upload a new Profile Image -->
          <form action="update_profile.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <input type="file" name="profile_image" accept="image/*" required>
            </div>
            <button type="submit" name="update_profile" class="btn btn-primary">Update Profile Image</button>
          </form>

          <hr>
          <a href="logout.php" class="btn btn-danger">Logout</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>








<!--UPDATE PROFILE.PHP-->

<?php
session_start();
include("dbconfig1.php");

if (isset($_POST['update_profile'])) {

    // Check if the file was uploaded without errors
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {

        $uploadDir = "img/profiles/"; // folder where profile images will be stored
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Get details of the uploaded file
        $fileTmpPath = $_FILES['profile_image']['tmp_name'];
        $fileName = basename($_FILES['profile_image']['name']);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

        // Validate file extension
        if (in_array($fileType, $allowedExtensions)) {
            // Generate a new unique filename to avoid collisions
            $newFileName = uniqid('profile_', true) . '.' . $fileType;
            $destPath = $uploadDir . $newFileName;

            // Move the file to the destination directory
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                $userId = $_SESSION['user']['id'];

                // Update the profile column in the customer_acct table
                $updateQuery = "UPDATE customer_acct SET profile='$destPath' WHERE id='$userId'";
                $queryRun = mysqli_query($conn, $updateQuery);

                if ($queryRun) {
                    // Update session variable so the new profile image is used immediately
                    $_SESSION['user']['profile'] = $destPath;
                    $_SESSION['success'] = "Profile image updated successfully.";
                    header("Location: index.php");
                    exit;
                } else {
                    $_SESSION['error'] = "Database update failed.";
                }
            } else {
                $_SESSION['error'] = "Failed to move the uploaded file.";
            }
        } else {
            $_SESSION['error'] = "Invalid file type. Allowed types: jpg, jpeg, png, gif.";
        }
    } else {
        $_SESSION['error'] = "No file uploaded or file error.";
    }
}

// Redirect back to homepage/profile page if errors occurred
header("Location: index.php");
exit;
?>











<!--UPDATE PROFILE-->








<?php
session_start();
include("dbconfig1.php"); // Adjust the relative path if your dbconfig1.php isn't in the same folder as updateprofile.php

if (isset($_POST['update_profile'])) {

    // Check if the file was uploaded without errors
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {

        // Since updateprofile.php is inside the includes folder,
        // go one folder up to access the "uploads" folder in the root.
        $uploadDir = "../uploads/profilesimg/"; 
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Get details of the uploaded file
        $fileTmpPath = $_FILES['profile_image']['tmp_name'];
        $fileName = basename($_FILES['profile_image']['name']);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

        // Validate file extension
        if (in_array($fileType, $allowedExtensions)) {
            // Generate a new unique filename to avoid collisions
            $newFileName = uniqid('profile_', true) . '.' . $fileType;
            $destPath = $uploadDir . $newFileName; // Actual destination from the includes folder

            // Move the file to the destination directory
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                // Prepare the path to store in the database.
                // This path is relative to your site's root.
                $dbDestPath = "uploads/profilesimg/" . $newFileName;
                $userId = $_SESSION['user']['id'];

                // Update the profile column in the customer_acct table
                $updateQuery = "UPDATE customer_acct SET profile='$dbDestPath' WHERE id='$userId'";
                $queryRun = mysqli_query($conn, $updateQuery);

                if ($queryRun) {
                    // Update session variable so the new profile image is used immediately
                    $_SESSION['user']['profile'] = $dbDestPath;
                    $_SESSION['success'] = "Profile image updated successfully.";
                    header("Location: ../index.php"); // Redirect to index.php at root
                    exit;
                } else {
                    $_SESSION['error'] = "Database update failed.";
                }
            } else {
                $_SESSION['error'] = "Failed to move the uploaded file.";
            }
        } else {
            $_SESSION['error'] = "Invalid file type. Allowed types: jpg, jpeg, png, gif.";
        }
    } else {
        $_SESSION['error'] = "No file uploaded or file error.";
    }
}

// Redirect back to homepage/profile page if errors occurred
header("Location: ../index.php");
exit;
?>














<?php
session_start();
include("dbconfig1.php");

if (isset($_POST['update_profile'])) {

    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {

        // Since updateprofile.php is inside the includes folder,
        // go one folder up to access the "uploads" folder located in the root.
        $uploadDir = "../uploads/profilesimg/"; 
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileTmpPath = $_FILES['profile_image']['tmp_name'];
        $fileName = basename($_FILES['profile_image']['name']);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array($fileType, $allowedExtensions)) {
            $newFileName = uniqid('profile_', true) . '.' . $fileType;
            $destPath = $uploadDir . $newFileName; // Physical path to store the file

            if (move_uploaded_file($fileTmpPath, $destPath)) {
                $userId = $_SESSION['user']['id'];
                
                // Store the path relative to your site root.
                $dbDestPath = "uploads/profilesimg/" . $newFileName;

                $updateQuery = "UPDATE customer_acct SET profile='$dbDestPath' WHERE id='$userId'";
                $queryRun = mysqli_query($conn, $updateQuery);

                if ($queryRun) {
                    // Update the session variables
                    $_SESSION['user']['profile'] = $dbDestPath;
                    // Set the flag to indicate a profile update was made
                    $_SESSION['profile_updated'] = true;
                    
                    $_SESSION['success'] = "Profile image updated successfully.";
                    header("Location: ../index.php"); // Adjust redirect as needed
                    exit;
                } else {
                    $_SESSION['error'] = "Database update failed.";
                }
            } else {
                $_SESSION['error'] = "Failed to move the uploaded file.";
            }
        } else {
            $_SESSION['error'] = "Invalid file type. Allowed types: jpg, jpeg, png, gif.";
        }
    } else {
        $_SESSION['error'] = "No file uploaded or file error.";
    }
}

header("Location: ../index.php");
exit;
?>









profile



<?php
if (isset($_SESSION['user'])): 
    // Check if the profile has been updated by looking for our custom flag.
    if (isset($_SESSION['profile_updated']) && $_SESSION['profile_updated'] === true) {
        // If updated, the session already holds the correct path
        $profileImagePath = $_SESSION['user']['profile'];
        // Optionally, unset the flag so the update isn’t applied repeatedly if needed.
        // unset($_SESSION['profile_updated']);
    } else {
        // If no update flag is found, we assume the default image was set and resides in the includes folder.
        $profileImagePath = "includes/" . $_SESSION['user']['profile'];
    }
?>
    <!-- Display the profile image as the button -->
    <img src="<?php echo $profileImagePath; ?>" 
         id="profileImage" 
         alt="Profile" 
         style="width:40px; height:40px; border-radius:50%; cursor:pointer; margin-left:20px;"
         data-bs-toggle="modal" 
         data-bs-target="#profileModal">
<?php else: ?>
    <!-- Otherwise, show the default "Sign Up" button -->
    <a class="btn-getstarted" href="#" data-bs-toggle="modal" data-bs-target="#authModal">Sign Up</a>
<?php endif; ?>



























<?php
// Include database configuration
include "dbconfig1.php";

// Check if the booking form has been submitted
if (isset($_POST['bookbtn'])) {
    // Collect inputs from the booking form
    $email = $_POST['email']; // Customer email
    $service = $_POST['service']; // Selected service
    $booking_d = $_POST['date']; // Preferred date
    $booking_t = $_POST['time']; // Preferred time
    $additional_d = $_POST['message']; // Additional details

    // Step 1: Check if the email exists in the customer_acct table
    $email_check_query = "SELECT id FROM customer_acct WHERE email = '$email'";
    $email_check_result = mysqli_query($conn, $email_check_query);

    if (mysqli_num_rows($email_check_result) > 0) {
        // Step 2: Fetch the customer_id from the result
        $row = mysqli_fetch_assoc($email_check_result);
        $customer_id = $row['id'];

        // Step 3: Insert booking into the bookings table
        $booking_query = "INSERT INTO bookings (customer_id, service, booking_date, booking_time, additional_details) 
                          VALUES ('$customer_id', '$service', '$booking_d', '$booking_t', '$additional_d')";
        $booking_query_result = mysqli_query($conn, $booking_query);

        // Step 4: Handle success or failure
        if ($booking_query_result) {
            echo "<script>alert('Booking successfully added!');</script>";
        } else {
            echo "<script>alert('Failed to add booking. Please try again later.');</script>";
        }
    } else {
        // If the email does not exist in the customer_acct table
        echo "<script>alert('Email not found. Please register first.');</script>";
    }
}
?>





SELECT * FROM customers INNER JOIN booking ON customers.customer_id = booking.customer_id;






mistake
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





















    $sql = "
  SELECT
    b.booking_id,
    c.username,
    b.service_category,
    b.booking_date,
    b.booking_time,
    b.additional_details,
    b.status,
    b.phone
  FROM bookings b
  JOIN customer_acct c
    ON c.id = b.customer_id
";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
  while ($r = mysqli_fetch_assoc($res)) {
    echo "<tr>
            <td>{$r['booking_id']}</td>
            <td>{$r['username']}</td>
            <td>{$r['service_category']}</td>
            <td>{$r['booking_date']}</td>
            <td>{$r['booking_time']}</td>
            <td>{$r['additional_details']}</td>
            <td>{$r['status']}</td>
            <td>{$r['phone']}</td>
            <td>
              <form action='delete_booking.php' method='post'>
                <input type='hidden' name='delete_id' value='{$r['booking_id']}'>
                <button type='submit' name='delete_btn' class='btn btn-danger'>DELETE</button>
              </form>
            </td>
          </tr>";
  }
}










About us issues
<!-- in your <head> -->
<link
  href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
  rel="stylesheet"
/>

<!-- at the end of your <body>, before your init script -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>














<?php
  $activePage = 'home';
  include 'includes/header.php';
?>

<?php
  $activePage = 'about';
  include 'includes/header.php';
?>






<header>…
  <nav id="navmenu" class="navmenu">
    <ul>
      <li><a href="index.php" class="<?= $activePage==='home'    ? 'active':'' ?>">Home</a></li>
      <li class="dropdown">
        <a href="about.php" class="<?= $activePage==='about'   ? 'active':'' ?>">
          <span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
        </a>
        <ul>
          <li><a href="team.php"         class="<?= $activePage==='team'   ? 'active':'' ?>">Team</a></li>
          <li><a href="testimonials.php" class="<?= $activePage==='testimonials'?'active':'' ?>">Testimonials</a></li>
        </ul>
      </li>
      <li><a href="services.php"    class="<?= $activePage==='services' ? 'active':'' ?>">Services</a></li>
      <li><a href="portfolio.php"   class="<?= $activePage==='portfolio'? 'active':'' ?>">Portfolio</a></li>
      <li><a href="pricing.php"     class="<?= $activePage==='pricing'  ? 'active':'' ?>">Voucher ID</a></li>
      <li><a href="booking.php"     class="<?= $activePage==='booking'  ? 'active':'' ?>">Book A Service</a></li>
      <li><a href="contact.php"     class="<?= $activePage==='contact'  ? 'active':'' ?>">Contact</a></li>
    </ul>
  </nav>
</header>




































    /* Keyframes renamed */
@keyframes my-email-form-loading {
  0%   { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Messages & spinner */
.my-email-form .error-message {
  display: none;
  background: #df1529;
  color: #ffffff;
  text-align: left;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.my-email-form .sent-message {
  display: none;
  color: #ffffff;
  background: #059652;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.my-email-form .loading {
  display: none;
  background: var(--surface-color);
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
}

.my-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid var(--accent-color);
  border-top-color: var(--surface-color);
  animation: my-email-form-loading 1s linear infinite;
}

/* Form fields & button */
.contact .my-email-form {
  height: 100%;
}

.contact .my-email-form input[type=text],
.contact .my-email-form input[type=email],
.contact .my-email-form textarea {
  font-size: 14px;
  padding: 10px 15px;
  box-shadow: none;
  border-radius: 0;
  color: var(--default-color);
  background-color: color-mix(in srgb, var(--background-color), transparent 50%);
  border-color: color-mix(in srgb, var(--default-color), transparent 80%);
}

.contact .my-email-form input[type=text]:focus,
.contact .my-email-form input[type=email]:focus,
.contact .my-email-form textarea:focus {
  border-color: var(--accent-color);
}

.contact .my-email-form input[type=text]::placeholder,
.contact .my-email-form input[type=email]::placeholder,
.contact .my-email-form textarea::placeholder {
  color: color-mix(in srgb, var(--default-color), transparent 70%);
}

.contact .my-email-form button[type=submit] {
  color: var(--contrast-color);
  background: var(--accent-color);
  border: 0;
  padding: 10px 30px;
  transition: 0.4s;
  border-radius: 4px;
}

.contact .my-email-form button[type=submit]:hover {
  background: color-mix(in srgb, var(--accent-color), transparent 20%);
}
