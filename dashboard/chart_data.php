<?php

// Set the symbol of the stock you want to retrieve
$symbol = 'AAPL';

// Set the URL for the Yahoo Finance API
$url = 'https://query1.finance.yahoo.com/v8/finance/chart/' . $symbol . '?range=1y&interval=1mo&indicators=close&includePrePost=false&events=div%7Csplit%7Cearn&lang=en-US&region=US&crumb=H6.RU6gLn6pf&corsDomain=finance.yahoo.com';

// Use file_get_contents() function to retrieve the data from the API
$data = file_get_contents($url);

// Decode the JSON data into a PHP array
$data = json_decode($data, true);

// Extract the close values from the data array
$closeValues = array_column($data['chart']['result'][0]['indicators']['quote'][0]['close'], 0);

// Convert the close values into a comma-separated string
$closeValues = implode(',', $closeValues);

// Output the chart data to the client
echo $closeValues;

?>
