<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$a = 10;
		$b = 9;
		$c = $a%$b;
		$d = ($c+1)/2;

		echo $c;
		echo $d;

			echo !(($a > $b) && ($c == $d)); //false
			echo ($a > $b) && ($c != $d);  //false
			echo !($a != ($b+1));  //true
			echo (($a*$b)%2) > (($c+1)/2);  // false

		?>
</body>
</html>