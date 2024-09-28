<?php
require "header.php";
?>
<!-- Transactions -->
<div class="row">
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
                        <th>Portifolio</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    <?php
                            $getActivities = mysqli_query($conn, "SELECT * FROM `user_activities` WHERE `user_id` = '$id' ORDER BY `id` DESC  ");
                            if(mysqli_num_rows($getActivities)>0){
                              while($activities = mysqli_fetch_assoc($getActivities)){
                                $portifolioName = $activities['portifolio_name'];
                                $date = $activities['date'];
                                $description = $activities['description'];
                                $amount = $activities['amount'];
                                
                               
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
                <!--/ Transactions -->









<?php
require "footer.php";
?>