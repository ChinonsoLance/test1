<?php
require "../../config.php";
$id = $_POST['id'];
$newName=mysqli_real_escape_string($conn, $_POST['newname']);

$update=mysqli_query($conn, "UPDATE portifolios SET name = '$newName' WHERE id='$id'");
if($update){
    echo "Portfolio name updated";
}
?>