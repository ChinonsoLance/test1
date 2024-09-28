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
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
     
    <title><?php echo $sitename; ?> - Edit Payments</title>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                         <a class="collapse-item" href="edit-portifolios.php">Manage Portifolios</a>
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
                    <h1 class="h3 mb-2 text-gray-800">Edit Payment methods</h1>
                    <center>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#bank-modal">Bank transfer</button>
                    </center>
                    <?php
                    $query_bank=mysqli_query($conn,"SELECT * FROM `bank_transfer` WHERE id='1'");
                if(mysqli_num_rows($query_bank)>0){
                    $bank=mysqli_fetch_assoc($query_bank);
                    $bank_name=$bank['bank_name'];
                    $bank_details=$bank['bank_details'];
                    $account_details=$bank['account_details'];
                    $bank_active=$bank['active'];
                }
?>
                    <div class="modal fade" id="bank-modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header clearfix">
                                    Edit Bank Details
                                    <button class="btn-close btn btn-danger float-right" data-dismiss="modal">Close</button>
                                </div>
                                <div class="modal-body">
                                    <form method="post"  onsubmit="filltext()">
                                        <div class="form-group">
                                            <label>Bank Name</label>
                                            <input type="text" name="bank_name" class="form-control" placeholder="Bank name" value="<?php echo $bank_name; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Routing Number</label>
                                            <textarea value="" id="bank-details" type="text" name="bank_details" class="form-control d-none" placeholder="Bank Details">

                                            </textarea> 
                                            <div id="bank-container" style="height:250px;"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Account Details</label>
                                            <textarea value="" id="account-details" type="text" name="account_details" class="form-control d-none" placeholder="Account details" >
                                            
                                        </textarea>
                                            <div id="account-container" style="height:250px;"></div>
                                        </div>
                                        <label>Active:</label>
                                        <input type="text" name="bankactive" placeholder="yes or no (small letters)" value="<?php echo $bank_active; ?>" class="form-control" >

                                        <center>

                                         <button type="submit" name="edit_bank" class="btn btn-primary">
                                             Update&nbsp;<i class="fa fa-bank"></i>
                                         </button>
                                     </center>


                                    </form>
<?php

if(isset($_POST['edit_bank'])){
    $newbankname=$_POST['bank_name'];
    if($_POST['bank_details']=="<p><br></p>"){
       $newbankdetails= $bank_details;
    }
    else{
       $newbankdetails=$_POST['bank_details']; 
    }
    
    if($_POST['account_details']=="<p><br></p>"){
       $newaccountdetails= $account_details;
    }
    else{
       $newaccountdetails=$_POST['account_details']; 
    }
    
    $posts=json_encode($_POST);
    
    
    $isactive=$_POST['bankactive'];

    $update=mysqli_query($conn, "UPDATE `bank_transfer` SET `bank_name`='$newbankname', `bank_details`='$newbankdetails', `account_details`='$newaccountdetails', `active`='$isactive'");
    if($update){
        echo "
        <script>
        swal('Great','Bank account updated','success');
        
        </script>
        
        ";
    }
}

?>
                                    <script>
var quill = new Quill('#account-container', {
  modules: {
    toolbar: true
  },
  placeholder: 'Leave empty if you dont want to change this',
  theme: 'snow'  // or 'bubble'
});
var quill2 = new Quill('#bank-container', {
  modules: {
    toolbar: true
  },
  placeholder: 'Leave empty if you dont want to change this',
  theme: 'snow'  // or 'bubble'
});

function filltext(){
$("#account-details").val(quill.container.firstChild.innerHTML);
$("#bank-details").val(quill2.container.firstChild.innerHTML);
}
    function openModal(id){
        $("#email-input").val(id);
        //$("#togglemodal").click();
         
    }
     
