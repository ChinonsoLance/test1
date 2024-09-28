<?php
 
require "../../config.php";
$id=$_POST['id'];

$query_users=mysqli_query($conn,"SELECT * FROM `users` WHERE id='$id'");
if($query_users){
    $users_arr=mysqli_fetch_assoc($query_users);
    
}
$query_accounts=mysqli_query($conn,"SELECT * FROM `accounts` WHERE `user_id`='$id'");
if($query_accounts){
    $accounts_arr=mysqli_fetch_assoc($query_accounts);
}
$users_data=array_merge($users_arr,$accounts_arr);
echo json_encode($users_data);

 

                                 
?>