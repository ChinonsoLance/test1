<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div id="chart_div"></div>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
var symbol='AAPL';
  function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('date', 'Date');
    data.addColumn('number', 'Close');

    // Retrieve the chart data from the server
    $.ajax({
      url: 'chart_data.php',
      success: function(response) {
        var closeValues = response.split(',');

        // Add the data to the chart
        for (var i = 0; i < closeValues.length; i++) {
          var date = new Date(i * 1000 * 60 * 60 * 24);
          data.addRow([date, parseFloat(closeValues[i])]);
        }

        // Create the chart
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, {
          height: 500,
          title: 'Stock Chart for ' + symbol,
          curveType: 'function',
          legend: { position: 'bottom' }
        });
      }
    });
  }
</script>
