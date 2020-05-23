<!DOCTYPE html>
<?php
error_reporting(E_ALL);
?>
<html>
	<head>
		<title>
			Fecha
		</title>
	</head>
	<body>

		<form action="reporte.php" method="post">
		Seleccione una fecha:
		<br>
		<br>
		<input type="date" name="fecha" required />
		<br><br>
		<input type="submit" name="rango" value="Generar" />
		</form>
		<input type="button" name="regresar" value="Cancelar"/>
	</body>
</html>