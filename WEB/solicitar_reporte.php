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
	<section>
		<div align="center" class="container"> 
		<form action="reporte.php" method="post">
		<h2>Seleccione una fecha:<h2>
		<input type="date" name="fecha" required />
		<br><br>
		<input type="submit"  class="btn btn-info btn-lg" name="rango" value="Generar" />
		</form>
		<a href="index.php"><input type="button"  class="btn btn-danger btn-lg name="regresar" value="Cancelar"/></a>
		</div>
		<header>
	<div align="left" class="container">
		<img src="IMAGENES/logo.png";>
	</div>
</header>
	</section>

	</body>
</html>