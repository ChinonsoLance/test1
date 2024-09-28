<?php require "header.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<style>
    .small-txt{
        font-size:14px;
    }
</style>
<div class="alert alert-info">
    Portfolios help you grow your money
</div>
<div class="row">
    <div class="col col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header h3 text-center text-primary">
                Portfolio summary
            </div>
            <div class="avatar flex-shrink-0  mx-auto">
                              <img
                                src="../assets/img/icons/unicons/wallet-info.png"
                                alt="Credit Card"
                                class="rounded"
                              />
            </div>
            <div class="card-body">
                <p>Total balance <span class="display-6 float-end"><?php echo $symbol." ".$total_portfolio_balance; ?></span></p>
                <p>Total profit <span class="display-6 float-end"><?php echo $symbol." ".$total_profit; ?></span></p>
                <p>All Portfolios <span class="badge bg-primary float-end"><?php echo $num_portifolio; ?></span></p>
                <p>Active Portfolios <span class="badge bg-success float-end"><?php echo $num_active_portifolio; ?></span></p>
                <p>Settled Portfolios <span class="badge bg-info float-end"><?php echo $num_settled_portifolio; ?></span></p>
                
            </div>
            <div class="card-footer d-grid gap-2 mx-auto">
                <a href="create-portifolio.php"><button class="btn btn-primary btn-block">
                    Create Investment portfolio <b>+</b>
                </button></a>
            </div>
        </div>
    </div>
</div>

<div class="row m-3">
    <div class="col col-lg-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                <?php
                $tickers=array();
                $amounts=array();
                $get_portifolios=mysqli_query($conn, "SELECT * FROM portifolios WHERE user_id='$id'AND `type`!='wallet'");
                if(mysqli_num_rows($get_portifolios)>0){
                   while($portifolios=mysqli_fetch_assoc($get_portifolios)){
                       $amount=$portifolios['balance'];
                       array_push($amounts, $amount);
                       $ticker=$portifolios['ticker'];
                       array_push($tickers, $ticker);
                        
                   }
                  
                   
                 
                   
                }
                
                
                ?>
                
               

                    <script>
var xValues = <?php echo json_encode($tickers); ?>;
var yValues = <?php echo json_encode($amounts); ?>;
var barColors = [
  '#b91d47',
  '#00aba9',
  '#2b5797',
  '#e8c3b9',
  '#1e7145',
  '#000000'
];

new Chart('myChart', {
  type: 'pie',
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: 'Your investments'
    }
  }
});
</script>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3 ">
    <h3 class="text-center text-primary">My Investments</h3>
