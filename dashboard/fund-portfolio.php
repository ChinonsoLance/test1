<?php 
require "header.php";
?>

<div class="row">
<div class="col-lg-6 mx-auto">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Fund Portfolio </h5>
                      <span class="float-end ">
                        Balance: <?php echo $symbol." ".$balance; ?>
                      </span>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                      <form method="post">
                      <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Select portfolio</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-buildings"></i
                            ></span>
                            
                            <select class='form-control' name='portfolio' id='portfolio' required>

                            <?php
                            
                                $get_portifolios=mysqli_query($conn, "SELECT * FROM portifolios WHERE user_id= '$id' AND `type`='portfolio'");
                                if(mysqli_num_rows($get_portifolios)>0){
                                    while($portifolios=mysqli_fetch_assoc($get_portifolios)){
                                        $name=$portifolios['name'];
                                        
                                        $id=$portifolios['id'];
                                        $ticker = $portifolios['ticker'];
                                        $portifolioName=$portifolios['name'];

                                        echo "
                                        <option value='$id'>$name | $ticker</option>
                                        ";
                                    }
                                }
                                
                                ?>
                            </select>
                          </div>
                        </div>
                            
                     
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-email">Amount you want to deposit</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class='bx bx-dollar-circle'></i></span>
                            <input
                              type="number"
                              name="amount"
                              id="basic-icon-default-email"
                              class="form-control"
                              placeholder="Amount"
                              aria-label="Amount"
                              aria-describedby="basic-icon-default-email2"
                              required
                            />
                            <span id="basic-icon-default-email2" class="input-group-text"><?php echo $currency; ?></span>
                          </div>
                          <div class="form-text">You can use  numbers & periods</div>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Fund portfolio</button>
                      </form>
                    </div>
                  </div>
                </div>

</div>
<?php
if($_POST){
require "scripts/create-activity.php";
$user_id = $_SESSION['user_id'];
$amount = mysqli_real_escape_string($conn,$_POST['amount']);
//$amount/=$currency_rate;
$folioId = mysqli_real_escape_string($conn,$_POST['portfolio']);
//$currency = mysqli_real_escape_string($conn, $_POST['currency']);
$description="new deposit of $symbol $amount";


$date = date("l jS \of F Y");
$unix_time = time();
$status = "pending";
$rand = rand();
$get_email = mysqli_query($conn,"SELECT * FROM `users` WHERE id = '$user_id'");
$user = mysqli_fetch_assoc($get_email);
$email = $user['email'];
$subject = "Portfolio Account has been funded successfully";
//$currency="USD";


$get_portifolio = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `id` = '$folioId'");
$portifolio = mysqli_fetch_assoc($get_portifolio);
$portifolioName = $portifolio['name'];
$portfolioBalance=$portifolio['balance']*$currency_rate;
$folioamount=doubleval($portifolio['amount'])*$currency_rate;
$message = "$symbol $amount has been added to the portfolio $portifolioName";
//$min_amount = $portifolio['amount'];

if($amount>=$folioamount){
    if($balance>=$amount){
        $amount/=$currency_rate;
        $balance/=$currency_rate;
    $sql = "INSERT INTO transactions(`user_id`,`folio_id`,`amount`,`type`,`status`,`date`,`unix_time`, `currency`)VALUES('$user_id','$folioId','0','deposit','$status','$date','$unix_time','$symbol')";

$insertTrx = mysqli_query($conn, $sql);
$trxID=mysqli_insert_id($conn);
if($insertTrx){
    createActivity($user_id,$description,$portifolioName,$amount,$date,$currency,$trxID);
    
    $new_wallet=intval($balance)-intval($amount);
    $new_wallet=round($new_wallet,2);
    $update_wallet=mysqli_query($conn,"UPDATE portifolios SET balance='$new_wallet' WHERE id='$wallet_id'");

    $new_port_balance=intval($portfolioBalance)+intval($amount);
    $update_folio=mysqli_query($conn,"UPDATE portifolios SET balance='$new_port_balance',status='active',track='$unix_time' WHERE id='$folioId'");

echo mysqli_error($conn);


     sendmail("$email","$subject","$message");
   
      echo "
      <script>
      swal('Great','Portfolio Funded successfully','success')
      .then(()=>{
        location.replace('portifolios.php')
      })
      ;
      </script>
      "; 


    
}
else{
    echo "
      <script>
      swal('An error occurred', 'Your deposit transaction failed. please contact support for more information', 'error');
      </script>
    ";
}
}
else{
    echo "
      <script>
      swal('Oops',Not enough funds','error')
      
      ;
      </script>
      "; 
}
}

else{
    $folioamount*=$currency_rate;
    echo "
      <script>
      swal('An error occurred', 'Minimum amount for this plan is $symbol $folioamount', 'error');
      </script>
    ";
}



}
?>


<?php
require "footer.php";
?>