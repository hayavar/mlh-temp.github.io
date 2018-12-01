<?php
include_once('login.php');
include_once('test.php');
$query="SELECT Temperature,Time_Date FROM dataset where ID IN(SELECT MAX(ID) from dataset)";
$result=mysqli_query($con,$query);
while ($rows=mysqli_fetch_row($result)) {
    $r1= $rows[0];
    $r2=$rows[1];
}

?>




<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="3">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script src = "https://ajax.google3s.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      <script src = "https://code.highcharts.com/highcharts.js"></script>    
      <script src = "https://code.highcharts.com/highcharts-more.js"></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   

    <link rel="stylesheet" type="text/css" href="placementsstyle.css">
    <script type="text/javascript" src="s1.js"></script>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
<body style="background-color: #cfd8dc;margin-left: auto;margin-right: auto;">
    <div id="brand">
    <p>   </p>
  </div>

            <canvas id="gauge" data-type="radial-gauge"
        data-width="400"
        data-height="400"
        data-units="Celsius"
        data-title="false"
        data-value="<?php echo $r1;?>"
        data-min-value="0"
        data-max-value="60"
        data-major-ticks="0,10,20,30,40,50,60"
        data-minor-ticks="2"
        data-stroke-ticks="false"
        data-highlights='[
            { "from": 0, "to": 50, "color": "rgba(0,255,0,.15)" },
            { "from": 50, "to": 100, "color": "rgba(255,255,0,.15)" },
            { "from": 100, "to": 150, "color": "rgba(255,30,0,.25)" },
            { "from": 150, "to": 200, "color": "rgba(255,0,225,.25)" },
            { "from": 200, "to": 220, "color": "rgba(0,0,255,.25)" }
        ]'
        data-color-plate="#222"
        data-color-major-ticks="#f5f5f5"
        data-color-minor-ticks="#ddd"
        data-color-title="#fff"
        data-color-units="#ccc"
        data-color-numbers="#eee"
        data-color-needle-start="rgba(240, 128, 128, 1)"
        data-color-needle-end="rgba(255, 160, 122, .9)"
        data-value-box="true"
        data-animation-rule="bounce"
        data-animation-duration="500"
        data-font-value="Led"
        data-animated-value="true">

    
</canvas>
            

 

   

    
    

<br>












      
      <!-- Footer -->
<footer class="page-footer font-small " id="f1">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" id="f2">
            
 
    <a href="http://www.pescemandya.org/" id="a1" style="font-size: 15px;"><b>P.E.S COLLEGE OF ENGINEERING MANDYA</a>
    
  </div>
  

</footer>
  
     


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</body>
</html>