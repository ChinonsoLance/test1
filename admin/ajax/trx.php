<?php
 
require "../../config.php";
$id=$_REQUEST['id'];
$query_trx=mysqli_query($conn,"SELECT * FROM transactions WHERE id='$id'");
if(mysqli_num_rows($query_trx)>0){
    $trx_arr=mysqli_fetch_assoc($query_trx);
    $trx_id = $trx_arr['id'];
    echo $trx_id;

}



 

                                 
?>