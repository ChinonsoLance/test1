<?php
require "../../config.php";
$payment_id=$_POST['payment_id'];
$address=$_POST['address'];
$active=$_POST['active'];


$update = mysqli_query($conn, "UPDATE `payment_methods` SET `wallet_address`='$address', `active`='$active' WHERE id='$payment_id'");

if($update){
    echo "Payment method updated";
}
else {
    echo "An error occured";
}
?>