<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
</head>
<body>
 	
 	<h1><?php

 		$x = $_POST['num1']	? $_POST['num1'] : null;
 		$y = $_POST['num2']	? $_POST['num1'] : null;
 		$m = $_POST['num3']	? $_POST['num1'] : null;
 		$n = $_POST['num4']	? $_POST['num1'] : null;
 		$w = $_POST['num5']	? $_POST['num5'] : null;
 		$z = $_POST['num6']	? $_POST['num6'] : null;
 		function add ($x,$y){
 			$P = $x + $y ;
 			return $P ;
 		}

 		function subtract ($m,$n){
 			$Q = $m - $n ;
 			return $Q ;
 		}

 		function multiple ($w,$z){
 			$R = $w * $z ;
 			return $R ;
 		}

 		if ($x == null & $y == null & $m == null & $n == null & $w == null & $z == null){
 		echo "<p>".$x."+".$y."=".add ($x,$y)."<br>"."</p>";
 		echo "<p>".$m."-".$n."=".subtract($m,$n)."<br>"."</p>";
 		echo "<p>".$w." x ".$n."=".multiple($w,$z)."</p>";
 	}

 	 	?>
 	</h1>

</body>
</html>