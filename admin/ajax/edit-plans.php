<?php
require "../../config.php";
$plan_id=$_POST['plan_id'];
$planname=$_POST['pname'];
$slug= $_POST['slug'];
$ROI=$_POST['roi'];
$returns = 0;
$max_amount=$_POST['maxamount'];
$amount=$_POST['amount'];
$active=$_POST['active'];
$term=intval($_POST['term']);
$duration=intval($_POST['duration']);

$days=$term*$duration;
$period="default";
if($duration==1){
        $period="days";
    }
    else if($duration==7){
        $period="weeks";
    }
    else{
        $period="months";
    }



$update = mysqli_query($conn, "UPDATE `iv_schemes` SET `name`='$planname', `slug`='$slug', `ROI`='$ROI', `amount`='$amount', `term`='$term',`days`='$days', `active`='$active',`returns`='$returns',`max_amount`='$max_amount',`duration`='$period' WHERE id='$plan_id'");

if($update){
    echo "plan updated";
}
else {
    echo "An error occured ".mysqli_error($conn);
}
?>