</script>
                                </div>

                            </div>
                        </div>
                    </div>




                    <!-- DataTales Example -->
                    <div class="row">
                    <?php
                        $query=mysqli_query($conn,"SELECT * FROM `payment_methods`");
                        if(mysqli_num_rows($query)>0){
                            while($row=mysqli_fetch_assoc($query)){
                                $image=$row['image'];
                                $name=$row['name'];
                                $address=$row['wallet_address'];
                                $id=$row['id'];
                                $active=$row['active'];
                                $select="";
                                $nselect="";
                                if($active=="yes"){
                                    $select=true;
                                }
                                
                                if($active=="no"){
                                    $nselect=true;
                                }
                                

                                echo"
                                <div class='col col-lg-3 col-sm-6 col-6'>
                           <button type='button' class='btn' value='$id' onclick='paymentModal(this.value)' >
                            <div class='card mt-2'>
                                
                                <div class='card-body'>
                                    <div class='card-image'>
                                        <img src='../dashboard/images/$image' alt='$name' class='card-img-top img-fluid img-responsive' style='width:100%;height:100%;'/>
                                    </div>
                                </div>
        
                         
                            </div>
                            </button>
                            <button id='paymentmodalbtn' class='d-none' data-toggle='modal' data-target='#mymodal'>
                            </button>
        
                            </div>
        
        
        
        
                                ";

                            }
                        }

                    ?>
                    
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



    <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="Edit plans modal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Payment Method</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    

                <form class="user" method="post" id="payments-form">
                    <input type="hidden" name="payment_id" id="payment_id" value=""/>
   
                                <div class="form-group">
                                <label>wallet Address </label>
                                    <input type="text" class="form-control form-control-user" id="address"
                                        placeholder="Wallet address" name="address">
                                </div>

                               
                              
                                
                                <div class="form-group">
                                <label>Active: </label>
                                
                                
                                    <select name="active" class="form-control" id="select-box">
                                     <option value="" selected hidden>Activate Method</option>  
                                     <option value="yes" id="active-yes">Active</option>
                                     <option value="no" value="no" id="active-no">Disable</option>
                                    </select>
                                </div>

                                <button type="button" name="edit" class="btn btn-primary btn-user btn-block" id="user-submit" onclick="submit_form()">
                                    Edit Plan
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

<!-- Create modal-->


<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create a new plan?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="createform">
                    <div class="container">
                        <div class="row">
                        <div class="form-group col-md-6 col-sm-6 col-6">
                            <label>Plan Name</label>
                           <input type="text" name="newplanname" id="newplanname" Placeholder="Plan Name" class="form-control"  required/> 
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-6">
                            <label>Slug</label>
                           <input type="text" name="newslug" id="newslug" Placeholder="Slug"  class="form-control" required/> 
                        </div>
                                    </div>
                                    </div>
                        <div class="form-group">
                            <label>Amount</label>
                           <input type="number" name="newamount" id="newamount" Placeholder="Amount" class="form-control" required/> 
                        </div> 
                        
                        <div class="form-group">
                            <label>ROI</label>
                           <input type="number" name="newroi" id="newroi" Placeholder="ROI %" class="form-control" required/> 
                        </div>

                        <div class="form-group">
                            <label>Returns</label>
                           <input type="number" name="newrreturns" id="newreturns" Placeholder="Returns" class="form-control" required/> 
                        </div>

                        <div class="form-group">
                            <label>Duration</label>
                           <input type="number" name="newterm" id="newterm" Placeholder="Duration" class="form-control" required/> 
                        </div>

                        <div class="form-group">
                           <button class="btn btn-block btn-primary" name="create-plan">Create plan</button> 
                           
                        </div>
                                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    
                </div>
            </div>
        </div>
    </div>
<?php
if(isset($_POST['create-plan'])){
    $planname=$_POST['newplanname'];
    $slug=$_POST['newslug'];
    $amount=$_POST['newamount'];
    $roi=$_POST['newroi'];
    $term=$_POST['newterm'];
    $returns = $_POST['returns'];

    $insert=mysqli_query($conn, "INSERT INTO `iv_schemes`(`name`,`slug`,`amount`,`roi`,`returns`,`term`) VALUES('$planname','$slug','$amount','$roi','$returns','$term')");
    if($insert){
        echo "
        <script>
            swal('Great!', 'New Staking plan created!', 'success');
        </script>
        ";
    }
}

?>


<!--unblock modal-->

  











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
    <script src="js/demo/datatables-demo.js"></script>
    <script src="../alertifyjs/alertify.min.js"></script>
     <script>



if ( window.history.replaceState ) {

  window.history.replaceState( null, null, window.location.href );
}
function submit_form(){
    var myFormData=$("#payments-form").serialize();
    disable_btn();
    $.ajax({
        'type':'post',
        'url':'ajax/edit-payments.php',
        'data':myFormData,
        'success':function(data){
            //alertify.alert(data);
            swal("Great!",data,"success");
            enable_btn();
        }
    });
}

function confirmDelete(val){
    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Plan!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
        'type':'post',
        'url':'ajax/delete-plan.php',
        'data':{'id':val},
        'success':function(data){
            //alertify.alert(data);
            swal("Poof! Plan deleted!", {
            icon: "success",
    });
        }
    });
    
  } else {
    swal("Your plan is safe!");
  }
});
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
    function paymentModal(id){
        
        $.ajax({
            type:'post',
            url:'ajax/fill-payment-inputs.php',
            data:{'id':id},
            success:function(data){
                 
                var paymentdata=JSON.parse(data);
                
                
                
                $("#address").val(paymentdata.wallet_address);
                
                
                $("#payment_id").val(paymentdata.id);
               
                
               if(paymentdata.active=="yes"){
                   $("#active-yes").attr("selected",true);
               }  
                  else{
                      $("#active-no").attr("selected",true);
                  }
               
                document.getElementById("paymentmodalbtn").click();
            }
        });
    }
    
    
</script>

</body>

</html>