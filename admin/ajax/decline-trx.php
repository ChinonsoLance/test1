<?php

require "../../config.php";
require "../../mail.php";
$id=$_REQUEST['id'];

//echo "trx id is ".$id;


$get_trx = mysqli_query($conn,"SELECT * FROM `transactions` WHERE id='$id'");
$trx=mysqli_fetch_assoc($get_trx);
$user_id=$trx['user_id'];
echo  mysqli_num_rows($get_trx);

$decline=mysqli_query($conn, "DELETE FROM `user_activities` WHERE `transaction_id`='$id'");
mysqli_query($conn, "DELETE FROM `transactions` WHERE `id`='$id'");
if($decline){
    $select= mysqli_query($conn, "SELECT * FROM `users` WHERE id='$user_id'");
    //echo "user id is: ".$user_id;
    $user=mysqli_fetch_assoc($select);
    $username=$user['username'];
    $email=$user['email'];
    
    
    echo "You just declined a transaction";
    $subject="Your Transaction was declined";
    $message="Your Transaction on your Betastockfx wallet was declined. Please contact our support for more information about your account";
    //sendmail($email,$subject,$message,null,$username);
    
}
else{
    echo "an error occured ". mysqli_error($conn);
}




?>