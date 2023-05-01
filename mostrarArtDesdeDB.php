<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de datos</title>
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>	
	<div class="grid-container">
		<?php
			include ("claseFinal.php");
			
			$muestraArticulos = new mostrarArticulos;
			$muestraArticulos->mostrarDatos();
		?>
	</div>
</body>
</html>
