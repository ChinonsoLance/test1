<?php
require "../config.php";
$btc_price=1;
$query=mysqli_query($conn,"SELECT * FROM `users` WHERE `role`='subscriber'");
$num=mysqli_num_rows($query);
$total_users=$num;

$suspended_users=array();
$unverified_users=array();
$suspended_num = 0;
$unverified_num = 0;
while($row=mysqli_fetch_assoc($query)){
    if($row['status']=='suspended'){
        $suspended_num+=1;
    }
    if($row['status']=='unverified'){
        $unverified_num+=1;
    }

}

$accounts_query=mysqli_query($conn,"SELECT * FROM `accounts`");
$active_clients_num=0;
$active_clients=array();
$deposits=0;
if(mysqli_num_rows($accounts_query)>0){
    while($row=mysqli_fetch_assoc($accounts_query)){
        if($row['active']=="yes"){
            $active_clients_num+=1;
            
        }
        $deposits+=$row['amount'];
    }
}


$admin=mysqli_query($conn,"SELECT * FROM `users` WHERE `role`='admin'");
$row_admin=mysqli_fetch_assoc($admin);
$admin_email=$row_admin['email'];

$sitename_settings=mysqli_query($conn, "SELECT id,`key`,`value` FROM `settings` WHERE id=1");
$row_sitename=mysqli_fetch_assoc($sitename_settings);
$sitename=$row_sitename['value'];

$sitemail_settings=mysqli_query($conn, "SELECT id,`key`,`value` FROM `settings` WHERE id=2");
$row_sitemail=mysqli_fetch_assoc($sitemail_settings);
$sitemail=$row_sitemail['value'];


$sitephone_settings=mysqli_query($conn, "SELECT id,`key`,`value` FROM `settings` WHERE id=3");
$row_sitephone=mysqli_fetch_assoc($sitephone_settings);
$sitephone=$row_sitephone['value'];


$total_deposited_query=mysqli_query($conn,"SELECT SUM(amount) FROM `transactions` WHERE  `type`='deposit'");
  if(mysqli_num_rows($total_deposited_query)>0){
      $total_row=mysqli_fetch_assoc($total_deposited_query);
      $total_deposited=$total_row['SUM(amount)'];
      
  }
  else{
    $total_deposited=0;
  }


?>