<!DOCTYPE html>
<html>
<head>
	<title>Library Management System</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Ovo&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
  </style>
</head>
<body>
<form method = "post">
	On 1st minute enter the load:
	<input type="number" name = "load1" /><br><br>
	On 2nd  minute enter the load:
	<input type="number" name = "load2" /><br><br>
	On 3rd minute enter the load:
	<input type="number" name = "load3" /><br><br>
	On 4th minute enter the load:
	<input type="number" name = "load4" /><br><br>
	On 5th minute enter the load:
	<input type="number" name = "load5" /><br><br>
	Enter N server:
	<input type="number" name = "server" /><br><br>
	<input type="submit" name = "submit" value = "submit" /><br><br>
</form>
<?php
if(isset($_POST['submit']))
{
	// Load with time interval
	$first_min = $_POST['load1'];
	$second_min  = $_POST['load2'];
	$third_min  = $_POST['load3'];
	$fourth_min  = $_POST['load4'];
	$fifth_min  = $_POST['load5'];

	//server count.
	$server = $_POST['server'];

	// Formula if load is less than 50%
	$server2 = $server / 2;

	// Formula if load is more than 50%
	$server3 = 2 * $server + 1;

	// Check if load is less than 50% in 5th minutes and output the server count accordingly.
	if($fifth_min <= 50)
	{
		echo "Number of servers running after 5 minutes interval when load is less than 50% is: ".$server2;
	}  
    else {
     echo "Number of servers running after 5 minutes interval when load is more than 50% is: ".  $server3 ;  
    }
}
?>
</body>
</html>