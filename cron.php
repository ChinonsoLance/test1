<?php
require "config.php";
require "mail.php";
require "dashboard/coingecko-api.php";

$query_accounts=mysqli_query($conn,"SELECT * FROM `portifolios` WHERE `status`='active' AND type='portfolio'");
while($row=mysqli_fetch_assoc($query_accounts)){
    $user_id=$row['user_id'];
    $folioName=$row['name'];
    $start_date=$row['unix_time'];
    $plan=$row['rate'];
    $amount=$row['balance'];
    $balance=$row['balance'];
    $db_profit=$row['profit'];
    $ticker=$row['ticker'];
    $bot=$row['bot'];
    $track=$row['track'];
    if($bot!=0){
         $get_bot=mysqli_query($conn, "SELECT * FROM bots WHERE id=$bot");
         $bot=mysqli_fetch_assoc($get_bot);
         $botName=$bot['name'];
         $botRate=$bot['rate'];
    }
    else{
        $botRate=$bot['rate'];
    }
   
    
    
    $url="https://query1.finance.yahoo.com/v8/finance/chart/$ticker?region=US&lang=en-US&includePrePost=false&interval=1h&useYfid=true&range=1d";
    $tick=json_decode(file_get_contents($url),true);
    $price=$tick['chart']['result'][0]['meta']['regularMarketPrice'];
    $previous=$tick['chart']['result'][0]['meta']['previousClose'];
    $change=$price-$previous;
    $change=($change/$previous)*100;
    
    
    $db_profit = doubleval($db_profit);
    $folioId=$row['id'];
    $select_user=mysqli_query($conn,"SELECT * FROM users WHERE `id`='$user_id'");
    $get_scheme=mysqli_query($conn, "SELECT * FROM `iv_schemes` WHERE id='$plan'");
    $scheme=mysqli_fetch_assoc($get_scheme);
    $days=$scheme['days'];
    $roi=$scheme['ROI'];
    $plan_name=$scheme['name'];
    $plan_type=$scheme['type'];
    $plan_recurring=$scheme['recurring'];
    
    $row2=mysqli_fetch_assoc($select_user);
    $email=$row2['email'];
    //$ref_bonus=intval($row2['ref_bonus']);
    $username=$row2['username'];
    $email_pref=$row2['email_preferences'];
    
    

    //update transactions table

    

    
    //profits syncing



    $today=time();
    $duration=($today-$start_date)/86400;
    $profit=(($roi/100)*$amount*1)/30;
    $stock_profit=($change/100)*$profit;
    $bot_profit=($botRate/100)*$profit;
    $profit+=$stock_profit;
    $profit+=$bot_profit;
    $profit=round($profit,2);
    $bot_profit=$bot_profit;
    
    
   
    if($plan_type=="short"){
         $new_profit=intval($profit)+intval($db_profit);
   
            $update_profit=mysqli_query($conn,"UPDATE `portifolios` SET `profit`='$new_profit' WHERE `id`='$folioId'");
            
            
            if($update_profit){
                
                
                $subject="You have earned $$profit from theackersfield";
                $message="<p>
                    You have earned $$profit  from theackersfield on the portifolio $folioName with a daily market change of $change% on $ticker. Please login to check your wallet.
                
                </p>";
                if($bot!=0){
                    echo "<p>You are trading with $botName so you earned $$bot_profit</p>";
                } 
                echo"
                <p>Roi: $roi, Amount: $amount Profits are calculated every day</p>";
                if($email_pref){
                    sendmail($email,$subject,$message,null,$username);
                }
                
            }
    }else{
        if((($today-$track)/86400)>=$plan_recurring){
            
          //pause profits 
          $update_portfolio=mysqli_query($conn,"UPDATE portifolios SET status='paused' WHERE id='$folioId'");
        }
        else{
             $new_profit=intval($profit)+intval($db_profit);
   
            $update_profit=mysqli_query($conn,"UPDATE `portifolios` SET `profit`='$new_profit' WHERE `id`='$folioId'");
            
            
            if($update_profit){
                
                
                $subject="You have earned $$profit from theackersfield";
                $message="<p>
                    You have earned $$profit  from theackersfield on the portifolio $folioName with a daily market change of $change% on $ticker. Please login to check your wallet.
                
                </p>";
                if($bot!=0){
                    echo "<p>You are trading with $botName so you earned $$bot_profit</p>";
                } 
                echo"
                <p>Roi: $roi, Amount: $amount Profits are calculated every day</p>";
                if($email_pref){
                    sendmail($email,$subject,$message,null,$username);
                }
                
            }
        }
    }
   
    
    if($duration>$days){
        $dbprofit=$row['profit'];
        $newbal=$balance+$dbprofit;
        $endplan=mysqli_query($conn,"UPDATE `portifolios` SET `status`='settled',`balance`='$newbal', `profit`='0' WHERE `id`='$folioId'");
        //$restart_ref=mysqli_query($conn,"UPDATE `users` SET `ref_bonus`='0' WHERE id='$user_id'");
        $message="<p>Your $plan_name Plan on theackersfield has expired.</p><p> Kindly login to your account to withdraw your profits.</p>";
        $subject="Plan completed";

        sendmail($email,$subject,$message,null,$username);
    }
}
?>