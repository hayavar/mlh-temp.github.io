<?php
include_once('login.php');
$query="SELECT Temperature,Time_Date FROM dataset where ID IN(SELECT MAX(ID) from dataset)";
$result=mysqli_query($con,$query);

?>

<html>
<head><Title> Temperature </title>

<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/stock/modules/export-data.js"></script>
</head>
<body>
<div id="container" style="height: 400px; min-width: 310px"></div>
<script>
// Create the chart
Highcharts.stockChart('container', {
  chart: {
    events: {
      load: function () {

        // set up the updating of the chart each second
        var series = this.series[0];
        setInterval(function () {
          var x = (new Date()).getTime(), // current time
            y = Math.round(Math.random() * 60);
          series.addPoint([x, y], true, true);
        }, 1000);
      }
    }
  },

  time: {
    useUTC: false
  },

  rangeSelector: {
    buttons: [{
      count: 1,
      type: 'minute',
      text: '1M'
    }, {
      count: 5,
      type: 'minute',
      text: '5M'
    }, {
      type: 'all',
      text: 'All'
    }],
    inputEnabled: false,
    selected: 0     
  },

  title: {
    text: 'Live Temperature display'
  },

  exporting: {
    enabled: false
  },

  series: [{
    name: 'Random data',
    data: (function () {
      // generate an array of random data
      var data = [],
        time = (new Date()).getTime(),
        i;

      for (i = -999; i <= 0; i += 1) {
        data.push([
          time + i * 1000,
          //Math.round(Math.random() * 60)// replace here
          <?php 
            while ($rows=mysqli_fetch_assoc($result)) {
              echo $rows['Temperature'];
            }
           ?>
        ]);
      }
      return data;
    }())
  }]
});
</script>

  

</body>
</html>