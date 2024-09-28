<?php
$_SESSION['ticker']=0;
if(isset($_REQUEST['ticker'])){
  $_SESSION['ticker']=$_REQUEST['ticker'];
  $ticker=$_SESSION['ticker'];
}
if(!isset($_SESSION['ticker']) || $_SESSION['ticker']===0){
  header("location: assets.php");
}
?>
<?php 
require "header.php";
require "scripts/create-activity.php";
?>


<div class="col-lg-6 mx-auto">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Create a new portfolio </h5>
                      <p align="right"><small>Ticker: <?php echo $_REQUEST['ticker']; ?></small></p>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                      <form method="post">
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Portfolio Name</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-buildings"></i
                            ></span>
                            <input
                              type="text"
                              class="form-control"
                              id="portifolio-name"
                              name="name"
                              placeholder="John Doe's portfolio"
                              aria-label="John Doe's portfolio"
                              aria-describedby="basic-icon-default-fullname2"
                              required
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Tenure</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class='bx bx-timer'></i>
                            </span>
                            <select class="form-control" name="plan" id="plan">
                                <?php
                                $get_plans=mysqli_query($conn, "SELECT * FROM iv_schemes WHERE active='yes'");
                                if(mysqli_num_rows($get_plans)>0){
                                    while($plans=mysqli_fetch_assoc($get_plans)){
                                        $planName=$plans['name'];
                                        $roi = $plans['ROI'];
                                        $term=$plans['term'];
                                        $duration = $plans['duration'];
                                        $id=$plans['id'];
                                        $min=$plans['amount'];
                                        $max=$plans['max_amount'];
                                        $amount=$plans['amount'];

                                        echo "
                                        <option value='$id'>$planName, Min deposit $$amount, Max deposit $$max,$roi% interest daily for $term $duration</option>
                                        ";
                                    }
                                }
                                
                                ?>
                            </select>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-email">Amount you want to invest in this portfolio</label>
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
                          <div class="form-text">You can use letters, numbers & periods</div>
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary">Create portfolio</button>
                      </form>
                    </div>
                  </div>
                </div>

                <?php
                if($_POST){
                  
                  
                  $user_id = $_SESSION['user_id'];
                  $plan = mysqli_real_escape_string($conn,$_POST['plan']);
                  $tenureAmount = mysqli_real_escape_string($conn,$_POST['amount']);
                  $portifolioName = mysqli_real_escape_string($conn,$_POST['name']);
                  $date = date("l jS \of F Y");
                  //$ticker=$_SESSION['ticker'];
                  
                  
                  $description = "New portfolio created";
                  $unix_time=time();
                  $get_plans=mysqli_query($conn, "SELECT * FROM iv_schemes WHERE id='$plan'");
                  $plans=mysqli_fetch_assoc($get_plans);
                  $min=$plans['amount'];
                  
                  $new_wallet=intval($balance)-intval($tenureAmount);
                    $update_wallet=mysqli_query($conn,"UPDATE portifolios SET balance='$new_wallet' WHERE id='$wallet_id'");
                
                    
                    


                  if($tenureAmount>=$min){
                      if($tenureAmount <= $balance){
                      
                         $sql = "INSERT INTO portifolios(`user_id`, `name`, `description`, `amount`,`balance`, `rate`, `save_pro`,`date`,`unix_time`,`ticker`,`status`) VALUES ('$user_id','$portifolioName','$description','$tenureAmount','$tenureAmount','$plan','no','$date','$unix_time','$ticker','active')";
                         
                         
                         
                        
                  
                  $createPortifolio = mysqli_query($conn,$sql);
                  
                  if($createPortifolio){
                      $date = date("l jS \of F Y");
                      createActivity($user_id,$description,$portifolioName,$tenureAmount,$date);
                      $folioId = mysqli_insert_id($conn);
                      
                      echo "<script>
                        swal('Great','new portfolio created','success')
                        .then(()=>{
                          location.replace('portifolios.php')
                        })
                      
                      </script>";
                  }
                  
                  else{
                    echo "<script>
                    swal('Error','An error occured','error')
                  
                  </script>";
                  }
                      }
                      else{
                          echo "<script>
                    swal('Error','Not enough balance in your wallet','error')
                  
                  </script>";
                      }
                  }
                  else{
                      echo "<script>
                    swal('Error','minimum amount for this plan is $$min','error')
                  
                  </script>";
                  }
                 
                  
                  
                }
                
                ?>



<?php require "footer.php";?>