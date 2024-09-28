<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require "PHPMailer/vendor/autoload.php";
 function sendmail($to,$subject,$message,$attachment=null,$name=""){
     
     $to=$to;
     $subject=$subject;
     
     $file="https://tatcoin.net/images/w_logo.png";
     $body="<html>  
     <body style='color: #000; font-size: 16px; text-decoration: none; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; background-color: #efefef;'>
         
         <div id='wrapper' style='max-width: 600px; margin: auto auto; padding: 20px;'>
             
             <div id='logo' style='color:#E1B530;padding:10px;'>
                 <center><h1 style='margin: 0px;'></h1></center>
             </div>
                 
             <div id='content' style='font-size: 16px; padding: 25px; background-color: #fff;
                 moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; -khtml-border-radius: 10px;
                 border-color: blue; border-width: 4px 1px; border-style: solid;position:relative;top:-180px;'>
 
                 <h1 style='font-size: 22px;'><center>$subject</center></h1>
                 
                 <p>Hi $name,</p>
 
                  $message

                 <p> 
                 Best Regards!<br>
                 Management,<br>
                 theackersfield.
                 
                 </p>
                 <br />
                 <p><center><a href='https://theackersfield.co'></a></center></p>
 
                 <p style='display: flex; justify-content: center; margin-top: 10px;'><center>
                      
                      </div>
                 </center></p>
                 
             </div>
             <div id='footer1' style='margin-bottom: 20px; padding: 0px 8px; text-align: center;background-color: #e5e7e9; padding: 10px;position:relative;top:-180px;'>
             
             Have a problem? contact us. We're active from Mondays to Fridays 8am - 5pm, then Saturdays 10am - 4pm
             <p>
             2 Woodberry Grove, North Finchley, London, N12 0DR
             </p>
             
        </div>
             <div id='footer' style='margin-bottom: 20px; padding: 0px 8px; text-align: center;position:relative;top:-180px;'>

                  Copyright theackersfield 2023.
             </div>
         </div>
     </body>
 </html>
 ";


$mail=new PHPMailer(true);
$mail->SMTPDebug=0;
$mail->isSMTP(true);
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->Host="mail.theackersfield.co";
$mail->Username="info@theackersfield.co";
$mail->Password="Jesusislord123$";


$mail->isHTML(true);
$mail->setFrom("support@theackersfield.co","theackersfield");
$mail->addAddress($to);
$mail->Subject=$subject;
$mail->Body=$body;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
if($attachment!=null){
    $mail->addStringAttachment($pdfDoc, 'Transaction-receipt.pdf');
}

$sendmail=$mail->send();
 }

?>