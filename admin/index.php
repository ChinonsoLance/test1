<?php
session_start();
if(isset($_REQUEST['logout']) && $_REQUEST['logout']=="true"){
    session_destroy();
}

if(isset($_SESSION['id'])){
    header("location:dashboard.php");

}
else{
    header("location:login.php");
}
    

?>
