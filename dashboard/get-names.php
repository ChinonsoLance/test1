<?php
$stocks_tickers=["AAPL", "AMZN", "MSFT", "GOOGL", "FB", "BABA", "BRK.A", "JNJ", "V", "PG", 
                 "JPM", "XOM", "BAC", "WFC", "HD", "VZ", "T", "INTC", "PFE", "CSCO",
                 "CVX", "MA", "UNH", "TMO", "PEP", "MDT", "MRK", "KO", "DWDP", "MCD",
                 "CMCSA", "DIS", "ABT", "NKE", "BA", "BMY", "ACN", "ORCL", "CVS", "MDLZ",
                 "CHTR", "GE", "BKNG", "LLY", "MMM", "TXN", "ADBE", "CELG", "CERN", "AMGN",
                 "AVGO", "CRM", "PNC", "GILD", "ADP", "USB", "RTN", "DHR", "LMT", "HON",
                 "INTU", "BLK", "SNE", "FIS", "COP", "MCHP", "COF", "ANTM", "SLB", "ADI",
                 "HUM", "ECL", "PRU", "PPG", "LHX", "ZTS", "ITW", "MCO", "CAG", "WBA",
                 "SHW", "LRCX", "AGN", "NEE", "BDX", "NOC", "TJX", "PM", "GPN", "CAT",
                 "MMC", "ALL", "CB", "DUK", "TRV", "WMT", "ADSK", "UNP", "GD" ];
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