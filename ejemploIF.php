<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo if</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$edad =20;

		// if y else if

		if($edad >=65){
			echo "Esta es la sección para jubilados";
		} elseif ($edad >=18) {
			echo "Esta es la sección para jovenes";
		} else {
			echo "Este no es lugar para ti, chaval";
		}

		echo "<br>";


		//operador ternario

		echo ($edad>=18) ? "Mayor de edad" : "Menor de edad";


		$dato =20;

		//($dato >=20)? ($dato+3):($dato/3);

		$dato = ($dato>=20)?($dato+=3):($dato/=3);

		//para que devuelva true o false
		// $dato ($datp>=20)?:($dato+3);  



		

	?>


</body>
</html>