<?php
$get_portifolios = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `user_id` = '$id' AND `type`!='wallet' ORDER BY id DESC");
if(mysqli_num_rows($get_portifolios)>0){
    while($portifolio = mysqli_fetch_assoc($get_portifolios)){
        $portifolioId = $portifolio['id'];
        $portifolioName = $portifolio['name'];
        $portifolioBalance = $portifolio['balance']*$currency_rate;
        $setupDate = $portifolio['date'];
        $tenure=null;
        $rate=null;
        $portifolioType = $portifolio['rate'];
        $get_plan=mysqli_query($conn,"SELECT * FROM iv_schemes WHERE id='$portifolioType'");
        $plan=mysqli_fetch_assoc($get_plan);
        $term=$plan['term'];
        $duration=$plan['duration'];
        $tenure=$term." ".$duration;
        $rate=$plan['ROI'];
       
        $amount = $portifolio['amount']*$currency_rate;
        $savePro = $portifolio['save_pro'];
        $status = $portifolio['status'];
        $asset = $portifolio['ticker'];
        $bot = $portifolio['bot'];
        $profit=$portifolio['profit']*$currency_rate;


        echo "
        <div class ='col col-lg-6 p-2 mx-auto'>
        <div class='card container'>

        <div class='card-header h3 text-center text-primary'>
        <div class='dropdown'>
                              <button
                                class='btn p-0 float-end'
                                type='button'
                                id='cardOpt6'
                                data-bs-toggle='dropdown'
                                aria-haspopup='true'
                                aria-expanded='false'
                              >
                                <i class='bx bx-dots-vertical-rounded float-right'></i>
                              </button>
                              <div class='dropdown-menu dropdown-menu-end' aria-labelledby='cardOpt6'>
                                <span class='dropdown-item' href='#'><button class='btn w-100'value='$portifolioId' onclick='addValue(this.value)'>Edit </button></span>
                                <span class='dropdown-item d-none' href='#'><button id='edit-me' class='btn' value='$portifolioId' data-bs-toggle='modal' data-bs-target='#editFolio'>Edit</button></span>
                                <span class='dropdown-item' href='#'><button class='btn w-100'value='$portifolioId' onclick='confirmDelete(this.value)'>Delete</button></span>
                              </div>
                            </div>
        
        <div class='card-title'>$portifolioName <span class='text-end text-secondary small-txt'>$asset</span></div>
        
        
        </div>

        <div class='card-body row'>
        
        <div class='my-3 text-center'>
        <span>Available </span>
        <h3>$currency $portifolioBalance</h3>
        </div>
        
        <div class='my-3 text-center'>
        <span>Profit </span>
        <h3>$currency $profit</h3>
        </div>
        
        
        <div class='col-6'>
        <div class='my-3'>
        <p class='mb-1 badge bg-info'>Setup Date</p>
        <div>$setupDate</div>
        </div>
        
        
        
        <div class='my-3'>
        <span class='badge bg-info'>Tenure</span><br/>
        <span>$tenure </span>
        </div>
        </div>
        <div class='col-6'>
        <div class='my-3'>
        <span class='badge bg-info'>Rate</span><br/>
        <span>$rate%</span>
        </div>
        
        
        <div class='my-3'>
        <span class='badge bg-info'>Status</span><br/>
        <span>$status</span>
        </div>
        </div>
        ";

        
        if($bot==0){
            echo "<p class='text-center text-danger'>No bot active for this portfolio 
            <button class='btn btn-sm border' data-bs-toggle='modal' data-bs-target='#bots-modal' >Purchase bot</button>
            </p>";
        }
        else{
            $get_bot=mysqli_query($conn, "SELECT * FROM bots WHERE id='$bot'");
            $bot_info=mysqli_fetch_assoc($get_bot);
            $bot_name=$bot_info['name'];
            $bot_rate=$bot_info['rate'];
            echo"
            <p class='text-center text-success'>$bot_name active +$bot_rate% interest</p>
            ";
        }
        echo"
        <div class='mx-auto' align='center'>
        ";
        


        if($status!='settled'){
            echo"
            <a href='fund-portfolio.php'  class='btn btn-success waves-effect'><i class='fa fa-arrow-down'>&nbsp;</i>Fund Portfolio</a>";
        
            
        
        }
        else{
        echo "
        <a href='withdraw.php?portifolio=$portifolioId'  class='btn btn-primary waves-effect'><i class='fa fa-arrow-up'>&nbsp;</i>Withdraw</a>
        
        ";
        }


echo"   </div>
        </div>
        </div>
        
        </div>
        ";
    }


}
else{
    echo"
    <div class='alert alert-info mx-auto'>
    You have no portfolios set up.
    </div>
    ";
}
?>
</div>

<div class="modal fade" id="bots-modal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <form method="post" action="">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Select bot</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Portfolio</label>
                                    <select class="form-control" name='portifolio'>
                                        <?php
                                        $get_portifolios=mysqli_query($conn, "SELECT * FROM portifolios WHERE `user_id` = '$id' AND bot=0");
                                        while($portifolio=mysqli_fetch_assoc($get_portifolios)){
                                            $pot_name=$portifolio['name'];
                                            
                                            $pot_id=$portifolio['id'];
                                            echo"
                                            <option value='$pot_id'>$pot_name</option>
                                            ";
                                        }
                                        

?>
                                    </select>
                                    
                                  </div>
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Bot name</label>
                                    <select class="form-control" name='bot'>
                                        <?php
                                        $get_bots=mysqli_query($conn, "SELECT * FROM bots");
                                        while($bot_info=mysqli_fetch_assoc($get_bots)){
                                            $bot_name=$bot_info['name'];
                                            $bot_rate=$bot_info['rate'];
                                            $bot_id=$bot_info['id'];
                                            echo"
                                            <option value='$bot_id'>$bot_name</option>
                                            ";
                                        }
                                        

