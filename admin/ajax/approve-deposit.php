<?php
require "../../config.php";
require "../../mail.php";

$trx_id=$_POST['trx_id'];



$update = mysqli_query($conn, "UPDATE `transactions` SET `status`='approved' WHERE id='$trx_id'");

$select = mysqli_query($conn, "SELECT * FROM `transactions`  WHERE id='$trx_id'");
$fetch = mysqli_fetch_assoc($select);
$user_id = $fetch['user_id'];
$folio_id = $fetch['folio_id'];
$withdraw_amount=$fetch['amount'];
$is_bot=$fetch['is_bot'];

$get_portifolio=mysqli_query($conn,"SELECT * FROM portifolios WHERE id='$folio_id'");
$folio=mysqli_fetch_assoc($get_portifolio);
$folio_balance=$folio['balance'];


$select_referrer=mysqli_query($conn,"SELECT * FROM referrals WHERE user_id='$user_id'");
if(mysqli_num_rows($select_referrer)>0){
    $refer=mysqli_fetch_assoc($select_referrer);
$referred_by=$refer['refer_by'];

$referral_bonus=(5/100)*$withdraw_amount;
$get_account=mysqli_query($conn, "SELECT * FROM accounts WHERE user_id='$referred_by'");
$account=mysqli_fetch_assoc($get_account);
$account_balance=$account['balance']+$referral_bonus;

$date=date("l jS \of F Y");

mysqli_query($conn, "UPDATE accounts SET balance='$account_balance' WHERE user_id='$referred_by'");
$add_activity=mysqli_query($conn, "INSERT INTO `user_activities`(user_id,transaction_id,description,portifolio_name,amount,date)VALUES('$referred_by','0','Referral bonus','No portfolio','$account_balance','$date')");

}
$withdraw_amount=$withdraw_amount+$folio_balance;
if($is_bot=="no"){


$update_portifolio = mysqli_query($conn, "UPDATE `portifolios` SET `status`='active',`balance`='$withdraw_amount' WHERE `id`='$folio_id'");

}
$select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '$user_id'");
$user=mysqli_fetch_assoc($select_user);
$username = $user['username'];
$email = $user['email'];

if($update){
    $client_message="
                <p>Your Deposit on Betastockfx has been approved. </p>
                <div>
                
                ";

                sendmail("$email","Deposit Approved","$client_message",null,"$username");
                echo "you approved this Deposit";
            
}

?>