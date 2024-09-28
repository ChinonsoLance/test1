<?php
require "../../config.php";

$folioId = $_POST['folioId'];

$query = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `id`='$folioId'");
if(mysqli_num_rows($query)>0){
    $portifolio = mysqli_fetch_assoc($query);
$name = $portifolio['name'];
$balance = $portifolio['balance'];
$status = $portifolio['status'];
$profit = $portifolio['profit'];
$botId = $portifolio['bot'];
$get_bot = mysqli_query($conn,"SELECT * FROM bots WHERE id='$botId'");
if(mysqli_num_rows($get_bot)>0){
    $bot_info=mysqli_fetch_assoc($get_bot);
    $bot_name=$bot_info['name'];
}
else{
    $bot_name='no active bot';
}
$response = array(
    'name'=> $name,
    'balance'=> $balance,
    'profit' => $profit,
    'status' => $status,
    'botId'=> $botId,
    'botName'=>$bot_name
);
echo json_encode($response);
}
else{
    $balance = 0;
    $status = "no";

    $response = array(
        'name'=> $name,
        'balance' => $balance,
        'profit' => $profit,
        'status' => $status,
        'botId'=> $botId,
        'botName'=>$bot_name
    );
    echo json_encode($response);
}


?>