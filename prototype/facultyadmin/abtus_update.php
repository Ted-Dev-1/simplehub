<?php 
include('security.php');
include('includes/header.php'); 
include('includes/aside.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

    <!-- DataTable Examples -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">About Us Page Edit </h6>   
        </div>
    </div>

    <div class="card-body">

        <?php

        include ("dbconfig1.php");

        if(isset($_POST['abt_update_btn']))
        {
            $id = $_POST['abt_update_id'];

            $query = "SELECT * FROM aboutus WHERE id='$id' ";
            $query_run = mysqli_query($conn, $query);

            foreach($query_run as $row);
            {
                ?>
                    <form action ="abtupdate_code.php" method="POST">

                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                        <div class="form-group">
                            <label>Intro</label>
                            <textarea name="edit_intro_title"  rows="4" cols="20" value="<?php echo $row['intro'] ?>" class="form-control" placeholder="Enter First Intro"></textarea>
                        </div>

                        <div class="form-group">
                            <label>First Title</label>
                            <input type="text" name="edit_f_title" value="<?php echo $row['f_title'] ?>" class="form-control" placeholder="Enter First Title">
                        </div>
                        <div class="form-group">
                            <label>First Paragraph </label>
                            <input type="text" name="edit_f_parag" value="<?php echo $row['f_parag'] ?>" class="form-control" placeholder="Enter First Paragraph">
                        </div>
                        <div class="form-group">
                            <label>Second Title</label>
                            <input type="text" name="edit_s_title" value="<?php echo $row['s_title'] ?>" class="form-control" placeholder="Enter Second Title">
                        </div>
                       
                        <div class="form-group">
                        <label>Second Paragraph </label>
                        <input type="text" name="edit_s_parag" value="<?php echo $row['s_parag'] ?>" class="form-control" placeholder="Enter Second Paragraph">
                        </div>

                        <div class="form-group">
                        <label>Third Title </label>
                        <input type="text" name="edit_t_title" value="<?php echo $row['t_title'] ?>" class="form-control" placeholder="Enter Third Title">
                        </div>

                        <div class="form-group">
                        <label>Third Paragraph </label>
                        <input type="text" name="edit_t_parag" value="<?php echo $row['t_parag'] ?>" class="form-control" placeholder="Enter Third Paragraph">
                        </div>


                        <a href="contentmgt.php" class="btn btn-danger"> CANCEL </a>
                        <button type="submit" name="updateaboutus" class="btn btn-primary"> UPDATE </button>
                    </form>
           <?php
            }
        }
    ?>

            </div>
        </div>
    </div>

</div>
<!-- / .container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

