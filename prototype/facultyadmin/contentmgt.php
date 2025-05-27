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
                        <h6 class="m-0 font-weigth-bold text-primary">MANAGE ABOUT US (GEAR NEXUSS)
                            <button class="btn btn-primary" >WHO ARE WE</button>
                        </h6>
                    </div>

                <div class="card-body">
                    <div class="table-responsive">

                        <?php
                        include ("dbconfig1.php");

                        
                        $sql="SELECT * FROM aboutus";
                        $query= mysqli_query($conn,$sql);
                        ?>
                        <table class="table table-bordered" id="datatable" width="100%">
                            <tr>
                                <th>No</th>
                                <th>Intro</th>
                                <th>First Title</th>
                                <th>First Paragraph</th>
                                <th>Second Title</th>
                                <th>Second Paragraph</th>
                                <th>Thrid Title</th>
                                <th>Third Paragraph</th>
                                <th>Update</th>

                                
                            </tr>

                            <?php
                            if(mysqli_num_rows($query) > 0){
                                while($row = mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['intro'];?></td>
                                <td><?php echo $row['f_title'];?></td>
                                <td><?php echo $row['f_parag'];?></td>
                                <td><?php echo $row['s_title'];?></td>
                                <td><?php echo $row['s_parag'];?></td>
                                <td><?php echo $row['t_title']?></td>
                                <td><?php echo $row['t_parag'];?></td>


                                <td>
                                    <form action="abtus_update.php" method="post"><!--code.php-->
                                        <input type="hidden" name="abt_update_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="abt_update_btn" class="btn btn-primary">Update</button>
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