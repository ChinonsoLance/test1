<?php
session_start();
require "../config.php";
//require "coingecko-api.php";
$eur=0.93;
$gbp=0.83;
$usd=1;
//$_SESSION['user_id']=160;
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
    $currency=$row['currency'];
    if($currency=="GBP"){
        $currency_rate=$gbp;
        $symbol= "£";
    }
    elseif($currency=="EUR"){
        $currency_rate=$eur;
        $symbol= "€";
    }
    else{
        $currency_rate=$usd;
        $symbol= "$";
    }
    $organisation = $row['organisation'];
    $city=$row['city'];
    $zip=$row['zip_code'];
    $activated=$row['activated'];
    if($activated=="true"){
    $ver_status="verified account";
    }
    elseif($activated=="pending"){
     $ver_status="pending verification";
    }
    else{
    $ver_status="not verified";
    }
  }
  $total_deposited_query=mysqli_query($conn,"SELECT SUM(amount) FROM `transactions` WHERE `user_id`='$id' AND `type`='deposit' AND status='approved'");
  if(mysqli_num_rows($total_deposited_query)>0){
      $total_row=mysqli_fetch_assoc($total_deposited_query);
      $total_deposited=$total_row['SUM(amount)']*$currency_rate;
      
  }
  else{
    $total_deposited=0;
  }
  if($total_deposited==""){
  $total_deposited=0;
  }
  $total_withdraw_query=mysqli_query($conn,"SELECT SUM(amount) FROM `transactions` WHERE `user_id`='$id' AND `type`='withdraw'");
  if(mysqli_num_rows($total_withdraw_query)>0){
      $total_row=mysqli_fetch_assoc($total_withdraw_query);
      $total_withdraw=$total_row['SUM(amount)']*$currency_rate;
      
  }
  if($total_withdraw==""){
    $total_withdraw=0;
  }
  
   
 $accounts=mysqli_query($conn,"SELECT * FROM `accounts` WHERE `user_id`='$id'");
    if(mysqli_num_rows($accounts)>0){
      
      $row2=mysqli_fetch_assoc($accounts);
      
      
      $amount=$row2['amount']*$currency_rate;
      $plan=$row2['plan'];
      $firstday=$row2['duration'];
      $today= time();
      $isactive=$row2['active'];
      $days=round(($today-intval($firstday))/86400,2) ;
      $profit=$row2['profit']*$currency_rate;
      $ref_bonus=$row2['balance']*$currency_rate;
       
      
      
      
      //$profit=round(($roi/100)*$days*$amount,3);
       
      
    }

    $get_total_portifolio_balance = mysqli_query($conn,"SELECT SUM(balance) FROM portifolios WHERE `user_id` = '$id' AND type='portfolio'");
    if(mysqli_num_rows($get_total_portifolio_balance)>0){
      $total_portifolio_balance=mysqli_fetch_assoc($get_total_portifolio_balance);
      $btc_balance=round($total_portifolio_balance['SUM(balance)'],6);
      $total_portfolio_balance = round($btc_balance,2)*$currency_rate;
  }
      
   
       
  
    }

    $get_general_balance=mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `user_id` = '$id' AND type='wallet'");
    $general=mysqli_fetch_assoc($get_general_balance);
    $balance=$general['balance']*$currency_rate;
    $wallet_id=$general['id'];

    $overall_portifolio = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `user_id` = '$id' AND type='portfolio'");
    $num_portifolio = mysqli_num_rows($overall_portifolio);

    $active_portifolio = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `user_id` = '$id' AND `status` = 'active'  AND type='portfolio'");
    $num_active_portifolio = mysqli_num_rows($active_portifolio);

    $settled_portifolio = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `user_id` = '$id' AND `status` = 'settled'  AND type='portfolio'");
    $num_settled_portifolio = mysqli_num_rows($settled_portifolio);
    
    $total_profit_query=mysqli_query($conn,"SELECT SUM(profit) FROM `portifolios` WHERE `user_id`='$id'");
  if(mysqli_num_rows($total_profit_query)>0){
      $total_prow=mysqli_fetch_assoc($total_profit_query);
      $total_profit=$total_prow['SUM(profit)']*$currency_rate;
      
  }
  if($total_profit==""){
    $total_profit=0;
  }

      ?>