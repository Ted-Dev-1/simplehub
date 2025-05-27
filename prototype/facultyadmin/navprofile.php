<?php if (isset($_SESSION['user'])): ?>
        <!-- If user is logged in, show profile image as the button -->
        <img src="<?php echo $_SESSION['user']['profile']; ?>" 
            id="profileImage" 
            alt="Profile" 
            style="width:40px; height:40px; border-radius:50%; cursor:pointer; margin-left:20px;"
            data-bs-toggle="modal" 
            data-bs-target="#profileModal"
        >
        <?php else: ?>
        <!-- Otherwise, show the default "Sign Up" button -->
        <a class="btn-getstarted" href="#" data-bs-toggle="modal" data-bs-target="#authModal">Sign Up</a>
    <?php endif; ?>