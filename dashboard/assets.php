<?php require "header.php";?>

<style>
  @media screen and (min-width:205px){
    .card{
    width:46%;
    margin:5px;
  }
  }

  @media screen and (min-width:765px){
    .card{
    width:23%;
    margin:5px;
  }
  }
  .card img{
    width:100%;
    height: 150px
  }
  .card{
    padding: 4px;
    display: flex;
  }
  .card-text{
    text-align: center;
    color:black;
    
  }
  .row{
    display: flex;
    
  }
  .card-price{
    color:black;
    display: inline;
    color:darkgrey;
    font-weight: 300;
  }
  .redtxt, .greentxt{
    display: inline;
    float:right;
    text-align: right;

  }
  .smalltxt{
    font-weight: 300;
    text-align: center;
    font-size: 14px;
    color:darkgrey;
  }
  .redtxt{
    color:red;
  }
  .greentxt{
    color:green;
  }
  h4{
    text-align: center;
  }
  
 
</style>
<p class="text-center">Select any asset to invest in</p>
<h4 >Crypto Currencies</h4>
  <hr>
  <br>
  <div class="row  ">
   
    <a href="create-portifolio.php?ticker=<?php echo $crypto[0]['code']; ?>" class="card">
    <img src="css/images/btc.jpg" alt="placeholder">
    <div class="card-text">
     bitcoin
     
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[0]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[0]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
    
   </a>
  
   
    <a href="create-portifolio.php?ticker=<?php echo $crypto[1]['code']; ?>" class="card">
    <img src="css/images/enth.jpg" alt="placeholder">
    <div class="card-text">
     ethereum
      </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[1]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[1]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
    
   </a>
   
   
   
    <a href="create-portifolio.php?ticker=<?php echo $crypto[5]['code']; ?>" class="card">
    <img src="css/images/tron.jpg" alt="placeholder">
    <div class="card-text">
     Tron coin
      </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[5]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[5]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   
      <a href="create-portifolio.php?ticker=<?php echo $crypto[2]['code']; ?>" class="card">
    <img src="css/images/dog.jpg" alt="placeholder">
    <div class="card-text">
     dogecoin
      </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[2]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[2]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
      <a href="create-portifolio.php?ticker=<?php echo $crypto[3]['code']; ?>" class="card">
    <img src="css/images/litecoin.jpg" alt="placeholder">
    <div class="card-text">
     litecoin
      </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[3]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[3]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   
      <a href="create-portifolio.php?ticker=<?php echo $crypto[4]['code']; ?>" class="card">
    <img src="css/images/cardano.jpg" alt="placeholder">
    <div class="card-text">
     Cardano(ADA)
      </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[4]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[4]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
    <a href="create-portifolio.php?ticker=<?php echo $crypto[10]['code']; ?>" class="card">
    <img src="css/images/Binance.jpg" alt="placeholder">
    <div class="card-text">
     Binance coin(BNB)
      </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[10]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[10]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $crypto[16]['code']; ?>" class="card">
    <img src="css/images/ripple.webp" alt="placeholder">
    <div class="card-text">
     Ripple(XRP)
      </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[16]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[16]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $crypto[15]['code']; ?>" class="card">
    <img src="css/images/solana.png" alt="placeholder">
    <div class="card-text">
     Solana(SOL)
      </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[15]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[15]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $crypto[12]['code']; ?>" class="card">
    <img src="css/images/chainlink.png" alt="placeholder">
    <div class="card-text">
     Chainlink(Link)
      </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[12]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[12]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $crypto[11]['code']; ?>" class="card">
    <img src="css/images/bitcoincash.webp" alt="placeholder">
    <div class="card-text">
     Bitcoin cash(BCH)
      </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[11]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[11]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $crypto[14]['code']; ?>" class="card">
    <img src="css/images/polkadot.jpg" alt="placeholder">
    <div class="card-text">
     polkaDot(DOT)
      </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[14]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[14]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $crypto[13]['code']; ?>" class="card">
    <img src="css/images/usdcoin.webp" alt="placeholder">
    <div class="card-text">
     USD coin(USDC)
      </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[13]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[13]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   
   
   <a href="create-portifolio.php?ticker=<?php echo $crypto[18]['code']; ?>" class="card">
    <img src="css/images/panakeswap.webp" alt="placeholder">
    <div class="card-text">
     PancakeSwap(CAKE)
      </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto[18]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto[18]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
    </div>
    <br><br>
  <h4 >Commodities</h4>
  <hr>
  <br>
 
   <div class="row ">
    
    <a href="create-portifolio.php?ticker=<?php echo $precious_metals[0]['code']; ?>" class="card">
    <img src="css/images/gold.jpg" alt="placeholder">
    <div class="card-text">
     Gold
     </div>
     
      <div class="card-price">
     %change
     </div>
     <div class="<?php if($precious_metals[0]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $precious_metals[0]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
    
   </a>
   
    <a href="create-portifolio.php?ticker=<?php echo $precious_metals[1]['code']; ?>" class="card">
    <img src="css/images/silver.jpg" alt="placeholder">
    <div class="card-text">
     Silver
     </div>
      <div class="card-price">
     %change
     </div>
     <div class="<?php if($precious_metals[1]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $precious_metals[1]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
    
   </a>
   
   
    </div>
  <br>
  
  
  
  
  
  
  
  <h4 >Stocks</h4>
  <hr>
  <br>
  <div class="row  ">
  <a href="create-portifolio.php?ticker=<?php echo $stocks[0]['code']; ?>" class="card">
    <img src="css/images/applet.jpg" alt="placeholder">
    <div class="card-text">
     Apple
     
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[0]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[0]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
 
    <a href="create-portifolio.php?ticker=<?php echo $stocks[3]['code']; ?>" class="card">
    <img src="css/images/windows.jpg" alt="placeholder">
    <div class="card-text">
     microsoft
     
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[3]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[3]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
     <a href="create-portifolio.php?ticker=<?php echo $stocks[4]['code']; ?>" class="card">
    <img src="css/images/amazon.jpg" alt="placeholder">
    <div class="card-text">
     amazon
     
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[4]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[4]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
      <a href="create-portifolio.php?ticker=<?php echo $stocks[5]['code']; ?>" class="card">
    <img src="css/images/facebook.jpg" alt="placeholder">
    <div class="card-text">
     facebook
     
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[5]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[5]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
     
   <a href="create-portifolio.php?ticker=<?php echo $stocks[15]['code']; ?>" class="card">
    <img src="css/images/visa.png" alt="placeholder">
    <div class="card-text">
     Visa (V)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[15]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[15]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $stocks[2]['code']; ?>" class="card">
    <img src="css/images/tesla.jpg" alt="placeholder">
    <div class="card-text">
     tesla
     
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[2]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[2]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
   <a href="create-portifolio.php?ticker=<?php echo $stocks[13]['code']; ?>" class="card">
    <img src="css/images/general%20motors.jpg" alt="placeholder">
    <div class="card-text">
     General Motors (GM)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[13]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[13]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $stocks[23]['code']; ?>" class="card">
    <img src="css/images/berkshire.png" alt="placeholder">
    <div class="card-text">
     Berkshire Hathaway
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[23]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[23]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $stocks[9]['code']; ?>" class="card">
    <img src="css/images/jpmorgan.png" alt="placeholder">
    <div class="card-text">
     JP Morgan chase
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[9]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[9]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
   <a href="create-portifolio.php?ticker=<?php echo $stocks[22]['code']; ?>"  class="card">
    <img src="css/images/ALPHABET.jpg" alt="placeholder">
    <div class="card-text">
     Alphabet Inc
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[22]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[22]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $stocks[12]['code']; ?>" class="card">
    <img src="css/images/mastercard-inc.jpg" alt="placeholder">
    <div class="card-text">
     Mastercard Incorporated (A)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[12]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[12]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
     <a href="create-portifolio.php?ticker=<?php echo $stocks[11]['code']; ?>" class="card">
    <img src="css/images/netflix.png" alt="placeholder">
    <div class="card-text">
     Netflix, Inc
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[11]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[11]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   <a href="create-portifolio.php?ticker=" class="card">
    <img src="css/images/cocacola.png" alt="placeholder">
    <div class="card-text">
     Coca-Cola (KO)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[14]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[14]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <a href="create-portifolio.php?ticker=<?php echo $stocks[16]['code']; ?>" class="card">
    <img src="css/images/gamestop%20corp.png" alt="placeholder">
    <div class="card-text">
     GameStop Corp
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[16]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[16]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
    <a href="create-portifolio.php?ticker=<?php echo $stocks[1]['code']; ?>" class="card">
    <img src="css/images/moderna%20inc.png" alt="placeholder">
    <div class="card-text">
     Moderna Inc
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[1]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[1]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
    <a href="create-portifolio.php?ticker=<?php echo $stocks[24]['code']; ?>" class="card">
    <img src="css/images/cleveland%20cliffs.jpg" alt="placeholder">
    <div class="card-text">
     Cleveland-Cliffs Inc
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[24]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[24]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
    <a href="create-portifolio.php?ticker=<?php echo $stocks[18]['code']; ?>" class="card">
    <img src="css/images/moodys%20corporation.gif" alt="placeholder">
    <div class="card-text">
   Moody’s Corporation
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[18]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[18]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
    <a href="create-portifolio.php?ticker=<?php echo $stocks[19]['code']; ?>" class="card">
    <img src="css/images/johnson%20&%20johnson.jpg" alt="placeholder">
    <div class="card-text">
    Johnson & Johnson
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[19]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[19]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
    <a href="create-portifolio.php?ticker=<?php echo $stocks[20]['code']; ?>" class="card">
    <img src="css/images/mc%20donald%20corporation.png" alt="placeholder">
    <div class="card-text">
     McDonald’s Corporation
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[20]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[20]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
    <a href="create-portifolio.php?ticker=<?php echo $stocks[8]['code']; ?>" class="card">
    <img src="css/images/paypal%20holding.jpg" alt="placeholder">
    <div class="card-text">
     PayPal Holdings, Inc (PYPL)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[8]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[8]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
    <a href="create-portifolio.php?ticker=<?php echo $stocks[21]['code']; ?>" class="card">
    <img src="css/images/alibaba.jpg" alt="placeholder">
    <div class="card-text">
      Alibaba (BABA)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[21]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[21]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
    <a href="create-portifolio.php?ticker=<?php echo $stocks[7]['code']; ?>" class="card">
    <img src="css/images/pfizer%20inc.jpg" alt="placeholder">
    <div class="card-text">
      Pfizer Inc. (PFE)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[7]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[7]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
    <a href="create-portifolio.php?ticker=<?php echo $stocks[9]['code']; ?>" class="card">
    <img src="css/images/nvidia%20corp.png" alt="placeholder">
    <div class="card-text">
      Nvidia Corp (NVDA)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[9]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[9]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $stocks[24]['code']; ?>" class="card">
    <img src="css/images/AMC-IMG.jpg" alt="placeholder">
    <div class="card-text">
      AMC Entertainment holdings ltd
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($stocks[24]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $stocks[24]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
    </div>
 <br>
  
  <h4 >ETFS</h4>
  <hr>
  <br>
  <div class="row  ">
  
    <a href="create-portifolio.php?ticker=<?php echo $sector_etfs[0]['code']; ?>" class="card">
    <img src="css/images/SSPY-S&P.jpg" alt="placeholder">
    <div class="card-text">
     SPDR S&P 500 ETF (SPY)
     
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($sector_etfs[3]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $sector_etfs[3]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   
   
    <a href="create-portifolio.php?ticker=<?php echo $sector_etfs[7]['code']; ?>" class="card">
    <img src="css/images/VANGUARDTOTALSTOCKMARKET.png" alt="placeholder">
    <div class="card-text">
     Vanguard Total Stock Market
     
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($sector_etfs[7]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $sector_etfs[7]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
      <a href="create-portifolio.php?ticker=<?php echo $sector_etfs[5]['code']; ?>" class="card">
    <img src="css/images/VANGUARDS&P.png" alt="placeholder">
    <div class="card-text">
     Vanguard S&P 500 ETF (VOO)
     
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($sector_etfs[5]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $sector_etfs[5]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $sector_etfs[6]['code']; ?>" class="card">
    <img src="css/images/Invesco-Logo-Blue.webp" alt="placeholder">
    <div class="card-text">
     Invesco QQQ (QQQ)
     
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($sector_etfs[6]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $sector_etfs[6]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
  </div>
 <br>
  
  
  
  
  
 
  
  
  
  
  
  
  
  
  
  <h4 >Crypto ETFs</h4>
  <hr>
  <br>
  
  <div class="row  ">
  
    <a href="create-portifolio.php?ticker=<?php echo $crypto_etf[0]['code']; ?>" class="card">
    <img src="css/images/Data%20Sharing%20(BLOK).png" alt="placeholder">
    <div class="card-text">
     Data Sharing (BLOK)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto_etf[0]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto_etf[0]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
    <a href="create-portifolio.php?ticker=<?php echo $crypto_etf[1]['code']; ?>" class="card">
    <img src="css/images/NexGen%20Economy%20(BLCN).png" alt="placeholder">
    <div class="card-text">
     NexGen Economy (BLCN)
     </div>
     
     <div class="card-price">
    change
     </div>
     <div class="<?php if($crypto_etf[1]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto_etf[1]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 

   
    <a href="create-portifolio.php?ticker=<?php echo $crypto_etf[3]['code']; ?>" class="card">
    <img src="css/images/NextGen%20Protocol.jpg" alt="placeholder">
    <div class="card-text">
      NextGen Protocol 
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto_etf[3]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto_etf[3]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $crypto_etf[4]['code']; ?>" class="card">
    <img src="css/images/Purpose%20Bitcoin.jpg" alt="placeholder">
    <div class="card-text">
        Purpose Bitcoin
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto_etf[4]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto_etf[4]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
   
   <a href="create-portifolio.php?ticker=<?php echo $crypto_etf[2]['code']; ?>" class="card">
    <img src="css/images/Transaction%20(LEGR).png" alt="placeholder">
    <div class="card-text">
         Transaction (LEGR)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto_etf[2]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto_etf[2]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
  <a href="create-portifolio.php?ticker=<?php echo $crypto_etf[5]['code']; ?>" class="card">
    <img src="css/images/Evolve%20Bitcoin.jpg" alt="placeholder">
    <div class="card-text">
      Evolve Bitcoin
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto_etf[5]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto_etf[5]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
  
  <a href="create-portifolio.php?ticker=<?php echo $crypto_etf[6]['code']; ?>" class="card">
    <img src="css/images/Galaxy%20Bitcoin.jpg" alt="placeholder">
    <div class="card-text">
      Galaxy Bitcoin
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto_etf[6]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto_etf[6]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $crypto_etf[7]['code']; ?>" class="card">
    <img src="css/images/CoinShares%20Bitcoin.jpg" alt="placeholder">
    <div class="card-text">
       CoinShares Bitcoin
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($crypto_etf[7]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $crypto_etf[7]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
 
  </div>
  <br>
  
   
  
  
  
  
  
  <h4 >Precious Metals ETFs</h4>
  <hr>
  <br>
  
  <div class="row  ">
  
    <a href="create-portifolio.php?ticker=<?php echo $precious_metal_etf[7]['code']; ?>" class="card">
    <img src="css/images/direction%20daily%2020.png" alt="placeholder">
    <div class="card-text">
     SPDR Gold Shares
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($precious_metal_etf[7]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $precious_metal_etf[7]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
    <a href="create-portifolio.php?ticker=<?php echo $precious_metal_etf[0]['code']; ?>" class="card">
    <img src="css/images/icvt.png" alt="placeholder">
    <div class="card-text">
     iShares Gold Trust
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($precious_metal_etf[0]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $precious_metal_etf[0]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 

   
    <a href="create-portifolio.php?ticker=<?php echo $precious_metal_etf[1]['code']; ?>" class="card">
    <img src="css/images/fltr.png" alt="placeholder">
    <div class="card-text">
      Gold MiniShares
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($precious_metal_etf[1]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $precious_metal_etf[1]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $precious_metal_etf[2]['code']; ?>" class="card">
    <img src="css/images/Data%20Sharing%20(BLOK).png" alt="placeholder">
    <div class="card-text">
       Aberdeen Standard
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($precious_metal_etf[2]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $precious_metal_etf[2]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
  <a href="create-portifolio.php?ticker=<?php echo $precious_metal_etf[3]['code']; ?>" class="card">
    <img src="css/images/Invesco%20S&P%20500%20Equal%20Weight%20Communication%20Services%20ETF%20(EWCO).gif" alt="placeholder">
    <div class="card-text">
      GraniteShares
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($precious_metal_etf[3]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $precious_metal_etf[3]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
  
  <a href="create-portifolio.php?ticker=<?php echo $precious_metal_etf[4]['code']; ?>" class="card">
    <img src="css/images/unitedstate2%20year%20bond%20yeild.png" alt="placeholder">
    <div class="card-text">
      VanEck Merk Gold
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($precious_metal_etf[4]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $precious_metal_etf[4]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $precious_metal_etf[5]['code']; ?>" class="card">
    <img src="css/images/iShares%20Global%20REIT%20ETF%20(REET).png" alt="placeholder">
    <div class="card-text">
       Invesco DB Precious Metal 
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($precious_metal_etf[5]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $precious_metal_etf[5]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
  <a href="create-portifolio.php?ticker=<?php echo $precious_metal_etf[6]['code']; ?>" class="card">
    <img src="css/images/ISHARESBLOOMBERGROLLSELECT.jpg" alt="placeholder">
    <div class="card-text">
      Invesco DB Gold Fund
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($precious_metal_etf[6]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $precious_metal_etf[6]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
 
  </div>
  <br>
  
  
  
  
  
  
  <h4 >Bond ETFS</h4>
  <hr>
  <br>
  
  <div class="row  ">
  
      
   
   <a href="create-portifolio.php?ticker=<?php echo $bonds[7]['code']; ?>" class="card">
    <img src="css/images/direction%20daily%2020.png" alt="placeholder">
    <div class="card-text">
      US3MT
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($bonds[5]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $bonds[5]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
  <a href="create-portifolio.php?ticker=<?php echo $bonds[2]['code']; ?>" class="card">
    <img src="css/images/unitedstate1.webp" alt="placeholder">
    <div class="card-text">
      US1YT
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($bonds[2]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $bonds[2]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
  
  <a href="create-portifolio.php?ticker=<?php echo $bonds[3]['code']; ?>" class="card">
    <img src="css/images/unitedstate2%20year%20bond%20yeild.png" alt="placeholder">
    <div class="card-text">
      US2YT
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($bonds[3]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $bonds[3]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $bonds[4]['code']; ?>" class="card">
    <img src="css/images/iShares%20Global%20REIT%20ETF%20(REET).png" alt="placeholder">
    <div class="card-text">
      US5YT
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($bonds[4]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $bonds[4]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
  <a href="create-portifolio.php?ticker=<?php echo $bonds[0]['code']; ?>" class="card">
    <img src="css/images/Invesco%20S&P%20500%20Equal%20Weight%20Communication%20Services%20ETF%20(EWCO).gif" alt="placeholder">
    <div class="card-text">
      US10YT
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($bonds[0]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $bonds[0]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
  
  <a href="create-portifolio.php?ticker=<?php echo $bonds[5]['code']; ?>" class="card">
    <img src="css/images/united%20state%2030%20year%20bond.png" alt="placeholder">
    <div class="card-text">
      US30YT
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($bonds[5]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $bonds[5]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
  
  
  </div>
  <br>
  
  
  
  <h4 >Commodity ETFS</h4>
  <hr>
  <br>
  
  <div class="row  ">
  
    <a href="create-portifolio.php?ticker=<?php echo $comm_etfs[0]['code']; ?>" class="card">
    <img src="css/images/pdbc.jpg" alt="placeholder">
    <div class="card-text">
     Invesco Optimum Yield
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($comm_etfs[0]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $comm_etfs[0]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
    <a href="create-portifolio.php?ticker=<?php echo $comm_etfs[1]['code']; ?>" class="card">
    <img src="css/images/ftgc.png" alt="placeholder">
    <div class="card-text">
     (FTGC)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($comm_etfs[1]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $comm_etfs[1]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 

   
    <a href="create-portifolio.php?ticker=<?php echo $comm_etfs[2]['code']; ?>" class="card">
    <img src="css/images/comt.png" alt="placeholder">
    <div class="card-text">
     iShares U.S. ETF(COMT)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($comm_etfs[2]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $comm_etfs[2]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
   
   <a href="create-portifolio.php?ticker=<?php echo $comm_etfs[3]['code']; ?>" class="card">
    <img src="css/images/unitedstatecommodityindexfund(usci).png" alt="placeholder">
    <div class="card-text">
     United States(USCI)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($comm_etfs[3]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $comm_etfs[3]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  <a href="create-portifolio.php?ticker=<?php echo $comm_etfs[4]['code']; ?>" class="card">
    <img src="css/images/first%20trust%20alternative.png" alt="placeholder">
    <div class="card-text">
     First Trust Alternative
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($comm_etfs[4]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $comm_etfs[4]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  

  <a href="create-portifolio.php?ticker=<?php echo $comm_etfs[5]['code']; ?>" class="card">
    <img src="css/images/bloomberg(BCD).png" alt="placeholder">
    <div class="card-text">
     Bloomberg (BCD)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($comm_etfs[5]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $comm_etfs[5]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  <a href="create-portifolio.php?ticker=<?php echo $comm_etfs[6]['code']; ?>" class="card">
    <img src="css/images/GRANITESHARESBLOOMBERG.png" alt="placeholder">
    <div class="card-text">
     GraniteShares Bloomberg
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($comm_etfs[6]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $comm_etfs[6]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  <a href="create-portifolio.php?ticker=<?php echo $comm_etfs[7]['code']; ?>" class="card">
    <img src="css/images/ISHARESBLOOMBERGROLLSELECT.jpg" alt="placeholder">
    <div class="card-text">
     iShares Bloomberg
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($comm_etfs[7]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $comm_etfs[7]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  
  </div>
  <br>
  
  
  
  <h4 >SECTOR ETFS</h4>
  <hr>
  <br>
  
  <div class="row  ">
  
    <a href="create-portifolio.php?ticker=<?php echo $sector_etfs[0]['code']; ?>" class="card">
    <img src="css/images/IAI.png" alt="placeholder">
    <div class="card-text">
    iShares U.S. Broker-Dealers 
     </div> 
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($sector_etfs[0]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $sector_etfs[0]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 

   
    <a href="create-portifolio.php?ticker=<?php echo $sector_etfs[1]['code']; ?>" class="card">
    <img src="css/images/Invesco%20S&P%20500%20Equal%20Weight%20Communication%20Services%20ETF%20(EWCO).gif" alt="placeholder">
    <div class="card-text">
     Invesco S&P 500 
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($sector_etfs[1]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $sector_etfs[1]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
   
    <a href="create-portifolio.php?ticker=<?php echo $sector_etfs[4]['code']; ?>" class="card">
    <img src="css/images/iShares%20Core%20S&P%20500%20(IVV).gif" alt="placeholder">
    <div class="card-text">
     iShares Core S&P 500
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($sector_etfs[4]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $sector_etfs[4]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  
    <a href="create-portifolio.php?ticker=<?php echo $sector_etfs[2]['code']; ?>" class="card">
    <img src="css/images/Communication%20Services%20ETF%20(EWCO.gif">
    <div class="card-text">
     Communication (EWCO)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($sector_etfs[2]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $sector_etfs[2]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  
    <a href="create-portifolio.php?ticker=<?php echo $sector_etfs[3]['code']; ?>" class="card">
    <img src="css/images/spdr%20s&p%20500.webp">
    <div class="card-text">
     SPDR S&P 500 ETF
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($sector_etfs[3]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $sector_etfs[3]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  <a href="create-portifolio.php?ticker=<?php echo $sector_etfs[4]['code']; ?>" class="card">
    <img src="css/images/iShares%20Core%20S&P%20500%20(IVV).jpg">
    <div class="card-text">
     iShares Core (IVV)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($sector_etfs[4]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $sector_etfs[4]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  <a href="create-portifolio.php?ticker=<?php echo $sector_etfs[5]['code']; ?>" class="card">
    <img src="css/images/Vanguard%20S&P%20500%20ETF%20(VOO).png">
    <div class="card-text">
     Vanguard S&P 500 ETF 
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($sector_etfs[5]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $sector_etfs[5]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  
  </div>
  <br>
  
  
  <h4 >Currency ETFS</h4>
  <hr>
  <br>
  
  <div class="row  ">
  
    <a href="create-portifolio.php?ticker=<?php echo $curr_etfs[0]['code']; ?>" class="card">
    <img src="css/images/Invesco%20DB%20US%20Dollar.png" alt="placeholder">
    <div class="card-text">
    IB US Dollar
     </div> 
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($curr_etfs[0]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $curr_etfs[0]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 

   
    <a href="create-portifolio.php?ticker=<?php echo $curr_etfs[1]['code']; ?>" class="card">
    <img src="css/images/WisdomTree%20Chinese.png" alt="placeholder">
    <div class="card-text">
     WT Chinese Yuan
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($curr_etfs[1]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $curr_etfs[1]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $curr_etfs[2]['code']; ?>" class="card">
    <img src="css/images/ProShares%20Short%20Euro%20(EUFX).png" alt="placeholder">
    <div class="card-text">
     ProShares Short Euro
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($curr_etfs[2]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $curr_etfs[2]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
   
   
   
   
   
   
   
   
   
   <a href="create-portifolio.php?ticker=<?php echo $curr_etfs[3]['code']; ?>" class="card">
    <img src="css/images/ProShares%20Short%20Euro%20(EUFX).png" alt="placeholder">
    <div class="card-text">
     Yen Trust
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($curr_etfs[3]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $curr_etfs[3]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
   <a href="create-portifolio.php?ticker=<?php echo $curr_etfs[8]['code']; ?>" class="card">
    <img src="css/images/Invesco%20S&P%20500%20Equal%20Weight%20Communication%20Services%20ETF%20(EWCO).gif" alt="placeholder">
    <div class="card-text">
    Swiss Franc Trust
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($curr_etfs[8]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $curr_etfs[8]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  
   <a href="create-portifolio.php?ticker=<?php echo $curr_etfs[5]['code']; ?>" class="card">
    <img src="css/images/first%20trust%20alternative.png" alt="placeholder">
    <div class="card-text">
    Euro Currency Trust
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($curr_etfs[5]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $curr_etfs[5]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  
   <a href="create-portifolio.php?ticker=<?php echo $curr_etfs[6]['code']; ?>" class="card">
    <img src="css/images/iShares%20U.S.%20Broker-Dealers%20&%20Securities%20Exchanges%20ETF%20(IAI).png" alt="placeholder">
    <div class="card-text">
    Australian Dollar FXA
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($curr_etfs[6]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $curr_etfs[6]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  <a href="create-portifolio.php?ticker=<?php echo $curr_etfs[7]['code']; ?>" class="card">
    <img src="css/images/direction%20daily%2020.png" alt="placeholder">
    <div class="card-text">
    Canadian Dollar FXC
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($curr_etfs[7]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $curr_etfs[7]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  
  </div>
  <br>
  
    <h4 >Real Estate Etfs</h4>
  <hr>
  <br>
  
  <div class="row  ">
  
    <a href="create-portifolio.php?ticker=<?php echo $real_estate_etf[0]['code']; ?>" class="card">
    <img src="css/images/Vanguard%20Global%20ex-U.S.%20Real%20Estate%20ETF%20(VNQI).png" alt="placeholder">
    <div class="card-text">
    Vanguard ex-U.S.
     </div> 
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($real_estate_etf[0]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $real_estate_etf[0]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 

   
    <a href="create-portifolio.php?ticker=<?php echo $real_estate_etf[1]['code']; ?>" class="card">
    <img src="css/images/iShares%20Global%20REIT%20ETF%20(REET).png" alt="placeholder">
    <div class="card-text">
     iShares Global REIT
     </div>
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($real_estate_etf[1]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $real_estate_etf[1]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $real_estate_etf[2]['code']; ?>" class="card">
    <img src="css/images/Xtrackers%20International%20Real%20Estate%20ETF%20(HAUZ).png" alt="placeholder">
    <div class="card-text">
      Xtrackers International 
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($real_estate_etf[2]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $real_estate_etf[2]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
   
   
   
   
   
   
   
   
   
   
   
   <a href="create-portifolio.php?ticker=<?php echo $real_estate_etf[3]['code']; ?>" class="card">
    <img src="css/images/Xtrackers%20International%20Real%20Estate%20ETF%20(HAUZ).png" alt="placeholder">
    <div class="card-text">
      Vanguard (VNQ)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($real_estate_etf[3]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $real_estate_etf[3]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
   
   <a href="create-portifolio.php?ticker=<?php echo $real_estate_etf[4]['code']; ?>" class="card">
    <img src="css/images/Data%20Sharing%20(BLOK).png" alt="placeholder">
    <div class="card-text">
      Fidelity ETF(FREL)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($real_estate_etf[4]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $real_estate_etf[4]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
   
   <a href="create-portifolio.php?ticker=<?php echo $real_estate_etf[5]['code']; ?>" class="card">
    <img src="css/images/direction%20daily%2020.png" alt="placeholder">
    <div class="card-text">
      FlexShares (GQRE)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($real_estate_etf[5]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $real_estate_etf[5]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>  
  
   
   <a href="create-portifolio.php?ticker=<?php echo $real_estate_etf[6]['code']; ?>" class="card">
    <img src="css/images/Invesco%20S&P%20500%20Equal%20Weight%20Communication%20Services%20ETF%20(EWCO).gif" alt="placeholder">
    <div class="card-text">
      Fidelity (FPRO)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($real_estate_etf[6]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $real_estate_etf[6]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
   <a href="create-portifolio.php?ticker=<?php echo $real_estate_etf[7]['code']; ?>" class="card">
    <img src="css/images/ftgc.png" alt="placeholder">
    <div class="card-text">
      Invesco S&P 500(EWRE)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($real_estate_etf[7]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $real_estate_etf[7]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>  
  
   <a href="create-portifolio.php?ticker=<?php echo $real_estate_etf[8]['code']; ?>" class="card">
    <img src="css/images/fltr.png" alt="placeholder">
    <div class="card-text">
      JPMorgan (BBRE)
     </div>
     
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($real_estate_etf[8]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $real_estate_etf[8]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 
  
  
  </div>
  <br>
  
  
  
  
    <h4 >Regional etfs</h4>
  <hr>
  <br>
  
  <div class="row  ">
  
    <a href="create-portifolio.php?ticker=<?php echo $regional_etf[0]['code']; ?>" class="card">
    <img src="css/images/Franklin%20FTSE.png" alt="placeholder">
    <div class="card-text">
     Franklin FTSE China
     </div> 
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($regional_etf[0]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $regional_etf[0]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a> 

   
    <a href="create-portifolio.php?ticker=<?php echo $regional_etf[1]['code']; ?>" class="card">
    <img src="css/images/SPDR%20Portfolio.png" alt="placeholder">
    <div class="card-text">
     SPDR®️ Europe
     </div>
     <div class="card-price">
     %change
     </div>
     <div class="<?php if($real_estate_etf[1]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $real_estate_etf[1]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
   </a>
  </div>
  <br>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <h4 >Forex</h4>
  <hr>
  <br>
  <div class="row  ">
   
   <a href="create-portifolio.php?ticker=<?php echo $forex[2]['code']; ?>" class="card">
    <img src="css/images/EUR-USD.jpg" alt="placeholder">
    <div class="card-text">
    EUR/USD
     
     </div>
     <div class="card-price">$
     <?php
     echo $forex[2]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[2]['close'];
     ?>
     </div>
     <div class="<?php if($forex[2]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[2]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
  
    
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $forex[12]['code']; ?>" class="card">
    <img src="css/images/usd-jpy.jpg" alt="placeholder">
    <div class="card-text">
    USD/JPY
     
     </div>
     <div class="card-price">$
     <?php
     echo $forex[12]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[12]['close'];
     ?>
     </div>
     <div class="<?php if($forex[12]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[12]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
    
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $forex[6]['code']; ?>" class="card">
    <img src="css/images/gbp-usd.jpg" alt="placeholder">
    <div class="card-text">
    GBP/USD
     
     </div>
     <div class="card-price">$
     <?php
     echo $forex[6]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[6]['close'];
     ?>
     </div>
     <div class="<?php if($forex[6]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[6]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
    
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $forex[10]['code']; ?>" class="card">
    <img src="css/images/aud-usd.jpg" alt="placeholder">
    <div class="card-text">
    AUD/USD
     
     </div>
     <div class="card-price">$
     <?php
     echo $forex[10]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[10]['close'];
     ?>
     </div>
     <div class="<?php if($forex[10]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[10]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
  
   <a href="create-portifolio.php?ticker=<?php echo $forex[0]['code']; ?>" class="card">
    <img src="css/images/usd-cad.jpg" alt="placeholder">
    <div class="card-text">
    USD/CAD
     
     </div>
     <div class="card-price">$
     <?php
     echo $forex[0]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[0]['close'];
     ?>
     </div>
     <div class="<?php if($forex[0]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[0]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $forex[3]['code']; ?>" class="card">
    <img src="css/images/usd-caf.jpg" alt="placeholder">
    <div class="card-text">
    USD/CHF
     
     </div>
     <div class="card-price">$
     <?php
     echo $forex[3]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[3]['close'];
     ?>
     </div>
     <div class="<?php if($forex[3]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[3]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $forex[17]['code']; ?>" class="card">
    <img src="css/images/usd-hkd.jpg"alt="placeholder">
    <div class="card-text">
    USD/HKD
     
     </div>
     <div class="card-price">$
     <?php
     echo $forex[17]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[17]['close'];
     ?>
     </div>
     <div class="<?php if($forex[17]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[17]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $forex[5]['code']; ?>" class="card">
    <img src="css/images/eur-gbp.jpg" alt="placeholder">
    <div class="card-text">
    EUR/GBP
     
     </div>
     <div class="card-price">$
     <?php
     echo $forex[5]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[5]['close'];
     ?>
     </div>
     <div class="<?php if($forex[5]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[5]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   
   
   
   
   <a href="create-portifolio.php?ticker=<?php echo $forex[1]['code']; ?>" class="card">
    <img src="css/images/eur-jpy.jpg" alt="placeholder">
    <div class="card-text">
    EUR/JPY
     
     </div>
     <div class="card-price">$
     <?php
     echo $forex[1]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[1]['close'];
     ?>
     </div>
     <div class="<?php if($forex[1]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[1]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   
   <a href="create-portifolio.php?ticker=<?php echo $forex[3]['code']; ?>" class="card">
    <img src="css/images/eur-chf.jpg" alt="placeholder">
    <div class="card-text">
    EUR/CHF
     
     </div>
     <div class="card-price">$
     <?php
     echo $forex[3]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[3]['close'];
     ?>
     </div>
     <div class="<?php if($forex[3]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[3]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
    
   </a>
   
   
   
   <a href="create-portifolio.php?ticker=<?php echo $forex[7]['code']; ?>" class="card">
    <img src="css/images/AUD-CAD.jpg" alt="placeholder">
    <div class="card-text">
    AUD/CAD
     
     </div>
     <div class="card-price">$
     <?php
     echo $forex[7]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[7]['close'];
     ?>
     </div>
     <div class="<?php if($forex[7]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[7]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
     
   <a href="create-portifolio.php?ticker=<?php echo $forex[8]['code']; ?>" class="card">
    <img src="css/images/NZD-USD.jpg" alt="placeholder">
    <div class="card-text">
    NZD/USD
     
     </div>
     <div class="card-price">$
     <?php
     echo $forex[8]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[8]['close'];
     ?>
     </div>
     <div class="<?php if($forex[8]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[8]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   
  
   <a href="create-portifolio.php?ticker=<?php echo $forex[9]['code']; ?>" class="card">
    <img src="css/images/GBP-CHF.jpg" alt="placeholder">
    <div class="card-text">
    GBP/CHF   
     </div>
     <div class="card-price">$
     <?php
     echo $forex[9]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[9]['close'];
     ?>
     </div>
     <div class="<?php if($forex[9]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[9]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   <a href="create-portifolio.php?ticker=<?php echo $forex[11]['code']; ?>" class="card">
    <img src="css/images/GBP-JPY.jpg" alt="placeholder">
    <div class="card-text">
    GBP/JPY   
     </div>
     <div class="card-price">$
     <?php
     echo $forex[11]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[11]['close'];
     ?>
     </div>
     <div class="<?php if($forex[11]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[11]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
      
   <a href="create-portifolio.php?ticker=<?php echo $forex[13]['code']; ?>" class="card">
    <img src="css/images/CHF-JPY.jpg" alt="placeholder">
    <div class="card-text">
    CHF/JPY 
     </div>
     <div class="card-price">$
     <?php
     echo $forex[13]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[13]['close'];
     ?>
     </div>
     <div class="<?php if($forex[13]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[13]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
       
   <a href="create-portifolio.php?ticker=<?php echo $forex[14]['code']; ?>" class="card">
    <img src="css/images/EUR-CAD.jpg" alt="placeholder">
    <div class="card-text">
    EUR/CAD 
     </div>
     <div class="card-price">$
     <?php
     echo $forex[14]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[14]['close'];
     ?>
     </div>
     <div class="<?php if($forex[14]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[14]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
    <a href="create-portifolio.php?ticker=<?php echo $forex[15]['code']; ?>" class="card">
    <img src="css/images/AUD-JPY.jpg" alt="placeholder">
    <div class="card-text">
    AUD/JPY
     </div>
     <div class="card-price">$
     <?php
     echo $forex[15]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[15]['close'];
     ?>
     </div>
     <div class="<?php if($forex[15]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[15]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
    
    <a href="create-portifolio.php?ticker=<?php echo $forex[18]['code']; ?>" class="card">
    <img src="css/images/EUR-AUD.jpg" alt="placeholder">
    <div class="card-text">
    EUR/AUD
     </div>
     <div class="card-price">$
     <?php
     echo $forex[18]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[18]['close'];
     ?>
     </div>
     <div class="<?php if($forex[18]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[18]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
    <a href="create-portifolio.php?ticker=<?php echo $forex[16]['code']; ?>" class="card">
    <img src="css/images/USD-KRW.png" alt="placeholder">
    <div class="card-text">
    USD/KRW
     </div>
     <div class="card-price">$
     <?php
     echo $forex[16]['open'];
     ?>
     </div> 
    
     <div class="cardprice-right">$
     <?php
     echo $forex[16]['close'];
     ?>
     </div>
     <div class="<?php if($forex[16]['change_p']<0){
       echo 'redtxt';
     }
     else{
       echo 'greentxt';
     } ?>"><?php echo $forex[16]['change_p']; ?>%</div>
     <div class="smalltxt">1D change</div>
   </a>
   
   
   
  </div>
  
  
  <br>
  
    

<?php require "footer.php";?>