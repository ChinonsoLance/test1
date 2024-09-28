<?php 
require "../../config.php";
//$_POST['user_id']=93;
$user_id = $_POST['user_id'];

$sql = "SELECT * FROM `portifolios` WHERE `user_id` = '$user_id' AND status != 'settled'";

$getPortifolios = mysqli_query($conn, $sql);
$result = array();
if(mysqli_num_rows($getPortifolios)>0){
    while($portifolio = mysqli_fetch_assoc($getPortifolios)){
        $portifolioId = $portifolio['id'];
        $portifolioName = $portifolio['name'];
        $portifolioBalance = round($portifolio['balance'],6);
        $options = "
        <option value='$portifolioId' > $portifolioName </option>
        ";

        $response = array(
            "portifolioName" => $portifolioName,
            "portifolioId" => $portifolioId,
            "options" => $options
        );
        array_push($result,$response);

        
    }
    
}
echo json_encode($result);

?>