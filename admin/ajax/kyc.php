
<?php
require "../../config.php";
require "../../mail.php";

$id=$_POST['id'];
$val=$_POST['val'];
$getuser=mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
$row=mysqli_fetch_assoc($getuser);
$email=$row['email'];

$qry=mysqli_query($conn,"UPDATE users SET activated='$val' WHERE id='$id'");
if($qry){
    if($val=="true"){
        sendmail($email, "Account verified", "Your account on Betastockfx has been verified" );
        echo "Account approved";
    }
    else{
        echo "Account declined";
    }
    
}



?>