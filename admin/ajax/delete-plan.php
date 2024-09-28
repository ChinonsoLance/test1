<?php
require "../../config.php";
$plan_id = $_REQUEST['id'];

$select_plan_deleted_users = mysqli_query($conn, "SELECT * FROM `accounts` WHERE `plan`=$plan_id");

$select_safe_plan=mysqli_query($conn,"SELECT * FROM `iv_schemes` WHERE NOT `id`  = $plan_id ");
$safe_plan=mysqli_fetch_assoc($select_safe_plan);
$safe_id=$safe_plan['id'];

if(mysqli_num_rows($select_plan_deleted_users)>0){
  while($users=mysqli_fetch_assoc($select_plan_deleted_users)){
    $user_id=$users['id'];
    $update=
    mysqli_query($conn, "UPDATE accounts SET plan='$safe_id' WHERE `user_id`='$user_id'");
  }
}




$delete=mysqli_query($conn, "DELETE FROM `iv_schemes` WHERE `id`=$plan_id");

?>