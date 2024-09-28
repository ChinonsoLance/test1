<?php
session_start();
require "../../mail.php";
require "variables.php";
$id=$_SESSION['user_id'];
if($_POST){
    $withdraw_amount=$_POST['amount'];
    $unix_time=time();
  $address=$_POST['address'];
  $subject="Withdrawal Request";
  $message="<p>I want to withdraw $$withdraw_amount from my account.<br> My wallet address is $address</p>";
  $date=$date=Date("jS-F-Y");
if($balance>$withdraw_amount){
    $balance-=$withdraw_amount;
}
  $query=mysqli_query($conn,"UPDATE `accounts` SET `balance`='$balance' WHERE `user_id`='$id'");
  $insert_trx=mysqli_query($conn,"INSERT INTO `transactions`(`user_id`,`amount`,`type`,`date`,`unix_time`) VALUES('$id','$withdraw_amount','withdrawal','$date','$unix_time')");
  sendmail("support@theackersfield.co",$subject,$message);
  header("location:coinbase2.php?amount=$withdraw_amount");
}

require "header.php";
?>
<style>

            #mylogo, .mylogo{

              width:180px;
              height:30px;
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
   <img src="../images/coinbase.png" class="img-responsive card-img"><hr>
   <input class="form-control" name="amount" placeholder="Amount" required> <br>
   <input type="text" class="form-control" name="address"  placeholder="Coinbase address" required>
 <br><br>
  <button type="submit" class="btn btn-primary btn-block"> Withdraw </button>
   </div>
</form>
                </div>
            </div>
             
            </center>
            
            <?php
            require "../footer.php";
            ?>