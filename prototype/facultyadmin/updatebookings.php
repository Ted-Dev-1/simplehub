<?php
 session_start();
    
 include('includes/header.php');
 include('includes/aside.php'); 
 include('includes/navbar.php'); ?>
  


    <div class="container">
        <!--DataTable -->
        <div class="card shadow mb-4">
            <div class="card-header py-3  text-primary">Edit Customer Bookings, Note: You can only edit the status </h6>
            </div>
        </div>
        
        <div class="card-body">
            <?php
                include('dbconfig1.php');
                // $connection = mysqli_connect("localhost", "root", "", "scot");
                
                if(isset($_POST['bkedit_btn'])){
                    $id = $_POST['edit_id'];

                    $query = "SELECT
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
                        ON c.id = b.customer_id WHERE booking_id = '$id'
                    ";
                    
                    $query_run = mysqli_query($conn, $query);

                    foreach($query_run as $row)
                    {?>
                    <form action="code1.php" method="post">
                        <input type="hidden" name="edit_id" value="<?php echo $row['booking_id'];?>">
                            
                        <div class="form-group">
                            <label for="customer">Customer:</label>
                            <input type="text" name="customer" value="<?php echo $row['username'];?>" class="form-control" placeholder="" readonly>
                        </div>
                
                        <div class="form-group">
                            <label for="s_category">Service Category:</label>
                            <input type="text" name="s_category" value="<?php echo $row['service_category'];?>" class="form-control" placeholder="" readonly>
                        </div>
                    
                        <div class="form-group">
                            <label for="b_date">Booking Date:</label>
                            <input type="text" name="b_date"  value="<?php echo $row['booking_date'];?>" class="form-control" placeholder="" readonly>
                        </div>

                        <div class="form-group">
                            <label for="b_time">Booking Time:</label>
                            <input type="text" name="b_time"  value="<?php echo $row['booking_time'];?>" class="form-control" placeholder="" readonly>
                        </div>

                        <div class="form-group">
                            <label for="a_details">Additional Details:</label>
                            <input type="text" name="a_details" id="expiry" value="<?php echo $row['additional_details'];?>" class="form-control" placeholder="" readonly>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone"  value="<?php echo $row['phone'];?>" class="form-control" placeholder="" readonly>
                        </div>

                        <div class="form-group">
                            <label for="status">Status:</label>

                            <select name="status" value="<?php echo $row['status'];?>" class="form-control" placeholder="Update status">
                                <option value="pending">pending</option>
                                <option value="confirmed">confirmed</option>
                                <option value="completed">completed</option>
                            </select>
                        </div>

                    
                    

                    
                        <a href="viewbooking.php" class="btn btn-danger">CANCEL</a>
                        <button type="submit" class="btn btn-warning" name="bkupdatebtn">UPDATE</button>
                    </form>
                    <?php            
                    }

                }
             ?>    
        

        </div>
    </div>
    <!-- </div> -->
<?php include ('includes/footer.php');?>