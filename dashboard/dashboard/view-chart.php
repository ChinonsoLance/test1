<?php
require "header.php";
?>

<?php
$tick=$_REQUEST['tick'];
// Retrieve data from the Yahoo Finance API
$url = "https://query1.finance.yahoo.com/v8/finance/chart/$tick?region=US&lang=en-US&includePrePost=false&interval=1mo&useYfid=true&range=1y";
$data = file_get_contents($url);



// Decode the JSON data
$json = json_decode($data, true);
$highValues = $json['chart']['result'][0]['indicators']['quote'][0]['high'];
$lowValues = $json['chart']['result'][0]['indicators']['quote'][0]['low'];
// Find the highest value in the array
$high = round(max($highValues),3);
$low = round(min($lowValues),3);

//get stock data
$curr_price=$json['chart']['result'][0]['meta']['regularMarketPrice'];
$open=$json['chart']['result'][0]['meta']['chartPreviousClose'];
$currentVolume = end($json['chart']['result'][0]['indicators']['quote'][0]['volume']);

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
$url = "https://finance.yahoo.com/quote/$tick";

// Retrieve the contents of the URL
$html = file_get_contents($url);

// Extract the name of the stock using regular expressions
preg_match("/<h1.*>(.*)<\/h1>/", $html, $match);
$name = $match[1];

echo "<h2 class='text-white'>$name</h2>";

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
          width:'100vw',
          title: '<?php echo $tick; ?> End-of-Day Prices (365 days)',
          hAxis: {title: '',textPosition: 'none',titleTextStyle: {color: '#fff'}},
          vAxis: {minValue: 0,gridlines: {
        color: 'transparent'
      },},
          backgroundColor: {fill:'transparent'},
         fontColor: "#fff",
          <?php if ($dip) { echo "colors: ['red'],"; } ?>
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div class="row mb-3">
        <div class="col-12 p-0 m-0">
        <div id="chart_div" style="width: 100vw; height: 500px;"></div>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <p><span style="color:#e5e7e9">Open</span> &nbsp; <b><?php echo $open; ?></b></p>
                <p><span style="color:#e5e7e9">High</span> &nbsp; <b><?php echo $high; ?></b></p>
                <p><span style="color:#e5e7e9">Low </span>&nbsp; <b><?php echo $low; ?></b></p>
              </div>
              <div class="col-6">
              <p><span style="color:#e5e7e9">Volume</span> &nbsp; <b><?php echo $currentVolume; ?></b></p>
                <p><span style="color:#e5e7e9">Market Cap</span> &nbsp; <b>-</b></p>
                <p><span style="color:#e5e7e9">P/E </span>&nbsp; <b>-</b></p>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
    
  </body>
</html>
<?php




?>




<?php
require "footer.php";
?>