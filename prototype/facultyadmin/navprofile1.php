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