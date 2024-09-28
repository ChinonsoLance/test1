<?php

require "../config.php";
require "../mail.php";
require "variables.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Betastockfx Admin </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    function submitform(){
        document.getElementById("editsite").submit();
        
        
    }
</script>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                            <img src="../css/images/Betastockfx Coperate Mockup.jpg" width="100%" height="100%">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Change Site info</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your new site details and we'll handle the rest!</p>
                                    </div>
                                    <form class="user" method="post" id="editsite">
                                        <div class="form-group">
                                            <label>Site Email</label>
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter New Email..." name="email" value="<?php echo $sitemail; ?>">
                                        </div>
                                        <div class="form-group">
                                        <label>Site Name</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputSitename" aria-describedby="Sitenme"
                                                placeholder="Enter site name..." name="sitename"  value="<?php echo $sitename; ?>">
                                        </div>
                                        <div class="form-group">
                                        <label>Site Phone </label>
                                            <input type="tel" class="form-control form-control-user"
                                                id="exampleInputPhone" aria-describedby="Sitephone"
                                                placeholder="Enter New number..." name="phone"  value="<?php echo $sitephone; ?>">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" type="button" onclick="submitform()">
                                            Edit site
                                        </button>
                                    </form>
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



<?php
if($_POST){
   $site_name=$_POST['sitename'];
   $site_email=$_POST['email'];
   $site_phone=$_POST['phone'];

   $update_name=mysqli_query($conn, "UPDATE `settings` SET value='$site_name' WHERE id = 1");
   $update_email=mysqli_query($conn, "UPDATE `settings` SET value='$site_email' WHERE id = 2");
   $update_name=mysqli_query($conn, "UPDATE `settings` SET value='$site_phone' WHERE id = 3");

   echo "
        <script>
        swal('Great!', 'You have updated your site!', 'success');
        </script>
   ";

}



?>







    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>