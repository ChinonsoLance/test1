<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "header.php";
$user_id=$_SESSION['user_id'];
?>


<div class="row">
<div class="col-lg-6 mx-auto">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Fund your portfolio </h5>
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
                            
                            <select class='form-control' name='portifolio' id='portifolio' required>

                            <?php
                            
                                $get_portifolios=mysqli_query($conn, "SELECT * FROM portifolios WHERE user_id= '$user_id'");
                                if(mysqli_num_rows($get_portifolios)>0){
                                    while($portifolios=mysqli_fetch_assoc($get_portifolios)){
                                        $name=$portifolios['name'];
                                        
                                        $id=$portifolios['id'];
                                        $ticker = $portifolios['ticker'];

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
                          <label class="form-label" for="basic-icon-default-company">Which currency do you prefer to pay with</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class='bx bx-timer'></i>
                            </span>
                            <select class="form-control" name="currency" id="currency" required>
                                <?php
                                $get_payment=mysqli_query($conn, "SELECT * FROM payment_methods WHERE active='yes'");
                                if(mysqli_num_rows($get_payment)>0){
                                    while($payment=mysqli_fetch_assoc($get_payment)){
                                        $name=$payment['name'];
                                        
                                        $id=$payment['id'];

                                        echo "
                                        <option value='$id'>$name</option>
                                        ";
                                    }
                                }
                                $get_bank=mysqli_query($conn,"SELECT * FROM bank_transfer");
                                $bank=mysqli_fetch_assoc($get_bank);
                                $bank_active=$bank['active'];
                                $bank_name=$bank['bank_name'];
                                $bank_details=$bank['bank_details'];
                                $account_number=$bank['account_details'];
                                
                                if($bank_active=='yes'){
                                    echo "
                                        <option value='bank'>Bank transfer</option>
                                        ";
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
                            <span id="basic-icon-default-email2" class="input-group-text">USD</span>
                          </div>
                          <div class="form-text">You can use  numbers & periods</div>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Deposit</button>
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
$folioId = mysqli_real_escape_string($conn,$_POST['portifolio']);
$currency = mysqli_real_escape_string($conn, $_POST['currency']);
$description="new deposit of $$amount";


$date = date("l jS \of F Y");
$unix_time = time();
$status = "pending";
$rand = rand();
$get_email = mysqli_query($conn,"SELECT * FROM `users` WHERE id = '$user_id'");
$user = mysqli_fetch_assoc($get_email);
$email = $user['email'];
$subject = "New deposit awaiting confirmation ";
$message = "Your deposit request has been received and is awaiting confirmation, you would be contacted once our team has reviewed your account";
$adminMessage = "<p>New deposit</p>
                <p>Amount: $amount $currency</p>
                <p>from: $email</p>
";

$get_portifolio = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `id` = '$folioId'");
$portifolio = mysqli_fetch_assoc($get_portifolio);
$portifolioName = $portifolio['name'];
$min_amount = $portifolio['amount'];
if($amount>=$min_amount){
    
    $sql = "INSERT INTO transactions(`user_id`,`folio_id`,`amount`,`type`,`status`,`date`,`unix_time`, `currency`)VALUES('$user_id','$folioId','$amount','deposit','$status','$date','$unix_time','$currency')";

$insertTrx = mysqli_query($conn, $sql);
$trxID=mysqli_insert_id($conn);
if($insertTrx){
    createActivity($user_id,$description,$portifolioName,$amount,$date,$currency,$trxID);
    if($currency!=="bank"){
     sendmail("$email","$subject","$message");
    sendmail("$admin_email","$subject","$adminMessage");
      echo "
      <script>
      window.location.replace('invoice.php?slug=$currency&amount=$amount');
      </script>
      "; 
}
else{
    //send bank details and alert notification
    $bank_message="
        <p>You have chosen E-payment as your deposit method for Betastockfx</p>
        <p>Our support team would contact you soon</p>
    ";
    
    sendmail("$email","$subject","$bank_message");
    sendmail("$admin_email","$subject","$adminMessage");
    echo "
      <script>
      swal('Great', 'Our bank details has been sent to your email address', 'success');
      </script>
    ";
}
    
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
      swal('An error occurred', 'Minimum amount for this plan is $$min_amount', 'error');
      </script>
    ";
}



}
?>

<?php require "footer.php"; ?>