<?php


include "dbconfig1.php";


//Inserting into the database 
if(isset($_POST['registerbtn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $usertype = $_POST['usertype'];

    if($password === $confirm_password){
        $query = "INSERT INTO users_acct (username, email, password, usertype) VALUES('$username','$email','$password', '$usertype')";
        $query_run = mysqli_query($conn, $query);
        if($query_run)
        {
            //echo "Saved";
            $_SESSION['success'] = "<script> alert('Admin Profile Added') </script>";
            echo $_SESSION['success'];
            
            header('Location: register_user.php');
            
        }else{
            $_SESSION['status'] = "Admin Profile Not Added";
            header('Location: register_user.php'); 
            echo $_SESSION['status'];
        }
    }else{
        $_SESSION['match'] = "<script> alert('Password and Confirm Password Does Not Match') </script>";
        echo $_SESSION['match'];
        header('Location: register_user.php');
        
        
    }
}

?>

<?php
    if(isset($_POST['voucherbtn'])){
        
        
        
        $voucherid = $_POST['vouchercode'];
    
        
        $query = "INSERT INTO voucher (vouchercode) VALUES('$voucherid')";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
            //echo "Saved";
            $_SESSION['success'] = "<script> alert('VoucherID Added') </script>";
            echo $_SESSION['success'];
                
            header('Location: register_voucher.php');
                
        }else{
            $_SESSION['status'] = "VoucherID Not Added";
            header('Location: register_voucher.php'); 
            echo $_SESSION['status'];
        }
        
    }
?>





<!--CODE.PHP-->


<?php
//Updating users into the database
if(isset($_POST['updatebtn'])){
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['edit_usertype'];

    $query = "UPDATE users_acct SET username='$username', email='$email', password='$password', usertype='$usertypeupdate' WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['success'] = "Your Data is Updated";
        header("Location: register_user.php");
        // echo "alert('User Wasn\'t updated')";
    }else{
        $_SESSION['status'] = "Your Data is NOT Updated";
        header("Location: register_user.php");
    }
}

?>


<?php
//Updating vouchers into the database
if(isset($_POST['updatebtn1'])){
    $id = $_POST['edit_id'];
    $date = $_POST['edit_date'];

    $query = "UPDATE voucher SET  expirydate='$date' WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['success'] = "Your Data is Updated";
        header("Location: register_voucher.php");
        // echo "alert('User Wasn\'t updated')";
    }else{
        $_SESSION['status'] = "Your Data is NOT Updated";
        header("Location: register_voucher.php");
    }
}

?>


<?php
//Updating booking into the database
if(isset($_POST['bkupdatebtn'])){
    $id = $_POST['edit_id'];
    $status = $_POST['status'];

    $query = "UPDATE bookings SET status='$status' WHERE booking_id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['success'] = "Your Data is Updated";
        header("Location: viewbooking.php");
        // echo "alert('User Wasn\'t updated')";
    }else{
        $_SESSION['status'] = "Your Data is NOT Updated";
        header("Location: register_user.php");
    }
}

?>

<?php
//Deleting Data from the database

if(isset($_POST['delete_btn'])){

    $id = $_POST['delete_id'];

    $sql = "DELETE FROM users_acct WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        $_SESSION['success'] = "Your Data is Deleted";
        header("Location: register_user.php");
    }else{
        $_SESSION['status'] = "Your Data is NOT Deleted";
        header("Location: register_user.php");
    }
}

?>