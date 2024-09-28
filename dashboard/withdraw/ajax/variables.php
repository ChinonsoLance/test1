<?php
session_start();
require "../../../config.php";
//require "coingecko-api.php";

//$_SESSION['user_id']=93;
if(!isset(($_SESSION['user_id']))){
  header("location:auth.php");
}
else{
  $id=$_SESSION['user_id'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `id`='$id'");
  if(mysqli_num_rows($query)>0){
    $row=mysqli_fetch_assoc($query);
    $username=$row['username'];
    $name=$row['name'];
    $email=$row['email'];
    $phone=$row['phone'];
    $address=$row['address'];
    $image=$row['image_src'];
    $ref=$row['refer'];
    $ref_bonus=$row['ref_bonus'];
    $last_login = $row['last_login'];
    $organisation = $row['organisation'];
    $city=$row['city'];
    $zip=$row['zip_code'];
  }
  $total_deposited_query=mysqli_query($conn,"SELECT SUM(amount) FROM `transactions` WHERE `user_id`='$id' AND `type`='deposit'");
  if(mysqli_num_rows($total_deposited_query)>0){
      $total_row=mysqli_fetch_assoc($total_deposited_query);
      $total_deposited=$total_row['SUM(amount)'];
      
  }
  else{
    $total_deposited=0;
  }
  
  $total_withdraw_query=mysqli_query($conn,"SELECT SUM(amount) FROM `transactions` WHERE `user_id`='$id' AND `type`='withdraw'");
  if(mysqli_num_rows($total_withdraw_query)>0){
      $total_row=mysqli_fetch_assoc($total_withdraw_query);
      $total_withdraw=$total_row['SUM(amount)'];
      
  }
  if($total_withdraw==""){
    $total_withdraw=0;
  }
  
   
 $accounts=mysqli_query($conn,"SELECT * FROM `accounts` WHERE `user_id`='$id'");
    if(mysqli_num_rows($accounts)>0){
      
      $row2=mysqli_fetch_assoc($accounts);
      
      
      $amount=$row2['amount'];
      $plan=$row2['plan'];
      $firstday=$row2['duration'];
      $today= time();
      $isactive=$row2['active'];
      $days=round(($today-intval($firstday))/86400,2) ;
      $profit=$row2['profit'];
       
      
      
      
      //$profit=round(($roi/100)*$days*$amount,3);
       
      
    }

    $get_total_portifolio_balance = mysqli_query($conn,"SELECT SUM(balance) FROM portifolios WHERE `user_id` = '$id'");
    if(mysqli_num_rows($get_total_portifolio_balance)>0){
      $total_portifolio_balance=mysqli_fetch_assoc($get_total_portifolio_balance);
      $btc_balance=round($total_portifolio_balance['SUM(balance)'],6);
      $balance = round($btc_balance,2);
  }
      
    $refquery=mysqli_query($conn,"SELECT * FROM `users` WHERE `refer`='$id'");
    if(mysqli_num_rows($refquery)>0){
      $refacc=mysqli_query($conn,"SELECT * FROM `accounts` WHERE `user_id`='$id'");
      $acc_active=mysqli_fetch_assoc($refacc);
      $active_stat=$acc_active['active'];
      $amount_dep=$acc_active['amount'];
      $balance_gained=$acc_active['balance'];
      if($amount_dep>0 || $balance_gained>0){
        $num_ref=mysqli_num_rows($refquery);
      $ref_bonus=intval(50*$num_ref);
      mysqli_query($conn,"UPDATE users SET ref_bonus='$ref_bonus' WHERE id='$id'");
      }
      else{
        $num_ref=0;
        
      }
    }
    else{
      $num_ref=0;
      
    }
       
  
    }

    $overall_portifolio = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `user_id` = '$id'");
    $num_portifolio = mysqli_num_rows($overall_portifolio);

    $active_portifolio = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `user_id` = '$id' AND `status` = 'active'");
    $num_active_portifolio = mysqli_num_rows($active_portifolio);

    $settled_portifolio = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `user_id` = '$id' AND `status` = 'settled'");
    $num_settled_portifolio = mysqli_num_rows($settled_portifolio);

      ?>