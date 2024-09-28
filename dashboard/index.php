<?php
require "header.php";
?>





<div class="container-xxl flex-grow-1 container-p-y">
    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container card">
  <div class="tradingview-widget-container__widget"></div>
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    },
    {
      "description": "",
      "proName": "NASDAQ:AAPL"
    },
    {
      "description": "",
      "proName": "NASDAQ:TSLA"
    },
    {
      "description": "",
      "proName": "NASDAQ:AMZN"
    },
    {
      "description": "",
      "proName": "NASDAQ:QQQ"
    },
    {
      "description": "",
      "proName": "NASDAQ:NFLX"
    },
    {
      "description": "",
      "proName": "CME:BTC1!"
    },
    {
      "description": "",
      "proName": "MCX:NATURALGAS1!"
    },
    {
      "description": "",
      "proName": "MCX:NATURALGAS1!"
    },
    {
      "description": "",
      "proName": "TVC:US05Y"
    },
    {
      "description": "",
      "proName": "TVC:US30Y"
    },
    {
      "description": "",
      "proName": "TVC:US02Y"
    },
    {
      "description": "",
      "proName": "TVC:CN10Y"
    },
    {
      "description": "",
      "proName": "FRED:SP500"
    },
    {
      "description": "",
      "proName": "FX:USDCAD"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": true,
  "displayMode": "adaptive",
  "locale": "en",
  "isTransparent": true
 
}
  </script>
</div>
<!-- TradingView Widget END -->
<?php
if ($activated=="false"){
?>

<div class="alert alert-warning my-3">
    <div class="">
        <p>Your account has not been verified yet. Upload your KYC to access full features of the site </p>
        <div>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#verify-modal">
                Verify now
            </button>
        </div>
    </div>
</div>
<div class="modal fade" id="verify-modal">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header h3">
            Verify your account
        </div>
        <div class="modal-body">
            <form method="post" id="verify-form" enctype="multipart/form-data">
                <div class="form-group m-2">
                    
                
                <label class="form-label">
                    Upload your Drivers License, International passport or any Government issued Document
                </label>
                <input type="hidden" name="email" value="<?php echo $email; ?>"/>
                <input type="file" class="form-control" name="kyc" id="kyc" required/>
                </div>
                <div class="form-group ">
                    <button  id="uploadKyc" type="submit" name="uploadKyc" class="btn btn-secondary" accept="image/*">Verify Account</button>
                </div>
                
            </form>
            
        </div>
    </div>
    </div>
</div>
<script>
    document.getElementById("uploadKyc").addEventListener("click", function(event){
  event.preventDefault()
  var form=document.getElementById("verify-form");
  var fd=new FormData(form);
  $.ajax({
      type: 'post',
      url: 'ajax/kyc.php',
      data: fd,
      cache: false,
        contentType: false,
        processData: false,
        success: function(data){
            swal('Great',data,'success')
            .then(()=>{
                location.replace('index.php')
            })
        }
  })
});
</script>
<?php
}
?>
              <div class="row">
                 
                    <div class="col-lg-3 col-md-6 col-6 mb-4 h-100">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="activities.php">View More</a>
                                
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold text-secondary d-block mb-1">Main Balance</span>
                          <h3 class="card-title text-white mb-2"><?php echo $symbol." ".$balance; ?>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> </small>
                        
                        </h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-4 h-100">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/wallet-info.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="activities.php">View More</a>
                                
                              </div>
                            </div>
                          </div>
                          <span class="text-secondary">Interest Balance</span>
                          <h3 class="card-title text-nowrap mb-1 text-white"><?php echo $symbol." ".$total_profit; ?>
                         <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> </small></h3>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 mb-4 h-100">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/wallet-info.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="activities.php">View More</a>
                                
                              </div>
                            </div>
                          </div>
                          <span class="text-secondary">Total Deposit</span>
                          <h3 class="card-title text-nowrap mb-1 text-white"><?php echo $symbol." ".$total_deposited; ?>
                         <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> </small></h3>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 mb-4 h-100">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt4"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="activities.php">View More</a>
                                
                              </div>
                            </div>
                          </div>
                          <span class="d-block mb-1 text-secondary">Active Portfolios</span>
                          <h3 class="card-title text-nowrap mb-2 text-white"><?php echo $num_active_portifolio; ?></h3>
                          
                        </div>
                      </div>
                    </div>
                  
                <!-- Total Revenue -->
                <div class="col-12 col-lg-6 order-2 order-md-3 order-lg-2 mb-4 m-0" >
                    <div class='card'><div class='card-body p-3'>
                    
                            <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container w-100">
  <div class="tradingview-widget-container__widget w-100"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank"><span class="blue-text">Stock Quotes</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "title": "Stocks",
  "tabs": [
    {
      "title": "Financial",
      "symbols": [
        {
          "s": "NYSE:JPM",
          "d": "Jpmorgan Chase & Co"
        },
        {
          "s": "NYSE:WFC",
          "d": "Wells Fargo Co New"
        },
        {
          "s": "NYSE:BAC",
          "d": "Bank Amer Corp"
        },
        {
          "s": "NYSE:HSBC",
          "d": "Hsbc Hldgs Plc"
        },
        {
          "s": "NYSE:C",
          "d": "Citigroup Inc"
        },
        {
          "s": "NYSE:MA",
          "d": "Mastercard Incorporated"
        }
      ]
    },
    {
      "title": "Technology",
      "symbols": [
        {
          "s": "NASDAQ:AAPL",
          "d": "Apple"
        },
        {
          "s": "NASDAQ:GOOGL",
          "d": "Google Inc"
        },
        {
          "s": "NASDAQ:MSFT",
          "d": "Microsoft Corp"
        },
        {
          "s": "NASDAQ:FB",
          "d": "Meta Platforms, Inc"
        },
        {
          "s": "NYSE:ORCL",
          "d": "Oracle Corp"
        },
        {
          "s": "NASDAQ:INTC",
          "d": "Intel Corp"
        }
      ]
    },
    {
      "title": "Services",
      "symbols": [
        {
          "s": "NASDAQ:AMZN",
          "d": "Amazon Com Inc"
        },
        {
          "s": "NYSE:BABA",
          "d": "Alibaba Group Hldg Ltd"
        },
        {
          "s": "NYSE:T",
          "d": "At&t Inc"
        },
        {
          "s": "NYSE:WMT",
          "d": "Wal-mart Stores Inc"
        },
        {
          "s": "NYSE:V",
          "d": "Visa Inc"
        }
      ]
    }
  ],
  "width": "100%",
  "height": 660,
  "showChart": true,
  "showFloatingTooltip": false,
  "locale": "en",
  "plotLineColorGrowing": "#2962FF",
  "plotLineColorFalling": "#2962FF",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "gridLineColor": "rgba(240, 243, 250, 0)",
  "scaleFontColor": "rgba(120, 123, 134, 1)",
  "showSymbolLogo": true,
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
  "colorTheme": "dark",
  "isTransparent": true
}
  </script>
