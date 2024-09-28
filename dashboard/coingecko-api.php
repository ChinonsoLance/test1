<?php
$url = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd";

$data = file_get_contents($url);
$priceInfo = json_decode($data,true);
$bitcoin = $priceInfo[0];

$btc_price = $bitcoin['current_price'];
$btc_market_cap = $bitcoin['market_cap'];
$btc_volume = $bitcoin['total_volume'];
$btc_percent_change_24 =$bitcoin['price_change_percentage_24h'];
$btc_price_change_24 =$bitcoin['price_change_24h'];


?>