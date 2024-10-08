<?php
require "header.php";
?>



<!-- Transactions -->
<div class="row">
<div class="col-md-12 col-lg-12 order-2 mb-4 mx-auto">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Withdrawals</h5>
                      <div class="dropdown">
                       
                       
                      </div>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive text-nowrap">
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
                            $getActivities = mysqli_query($conn, "SELECT * FROM `transactions` WHERE `user_id` = '$id' AND `type`='withdrawal' ORDER BY `id` DESC");
                            if(mysqli_num_rows($getActivities)>0){
                              while($activities = mysqli_fetch_assoc($getActivities)){
                                $portifolioId = $activities['folio_id'];
                                $date = $activities['date'];
                                $amount = $activities['amount'];
                                $trxID = $activities['id'];
                                $transaction_status=$activities['status'];
                                
                                $get_transaction = mysqli_query($conn, "SELECT * FROM `portifolios` WHERE folio_id = '$portifolioId'");
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
                <!--/ Transactions -->
                        </div>



<?php
require "footer.php";
?>