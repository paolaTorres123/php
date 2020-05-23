<html>
  <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.datetimepicker.min.css">
		<link rel="stylesheet" href="estilo.css">
        <script src="js/jquery.min.js"> 
        </script>
<div align="center" class="container">
</br></br></br>
</br></br>
<?php 

	include("mysql.php");
	if (isset($_POST["producto"])) {
		$data_base = new MySQL();
		$id = $_POST['producto'];
		$numero_exis =$_POST['existencias'];

		$consultab = $data_base ->consulta("UPDATE inventario SET existencia = '$numero_exis' WHERE id_producto = '$id'");

		echo '<h2>Las cantidades existentes en el inventario se han modificado con éxito.</h2>';

		echo '<a href="index.php"><input type="button" class="btn btn-info btn-lg" id="regresarindex" name="regresarindex" value="Regresar a la página Principal"></a>';
		}

	else{
		echo '<h1>No seleccionó ningun producto a modificar.</h1></br></br></br></br>';
		echo '<a href="index.php"><input type="button"  class="btn btn-info btn-lg" id="regresar" name="regresar" value="Regresar a la ventana de Inventario"></a>';
	}
   
?>
</div>
<header>
	<div align="left" class="container">
		<img src="IMAGENES/logo.png";>
	</div>
</header>
</html>