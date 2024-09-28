<?php
session_start();
require "../../config.php";
require "../../mail.php";
$id = $_SESSION['user_id'];

if (isset($_FILES['kyc'])) {
    $image = $_FILES['kyc']['name'];
    $image_tmp = $_FILES['kyc']['tmp_name'];
    $target_dir = "../images/avatar/";
    $target_file = $target_dir . basename($image);

    // Check if the uploaded file is an image
    $check = getimagesize($image_tmp);
    if ($check !== false && in_array($check['mime'], ['image/jpeg', 'image/png', 'image/gif'])) {
        if ($_FILES['kyc']['size'] <= 5000000) { // Example: Limit to 5MB
            $move = move_uploaded_file($image_tmp, $target_file);
            if ($move) {
                $image = "images/avatar/" . $image;

                mysqli_query($conn, "UPDATE `users` SET `kyc`='$image', activated='pending' WHERE `id`='$id'");
                $subject = "New KYC to review";
                $message = "You have a new KYC document to review on theackersfield";
                $to = "support@theackersfield.com";
                sendmail($to, $subject, $message);
                echo "Your account is undergoing review";
            } else {
                echo "Failed to upload the file.";
            }
        } else {
            echo "File size exceeds the limit.";
        }
    } else {
        echo "File is not a valid image.";
    }
}
?>
