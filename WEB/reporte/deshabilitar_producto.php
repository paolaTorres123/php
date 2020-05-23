<!DOCTYPE html>
<?php 
include 'mysql.php';
$data_base = new MySQL();
?>
<html>
	<head>
		<title>
			
		</title>
	</head>
	<body>
		<form name="Formulario" action="deshabilita.php" method="post">
			<select name="producto" required>
				<option selected value="default" disabled>--Seleccione un producto--</option>;
				<?php  
					$productos_habilitados = $data_base ->consulta('SELECT id_producto, nombre FROM inventario WHERE estado= "1"');

			        if($productos_habilitados){
			            while ($rows = mysqli_fetch_row($productos_habilitados)) {
			                echo "<option value=".$rows[0].">".$rows[1]."</option>";
			            }
			        }
				?>
				</select>
	    	<input type="submit" value='Deshabilitar'>
	    </form>
		<br><br>
		<input type="button" name="regresar" value="Cancelar">
	</body>
</html>