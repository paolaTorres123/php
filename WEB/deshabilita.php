<!DOCTYPE html>
<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.datetimepicker.min.css">
		<link rel="stylesheet" href="estilo.css">
        <script src="js/jquery.min.js"> 
        </script>

<div align="center" class="container">
</br></br></br></br></br>
<?php  
	include 'conecta.php';
	if(isset($_POST)){

		$id = $_POST["producto"];
		$CERO = 0;
		$sql_QUERY2 = "UPDATE inventario SET estado='$CERO' WHERE id_producto='$id'";
		mysqli_query($link,$sql_QUERY2) or die ("Problema con query");

		echo "Se ha deshabilitado el producto<br><br>
		<a href='deshabilitar_producto.php'><input type='button' class='btn btn-info btn lg' value='Regresar al inicio'></a>";
	}
	elseif (isset($_POST)) {
		echo "No has escogido ningún producto
		<br><br> 
		<a href='index.php'><input type='button'   value='Regresar al inicio'></a>";
	}
?>
</div>