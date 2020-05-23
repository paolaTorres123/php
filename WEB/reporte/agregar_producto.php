<!DOCTYPE html>
<html>
	<head>
		<title>
			Nuevo Producto
		</title>
	</head>
	<body>
		<form action="inserta.php" method="post">
			Nombre:
			<input type="text" name="nombre" id="nombre" required>
			<br>
			Cantidad (Existencia):
			<input type="number" name="existencia" id="existencia" min="1" required>
			<br>
			Precio: $
			<input type="number" name="precio" id="precio" min="1.0" step="0.01">
			<br><br>
			<input type="submit" value="Agregar">
		</form>
		<input type="button" value="Regresar">
	</body>
</html>