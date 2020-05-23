<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.datetimepicker.min.css">
		<link rel="stylesheet" href="estilo.css">
        <script src="js/jquery.min.js"> 
        </script>
	
		<title>Guardando...</title>
	</head>
	<body>
		<div align="center" class="container">
		<?php 
			include 'conecta.php';
			include 'checar_ultimo_id.php';

			$nombre = $_POST["nombre"];
			$existencia = $_POST["existencia"];
			$precio = $_POST["precio"];
			$estado = 1;
			$sql_query1 = "INSERT INTO inventario (id_producto, nombre, existencia, precio, estado) values ('$id','$nombre','$existencia','$precio','$estado')";
			mysqli_query($link,$sql_query1) or die ("Problema con el query");
			echo "<h3>Se ha guardado el nuevo producto<h3>";
		?>
		</div>
	</body>
	<aside>
		<br><br></br>
		<div align="center" class="container"> 
		<a href="index.php"><input type="button" class="btn btn-primary btn-lg" name="regresar" value="Regresar al inicio"></a>
		</div>
	</aside>
</html>