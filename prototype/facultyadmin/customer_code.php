<?php


    include "dbconfig1.php";


    //Inserting into the database 
    if(isset($_POST['registerbtn'])){
        $username = $_POST['registerusername'];
        $email = $_POST['registeremail'];
        $password = $_POST['registerpassword'];
        $confirm_password = $_POST['Cregisterpassword'];
        //$voucher=$_POST['voucherid'];
        $voucher = trim($_POST['voucherid']);
        $defaultimage = "uploads/profilesimg/default.jpg";
        

        if($password === $confirm_password){

            $voucher_query = "SELECT * FROM voucher WHERE vouchercode = '$voucher' AND status = 'unused'";
            $voucher_query_run = mysqli_query($conn, $voucher_query);

            if(mysqli_num_rows($voucher_query_run) > 0){

            $query = "INSERT INTO customer_acct (username, email, password, voucher_id, profile) VALUES('$username','$email','$password', '$voucher', '$defaultimage')";
            $query_run = mysqli_query($conn, $query);
            if($query_run)
            {
                $update_voucher_query = "UPDATE voucher SET status = 'used' WHERE vouchercode = '$voucher'";
                $update_voucher_query_run = mysqli_query($conn, $update_voucher_query);

                //echo "Saved";
                if($update_voucher_query_run){
                    $_SESSION['success'] = "<script> alert('Profile Added and Voucher Updated') </script>";
                    echo $_SESSION['success'];
                } else {
                    $_SESSION['status'] = "Profile Added but Voucher Update Failed";
                    echo $_SESSION['status'];
                }
                
            }else{
                $_SESSION['status'] = "Profile Not Added";
                echo $_SESSION['status'];
            }

            }else{
                $_SESSION['voucher_error'] = "<script> alert('Voucher ID is not valid or already used') </script>";
                echo $_SESSION['voucher_error'];
                
            }


        }else{
            $_SESSION['match'] = "<script> alert('Password and Confirm Password Does Not Match') </script>";
            echo $_SESSION['match'];
        
        }
    }

?>