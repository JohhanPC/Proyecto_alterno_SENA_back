<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>

<?php

class mostrarArticulos{

    function mostrarDatos(){

        // Conexión a la base de datos
			$host = "localhost";
			$user = "root";
			$password = "";
			$database = "pru_productos";

			$conn = mysqli_connect($host, $user, $password, $database);
			if (!$conn) {
				die("La conexión a la base de datos falló: " . mysqli_connect_error());
			}

			// Consulta a la base de datos
			$query = "SELECT * FROM productos2";
			$result = mysqli_query($conn, $query);

			// Ciclo para mostrar los resultados
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='grid-item'>";
                echo "<img src='" . $row["Imagen_producto"] . "' alt='" . $row["Nombre_producto"] . "'>";
				echo "<h2>" . $row["Nombre_producto"] . "</h2>";
                echo "<h2>" . $row["Precio_producto"] . "</h2>";				
				echo "<p>" . $row["Descripcion_producto"] . "</p>";
				echo "<p>" . $row["Colores_producto"] . "<p>";
				echo "<p>" . $row["Materiales_producto"] . "<p>";
				echo "</div>";
			}

			// Liberar recursos
			mysqli_free_result($result);
			mysqli_close($conn);
    }

}

?>
</body>
</html>