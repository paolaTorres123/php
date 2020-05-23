<!DOCTYPE html>
<html>
	<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.datetimepicker.min.css">
		<link rel="stylesheet" href="estilo.css">
        <script src="js/jquery.min.js"> 
        </script>
		
		
		<title>
			Nuevo Producto
		</title>
	</head>
	<body>
	
	
	</br>
	<div align="center" class="container"> 
		<form action="inserta.php" method="post">
			<h4>Nombre:<h4>
			<input type="text" name="nombre" id="nombre" required>
			<br>
			<h4>Cantidad (Existencia):<h4>
			<input type="number" name="existencia" id="existencia" min="1" required>
			<br>
			<h4>Precio: $<h4>
			<input type="number" name="precio" id="precio" min="1.0" max="50.0" step="0.5">
			<br><br>
			<input type="submit"   class="btn btn-primary btn-lg" value="Agregar">
		</form>
		<a href="modificar.php"><input type="button" class="btn btn-info btn-lg" value="Regresar"></a>
		</div>
		
		<header>
	<div align="left" class="container">
		<img src="IMAGENES/logo.png";>
	</div>
</header>
	</body>
</html>