<?php
session_start();
if($_REQUEST['logout']=="true"){
    session_destroy();
    header('location:../login');
}

if(!isset(($_SESSION['user_id']))){
    header('location:../login');
}
else{
    //$email=$_SESSION['email'];
    $id=$_SESSION['user_id'];
    require "../config.php";
    $query=mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
    if(mysqli_num_rows($query)>0){
        $row=mysqli_fetch_assoc($query);
        if($row['username']==null){
            header("location: form");
        }
        else{
            header("location: index");
        }
    }
}
?>