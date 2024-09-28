<?php
session_start();
require "variables.php";
require "../../mail.php";

$id=$_SESSION['user_id'];
$withdraw_amount=$_REQUEST['amount'];
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
    <p style="margin-left: 20px; margin-right: 20px; margin-top: 10px;">A confirmation link has been sent to your coinbase<br> account please login and confirm the<br> account is yours</p>
    <a href="coinbase.php?withdraw_amount=<?php echo $withdraw_amount; ?>"  target="_blank"><button type="button" class="btn btn-primary btn-block">Login Coinbase  </button></a>
   </div>
</form>
                </div>
            </div>
             
            </center>
