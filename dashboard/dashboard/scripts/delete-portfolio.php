<?php
require "../../config.php";
$id=$_POST['id'];
$delete_portfolio=mysqli_query($conn, "DELETE FROM portifolios WHERE id='$id'");
$delete_transactions=mysqli_query($conn, "DELETE FROM transactions WHERE folio_id='$id'");
if($delete_portfolio && $delete_transactions){
    echo "portfolio deleted";
}