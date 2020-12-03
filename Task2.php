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
	Enter Number of breads:
	<input type="number" name = "bread" /><br><br>
	Enter Number of samosa:
	<input type="number" name = "samosa" /><br><br>
	Enter Number of vada:
	<input type="number" name = "vada" /><br><br>
	
	<input type="submit" name = "submit" value = "submit" /><br><br>
</form>
<?php
if(isset($_POST['submit']))
{
	$price_of_vada = 10;
	$price_of_samosa = 15;

	// getting form values of bread, samosa and vada.
	$bread = $_POST['bread'];
	$samosa = $_POST['samosa'];
	$vada = $_POST['vada'];
	
	$final_vada_profit = "";
	$final_samosa_profit = "";

	// looping through to get samosapav profit as it is having higher price.
    for ($i=1;$i<=$samosa; $i++) {
	    $bread = $bread -2;
	    $final_samosa_profit = $price_of_samosa * $i;
 	}

 	// Left over bread after samosa profit
	$left_bread = $bread;

	// looping through to get vadapav profit.
    for ($j=1;$j<$vada; $j++) {
      if ($left_bread  > 2) {
        $left_bread  = $left_bread -2;  
    	$final_vada_profit = $price_of_vada * $j;
       }
    }

    // Adding final profit from samosapav and vadapav
    $final_profit =  $final_samosa_profit+$final_vada_profit;
    echo $final_profit;
	
	}


	



?>
</body>
</html>