<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "../config.php";
require "../mail.php";


?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../icon.png" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--sweet alerts -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl light-bg">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="../index" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                   
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">theackersfield</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Tell us more about yourself</h4>
              <p class="mb-4">Make your trading journey easy and fun!</p>

              <form id="formAuthentication" class="mb-3"  method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Full name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="fullname"
                    value=''
                    placeholder="Full name"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" required/>
                </div>

                <div class="mb-3">
                  <label for="organisation" class="form-label">Employment status</label>
                  
                  <select name="organisation" class="form-control" required placeholder="Employment status">
                      <option value="" hidden selected disabled>Employment status</option>
                      <option value="Employed">Employed</option>
                      <option value="Unemployed">Unemployed</option>
                      <option value="Self employed">Self employed</option>
                      <option value="Retired">Retired</option>
                      
                  </select>
                </div>
                <div class="mb-3">
                  <label for="position" class="form-label">Job title</label>
                  <input type="text" class="form-control" id="position" name="position" placeholder="Which position in your organisation do you operate?" required/>
                </div>
                <div class="mb-3">
                  <label for="salary" class="form-label">Annual income</label>
                  <select name="salary" class="form-control">
                      <option value="$10,000 - $99,000">$10,000 - $99,000</option>
                      <option value="$100,000 - $499,000">$100,000 - $499,000</option>
                      <option value="$500,000 and above">$500,000 and above</option>
                  </select>
                </div>
                

                <div class="mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone number" required/>
                </div>

                <div class="mb-3">
                  <label for="city" class="form-label">City</label>
                  <input type="text" class="form-control" id="city" name="city" placeholder="Where are you currently based?" required />
                </div>

                <div class="mb-3">
                  <label for="address" class="form-label">Contact address</label>
                  <textarea class="form-control" id="address" name="address" placeholder="Address" required></textarea>
                </div>

                <div class="mb-3">
                  <label for="zip" class="form-label">Zip code</label>
                  <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip code" required/>
                  

                </div>
                <button class="btn btn-primary d-grid w-100">Continue</button>
              </form>

              
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
<?php
if($_POST){
    $id=$_SESSION['user_id'];
$email=$_SESSION['email'];


	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$fullname=mysqli_real_escape_string($conn,$_POST['fullname']);
	$zip=mysqli_real_escape_string($conn,$_POST['zip']);
	$phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $address=mysqli_real_escape_string($conn,$_POST['address']);
    $organisation=mysqli_real_escape_string($conn,$_POST['organisation']);
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $salary=mysqli_real_escape_string($conn,$_POST['salary']);
    $position=mysqli_real_escape_string($conn,$_POST['position']);

	
		$update=mysqli_query($conn,"UPDATE users SET `username`='$username', `name`='$fullname',`phone`='$phone',`zip_code`='$zip',`address`='$address',`organisation`='$organisation',`city`='$city',`salary`='$salary', position='$position' WHERE id='$id'");
		//$update2=mysqli_query($conn,"UPDATE `accounts` SET `plan`='$investmentplan' WHERE `user_id`='$id'");
		if($update){
			$_SESSION['user_id']=$id;
			 //create portfolio
       $date = date("l jS \of F Y");
       $unix_time=time();
       $sql = "INSERT INTO portifolios(`user_id`, `name`, `description`, `amount`, `rate`, `save_pro`,`date`,`unix_time`,`ticker`,`type`) VALUES ('$id','Wallet','Original portfolio','0','','no','$date','$unix_time','BTC-USD','wallet')";
                  
      $createPortifolio = mysqli_query($conn,$sql);


			$path='auth.php';
				
            $nextstep=$path;

            
                         
			echo "
                <script>
                window.location.replace('$nextstep');
                </script>
                
                ";
				
			 
			$subject="Account created sucessfully";
			$message=" Your account at theackersfield has sucessfully been created. You can now Trade financial assets at the best rates";
			$sendmail=sendmail($email, $subject, $message);
			
		}
		else{
		
		echo mysqli_error($conn);
		}
	
	
}
?>
 <style>
              .layout-wrapper, .light-bg{
                background-color: #070b28 !important;
                color:white;
              }

              .card, .layout-navbar, #layout-menu, .footer{
                background-color: #131e51 !important;
                color:white;
              }
              a.layout-menu-toggle{
                background: rgb(253,51,76) !important;
              }
              .text-primary{
                color: rgb(253,51,76) !important;
              }
              .btn-primary{
                background-color:rgb(253,51,76) !important;
                border: none;
              }
              .btn-outline-primary{
                border-color: rgb(253,51,76) !important;
                color: rgb(253,51,76) !important;
              }
              .btn-outline-primary:hover{
                background-color: rgb(253,51,76) !important;
                color: #fff !important;
              }
              .btn{
                box-shadow: none !important;
              }
              ul .dropdown-menu{
                background: #131e51;
                color:#fff
              }
            </style>
