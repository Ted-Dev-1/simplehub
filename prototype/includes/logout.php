<!--Logout-->

<?php
session_start();
if(isset($_POST['logoutbtn'])){
    
    unset($_SESSION['user']);
    session_destroy();
    header('Location:../index.php');
}else{
    echo "error";
}
?>