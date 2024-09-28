<?php
if($_SERVER['SERVER_NAME']=="localhost" || $_SERVER['SERVER_NAME']=="127.0.0.1" || $_SERVER['SERVER_NAME']=="192.168.228.103" ){
    $host="localhost";
    $username="root";
    $password="";
    $dbname="investorm"; 
}
else if($_SERVER['SERVER_NAME']=="0.0.0.0"){
    $host="127.0.0.1";
    $username="root";
    $password="root";
    $dbname="coinmark_investorm";
}
else{
    $host="localhost";
    $username="coinkriw_admin";
    $password="Jesusloves4real$";
    $dbname="coinkriw_investorm";
}


$conn=mysqli_connect($host,$username,$password,$dbname);
if(!$conn){
    echo"
        <div class='alert alert-danger fixed-top'>Could not secure a database connection</div>
    ";
}


?>