<?php
    include("mysql.php");
    $data_base = new MySQL();

    $sql_bloqueo_productos =$data_base ->consulta('SELECT estado FROM inventario');

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
        <title>MODIFICAR</title>
    </head>
    <body>
    <section>
     </br></br></br>
        <div align="center" class="container"> 
        <h1>Configuraciones</h1>
        </br></br></br>
        <?php
            $contador = 0;
            $contadorLU = 0;
            if($sql_bloqueo_productos){
            while ($rows = mysqli_fetch_row($sql_bloqueo_productos)) {
                    $estado[] = $rows[0];
                    
                    if($estado[$contador] == 1){
                        //Significa que se encuentran activos.
                        $contadorLU++;
                    }
                    else{
                        //Si es igual a cero.
                        $contadorLU = $contadorLU;
                    }
                    $contador++;
                    
                }

            }
            ?>
            

            <a href="mod_inv.php"><input type="button"  class="=btn btn-warning btn-lg name="editar_inv" id="editar_inv" value="Editar inventario"></a><br><br>
            <?php  
            if($contadorLU >= 15){
                //Significa que se bloque el boton Agregar Producto.
                //$valorUL = "disabled";

                echo '<a href="agregar_producto.php"><input type="button"  class="=btn btn-warning btn-lg name="agregar" id="agregar" value="Agregar nuevo producto" disabled></a><br><br>';
                echo '<a href="deshabilitar_producto.php"><input type="button"  class="=btn btn-warning btn-lg name="eliminar" id="eliminar" value="Eliminar producto"></a>';
            }
            elseif ($contadorLU <= 1) {
                //Significa que se bloque el boton de Eliminar Producto.
                echo '<a href="agregar_producto.php"><input type="button"  class="=btn btn-warning btn-lg name="agregar" id="agregar" value="Agregar nuevo producto"></a><br><br>';
                echo '<a href="deshabilitar_producto.php"><input type="button" class="=btn btn-warning btn-lg name="eliminar" id="eliminar" value="Eliminar producto" disabled></a>';

            }
            else{
                echo '<a href="agregar_producto.php"><input type="button" class="=btn btn-warning btn-lg name="agregar" id="agregar" value="Agregar nuevo producto"></a><br><br>';
                echo '<a href="deshabilitar_producto.php"><input type="button" class="=btn btn-warning btn-lg name="eliminar" id="eliminar" value="Eliminar producto"></a>';
            } 

            ?>
            <br><br>
            <a href="index.php"><input type="button" class="=btn btn-success btn-lg" name="menu" value="Regresar al Menú"></a>
            </div>
            <div align="left" class="container">
        <img src="IMAGENES/logo.png";>
    </div>
</header>   
    </section>
    
    </body>
</html>