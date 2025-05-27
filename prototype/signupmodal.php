<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
            <img src="assets/img1/meclogo4.png" alt="" class="img-fluid" style="height: 40px; "> 
            <h5 class="modal-title" id="authModalLabel">Gear Nexus</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body crad">
            <div class="container">
                <div class="row">

                <!-- Left Column: Initially Sign In Form -->
                <div class="col-md-6 pro" id="leftColumn">

                    <div class="mb-4 mt-4">
                    <h3>Welcome back</h3>
                    </div>
                    
                    <div class="mb-5">
                    <p>Not registered yet? <a href="#" id="showRegisterLink">Sign up</a></p>
                    </div>

                    <form id="signInForm" action="facultyadmin/logincode.php" method="post">

                    <div class="mb-5">
                        <label for="signinemail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="signinemail" id="signinemail" placeholder="Enter your email" required>
                    </div>

                    <div class="mb-5">
                        <label for="signinpassword" class="form-label">Password</label>
                        <input type="password" class="form-control" name="signinpassword" id="signinpassword" placeholder="Enter your password" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary sign" name="signinbtn">Sign In</button>

                    
                    </form>

                    <div class="mt-5">
                    <p>Forgotten your pasword or login details <a href="#">Get help up</a> signing in</p>
                    </div>

                </div>

                <!-- Right Column: Initially Image -->
                <div class="col-md-6 radius" id="rightColumn">

                    <div id="signInImage"class="rad">
                    <img src="assets/img1/form3.jpg" class="img-fluid rad_img" alt="Welcome Image">
                    </div>

                    <!-- Hidden Registration Form -->
                    <div id="signUpForm" class="d-none">

                    <h3>Create Your Account</h3>
                    <form id="registerForm" action="facultyadmin/customer_code.php" method="post">

                        <div class="mb-3">
                        <label for="registerusername" class="form-label">Username:</label>
                        <input type="text" class="form-control" name="registerusername" id="registerusername" placeholder="Choose a username" required>
                        </div>

                        <div class="mb-3">
                        <label for="registeremail" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="registeremail" id="registeremail" placeholder="Your email address" required>
                        </div>

                        <div class="mb-3">
                        <label for="registerpassword" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="registerpassword" id="registerpassword" placeholder="Create a password" required>
                        </div>

                        <div class="mb-3">
                        <label for="Cregisterpassword" class="form-label">Confirm password:</label>
                        <input type="password" class="form-control" name="Cregisterpassword" id="Cregisterpassword" placeholder="Re-enter your password" required>
                        </div>

                        <div class="mb-3">
                        <label for="voucherid" class="form-label">Validation:</label>
                        <input type="text" class="form-control" name="voucherid" id="voucherid" placeholder="Enter your voucher ID or Buy now" required>
                        </div>

                        <!-- Default profile image is set in the backend; no file input here -->
                        <button type="submit" class="btn btn-primary sign" name="registerbtn">Sign Up</button>

                    </form>

                    <!-- Message to revert back -->
                    <p class="mt-3">Already have an account? <a href="#" id="showSignInLink">Sign in</a></p>

                    </div>
                    
                </div>
                <!-- End Right Column -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Container -->
            </div>
            <!-- End Modal Body -->
        </div>
    </div>
</div>