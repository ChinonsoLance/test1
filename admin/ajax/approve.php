<?php
require "../../config.php";
require "../../mail.php";

$trx_id=$_POST['trx_id'];
$hash=$_POST['hash'];


$update = mysqli_query($conn, "UPDATE `transactions` SET `status`='approved' WHERE id='$trx_id'");

$select = mysqli_query($conn, "SELECT * FROM `transactions`  WHERE id='$trx_id'");
$fetch = mysqli_fetch_assoc($select);
$user_id = $fetch['user_id'];
$withdraw_amount=$fetch['amount'];


$select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '$user_id'");
$user=mysqli_fetch_assoc($select_user);
$username = $user['username'];
$email = $user['email'];

if($update){
    $client_message="
                <p>You have successfully received a withdrawal of $$withdraw_amount from your Betastockfx wallet to your Private Key wallet. </p>
                <div>
                <h4>Transaction Details</h4>
                <p>Transaction ID: $hash </p>
                <p> Amount: $$withdraw_amount</p>
                <br><br>
                For further enquiries,Kindly contact our customer services
                </div>
                ";

                sendmail("$email","Withdrawal Request Approved","$client_message",null,"$username");
                echo "you approved this withdrawal";
            
}

?>