<!DOCTYPE html>
<?php
error_reporting(E_ALL);
include ('conecta.php');
?>
<html>
	<head>
		<title>
			REPORTE
		</title>
	</head>
	<body>
		<?php
			$total = 0;
			$fecha = $_POST["fecha"];

			$QUERY_1 = 'SELECT idventa FROM venta WHERE fecha="'.$fecha.'"';
			$idVnt = mysqli_fetch_array(mysqli_query($link,$QUERY_1));

			if($idVnt){

				$QUERY_2 = 'SELECT id_producto, cantidad FROM inventario_has_venta JOIN venta ON venta.idventa="'.$idVnt["idventa"].'"';
				$sql_Q = mysqli_query($link,$QUERY_2);

				while ($rows = mysqli_fetch_row($sql_Q)) {
					$productos[] = $rows[0];
					$cantidad[] = $rows[1];

				}

				echo ("<div name=\"reporte\">
					<h1>Reporte del ".$fecha."</h1><br><br>
					<table border=\"1\" cellspacing=\"0\">"
					."<tr>
						<th>Producto<td>"
						."<th>Precio Unitaro<td>"
						."<th>Cantidad de unidades vendidas<td>"
					."</tr>");

				for($i = 0; $i < count($productos); ++$i){
					$QUERY_3 = 'SELECT nombre, precio FROM inventario WHERE id_producto = "'.$productos[$i].'"';
					$new_rows = mysqli_fetch_array(mysqli_query($link,$QUERY_3));
					echo ("<tr>
							<td>".$new_rows["nombre"]."<td>"
							."<td>$".$new_rows["precio"]."<td>"
							."<td>".$cantidad[$i]."<td>"
						 ."</tr>");
					$total += $new_rows["precio"];
				}
				echo ("</table><br><br>
					<h3>El Total del día fue: $".$total."</h3><div/>");

				
			}
			else{
				echo "No hay ningún registro de venta del día ".$fecha;
			}
		?>
		<br><br>
		<a href="solicitar_reporte.php"><input type="button" name="regresar" id="regresar" value="Regresar"></a>
	</body>
</html>