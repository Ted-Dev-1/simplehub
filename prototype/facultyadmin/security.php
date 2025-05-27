<?php
session_start();

if(!$_SESSION['pal']){
    header('Location: userlogin.php');
}

?>