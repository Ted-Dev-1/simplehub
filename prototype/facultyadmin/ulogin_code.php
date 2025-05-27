<?php
session_start();
include("dbconfig1.php");

if(isset($_POST['log-in'])){
    $email = $_POST['uemail'];
    $password = $_POST['upassword'];

    
    $query = "SELECT * FROM users_acct WHERE email = '$email'";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0){

        $row = mysqli_fetch_assoc($query_run);

        if ($password == $row['password']) {

            if($row['usertype'] == 'admin'){
            // Set session variables for the user details
            $_SESSION['pal'] = [
                'id'       => $row['id'],
                'username' => $row['username'],
                'email'    => $row['email'],
                'usertype'  => $row['usertype']  // path to the profile image
            ];

            header('Location: dashboard.php');

            }elseif($row['usertype'] == 'mechanic'){
                $_SESSION['pal'] = [
                    'id'       => $row['id'],
                    'username' => $row['username'],
                    'email'    => $row['email'],
                    'usertype'  => $row['usertype']  // path to the profile image
                ];

                header('Location: viewbooking.php');
            }

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