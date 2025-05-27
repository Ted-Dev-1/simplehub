<!--UPDATE PROFILE.PHP-->

<?php
session_start();
//../facultyadmin/dbconfig1.php
include("dbconfig1.php");

if (isset($_POST['update_profile'])) {

    // Check if the file was uploaded without errors
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {

        $uploadDir = "../uploads/profilesimg/"; // folder where profile images will be stored
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Get details of the uploaded file
        $fileTmpPath = $_FILES['profile_image']['tmp_name'];
        $fileName = basename($_FILES['profile_image']['name']);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

        // Validate file extension
        if (in_array($fileType, $allowedExtensions)) {
            // Generate a new unique filename to avoid collisions
            $newFileName = uniqid('profile_', true) . '.' . $fileType;
            $destPath = $uploadDir . $newFileName;

            // Move the file to the destination directory
            if (move_uploaded_file($fileTmpPath, $destPath)) {

                // This path is relative to your site's root.
                $dbDestPath = "uploads/profilesimg/" . $newFileName;
                $userId = $_SESSION['user']['id'];

                // Update the profile column in the customer_acct table
                $updateQuery = "UPDATE customer_acct SET profile='$dbDestPath' WHERE id='$userId'";
                $queryRun = mysqli_query($conn, $updateQuery);

                if ($queryRun) {
                    // Update session variable so the new profile image is used immediately
                    $_SESSION['profile_updated'] = true;
                    $_SESSION['success'] = "Profile image updated successfully.";
                    header("Location: ../index.php");
                    exit;
                } else {
                    $_SESSION['error'] = "Database update failed.";
                }
            } else {
                $_SESSION['error'] = "Failed to move the uploaded file.";
            }
        } else {
            $_SESSION['error'] = "Invalid file type. Allowed types: jpg, jpeg, png, gif.";
        }
    } else {
        $_SESSION['error'] = "No file uploaded or file error.";
    }
}

// Redirect back to homepage/profile page if errors occurred
header("Location: index.php");
exit;
?>