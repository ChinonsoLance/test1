<?php require "header.php"; ?>
<?php
if(isset($_REQUEST['portifolio'])){
    $portifolioId=$_REQUEST['portifolio'];
    $_SESSION['portifolio']=$portifolioId;
    $get_portifolios = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `user_id` = '$id' AND id=$portifolioId");
    $portifolio = mysqli_fetch_assoc($get_portifolios);
    $portifolioName = $portifolio['name'];
    echo "<h4 class='text-center'>Withdraw from $portifolioName </h4>";
}
else{
    echo "<h4 class='text-center'>Withdraw</h4>";
}

?>

<div  class="row">
    <div class="col col-lg-6 mx-auto">
        <div class="card">
            <div class="card-body">
            <form method="post">
                        <?php if(!isset($_REQUEST['portifolio'])){
                            echo "
                            <div class='mb-3'>
                            <label class='form-label' for='basic-icon-default-fullname'>Portfolio Name</label>
                            <div class='input-group input-group-merge'>
                              <span id='basic-icon-default-fullname2' class='input-group-text'
                                ><i class='bx bx-buildings'></i
                              ></span>
                              <select name='portifolio' class='form-control' required>";
                              $get_portifolios=mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `status`='settled' AND `user_id`=$id");
                              if(mysqli_num_rows($get_portifolios)>0){
                                while($portifolio=mysqli_fetch_assoc($get_portifolios)){
                                    $portifolioId=$portifolio['id'];
                                    $portifolioName = $portifolio['name'];
                                    echo "
                                        <option value='$portifolioId'>$portifolioName</option>
                                    ";
                                }
                              }
                              else{
                                echo "<option value='null' hidden selected>you have no settled portfolios to withdraw from</option>";
                              }

                            echo "
                              </select>
                            </div>
                          </div>
                            ";
                        }
                        ?>
                       
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Where are you withdrawing to?</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class='bx bx-timer'></i>
                            </span>
                            <select class="form-control" name="type" id="type">
                                <?php
                                $get_payment=mysqli_query($conn, "SELECT * FROM payment_methods WHERE active='yes'");
                                if(mysqli_num_rows($get_payment)>0){
                                    while($payments=mysqli_fetch_assoc($get_payment)){
                                        $paymentName=$payments['name'];

                                        $id=$payments['id'];

                                        echo "
                                        <option value='$id'>$paymentName</option>
                                        ";
                                    }
                                }
                               
                                
                                ?>
                            </select>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-email">Amount to withdraw</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class='bx bx-dollar-circle'></i></span>
                            <input
                              type="number"
                              name="amount"
                              id="basic-icon-default-email"
                              class="form-control"
                              placeholder="20,000"
                              aria-label="20,000"
                              aria-describedby="basic-icon-default-email2"
                              required
                            />
                            <span id="basic-icon-default-email2" class="input-group-text">USD</span>
                          </div>
                          <div class="form-text">You can use letters, numbers & periods</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-email">Email</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class=''></i></span>
                            <input
                              type="email"
                              name="email"
                              id="basic-icon-default-email"
                              class="form-control"
                              placeholder="johndoe@example.com"
                              aria-label="johndoe@example.com"
                              aria-describedby="basic-icon-default-email2"
                              required
                            />
                            <span id="basic-icon-default-email2" class="input-group-text">@</span>
                          </div>
                          <div class="form-text"></div>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-email">Wallet address</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class=''></i></span>
                            <input
                              type="text"
                              name="address"
                              id="basic-icon-default-email"
                              class="form-control"
                              placeholder="0xsgdjfovjffvjvuf34505j4em"
                              aria-label=""
                              aria-describedby="basic-icon-default-email2"
                              
                            />
                            <span id="basic-icon-default-email2" class="input-group-text"></span>
                          </div>
                          <div class="form-text"></div>
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary">Withdraw</button>
                      </form>
            </div>
        </div>
    </div>
