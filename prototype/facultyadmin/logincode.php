<?php
session_start();
include("dbconfig1.php");

if(isset($_POST['signinbtn'])){
    $email = $_POST['signinemail'];
    $password = $_POST['signinpassword'];

    
    $query = "SELECT * FROM customer_acct WHERE email = '$email'";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0){

        $row = mysqli_fetch_assoc($query_run);

        if ($password == $row['password']) {
            // Set session variables for the user details
            $_SESSION['user'] = [
                'id'       => $row['id'],
                'username' => $row['username'],
                'email'    => $row['email'],
                'profile'  => $row['profile']  // path to the profile image
            ];

            header('Location: ../index.php');
            exit;

        } else {
            $_SESSION['error'] = "Invalid password.";
            header('Location: ../index.php');
            exit;
        }
    }else {
        $_SESSION['error'] = "Email not found.";
        header('Location: ../index.php');
        exit;
    }


        
    
        
        
    
}
?>