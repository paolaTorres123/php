<?php 
	include 'conecta.php';

	$sql_QUERY_max = 'SELECT id_producto FROM inventario';
	$ejecutar = mysqli_query($link,$sql_QUERY_max);
	while ($ids = mysqli_fetch_row($ejecutar)) {
		$ID = $ids;
	}
	$id = ++$ID[0];
?>