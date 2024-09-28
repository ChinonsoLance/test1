<?php




function createActivity($id,$description,$portifolioName, $tenureAmount, $date,$currency='',$trxID=''){
    require "../config.php";
    $sql = "INSERT INTO user_activities(`user_id`,`description`,`portifolio_name`,`amount`,`date`,`transaction_id`) VALUES('$id','$description','$portifolioName','$tenureAmount','$date','$trxID')";
    $addActivity = mysqli_query($conn, $sql);


}

?>