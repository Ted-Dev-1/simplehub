<?php
 session_start();
    
 include('includes/header.php');
 include('includes/aside.php'); 
 include('includes/navbar.php'); ?>
  


    <div class="container">
        <!--DataTable -->
        <div class="card shadow mb-4">
            <div class="card-header py-3  text-primary">Edit Voucher, Note: You can only edit the expirydate </h6>
            </div>
        </div>
        
        <div class="card-body">
            <?php
                include('dbconfig1.php');
                // $connection = mysqli_connect("localhost", "root", "", "scot");
                
                if(isset($_POST['edit_btn'])){
                    $id = $_POST['edit_id'];

                    $query = "SELECT * FROM voucher WHERE id = '$id'";
                    $query_run = mysqli_query($conn, $query);

                    foreach($query_run as $row)
                    {?>
                    <form action="code1.php" method="post">
                        <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
                            
                        <div class="form-group">
                            <label for="vouchercode">Voucher Code:</label>
                            <input type="text" name="edit_u" value="<?php echo $row['vouchercode'];?>" class="form-control" placeholder="Enter Voucher" readonly>
                        </div>
                
                        <div class="form-group">
                            <label for="edit_email">Status:</label>
                            <input type="text" name="edit_e" value="<?php echo $row['status'];?>" class="form-control" placeholder="Your Status" readonly>
                        </div>
                    
                        <div class="form-group">
                            <label for="password">Set Date:</label>
                            <input type="text" name="edit_p"  value="<?php echo $row['purchasedate'];?>" class="form-control" placeholder="Purchased Date" readonly>
                        </div>

                        <div class="form-group">
                            <label for="expiry">Expiry Date:</label>
                            <input type="date" name="edit_date" id="expiry" value="<?php echo $row['expirydate'];?>" class="form-control" placeholder="Expiry Date" >
                        </div>

                    
                    

                    
                        <a href="register_user.php" class="btn btn-danger">CANCEL</a>
                        <button type="submit" class="btn btn-warning" name="updatebtn1">UPDATE</button>
                    </form>
                    <?php            
                    }

                }
             ?>    
        

        </div>
    </div>
    <!-- </div> -->
<?php include ('includes/footer.php');?>