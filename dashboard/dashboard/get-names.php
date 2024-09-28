<?php
$stocks_tickers=["AAPL","MRNA","TSLA","MSFT","AMZN","META","GOOG","PFE","PYPL","NVDA","JPM","NFLX","A","GM","KO","V","GME","CLS","MCO","JNJ","MCD","BABA","GOOGL","BRK-B","CLF" ];
$stocks_data=[];
foreach($stocks_tickers as $tick){
  

$url = "https://finance.yahoo.com/quote/$tick";

// Retrieve the contents of the URL
$html = file_get_contents($url);

// Extract the name of the stock using regular expressions
preg_match("/<h1.*>(.*)<\/h1>/", $html, $match);
$name = $match[1];

array_push($stocks_data,$name);

echo $name;
}
$write_stocks=fopen("api/stock-names.txt","w");
fwrite($write_stocks,json_encode($stocks_data));
fclose($write_stocks);
?>