?>
                                    </select>
                                    <span class="text-secondary text-center">
                                       <small> Read more about our bots <a href='bots.php'>Here</a></small>
                                    </span>
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Currency</label>
                                    <select name='currency' class="form-control">
                                    <?php
                                        $get_payments=mysqli_query($conn, "SELECT * FROM payment_methods");
                                        while($payments=mysqli_fetch_assoc($get_payments)){
                                            $payment_name=$payments['name'];
                                            
                                            $payment_id=$payments['id'];
                                            echo"
                                            <option value='$payment_id'>$payment_name</option>
                                            ";
                                        }
                                    ?>
                                    </select>
                                  </div>
                                  
                                </div>
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary" name="bot-submit">Continue</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="editFolio">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Edit this portfolio <button class="btn btn-close " data-bs-dismiss="modal"></button></h4>
                                    </div>
                                    <div class="modal-body" id="edit-folio-form">
                                        <form method="post" >
                                            <input type="hidden" id="addValue">
                                        <div class="form-group p-2">
                                            <label for="folioName">Enter new portfolio name</label>
                                            <input type="text" class="form-control" id="folioName" name="newFolioName" placeholder="Enter new portfolio name" required/>
                                        </div>
                                        <div class="form-group p-2">
                                            
                                            <button class="btn btn-success w-100" onclick="confirmEdit()" type="button">Edit portfolio</button> 
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            function confirmDelete(val){
                                swal("Notice","Are you sure you want to delete this portfolio","warning")
                                        .then((value) => {
                                            if(value==true){
                                                 $.ajax({
                                                type: 'post',
                                                url: 'scripts/delete-portfolio.php',
                                                data: {'id': val},
                                                success: function(data){
                                                    swal('success',`${data}`,'success');
                                                }
                                            })
                                            }
                                           
                                          
                                        });
                                     }
                                     function addValue(val){
                                         $("#addValue").val(val);
                                         $("#edit-me").click();
                                     }
                                     function confirmEdit(val){
                                         var valId=$("#addValue").val();
                                         var newName=$("#folioName").val();
                                         if(newName.length>0){
                                             $.ajax({
                                              type: "post",
                                              url: "scripts/edit-portfolio.php",
                                              data: {"id": valId, "newname": newName},
                                              success: function(data){
                                                  swal("success",data,"success")
                                              }
                                          })
                                         }
                                         else{
                                             swal("name invalid");
                                         }
                                          
                                     }
                        </script>
<?php
require "scripts/create-activity.php";
$path="bot-invoice.php";
if(isset($_POST['bot-submit'])){
    $user_id=$id;
    $folioId=$_POST['portifolio'];
    $botId=$_POST['bot'];
    $get_bots=mysqli_query($conn, "SELECT * FROM bots WHERE id='$botId'");
    $botdata=mysqli_fetch_assoc($get_bots);
    $amount=$botdata['price'];
    $botName=$botdata['name'];
    $status="pending";
    $date=date("l jS \of F Y");
    $unix_time=time();
    $currency=$_POST['currency'];
    $description="$botName purchase";
    $get_portifolio = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE `id` = '$folioId'");
$portifolio = mysqli_fetch_assoc($get_portifolio);
$portifolioName = $portifolio['name'];
$path="bot-invoice.php?currency=$currency&bot=$botId&portifolio=$portifolioName";
    
    $sql = "INSERT INTO transactions(`user_id`,`folio_id`,`amount`,`type`,`status`,`date`,`unix_time`, `currency`,`is_bot`)VALUES('$user_id','$folioId','$amount','deposit','$status','$date','$unix_time','$currency','yes')";
    $insert_trx=mysqli_query($conn,$sql);
    $trxID=mysqli_insert_id($conn);
    
    if($insert_trx){
        $subject="bot purchase";
    createActivity($user_id,$description,$portifolioName,$amount,$date,$currency,$trxID);
    if($currency!=="bank"){
    $message="we have received your request to purchase one of our trading bots, please make your deposit using the selected payment method";
    $adminMessage="
        <p>Bot name: $botName</p>
        <p>User email: $email</p>
        <p>Portfolio name: $portifolioName</p>
        <p>payment method: $currency</p>
    
    ";
     sendmail("$email","$subject","$message");
    sendmail("$admin_email","$subject","$adminMessage");
      echo "
      <script>
      window.location.replace('$path');
      </script>
      "; 
}
else{
    //send bank details and alert notification
    $bank_message="
        <p>You have chosen E-payment as your deposit method for theackersfield</p>
        <p>Our support team would contact you soon</p>
    ";
    $adminMessage="
        <p>Bot name: $botName</p>
        <p>User email: $email</p>
        <p>Portfolio name: $portifolioName</p>
        <p>Payment method: Bank</p>
    
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
    
    $err=mysqli_error($conn);
    echo "
      <script>
      swal('An error occurred', 'Your deposit transaction failed. please contact support for more information ', 'error');
      </script>
    ";
}
}

?>

<?php require "footer.php";?>