</div>
<!-- TradingView Widget END -->
 </div></div>                     
                  
                </div>
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-6 order-3 order-md-2">
                  <div class="row">
                  
                    <div class="col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="activities.php">View More</a>
                                
                              </div>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1 text-secondary">Referral bonus</span>
                          <h3 class="card-title mb-2 text-white"><?php echo $symbol." ".$ref_bonus; ?></h3>
                          <button class="btn btn-light border" data-bs-toggle="modal" data-bs-target="#addref">
                              Add to  portfolio
                          </button>
                          
                        </div>
                      </div>
                    </div>
                   
                    <div class="col-12 mb-4 ">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class=" mb-2">Profile Report</h5>
                                <button class='btn btn-warning  btn-sm border' data-bs-toggle='modal' data-bs-target='#preferences'>Preferences</button>
                                <a href="connect/index.php"><button class='btn  btn-success  btn-sm border' >Link trading wallet</button></a>
                              </div>
                             
                              <br/>
                              
                            </div>
                            <div id="profileReportChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                    
                    <div class="modal fade" id="preferences">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                   <h3>Update preferences</h3> 
                                </div>
                                <div class='modal-body'>
                                    <form method='post'>
                                        <div class='form-group m-2'>
                                        <label for="email">Send daily emails of generated profits</label>
                                        <select name="email" id='email' class='form-control'>
                                            <option value="true">Yes, send me emails</option>
                                            <option value="false">No</option>
                                        </select>
                                        </div><br>
                                        
                                        <button type='submit' name='save-preferences' class='btn btn-primary'>Save</button>
                                        
                                    </form>
                                    <?php
                                    
                                    if(isset($_POST['save-preferences'])){
                                        $preference=$_POST['email'];
                                        $update=mysqli_query($conn,"UPDATE users SET email_preferences=$preference WHERE id='$id'");
                                        if($update){
                                            echo "
                                            <script>
                                            swal('Success','Settings saved','success');
                                            </script>
                                            ";
                                        }
                                        else{
                                             echo "
                                            <script>
                                            swal('Oops','An error occurred','error');
                                            </script>
                                            ";
                                        }
                                    }
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="modal fade" id="addref">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                   <h3>Add referral bonus to your portfolio</h3> 
                                </div>
                                <div class='modal-body'>
                                    <form method='post'>
                                        <div class='form-group m-2'>
                                        <label for="refportfolio">Select a portfolio </label>
                                        <select name="refportfolio" id='refportfolio' class='form-control' required>
                                            
                                            <?php
                                            $get_portfolio=mysqli_query($conn,"SELECT * FROM portifolios WHERE user_id='$id'");
                                            if(mysqli_num_rows($get_portfolio)>0){
                                                $ref_portfolios=mysqli_fetch_assoc($get_portfolio);
                                                $folioId=$ref_portfolios['id'];
                                                $folioName=$ref_portfolios['name'];
                                                echo "
                                                <option value='$folioId'>$folioName</option>
                                                ";
                                            }
                                            
                                            ?>
                                        </select>
                                        </div><br>
                                        
                                        <button type='submit' name='add-ref' class='btn btn-primary'>Add to portfolio</button>
                                        
                                    </form>
                                    <?php
                                    if(isset($_POST['add-ref'])){
                                        $rfolio_id=mysqli_real_escape_string($conn,($_POST['refportfolio']));
                                        $get_portfolio=mysqli_query($conn,"SELECT * FROM portifolios WHERE id='$rfolio_id'");
                                        $portfolioData=mysqli_fetch_assoc($get_portfolio);
                                        $portBalance=$portfolioData['balance']+$ref_bonus;
                                        
                                        $updateBalance=mysqli_query($conn,"UPDATE portifolios SET balance='$portBalance' WHERE id='$rfolio_id'");
                                        $updateAccounts=mysqli_query($conn, "UPDATE accounts SET balance='0' WHERE user_id='$id'");
                                        $mumu=$portfolioData['balance'];
                                        if($updateBalance){
                                            
                                            echo "
                                            
                                            <script>
                                            swal('Success','Portfolio Updated','success');
                                            </script>
                                            ";
                                        }
                                    }
                                    
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                  </div>
                </div>

                
              </div>
              <div class="row">
                

               
                

                <!-- Transactions -->
                <div class="col-md-12 col-lg-12 order-2 mb-4 mx-auto">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Activities</h5>
                      <div class="dropdown">
                       
                       
                      </div>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Portfolio</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    <?php
                            $getActivities = mysqli_query($conn, "SELECT * FROM `user_activities` WHERE `user_id` = '$id' ORDER BY `id` DESC  LIMIT 6");
                            if(mysqli_num_rows($getActivities)>0){
                              while($activities = mysqli_fetch_assoc($getActivities)){
                                $portifolioName = $activities['portifolio_name'];
                                $date = $activities['date'];
                                $description = $activities['description'];
                                $amount = $activities['amount']*$currency_rate;
                                
                                
                                if($activities['transaction_id'] && $activities['transaction_id'] !==""){
                                  $trxID = $activities['transaction_id'];
                                  $get_transaction = mysqli_query($conn, "SELECT * FROM `transactions` WHERE id = '$trxID'");
                                  $transaction = mysqli_fetch_assoc($get_transaction);
                                  $transaction_status=$transaction['status'];
                                }
                                else{
                                  $trxID = null;
                                  $transaction_status=null;
                                }
                                
                                
                                

                                echo"
                                <tr>
                        <td><i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>$portifolioName</strong></td>
                        <td>$description</td>
                        <td>
                          $symbol $amount
                            
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
                <!--/ Transactions -->
                
               
             
             
             
             
             
             
              </div>
            </div>












<?php require "footer.php"; ?>