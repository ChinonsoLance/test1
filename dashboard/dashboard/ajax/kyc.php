<?php
session_start();
require "../../config.php";
require "../../mail.php";
$id=$_SESSION['user_id'];

if(isset($_FILES['kyc'])){
        //echo "<script>alert('file found')</script>";
        $image=$_FILES['kyc']['name'];
        $image_tmp=$_FILES['kyc']['tmp_name'];
        $target_dir = "../images/avatar/";
        $target_file = $target_dir . basename($image);
        $move=move_uploaded_file($image_tmp, $target_file);
        if($move){
            $image="images/avatar/".$image;

            
            mysqli_query($conn,"UPDATE `users` SET `kyc`='$image', activated='pending' WHERE `id`='$id'");
            $subject="New KYC to review";
            $message="you have a new KYC document to review on Betastockfx";
            $to="support@Betastockfx.com";
            sendmail($to, $subject, $message);
            echo "Your account is undergoing review";
        }                     
    }


?>