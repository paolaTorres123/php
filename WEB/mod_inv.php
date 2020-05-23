<?php
    include("mysql.php");
    $data_base = new MySQL();
    $consulta_productos_dis = $data_base ->consulta("SELECT nombre FROM inventario");
    $sql_productos_habilitados = $data_base ->consulta('SELECT id_producto,nombre FROM inventario WHERE estado= "1"');
?>

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
        <title> Modificar inventario</title>
        <script type="text/javascript">
            function clear_values(){

                document.getElementById("Formulario").reset();
                window.location = "modificar.php";}
            //}

            function change_inventario(){
                var producto_actual = document.getElementById("listaprod").value;
                document.Formulario.existencias.value = producto_actual;
                }


        
        </script>
    </head>
    
    <body>
    <section>
        <div align="center" class="container">
        </br></br></br></br>
        <h1>Modificar inventario</h1></br>
        <form id="Formulario" method="post" action="cambiar_inventario.php">
        </br><h4>Nombre del producto:<h4> 
        <select id="producto" name= "producto" onchange="change_inventario()">
        <option selected value="default_op" disabled>--Seleccione un producto--</option>

        <?php  
        $contador_prod = -1;
        if($sql_productos_habilitados){
            while ($rows = mysqli_fetch_row($sql_productos_habilitados)) {
                    $contador_prod++;
                    $id[] = $rows[0];
                    $nombre_productos[] = $rows[1];
                    echo "<option value='$id[$contador_prod]'>".$nombre_productos[$contador_prod].'</option>';
                }

        }
         echo "</select><br>";
        $contador_prod = -1;
        ?>



<br>

            Existencias: <input type="number" min="1" max="50" required id="existencias" name="existencias">
        
            <input type="submit" class="=btn btn-info btn-lg"  id="Aceptar" value="Aceptar">
            

        </form>
        <input type="button" class="=btn btn-danger btn-lg"  value="Cancelar" id="Cancelar" onclick="clear_values()">
       <div align="left" class="container">
        <img src="IMAGENES/logo.png";>
    </div>
</header>
    </section>
   
    
    </body>
</html>
    