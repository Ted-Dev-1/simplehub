<?php
 session_start();
    
 include('includes/header.php');
 include('includes/aside.php'); 
 include('includes/navbar.php'); ?>
  



    <!-- Register Modal-->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create VoucherID</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <form action="code1.php" method="POST">
                        
                        <div class="modal-body">
                            <div class="form-group">

                                <label for="vouchercode"> Vouchercode:</label>
                                <input type="text" class="form-control" name="vouchercode" id="vouchercode" placeholder="VoucherID">
                                
                            </div>

                        </div>


                        <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="voucherbtn">Register</button>
                        </div>

                    </form>

                    
                </div>
            </div>
        </div>



        

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="container">
            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weigth-bold text-primary">VoucherID
                            <button class="btn btn-primary" data-toggle="modal" data-target="#registerModal">Add VoucherID</button>
                        </h6>
                    </div>

                <div class="card-body">
                    <div class="table-responsive">

                        <?php
                        include ("dbconfig1.php");

                        
                        $sql="SELECT * FROM voucher";
                        $query= mysqli_query($conn,$sql);
                        ?>
                        <table class="table table-bordered" id="datatable" width="100%">
                            <tr>
                                <th>No</th>
                                <th>Voucher Code</th>
                                <th>Status</th>
                                <th>Set Date</th>
                                <th>Expiry Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>

                            <?php
                            if(mysqli_num_rows($query) > 0){
                                while($row = mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['vouchercode'];?></td>
                                <td><?php echo $row['status'];?></td>
                                <td><?php echo $row['purchasedate'];?></td>
                                <td><?php echo $row['expirydate'];?></td>

                                <td>
                                    <form action="edit_voucher.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-primary">EDIT</button>
                                    </form>
                                </td>

                                <td>
                                    <form action="code1.php" method="post"><!--code.php-->
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
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