<?php

require "../../config.php";
$id=$_REQUEST['id'];
$query_payments=mysqli_query($conn,"SELECT * FROM payment_methods WHERE id='$id'");
if(mysqli_num_rows($query_payments)>0){
    $payments_arr=mysqli_fetch_assoc($query_payments);
    
}


echo json_encode($payments_arr);

 

                                 
?>