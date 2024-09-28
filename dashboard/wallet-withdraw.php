<?php
require "header.php";
?>


<div class="row mt-3 mx-auto">
    <h3 class="text-center text-primary">Place withdrawal</h3>
<?php
$get_portifolios = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `user_id` = '$id' AND `type`='wallet' ORDER BY id DESC");
if(mysqli_num_rows($get_portifolios)>0){
    while($portifolio = mysqli_fetch_assoc($get_portifolios)){
        $portifolioId = $portifolio['id'];
        $portifolioName = $portifolio['name'];
        $portifolioBalance = $portifolio['balance'];
        $setupDate = $portifolio['date'];
        $tenure=null;
        $rate=null;
        $portifolioType = $portifolio['rate'];
        $get_plan=mysqli_query($conn,"SELECT * FROM iv_schemes WHERE id='$portifolioType'");
        $plan=mysqli_fetch_assoc($get_plan);
        $term=$plan['term'];
        $duration=$plan['duration'];
        $tenure=$term." ".$duration;
        $rate=$plan['ROI'];
       
        $amount = $portifolio['amount'];
        $savePro = $portifolio['save_pro'];
        $status = $portifolio['status'];
        $asset = $portifolio['ticker'];
        $bot = $portifolio['bot'];
        $profit=$portifolio['profit'];

        $curr_portifolioBalance=$portifolioBalance*$currency_rate;
        echo "
        <div class ='col col-lg-6 p-2 mx-auto'>
        <div class='card container'>

        <div class='card-header h3 text-center text-primary'>
        
        
        <div class='card-title'> <span class='text-end text-secondary small-txt'></span></div>
        
        
        </div>

        <div class='card-body row'>
        
        <div class='my-3 text-center'>
        <span>Available </span>
        <h3>$symbol $curr_portifolioBalance</h3>
        </div>";
        
       
       
        
       
        echo"
        <div class='mx-auto' align='center'>
        ";
        


       
        echo "
        <a href='withdraw.php?portifolio=$portifolioId'  class='btn btn-primary waves-effect'><i class='fa fa-arrow-up'>&nbsp;</i>Withdraw</a>
        
        ";
        


echo"   </div>
        </div>
        </div>
        
        </div>
        ";
    }


}
else{
    echo"
    <div class='alert alert-info mx-auto'>
    You have no portfolios set up.
    </div>
    ";
}
?>
</div>


<?php
require "footer.php";
?>