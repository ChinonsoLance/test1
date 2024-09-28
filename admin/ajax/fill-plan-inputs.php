<?php

require "../../config.php";
$id=$_REQUEST['id'];
$query_plans=mysqli_query($conn,"SELECT * FROM iv_schemes WHERE id='$id'");
if(mysqli_num_rows($query_plans)>0){
    $plans_arr=mysqli_fetch_assoc($query_plans);
    
}


echo json_encode($plans_arr);

 

                                 
?>