<?php
// get_voucher.php
include("dbconfig1.php");

if (isset($_POST['subprice'])) {
    // Get the entered price (for any business logic you might need; here it's not used)
    $price = isset($_POST['price']) ? $_POST['price'] : 0;
    
    // Query the voucher table for one unused voucher code
    $query = "SELECT vouchercode FROM voucher WHERE status = 'unused' LIMIT 1";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $voucher_code = $row["vouchercode"];
        
        // Mark the voucher as used
        //$updateQuery = "UPDATE voucher SET status = 'used' WHERE voucher_code = '$voucher_code'";
        //mysqli_query($conn, $updateQuery);
        
        // Output a simple HTML with a JavaScript alert displaying the voucher code,
        // then redirect back to pricing.php.
        echo "<script>
                alert('Your voucher code: " . addslashes($voucher_code) . "');
                window.location.href = 'pricing.php';
              </script>";
    } else {
        echo "<script>
                alert('No available voucher codes.');
                window.location.href = 'pricing.php';
              </script>";
    }
}

mysqli_close($conn);
?>
