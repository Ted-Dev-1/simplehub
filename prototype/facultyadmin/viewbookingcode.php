
<?php
 session_start();
// Include database configuration
include "dbconfig1.php";

// Check if the booking form has been submitted
if (isset($_POST['bookbtn'])) {
    // Collect inputs from the booking form
    $email = $_POST['email']; // Customer email
    $service = $_POST['service']; // Selected service
    $booking_d = $_POST['date']; // Preferred date
    $booking_t = $_POST['time']; // Preferred time
    $additional_d = $_POST['message']; // Additional details
    $phone = $_POST['phone'];

    // Step 1: Check if the email exists in the customer_acct table
    $email_check_query = "SELECT id FROM customer_acct WHERE email = '$email'";
    $email_check_result = mysqli_query($conn, $email_check_query);

    if (mysqli_num_rows($email_check_result) > 0) {
        // Step 2: Fetch the customer_id from the result
        $row = mysqli_fetch_assoc($email_check_result);
        $customer_id = $row['id'];

        // Step 3: Insert booking into the bookings table
        $booking_query = "INSERT INTO bookings (customer_id, service_category, booking_date, booking_time, additional_details, phone) VALUES ('$customer_id', '$service', '$booking_d', '$booking_t', '$additional_d', '$phone')";
        $booking_query_result = mysqli_query($conn, $booking_query);

        // Step 4: Handle success or failure
        if ($booking_query_result) {
            echo "<script>alert('Booking successfully added!');</script>";
            header('Location: ../index.php'); 
        } else {
            echo "<script>alert('Failed to add booking. Please try again later.');</script>";
        }
    } else {
        // If the email does not exist in the customer_acct table
        echo "<script>alert('Email not found. Please register first.');</script>";
        header('Location: ../services.php'); 

    }
}
?>