</div>
<div class='row m-2'>
    <style>
                .card-img{
                    height: 60px;
                }
            </style>
            </center>
            <h3 class="">Other withdrawal methods</h3>
            <section class="row row-eq-height">
                
                <section class=" col-md-6 col-lg-3 col-sm-6 h-25 mb-2">
                <a href="withdraw/paypal.php">
  <section class="card">
      
      <section class="card-body">
            <img src="images/paypal.png" alt="" class="card-img">
      </section>
  </section></a>
                </section>
                
                
                <section class=" col-md-6 col-lg-3 col-sm-6 h-25 mb-2">
                <a href="withdraw/coinbase1.php">
  <section class="card">
      
      <section class="card-body">
            <img src="images/coinbase.png" alt="" class="card-img">
      </section>
  </section>
  </a>
  </section>
            
            
  <section class=" col-md-6 col-lg-3 col-sm-6 h-25 mb-2">
  <a href="withdraw/debitcard.php">
  <section class="card">
      
      <section class="card-body">
            <img src="images/master-card.png" alt="" class="card-img ">
      </section>
  </section>
  </a>
  </section>
            
  </section>
    
</div>

<?php
require "scripts/create-activity.php";
if($_POST){
$user_id = $_SESSION['user_id'];
$amount = mysqli_real_escape_string($conn,$_POST['amount']);
$folioId = mysqli_real_escape_string($conn,$_POST['portifolioId']) || $_SESSION['portifolio'];
$currency = mysqli_real_escape_string($conn,$_POST['type']);
$type="withdrawal";
$date = date("l jS \of F Y");
$unix_time = time();
$status = "pending";
$wallet = mysqli_real_escape_string($conn,$_POST['address']);
$rand = rand();
$get_email = mysqli_query($conn,"SELECT * FROM `users` WHERE id = '$user_id'");
$user = mysqli_fetch_assoc($get_email);
$email = $user['email'];
$subject = "Withdrawal request for $username #$rand";
$message = "Withdrawal request has been placed, you will be contacted by our team soon";

$get_portifolio = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `id` = '$folioId'");
if(mysqli_num_rows($get_portifolio)>0){
    $portifolio = mysqli_fetch_assoc($get_portifolio);
    $portifolioBalance=$portifolio['balance'];
    $portifolioName = $portifolio['name'];
    $portifolioAmount = $portifolio['amount'];

}
$description = "$amount $currency withdrawal placed for $portifolioName";

//$amount > $portifolioAmount
if($amount > $portifolioAmount){
if($amount <= $portifolioBalance){
    $sql = "INSERT INTO transactions(`user_id`,`folio_id`,`amount`,`type`,`status`,`currency`,`date`,`unix_time`)VALUES('$user_id','$folioId','$amount','$type','$status','$currency','$date','$unix_time')";
    $insert_trx = mysqli_query($conn, $sql);
    
    $trxID = mysqli_insert_id($conn);
    
    $newAmount = $portifolioBalance - $amount;
    $update_balance = mysqli_query($conn, "UPDATE `portifolios` SET `balance` = '$newAmount' WHERE `id` = '$folioId'");
    $update_address = mysqli_query($conn, "UPDATE `accounts` SET `wallet` = '$wallet' WHERE `user_id`='$user_id'");
    createActivity($user_id,$description,$portifolioName,$amount,$date,'',$trxID);
    if($update_balance && $insert_trx){
        
        echo "
        <script>
            swal('Great','We have received your request. you'll be contacted soon','success');
            </script>
        ";
        
        $adminMessage = "
           <p> New Withrawal request for $email.<p>
           <p>Amount: $amount $currency</p>
           <p>BTC Address : $wallet</p>
           <p>Email: $email</p>
        ";
        sendmail("$admin_email","$subject","$adminMessage");
        sendmail("$email","$subject", "$message");
        
    }
    else{
        
        echo "
        <script>
            swal('Oops','An error occurred','error');
            </script>
        ";
       
    }
}
else{
    
    echo "
        <script>
            swal('Oops','Not enough funds in this portfolio','warning');
            </script>
        ";
       
}
}
else{
    
    echo "
        <script>
            swal('Oops','Minimum withdrawal set for this portfolio is $portifolioAmount','warning');
            </script>
        ";
}



}
?>


<?php require "footer.php"; ?>