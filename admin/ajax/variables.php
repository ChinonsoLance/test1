<?php
require "../../config.php";
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


$admin=mysqli_query($conn,"SELECT * FROM `users` WHERE `role`='admin'");
$row_admin=mysqli_fetch_assoc($admin);
$admin_email=$row_admin['email'];
?>