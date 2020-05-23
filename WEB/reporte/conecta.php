<?php
$user_bd="root";
$passw="Maximo979899";
$base="mydb";
$servidor="localhost";

//Funcion para conectarse a la base de datos
$link=mysqli_connect($servidor,$user_bd,$passw) or die("No se pudo conectar a la base de datos");
mysqli_select_db($link,$base);
?>