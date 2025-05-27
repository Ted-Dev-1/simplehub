<?php
 session_start();
    
 include('includes/header.php');
 include('includes/aside.php'); 
 include('includes/navbar.php'); ?>
  



    



        

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="container">
            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weigth-bold text-primary">Customer Bookings
                            <button class="btn btn-primary" >Review Customer Bookings</button>
                        </h6>
                    </div>

                <div class="card-body">
                    <div class="table-responsive">

                        <?php
                        include ("dbconfig1.php");

                        
                        $sql = "SELECT
                            b.booking_id,
                             c.username,
                            b.service_category,
                            b.booking_date,
                            b.booking_time,
                            b.additional_details,
                            b.status,
                            b.phone
                            FROM bookings b
                            INNER JOIN customer_acct c
                            ON c.id = b.customer_id
                        ";

                        $query= mysqli_query($conn,$sql);
                        
                        ?>
                        <table class="table table-bordered" id="datatable" width="100%">
                            <tr>
                                <th>Booking No</th>
                                <th>Customer</th>
                                <th>Service Category</th>
                                <th>Booking Date</th>
                                <th>Booking Time</th>
                                <th>Additional Details</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Update Status</th>

                                
                            </tr>

                            <?php
                            if(mysqli_num_rows($query) > 0){
                                while($row = mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?php echo $row['booking_id'];?></td>
                                <td><?php echo $row['username'];?></td>
                                <td><?php echo $row['service_category'];?></td>
                                <td><?php echo $row['booking_date'];?></td>
                                <td><?php echo $row['booking_time'];?></td>
                                <td><?php echo $row['additional_details'];?></td>
                                <td><?php echo $row['phone'];?></td>
                                <td><?php echo $row['status'];?></td>
                                


                                <td>
                                    <form action="updatebookings.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['booking_id'];?>">
                                        <button type="submit" name="bkedit_btn" class="btn btn-primary"> UPDATE</button>
                                    </form>
                                </td>
                                
                                
                            </tr>

                            <?php
                                
                                };
                            }
                        
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
<?php include ('includes/footer.php');?>
<?php include("includes/scripts.php");?>