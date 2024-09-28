<?php
require "../../config.php";
$user_id = $_REQUEST['id'];





$delete=mysqli_query($conn, "DELETE FROM `users` WHERE `id`=$user_id");
$delete2=mysqli_query($conn, "DELETE FROM `accounts` WHERE `user_id`=$user_id");
echo "Client removed";

?>