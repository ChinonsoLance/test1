<?php
require "../../config.php";

require "../../mail.php";


$unix_time=time();

$active=mysqli_real_escape_string($conn,$_POST['active']);
$portifolioName2=mysqli_real_escape_string($conn,$_POST['portifolioName2']);
$portifolioBalance=mysqli_real_escape_string($conn,$_POST['portifolioBalance']);
$portifolioProfit=mysqli_real_escape_string($conn,$_POST['portifolioProfit']);
$portifolioId=mysqli_real_escape_string($conn,$_POST['portifolioName']);
$botId = mysqli_real_escape_string($conn,$_POST['botId']);
$id=$_POST['user_id'];
$getuser= mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '$id'");
$user = mysqli_fetch_assoc($getuser);
$email = $user['email'];



$date=Date("jS-F-Y");


$query=mysqli_query($conn,"SELECT * FROM `portifolios` WHERE `id`='$portifolioId'");
$account=mysqli_fetch_assoc($query);
$prev_amount=$account['balance'];
$investment = $portifolioBalance;
$portifolioName = $account['name'];

$updatefolio=mysqli_query($conn,"UPDATE portifolios SET name='$portifolioName2', balance = '$portifolioBalance', status = '$active',`profit`='$portifolioProfit', `bot`='$botId' WHERE id = '$portifolioId'");
if
($prev_amount!=$investment){
    $insert_trx=mysqli_query($conn,"INSERT INTO `transactions`(`user_id`,`balance`,`type`,`date`,`unix_time`,`status`) VALUES('$id','$investment','deposit','$date','$unix_time','approved')");
    //////////////////////////////////////////////////////////////////////////////////
    //$description = "$investment deposit placed for $portifolioName on BTC";
    //$trx_id = mysqli_insert_id($conn);
    
    //$add_activity = mysqli_query($conn,"INSERT INTO user_activities(`user_id`,`description`,`portifolio_name`,`amount`,`date`,`currency`,`transaction_id`) VALUES('$id','$description','$portifolioName','$investment','$date','BTC','$trx_id')");
    
    mysqli_query($conn, "UPDATE `portifolios` SET `unix_time` = '$unix_time' WHERE `id`='$portifolioId'");
    sendmail("$email","Transaction Approved","Your transaction at Betastockfx has been approved. ");
   
   //////////////////////////////////////////////////////////////////////////////////// 
}
if($updatefolio){
    echo"
     Client portfolio updated
            ";
}
else{
    echo"
An error occurred
    ".mysqli_error($conn);
}

    
$updated=Date("Y-F-jS");
$id=$_POST['user_id'];

//$update_users=mysqli_query($conn,"UPDATE users SET `name`='$lname',`username`='$uname',`email`='$email',`phone`='$phone' WHERE id='$id'");
//$update_accounts=mysqli_query($conn,"UPDATE accounts SET `wallet`='$wallet',`amount`='$investment',`balance`='$balance',`plan`='$plan',`updated_at`='$updated',`active`='$active_status',`duration`='$duration',`profit`='$profit',`status`='' WHERE `user_id`='$id'");



?>