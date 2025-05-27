<?php
 session_start();
    
 include('includes/header.php');
 include('includes/aside.php'); 
 include('includes/navbar.php'); ?>
  



    <!-- Register Modal-->
    
    <?php include("usermodal.php");?>


        

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="container">
            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weigth-bold text-primary">Admin Profile
                            <button class="btn btn-primary" data-toggle="modal" data-target="#registerModal">Add Admin Profile</button>
                        </h6>
                    </div>

                <div class="card-body">
                    <div class="table-responsive">

                        <?php
                        include ("dbconfig1.php");

                        
                        $sql="SELECT * FROM users_acct";
                        $query= mysqli_query($conn,$sql);
                        ?>
                        <table class="table table-bordered" id="datatable" width="100%">
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Usertype</th>
                                <th>Password</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>

                            <?php
                            if(mysqli_num_rows($query) > 0){
                                while($row = mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['username'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['usertype'];?></td>
                                <td><?php echo $row['password'];?></td>

                                <td>
                                    <form action="user_register_edit.php" method="post">
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