<?php
include("dbconfig1.php");
//UPDATING FROM DATABASE
 if(isset($_POST['updateaboutus'])){
     $id = $_POST['edit_id'];
     $intro = $_POST['edit_intro_title'];
     $f_title = $_POST['edit_f_title'];
     $f_parag = $_POST['edit_f_parag'];
     $s_title = $_POST['edit_s_title'];
     $s_parag = $_POST['edit_s_parag'];
     $t_title = $_POST['edit_t_title'];
     $t_parag =$_POST['edit_t_parag'];

     $sql = "UPDATE aboutus SET intro='$intro', f_title='$f_title', f_parag='$f_parag', s_title='$s_title', s_parag='$s_parag', t_title='$t_title', t_parag='$t_parag' WHERE id='$id'";
     $query_run = mysqli_query($conn, $sql);
     
    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location:contentmgt.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location:aboutus.php');
    }
 }

?>