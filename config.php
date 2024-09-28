<?php
if($_SERVER['SERVER_NAME']=="localhost" || $_SERVER['SERVER_NAME']=="127.0.0.1" || $_SERVER['SERVER_NAME']=="192.168.229.64" ){
    $host="localhost";
    $username="root";
    $password="";
    $dbname="realstock"; 
}
else if($_SERVER['SERVER_NAME']=="0.0.0.0"){
    $host="127.0.0.1";
    $username="root";
    $password="root";
    $dbname="coinmark_investorm";
}
else{
    $host="localhost";
    $username="theacker_acker";
    $password="g!MuYTOPaTNN";
    $dbname="theacker_acker";
}

$sitename="theackersfield";
$admin_email="support@theackersfield.co";

$conn=mysqli_connect($host,$username,$password,$dbname);

if(!$conn){
    $response = array(
        "error" => "yes",
        "errorMsg" => "Invalid db details"
    );

    echo json_encode($response);
}


?>