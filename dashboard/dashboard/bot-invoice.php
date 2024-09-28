<?php require "header.php";   ?>
<?php
$slug=$_REQUEST['currency'];
$bot = $_REQUEST['bot'];
$portifolio = $_REQUEST['portifolio'];

$get_bot = mysqli_query($conn, "SELECT * FROM bots WHERE id=$bot");
$bot_info = mysqli_fetch_assoc($get_bot);
$amount = $bot_info['price'];
$bot_name = $bot_info['name'];

$get_payment =mysqli_query($conn, "SELECT * FROM payment_methods WHERE id='$slug'" );
if(mysqli_num_rows($get_payment)>0){
    $method=mysqli_fetch_assoc($get_payment);
    $address=$method['wallet_address'];
    $currency=$method['name'];
}
$message="

<p>
Portifolio: $portifolio
</p>
<p>
Username: $username
</p>
<p>
Bot: $bot_name
</p>

";
sendmail("$admin_email","New bot purchase","$message");
?>

<div class="row">
<div class="col-xl-7 col-lg-7 col-md-12">
<div class="card" style="background:#f7f8fa;">
<div class="card-body">
<div class="buyer-seller">
<div class="d-flex justify-content-between mb-3">
<div class="seller-info text-right">
<span id="folioName"></span> <h4 class="card-title" style="font-weight:200;">INVOICE PAYMENT DETAILS</h4>
</div>
</div>
<table width="100%"><tbody><tr><td align="right"><h6 id="expiry"> </h6></td></tr><tr><td> <div class="progress" >

</div></td></tr></tbody></table>
<div class="table-responsive">
<table class="table">
<tbody>
<tr id="invDetails1">
<td><span>PAY TO :</span><br><a href="#" onclick="copyFn();">
<span id="address" style="font-weight:200;">
<input id='wallet-address' type='text' class='form-control' value=<?php echo $address; ?> readonly/>
</span>
<br>
<h6><button class="btn btn-light border" onclick="copyAddress()"><i class='bx bx-copy'></i><span id="copyText"> Copy</span></button></h6></a>
</td>
</tr>
<tr id="invDetails2">
<td><span>QR CODE :</span><br>
<img src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=<?php echo $address;?>" alt="" class="img-fluid">
<br><h5 style="color:grey;"><small>If the QR code doesn't work with your wallet, simply copy and paste the bitcoin address displayed above.</small></h5>
</td>
</tr>
<tr>
<td><span>INVOICE AMOUNT :</span><br>
<span style="font-weight:200;">$<?php echo $amount; ?> on <?php echo $currency; ?></span>
</td>
</tr>
<tr id="totalPaid" style="display:none;">
<td><span>AMOUNT PAID:</span><br>
<span style="font-weight:200;" id="paid">$0.00</span>
</td>
</tr>
<tr>
<td><span>AMOUNT DUE :</span><br>
<span style="font-weight:200;" id="due">$ <?php echo $amount; ?> on <?php echo $currency; ?></span>
</td>
</tr>
<tr id="invDetails3">
<td><span>REMARK :</span><br>
<span style="font-weight:200;">
You may split your payments into various amounts, be advised however that applicable network fees may be applied to subsequent incoming payments.
</span><br>

</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-5 col-lg-5">
<div class="card" style="background:#f7f8fa;">
<div class="card-body">
<div class="buyer-seller">
<div class="d-flex justify-content-between mb-3">
<div class="seller-info text-right">
<span id="folioName"></span> <h4 class="card-title" style="font-weight:200;">PAYMENT(S) HISTORY</h4>
</div>
</div>
 <span id="address" style="font-weight:200;">Real-time historical records of your incoming invoice payments</span>
<div class="table-responsive">
<table class="table">
                    <thead>
                      <tr>
                        <th>Transaction id</th>
                        <th>Portifolio</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    <?php
                            $getActivities = mysqli_query($conn, "SELECT * FROM `transactions` WHERE `user_id` = '$id' ORDER BY `id` DESC");
                            if(mysqli_num_rows($getActivities)>0){
                              while($activities = mysqli_fetch_assoc($getActivities)){
                                $portifolioId = $activities['folio_id'];
                                $date = $activities['date'];
                                $amount = $activities['amount'];
                                $trxID = $activities['id'];
                                $transaction_status=$activities['status'];
                                $get_transaction = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE id = '$portifolioId'");
                                $transaction = mysqli_fetch_assoc($get_transaction);
                                $portifolioName=$transaction['name'];
                                
                                

                                echo"
                                <tr>
                                <td>#$trxID</td>
                        <td><i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>$portifolioName</strong></td>
                        
                        <td>
                          $$amount
                            
                        </td>
                        <td><span class='badge bg-label-primary me-1'>$transaction_status</span></td>
                        <td>
                          $date
                        </td>
                      </tr>
                                
                                ";
                              }
                            }
                                

                    ?>
                      
                    </tbody>
                  </table>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
    function copyAddress() {
  /* Get the text field */
  var copyText = document.getElementById("wallet-address");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  swal("success", "Address copied to clipboard","success");
}
</script>

<?php require "footer.php";   ?>