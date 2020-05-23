<?php  
	include 'conecta.php';
	print_r($_POST);
	if(isset($_POST)){

		$id = $_POST["producto"];
		$CERO = 0;
		$sql_QUERY2 = "UPDATE inventario SET estado='$CERO' WHERE id_producto='$id'";
		mysqli_query($link,$sql_QUERY2) or die ("Problema con query");

		echo "Se ha deshabilitado el producto<br><br>
		<a href='deshabilitar_producto.php'><input type='button' value='Regresar al inicio'></a>";
	}
	elseif (isset($_POST)) {
		echo "No has escogido ningún producto
		<br><br> 
		<a href='deshabilitar_producto.php'><input type='button' value='Regresar'></a>";
	}
?>