<?php
include_once('login.php');
$add="INSERT INTO `dataset`(`ID`, `Temperature`, `Time_Date`) VALUES (17,(SELECT FLOOR(RAND()*(60-1+1)+1)),99)";
$sql=mysqli_query($con,$add);



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 
</head>
<body>

</body>
</html>