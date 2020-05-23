<!DOCTYPE html>
<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.datetimepicker.min.css">
		<link rel="stylesheet" href="estilo.css">
        <script src="js/jquery.min.js"> 
        </script>
<?php 
include 'mysql.php';
$data_base = new MySQL();
?>
<html>
	<head>
		<title>
			Eliminar Producto
		</title>
	</head>
	<body
	<div align="center" class="container">
			<form name="Formulario" action="deshabilita.php" method="post">
			</br></br></br></br>
			<h1>Eliminar</h1>
			</br></br></br></br>
			<select name="producto" required>
				<option selected value="default" disabled>--Seleccione un producto--</option>
				<?php  
					$productos_habilitados = $data_base ->consulta('SELECT id_producto, nombre FROM inventario WHERE estado= "1"');

			        if($productos_habilitados){
			            while ($rows = mysqli_fetch_row($productos_habilitados)) {
			                echo "<option value=".$rows[0].">".$rows[1]."</option>";
			            }
			        }
				?>
			</select>
	    	<input type="submit"  class="btn btn-danger btn lg" value='Deshabilitar'>
	    </form>
		<br><br>
		<a href="modificar.php"><input type="button"  class="btn btn-success btn lg" name="regresar" value="Cancelar"></a>
		</div>
	</body>
</html>