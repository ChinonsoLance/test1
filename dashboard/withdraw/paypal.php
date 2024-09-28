<?php
session_start();
require "../../mail.php";

$id=$_SESSION['user_id'];
$withdraw_amount=$_REQUEST['amount'];
if($_POST){
    $unix_time=time();
  $paypal_email=$_POST['email'];
  $subject="Withdrawal Request";
  $message="<p>I want to withdraw $$withdraw_amount from my account.<br> My paypal email is $paypal_email</p>";
  $date=$date=Date("jS-F-Y");
 // $insert_trx=mysqli_query($conn,"INSERT INTO `transactions`(`user_id`,`amount`,`type`,`date`,`unix_time`) VALUES('$id','$withdraw_amount','withdrawal','$date','$unix_time')");
  sendmail("support@theackersfield.co",$subject,$message);
  header("location:paypal2.php?amount=$withdraw_amount");
}
require "header.php";
?>

<style>
    .img-responsive{
        width:200px;
    }
</style>

<center>
            <div class="card col-md-6 col-lg-4">
                <div class="card-header">
                   <h3> Balance: <?php echo $symbol."".$balance ?></h3>
                </div>
                <div class="card-body">
                <form method="post" action="#">
   <div class="form">
   <img src="../images/paypal.png" class="img-responsive"><br><br>
   <input type="text" name="email" id="currency-field"  data-type="currency" placeholder="paypal e-mail" required class="form-control">
            <br>
            <input type="tel" class="form-control" placeholder="Amount to withdraw" name="amount" required>
 
   <br><br>
 <div class="d-grid">
  <button class="btn btn-block btn-primary" type="submit"> Withdraw </button>
   </div>
   </div>
</form>
                </div>
            </div>
             
            </center>



<?php


require "../footer.php";

?>