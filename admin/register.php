
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Betastockfx - Register</title>
    <link rel="icon" type="image/x-icon" href="../css/images/favicon.png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                   
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register a user</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name" name="uname">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name" name="lname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control form-control-user" id="exampleInputNumber"
                                        placeholder="Phone" name="phone">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="cpassword">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                <center>
                                    <a href="index.php">Return to dashboard</a>
                                </center>
                                 
                            </form>
                            <hr>
                             
                        </div>
                    </div>
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
<script>
    function hideErrors(){
        document.getElementById("error-messages").style.display="none";
    }
</script>
</body>
<?php
require  "../config.php";
require "../mail.php";
if($_POST){
    $uname=mysqli_real_escape_string($conn,htmlspecialchars($_POST['uname']));
    $lname=mysqli_real_escape_string($conn,htmlspecialchars($_POST['lname']));
    $password=mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));
    $cpassword=mysqli_real_escape_string($conn,htmlspecialchars($_POST['cpassword']));
    $email=mysqli_real_escape_string($conn,htmlspecialchars($_POST['email']));
    $phone=mysqli_real_escape_string($conn,htmlspecialchars($_POST['phone']));
    $error=array();
    if(empty($uname)){
        $error['empty_username']="Firstname field cannot be empty";
    }
    if(empty($lname)){
        $error['empty_lastname']="Lastname field cannot be empty";
    }
    if(empty($email)){
        $error['empty_email']="Email field cannot be empty";
    }
    else{
        $query_email=mysqli_query($conn,"SELECT * FROM users WHERE `email`='$email'");
        if(mysqli_num_rows($query_email)>0){
            $error['multiple_emails']="Email Address already in use";
        }
    }
    if(empty($password)){
        $error['empty_password']="Password field cannot be empty";
    }
    if(empty($cpassword)){
        $error['empty_cpassword']="Password field cannot be empty";
    }
    if(empty($phone)){
        $error['empty_phone']="Phone number field cannot be empty";
    }
    if($password!=$cpassword){
        $error['diff_passwords']="Passwords not the same";
    }
   
    if(count($error)>0){
        echo"
        <div class='col-lg-6 mb-4' id='error-messages'>
                                    <div class='card bg-primary text-white  fixed-bottom message-box col-lg-6 mb-4'>
                                    <button class='close' onclick='hideErrors()'>&times</button>
                                        <div class='card-body'>";
                                                foreach($error as $errors){
                                                    echo"<li>$errors</li>";
                                                }
                                        echo "</div>
                                    </div>
                                </div>
        ";
    }
    else{
        $password=password_hash($password,PASSWORD_BCRYPT);
        $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); 
 $combLen = strlen($comb) - 1; 
 for ($i = 0; $i < 8; $i++) {
     $n = rand(0, $combLen);
     $pass[] = $comb[$n];
 }
    $OTP=implode($pass); 

        $insert=mysqli_query($conn,"INSERT INTO users (`username`,`name`,`email`,`password`,`phone`,`otp`,`status`) VALUES('$uname','$lname','$email','$password','$phone','$OTP','verified')");
        
        if($insert){
            $getid=mysqli_query($conn,"SELECT id FROM users WHERE email='$email'");
            if(mysqli_num_rows($getid)>0){
                $row=mysqli_fetch_assoc($getid);
                $id=$row['id'];
                $date=Date("Y-F-jS");
                $create=mysqli_query($conn,"INSERT INTO accounts(`user_id`,`balance`,`active`,`amount`,`plan`,`created_at`)VALUES('$id','0','yes','0','1','$date')");
            }
            echo"
            <div class='col-lg-6 mb-4' id='success-box'>
                                    <div class='card bg-success text-white shadow fixed-bottom message-box'>
                                        <div class='card-body'>
                                            Success
                                            <div class='text-white small'>New client account created</div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                var message=document.getElementById('success-box');
                                setTimeout(function(){
                                    message.style.display='none'
                                },3000);
                                </script>
            ";
        }
        else{
            echo"
            <div class='col-lg-6 mb-4' id='danger-box'>
                                    <div class='card bg-danger text-white shadow fixed-bottom danger-box'>
                                        <div class='card-body'>
                                            Error
                                            <div class='text-white small'>An error occured</div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                var message=document.getElementById('danger-box');
                                setTimeout(function(){
                                    message.style.display='none'
                                },3000);
                                </script>
            ";
        }
    }
}
?>
</html>