<?php include("security.php");?>
<?php include("includes/header.php");?>
<?php include("includes/aside.php");?>
<?php include("includes/navbar.php");?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Gear Nesux Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </a>
    </div>

    

    <div class="container">
    <h1>Welcome <?php echo $_SESSION['pal']['username'];?>, to your dashboard</h1>
    <div class="row">
        
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 
            py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            TOTAL REGISTERED USERS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                 require 'dbconfig1.php';
                                 $query = "SELECT id FROM users_acct ORDER BY id";
                                 $query_run = mysqli_query($conn, $query);
                                 $row = mysqli_num_rows($query_run);
                                 echo '<h4> '.$row.'</h4>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example --> 
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <!--18-->
                                <?php
                                 require 'dbconfig1.php';
                                 $query = "SELECT booking_id FROM bookings WHERE status = 'pending' ";
                                 $query_run = mysqli_query($conn, $query);
                                 $row = mysqli_num_rows($query_run);
                                 echo '<h4> '.$row.'</h4>';
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>





    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-5" >
                <h6 class="m-0 font-weigth-bold text-primary">Users Profile

                    <a href="register_user.php"><button class="btn btn-primary" name="uprofile">Manage Users Profile</button></a>
                    
                </h6>
            </div>
            
        </div>

        
    </div>


    <div class="container">
        <div class="card shadow mb-4">
            
            <div class="card-header py-5">
                <h6 class="m-0 font-weigth-bold text-primary">Voucher ID
                <a href="register_voucher.php"><button class="btn btn-primary">Vocher ID Management</button></a>
                </h6>
            </div>
            
        </div>
        
    </div>

    <div class="container">
        <div class="card shadow mb-4">
            
            <div class="card-header py-5">
                <h6 class="m-0 font-weigth-bold text-primary">Customers Profile
                    <a href="register_customer.php"><button class="btn btn-primary" >Review Customers Account</button></a>
                </h6>
            </div>
            
        </div>
        
    </div>

    <div class="container">
        <div class="card shadow mb-4">
            
            <div class="card-header py-5">
                <h6 class="m-0 font-weigth-bold text-primary">Booking Management
                    <a href="viewbooking.php"><button class="btn btn-primary" >Manage Customer Bookings</button></a>
                </h6>
            </div>
            
        </div>
        
    </div>



</div>

<!-- /.container-fluid -->
<?php include("includes/scripts.php");?>
<?php include("includes/footer.php");?>
