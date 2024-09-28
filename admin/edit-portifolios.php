<?php

session_start();
require "../config.php";
require "variables.php";
$unix_time=time();
if(!isset($_SESSION['id'])){
  header("location:index.php");
}
else{
    $admin_name=$_SESSION['admin_name'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $sitename; ?> - Edit Portfolios</title>
<link rel="icon" type="image/x-icon" href="../css/images/favicon.png">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- include the style -->
<link rel="stylesheet" href="../alertifyjs/css/alertify.min.css" />
<!-- include a theme -->
<link rel="stylesheet" href="../alertifyjs/css/themes/default.min.css" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $sitename; ?> admin <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item  active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>User management</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Users:</h6>
                        <a class="collapse-item" href="register.php">Add users</a>
                         <a class="collapse-item" href="edit-users.php">Manage Clients</a>
                          <a class="collapse-item" href="kyc.php">Review KYC</a>
                         <a class="collapse-item" href="edit-portifolios.php">Manage Portfolios</a>
                        
						<a class="collapse-item" href="newsletter.php">Promotional emails</a>
						<a class="collapse-item" href="messages.php">Messages</a>
						
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Settings</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin settings:</h6>
                        <a class="collapse-item" href="change-password.php">Change password</a>
                        <a class="collapse-item" href="change-username.php">Change username</a>
                        <a class="collapse-item" href="change-email.php">Login email</a>
                        <a class="collapse-item" href="site-info.php">Site info</a>
                        <a class="collapse-item" href="plans.php">Investment Plans</a>
                        <a class="collapse-item" href="payments.php">Payment methods</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Charts -->
           

            <!-- Nav Item - Clients -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Clients</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                 
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        
                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $admin_name ;?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Clients Portfolios</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Select a client to edit portfolio </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            
                                            <th>Edit</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            
                                            
                                           
                                            
                                            <th>Edit</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $accounts_query=mysqli_query($conn,"SELECT * FROM `accounts` ORDER BY `id` DESC");
                                        if(mysqli_num_rows($accounts_query)>0){
                                            while($row=mysqli_fetch_assoc($accounts_query)){ 
                                                //$balance=$row['balance'];
                                                $active=$row['active'];
                                                $amount=$row['amount'];
                                                $created=$row['created_at'];
                                                if($row['plan']=="Free"){
                                                    $plan=2;
                                                }
                                                else{
                                                    $plan=$row['plan'];
                                                }

   
                                                
                                                
                                                $user_id=$row['user_id'];
                                                $wallet=$row['wallet'];
                                                $firstday=$row['duration'];
                                                $profit=$row['profit'];
                                                $today=time();
                                                $days=round(($today-intval($firstday))/86400,2) ;

                                                //get sum portifolio balance

                                                $get_total_portifolio_balance = mysqli_query($conn,"SELECT SUM(balance) FROM portifolios WHERE `user_id` = '$user_id'");
                                                if(mysqli_num_rows($get_total_portifolio_balance)>0){
                                                  $total_portifolio_balance=mysqli_fetch_assoc($get_total_portifolio_balance);
                                                  $btc_balance=round($total_portifolio_balance['SUM(balance)'],6);
                                                  $balance = round($btc_balance*$btc_price,2);
                                              }

                                                //getting users plan details
                                                
                                                $getplan=mysqli_query($conn,"SELECT * FROM `iv_schemes` WHERE `id`='$plan'");
                                                $rowslug=mysqli_fetch_assoc($getplan);
                                                $plan_slug=$rowslug['slug'];
                                                $plan_name=$rowslug['name'];
                                                $roi=$rowslug['ROI'];
                                                $plan_duration=$rowslug['term'];
                                          
                                                //$profit=round(($roi/100)*$days*$amount,3);
                                                 

                                                $query_name=mysqli_query($conn,"SELECT * FROM `users` WHERE id='$user_id'");
                                                if(mysqli_num_rows($query_name)>0){
                                                    $row2=mysqli_fetch_assoc($query_name);
                                                    $username=$row2['username'];
                                                    $name=$row2['name'];
                                                    $full_name=$name." ".$username;
                                                    $email=$row2['email'];
                                                    $phone=$row2['phone'];
                                                    $status=$row2['status'];
                                                    //$ref = $row2['ref'];
                                                    
                                                    //$select_referrer=mysqli_query($conn, "SELECT username FROM `users` WHERE id='$ref'");
                                                    //$get_ref=mysqli_fetch_assoc($select_referrer);
                                                    //$referrer = $get_ref['username'];
                                                 }
                                                 $amount=intval($amount);
                                                 $profit=intval($profit);
                                                 $newbal=(intval($balance)+intval($profit));
                                                 $roi_scheme=$profit+$amount;
                                                echo "
                                                <tr >
                                                
                                                <td>$full_name</td>
                                                <td>$email</td>
                                                
                                                
                       
                                               
                                                <td>
                                                <button class='btn edit-btn' value='$user_id' onclick='openModal(this.value)'>
                                                <i class='fas fa-user-edit'></i>
                                                </button> 
                                                <button id='hiddenEditbtn' class='btn d-none' data-toggle='modal' data-target='#editUserModal'></button>
                                                </td>
                                                
                                                ";
                                                
                                            echo"
                                               
                                               
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <?php echo $sitename; ?> <?php echo Date("Y");  ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php?logout=true">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!--
        Edit users Modal
    -->



    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="Edit users modal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Portfolio</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    

                <form class="user" method="post" id="user-form">
                    <input type="hidden" name="user_id" id="user_id"/>
                                <div class="form-group row">
                                <label>Select a portfolio to edit: </label>
                                    <select class="form-control" name="portifolioName" id="portifolioName" onchange="changeBalance(this.value)" required>
                                        
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                <label>Name: </label>
                                    <input type="text" class="form-control form-control-user" id="portifolioName2"
                                        placeholder="Portfolio name" name="portifolioName2">
                                </div>
                               
                                <div class="form-group">
                                <label>Balance : </label>
                                    <input type="number" class="form-control form-control-user" id="portifolioBalance"
                                        placeholder="Portfolio balance" name="portifolioBalance">
                                </div>
                                
                                <div class="form-group">
                                <label>Profit : </label>
                                    <input type="number" class="form-control form-control-user" id="portifolioProfit"
                                        placeholder="Portfolio profit" name="portifolioProfit">
                                </div>
                                <div class="form-group">
                                <label>Bot ID: </label>
                                    <input type="number" class="form-control form-control-user" id="botId"
                                        placeholder="Bot" name="botId">
                                            <li>0: no bot active</li>
                                        <?php
                                            $get_bot = mysqli_query($conn,"SELECT * FROM bots");
                                            if(mysqli_num_rows($get_bot)>0){
                                                while($bot_info=mysqli_fetch_assoc($get_bot)){
                                                    $bot_name=$bot_info['name'];
                                                    $botId=$bot_info['id'];
                                                    echo "
                                                    <li>$botId: $bot_name</li>
                                                    ";
                                                }
                                               
                                            }
                                        ?>
                                </div>


                                
                               
                                
                               
                                
                                <div class="form-group">
                                <label>Active: </label>
                                
                                
                                    <select name="active" class="form-control" id="select-box">
                                     <option value="" selected hidden>Make this portfolio active?</option>
                                     <option value="active" id="active-yes">Yes </option>              
                                    <option  value="null" id="active-no">No </option>
                                    </select>
                                </div>

                                <button type="button" name="edit" class="btn btn-primary btn-user btn-block" id="user-submit" onclick="submit_form()">
                                    Edit client Portfolio
                                </button>
                                <hr>
                                
                                 
                            </form>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    
                </div>
            </div>
        </div>
    </div>









<!-- Block modal-->


    <div class="modal fade" id="blockModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Suspend this account?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <form>
                    <button class="btn btn-danger" type="submit" value="" id="suspend" name="suspend">Suspend</button>
                    <button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button>
                        </form>
                </center>
                
                    </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>




<!--unblock modal-->

    <div class="modal fade" id="unblockModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unblock this account?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <form>
                    <button class="btn btn-success" type="submit" value="" id="unsuspend" name="unsuspend">unblock</button>
                    <button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button>
                        </form>
                </center>
                
                    </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>











    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
   <!-- <script src="js/demo/datatables-demo.js"></script>-->
    <script src="../alertifyjs/alertify.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

     <script>


if ( window.history.replaceState ) {

  window.history.replaceState( null, null, window.location.href );
}
function submit_form(){
    var myFormData=$("#user-form").serialize();
    disable_btn();
    $.ajax({
        'type':'post',
        'url':'ajax/edit-portifolios.php',
        'data':myFormData,
        'success':function(data){
            
            swal("Great",data,"success");
            enable_btn();
        }
    });
}

function changeBalance(id){
    $.ajax({
        type: 'post',
        url: 'ajax/get-balance.php',
        data: {'folioId': id},
        success: function(data){
            folioData=JSON.parse(data);
            console.log(folioData);
            $('#portifolioBalance').val(folioData.balance);
            $('#portifolioProfit').val(folioData.profit);
            $('#botId').val(folioData.botId);
            $('#portifolioName2').val(folioData.name);
            var folioStatus = folioData.status;
            if(folioStatus=="active"){
                $("#active-no").attr("selected",false);
                $("#active-yes").attr("selected",true);
            }
            else{
                $("#active-yes").attr("selected",false);
                $("#active-no").attr("selected",true);
            }
        }
    })
}

function disable_btn(){
   $("#user-submit").attr("disabled",true); 
   
}
function enable_btn(){
      $("#user-submit").attr("disabled",false); 
}
</script>
    <style>
    edit-btn:hover{
        color: #000;
        cursor: pointer;
    }
</style>

<script>










    //var optionsArr=[];
    function openModal(id){
        
        $.ajax({
            type:'post',
            url:'ajax/get-portifolio.php',
            data:{'user_id':id},
            success:function(data){
                //console.log(id,data);
                 
                var userdata=JSON.parse(data);
                console.log(userdata);
                
                $("#portifolioName").empty();
                userdata.map((data)=>{
                    
                    $("#portifolioName").prepend(data.options);
                    
                    
                });
                changeBalance($("#portifolioName").val());
                $("#user_id").val(id);
                //$("#portifolioBalance").val(data.portifolioBalance)
                //$("#inputEmail").val(userdata.options);

                //$("#lastName").val(userdata.name);
                //$("#inputEmail").val(userdata.email);
                //$("#inputNumber").val(userdata.phone);
                //$("#inputWallet").val(userdata.wallet);
                //$("#inputTotalInvestment").val(userdata.amount);
                //$("#inputBalance").val(parseInt(userdata.balance));
                //$("#inputPlan").val(userdata.plan);
                //$("#inputProfit").val(userdata.profit);
               
               
                
               if(userdata.active=="yes"){
                   $("#active-yes").attr("selected",true);
               }  
                  else{
                      $("#active-no").attr("selected",true);
                  }
               
                document.getElementById("hiddenEditbtn").click();
            }
        });
    }
    function blockUser(str){
        document.getElementById("hidden-block").click();
        $("#suspend").val(str);
    }
    function unblockUser(str){
        document.getElementById("hidden-unblock").click();
        $("#unsuspend").val(str);
    }
    
</script>
<?php



if(isset($_GET['suspend'])){
    $id=$_GET['suspend'];
    $update=mysqli_query($conn,"UPDATE `users` SET `status`='suspended'  WHERE id='$id'");
}

if(isset($_GET['unsuspend'])){
    $id=$_GET['unsuspend'];

    $update=mysqli_query($conn,"UPDATE `users` SET `status`='verified'  WHERE id='$id'");
}
?>
</body>

</html>