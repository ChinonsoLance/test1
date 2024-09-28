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
                            <span id="basic-icon-default-email2" class="input-group-text"><?php echo $currency; ?></span>
                          </div>
                          <div class="form-text">Only numbers allowed</div>
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary">Select plan</button>
                      </form>
                    </div>
                  </div>
                </div>

                <?php
                if($_POST){
                  
                  
                  
                 
                  $tenureAmount = mysqli_real_escape_string($conn,$_POST['amount']);
                  $tenureAmount/=$currency_rate;
                  $portifolioName = mysqli_real_escape_string($conn,$_POST['name']);
                  
                  $_SESSION['amount']=$tenureAmount;
                  $_SESSION['portfolioName']=$portifolioName;
                 header("Location: plans.php?ticker=$ticker");
                 
                  
                  
                }
                
                ?>



<?php require "footer.php";?>