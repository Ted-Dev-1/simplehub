<?php
session_start();
if(isset($_POST['logoutbtn'])){

    session_destroy();
    unset($_SESSION['pal']);
    header('Location:userlogin.php');
}else{
    echo "error";
}
?>