<?php

// Retrieve data from the Yahoo Finance API
$url = "https://query1.finance.yahoo.com/v8/finance/chart/AAPL?region=US&lang=en-US&includePrePost=false&interval=1mo&useYfid=true&range=1y";
$data = file_get_contents($url);



// Decode the JSON data
$json = json_decode($data, true);

// Extract the time and close values from the data
$time = array();
$close = array();
foreach ($json['chart']['result'][0]['timestamp'] as $timestamp) {
    $time[] = date('Y-m-d', $timestamp);
}
foreach ($json['chart']['result'][0]['indicators']['quote'][0]['close'] as $price) {
    $close[] = $price;
}
// Check if the final close value is lower than the initial close value
$initial_close = $close[0];
$final_close = end($close);
$dip = ($final_close < $initial_close);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Time', 'Close'],
          <?php
            for ($i = 0; $i < count($time); $i++) {
              echo "['" . $time[$i] . "', " . $close[$i] . "],";
            }
          ?>
        ]);

        var options = {
          title: 'AAPL End-of-Day Prices (7 days)',
          hAxis: {title: 'Time',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
          <?php if ($dip) { echo "colors: ['red'],"; } ?>
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
  </body>
</html>
<?php

$ticker = "AAPL";
$url = "https://finance.yahoo.com/quote/$ticker";

// Retrieve the contents of the URL
$html = file_get_contents($url);

// Extract the name of the stock using regular expressions
preg_match("/<h1.*>(.*)<\/h1>/", $html, $match);
$name = $match[1];

echo $name;

?>


