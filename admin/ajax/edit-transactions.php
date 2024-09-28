<?php 
require "../../config.php";

$trx_id = $_POST['trx-id'];
$description = $_POST['description'];
$date = $_POST['date'];

$update=mysqli_query($conn, "UPDATE `user_activities` SET `description` = '$description', `date`='$date' WHERE `id` = '$trx_id'");
if(update){
    $response = array(
    "success"=> "yes"
    );
}

    
    echo json_encode($response);