<?php
$url="https://query1.finance.yahoo.com/v8/finance/chart/ETH-USD?region=US&lang=en-US&includePrePost=false&interval=1h&useYfid=true&range=1d";
    $ticker=json_decode(file_get_contents($url),true);
    $eth_price=$ticker['chart']['result'][0]['meta']['regularMarketPrice'];

//$eth_price=$ethereum['current_price'];


?>