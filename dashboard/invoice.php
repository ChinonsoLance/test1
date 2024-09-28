<?php require "header.php";   ?>
<?php
$slug=$_REQUEST['slug'];
$amount = $_REQUEST['amount']*1;

$get_payment =mysqli_query($conn, "SELECT * FROM payment_methods WHERE id='$slug'" );
if(mysqli_num_rows($get_payment)>0){
    $method=mysqli_fetch_assoc($get_payment);
    $address=$method['wallet_address'];
    $currency=$method['name'];
    $network=$method['network'];
}
?>

<div class="row">
<div class="col-xl-7 col-lg-7 col-md-12">
<div class="card" style="background:#f7f8fa;">
<div class="card-body">
<div class="buyer-seller">
<div class="d-flex justify-content-between mb-3">
<div class="seller-info text-right">
<span id="folioName"></span> <h4 class="card-title text-white" style="font-weight:200;">INVOICE PAYMENT DETAILS</h4>
</div>
</div>
<table width="100%"><tbody><tr><td align="right"><h6 id="expiry"> </h6></td></tr><tr><td> <div class="progress" >

</div></td></tr></tbody></table>
<div class="table-responsive">
<table class="table">
<tbody>
<tr id="invDetails1">
<td><span  class="text-white">PAY TO :</span><br><a href="#" onclick="copyFn();">
<span id="address" style="font-weight:200;">
<input id='wallet-address' type='text' class='form-control' value='<?php echo $address; ?>' readonly/>
</span>
<br>
<h6><button class="btn btn-light border" onclick="copyAddress()"><i class='bx bx-copy'></i><span id="copyText"> Copy</span></button></h6></a>
</td>
</tr>

 <?php
 if($network=="yes"){
     ?>
 
<tr>
   
    
<td><span  class="text-white">NETWORK :</span><br>
<span style="font-weight:200;">ERC-20</span>
</td>
</tr>
<?php
}
?>
<tr>
<td><span class="text-white">INVOICE AMOUNT :</span><br>
<span style="font-weight:200;"><?php echo $symbol." ".$amount; ?> on <?php echo $currency; ?></span>
</td>
</tr>
<tr id="totalPaid" style="display:none;">
<td><span  class="text-white">AMOUNT PAID:</span><br>
<span style="font-weight:200;" id="paid"><?php echo $symbol; ?>0.00</span>
</td>
</tr>
<tr>
<td><span  class="text-white">AMOUNT DUE :</span><br>
<span style="font-weight:200;" id="due"><?php echo $symbol." ".$amount; ?> on <?php echo $currency; ?></span>
</td>
</tr>
<tr id="invDetails3">
<td><span  class="text-white">REMARK :</span><br>
<span style="font-weight:200;">
You may split your payments into various amounts, be advised however that applicable network fees may be applied to subsequent incoming payments.
</span><br>

</td>
</tr>
<p align="center">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deposit-modal">
        I have made this deposit
    </button>
</p>
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

<div class="modal fade" id="deposit-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3>
                    Help us confirm your payment faster
                </h3>
                <button class="btn btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group my-2">
                        <label class="form-label">
                            Enter amount deposited
                        </label>
                        <input type="number" name="amount" placeholder="Enter amount" required class="form-control"/>
                    </div>
                    <button type="submit" class="btn btn-primary" name="confirm">
                        Confirm payment
                    </button>
                </form>
                
                <?php
                if(isset($_POST['confirm'])){
                    $inputamount = mysqli_real_escape_string($conn, $_POST['amount']);
                    
                    $subject = "Please confirm deposit";
                    $message = "<p>
                    Please confirm a deposit of $amount on this account ($email)
                    </p>";
                    
                    sendmail("support@bitassertempirepro.com","$subject","$message");
                    ?>
                    <script>
                        swal("Great","You will be notified once our team has confirmed your deposit","success")
                    </script>
                    
                    <?php
                }
                ?>
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