<?php
require "../../config.php";

require "../../mail.php";


$unix_time=time();

$uname=mysqli_real_escape_string($conn,$_POST['uname']);

$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$wallet=mysqli_real_escape_string($conn,$_POST['wallet']);
$investment=mysqli_real_escape_string($conn,$_POST['investment']);
$balance=mysqli_real_escape_string($conn,$_POST['balance']);
$plan=mysqli_real_escape_string($conn,$_POST['plan']);
$profit=mysqli_real_escape_string($conn,$_POST['profit']);

$get_plan=mysqli_query($conn, "SELECT * FROM `iv_schemes` WHERE id = '$plan'");
if(mysqli_num_rows($get_plan)>0){
    $row_plan=mysqli_fetch_assoc($get_plan);
    $days_left=$row_plan['days'];
}


$active=$_POST['active'];
if($active=="yes")
{
    $active_status="yes";
    $duration=time();
    
}
else{
    $active_status="no"; 
    $duration=0;
}

$date=Date("jS-F-Y");
$id=$_POST['user_id'];

$query=mysqli_query($conn,"SELECT * FROM `accounts` WHERE `user_id`='$id'");
$account=mysqli_fetch_assoc($query);
$prev_amount=$account['amount'];
if
($prev_amount!=$investment){
    $insert_trx=mysqli_query($conn,"INSERT INTO `transactions`(`user_id`,`amount`,`type`,`date`,`unix_time`,`days_left`) VALUES('$id','$investment','deposit','$date','$unix_time','$days_left')");
    
  
    
}

    
$updated=Date("Y-F-jS");
$id=$_POST['user_id'];

$update_users=mysqli_query($conn,"UPDATE users SET `name`='$lname',`username`='$uname',`email`='$email',`phone`='$phone' WHERE id='$id'");
$update_accounts=mysqli_query($conn,"UPDATE accounts SET `wallet`='$wallet',`amount`='$investment',`balance`='$balance',`plan`='$plan',`updated_at`='$updated',`active`='$active_status',`duration`='$duration',`profit`='$profit',`status`='' WHERE `user_id`='$id'");
if($update_users && $update_accounts){
    echo"
     Client account updated
            ";
}
else{
    echo"
An error occurred
    ".mysqli_error($conn);
}


?>