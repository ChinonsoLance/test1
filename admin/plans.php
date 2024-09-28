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

    <title><?php echo $sitename; ?> - Edit users</title>
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
                 <button class="btn btn-success" data-toggle="modal" data-target="#createModal">Create Plan <i class="fas fa-plus"></i></button>
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
                    <h1 class="h3 mb-2 text-gray-800">Edit Plans</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tables </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                    <th>Plan Name</th>
                                            <th>Active</th>
                                            <th>ROI</th>
                                            <th>Amount</th>
                                            <th>Term</th>
                                            <th>Duration</th>
                                            <th>Slug</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Plan Name</th>
                                            <th>Active</th>
                                            <th>ROI</th>
                                            <th>Amount</th>
                                            <th>Term </th>
                                            <th>Duration</th>
                                            <th>Slug</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $accounts_query=mysqli_query($conn,"SELECT * FROM `iv_schemes`");
                                        if(mysqli_num_rows($accounts_query)>0){
                                            while($row=mysqli_fetch_assoc($accounts_query)){ 
                                                $name=$row['name'];
                                                $active=$row['active'];
                                                $amount=$row['amount'];
                                                $term=$row['term'];
                                                $ROI=$row['ROI'];
                                                $slug=$row['slug'];
                                                $plan_id=$row['id'];
                                                $duration=$row['duration'];
                                                echo "
                                                <tr >
                                                
                                                <td>$name</td>
                                                <td>$active</td>
                                                <td>$ROI</td>
                                                <td>$$amount</td>
                                                <td>$term</td>
                                                <td>$duration</td>
                                                <td>$slug</td>
                                                <td>
                                                <button class='btn btn-light' value='$plan_id' onclick=openModal(this.value)><i class='fas fa-cog'></i></button>
                                                <button id='hiddenEditbtn' class='btn d-none' data-toggle='modal' data-target='#editPlanModal'></button>
                                                </td>
                                                <td>
                                                <button class='btn btn-danger' value='$plan_id' onclick=confirmDelete(this.value)>&times</button>
                                                </td>
                                               
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



    <div class="modal fade" id="editPlanModal" tabindex="-1" role="dialog" aria-labelledby="Edit plans modal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit this Plan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    

                <form class="user" method="post" id="plan-form">
                    <input type="hidden" name="plan_id" id="plan_id" value="<?php echo $plan_id ?>"/>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Plan name: </label>
                                        <input type="text" class="form-control form-control-user" id="planname"
                                            placeholder="Plan Name" name="pname">
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Slug: </label>
                                        <input type="text" class="form-control form-control-user" id="slugname"
                                            placeholder="Slug" name="slug">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label>ROI </label>
                                    <input type="number" class="form-control form-control-user" id="roi"
                                        placeholder="ROI %" name="roi">
                                </div>

                               
                                <div class="row">
                                <div class="form-group col-6">
                                <label>Term : </label>
                                    <input type="number" class="form-control form-control-user" id="term"
                                        placeholder="Term" name="term">
                                </div>
                                <div class="form-group col-6">
                                <label>Duration : </label>
                                <select name="duration" class="form-control">
                                    <option id="days" value="1">day(s)</option>
                                    <option id="weeks" value="7">week(s)</option>
                                    <option id="months" value="30">Month(s)</option>
                                    
                                </select>
                                   
                                </div>
                                
                                
                                </div>
                               <div class="row">
                                <div class="form-group col-6">
                                <label>Min Amount: </label>
                                    <input type="number" class="form-control form-control-user" id="planamount"
                                        placeholder="Amount" name="amount">
                                </div>
                                
                                <div class="form-group col-6">
                                <label>Max Amount: </label>
                                    <input type="number" class="form-control form-control-user" id="maxamount"
                                        placeholder="Max amount" name="maxamount">
                                </div>
                                
                                </div>
                                
                                <div class="form-group">
                                <label>Active: </label>
                                
                                
                                    <select name="active" class="form-control" id="select-box">
                                     <option value="" selected hidden>Activate plan</option>  
                                     <option value="yes" id="active-yes">Active</option>
                                     <option value="no" value="no" id="active-no">Not active</option>
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
                                    <div class="row">
                        <div class="form-group col-6">
                            <label>Amount</label>
                           <input type="number" name="newamount" id="newamount" Placeholder="Amount" class="form-control" required/> 
                        </div>
                        <div class="form-group col-6">
                            <label>Max amount</label>
                           <input type="number" name="newmaxamount" id="newmaxamount" Placeholder="Max amount" class="form-control" required/> 
                        </div>
                        
                        </div>
                        
                        <div class="form-group">
                            <label>ROI</label>
                           <input type="number" name="newroi" id="newroi" Placeholder="ROI %" class="form-control" required/> 
                        </div>

                        
                        <div class="row">
                        <div class="form-group col-6">
                            <label>Term</label>
                           <input type="number" name="newterm" id="newterm" Placeholder="Term" class="form-control" required/> 
                        </div>
                        <div class="form-group col-6">
                            <label>Duration</label>
                           <select name="newduration" id="newduration" class="form-control" required> 
                           <option id="newdays" value="1">day(s)</option>
                                    <option id="newweeks" value="7">week(s)</option>
                                    <option id="newmonths" value="30">Month(s)</option>
                                    
                           </select>
                        </div>
                        
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
    $maxamount=$_POST['newmaxamount'];
    $roi=$_POST['newroi'];
    $term=$_POST['newterm'];
    $returns = 0;
    $durations = $_POST['newduration'];
    if($durations==1){
        $period="days";
    }
    else if($durations==7){
        $period="weeks";
    }
    else{
        $period="months";
    }
    $days=intval($durations)*intval($term);
    
    $insert=mysqli_query($conn, "INSERT INTO `iv_schemes`(`name`,`slug`,`amount`,`roi`,`returns`,`term`,`max_amount`,`days`,`duration`) VALUES('$planname','$slug','$amount','$roi','$returns','$term','$maxamount','$days','$period')");
    if($insert){
        echo "
        <script>
            swal('Great!', 'New Staking plan created!', 'success');
        </script>
        ";
    }
    else{
        $err= mysqli_error($conn);
        echo $err;
        echo "
        <script>
            swal('Great!',$err, 'success');
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
   <!-- <script src="js/demo/datatables-demo.js"></script>-->
    <script src="../alertifyjs/alertify.min.js"></script>
     <script>



if ( window.history.replaceState ) {

  window.history.replaceState( null, null, window.location.href );
}
function submit_form(){
    var myFormData=$("#plan-form").serialize();
    disable_btn();
    $.ajax({
        'type':'post',
        'url':'ajax/edit-plans.php',
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
    function openModal(id){
        
        $.ajax({
            type:'post',
            url:'ajax/fill-plan-inputs.php',
            data:{'id':id},
            success:function(data){
                 
                var plandata=JSON.parse(data);
                
                $("#planname").val(plandata.name);
                $("#slugname").val(plandata.slug);
                $("#roi").val(plandata.ROI);
                
                $("#term").val(plandata.term);
                $("#planamount").val(plandata.amount);
                $("#maxamount").val(plandata.max_amount);
                
                $("#plan_id").val(plandata.id);
               if(plandata.duration=="days"){
                   $("#days").attr("selected",true)
               }
               else if(plandata.duration=="weeks"){
                   $("#weeks").attr("selected",true);
               }
               else {
                   $("#months").attr("selected",true);
               }
                
               if(plandata.active=="yes"){
                   $("#active-yes").attr("selected",true);
               }  
                  else{
                      $("#active-no").attr("selected",true);
                  }
               
                document.getElementById("hiddenEditbtn").click();
            }
        });
    }
    
    
</script>

</body>

</html>