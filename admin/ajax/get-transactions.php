<?php
require "../../config.php";
$trx_id = $_POST['id'];

$query=mysqli_query($conn, "SELECT * FROM `user_activities` WHERE id = '$trx_id'");
if(mysqli_num_rows($query)>0){
    $trx = mysqli_fetch_assoc($query);
    $description = $trx['description'];
    $date = $trx['date'];
    
    $response = array(
        "id"  => "$trx_id",
        "description" => "$description",
        "date" => "$date"
        );
        
        echo json_encode($response);
}