<!DOCTYPE html>
<html>
	<head>
		<title>Guardando...</title>
	</head>
	<body>
		<?php 
			include 'conecta.php';
			include 'checar_ultimo_id.php';

			$nombre = $_POST["nombre"];
			$existencia = $_POST["existencia"];
			$precio = $_POST["precio"];
			$estado = 1;
			$sql_query1 = "INSERT INTO inventario (id_producto, nombre, existencia, precio, estado) values ('$id','$nombre','$existencia','$precio','$estado')";
			mysqli_query($link,$sql_query1) or die ("Problema con el query");
			echo "Se ha guardado el nuevo producto";
		?>
	</body>
	<aside>
		<br><br>
		<a href=""><input type="button" name="regresar" value="Regresar al inicio"></a>
	</aside>
</html>