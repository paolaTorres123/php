<?php 
include 'mysql.php';
$data_base = new MySQL();
?>
<html>
 <head>
  <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.datetimepicker.min.css">
		<link rel="stylesheet" href="estilo.css">
        <script src="js/jquery.min.js"> 
        </script>
		
		
		
        <script>
		
		function eraseText(){
			document.getElementById("bbb").value="";
		}
        function iniciarCompra(producto, campoCantidad, boton){ 
                document.getElementById('bbb').value += producto; 

                 var estadoActual = document.getElementById(campoCantidad);
				 var estadoActual2 = document.getElementById(boton);


                if(estadoActual.disabled)
                {
                    estadoActual.disabled= false;
                }
                else
                {
                    estadoActual.disabled= true;
                }
				
				if(estadoActual2.disabled)
                {
					estadoActual2.disabled= false;
                }
                else
                {
					estadoActual2.disabled= true;
                }
            } 

            function agregarCompra(cantidad, campoCantidad){ 
                document.getElementById('bbb').value += "    "+cantidad+"\n"; 
				
				var estadoActual = document.getElementById(campoCantidad);
                if(estadoActual.disabled)
                {
                    estadoActual.disabled= false;
                }
                else
                {
                    estadoActual.disabled= true;
                }

            } 
            
        </script>
			
 </head>

 <body>
 
 <header id="cabecera_principal">
	<div align="center" class="container">
		<img src="IMAGENES/logo.png";>
	</div>
</header>

</br>

 <div class="col-xs-6 pull-right">
     <p>Productos escogidos:</p>
    <div class="form-group ">
            <select class="form-control " id="b" disabled>
            <?php
          	 $i=1;
          	 for ($i;$i<=50;$i++){
          		  echo "<option>".$i."</option>";
          	 }
          	?>
            <textarea id= "bbb" rows="14" cols="73">
          </textarea>
          <div class="column">
           <form id="form1" action="solicitar_reporte.php" target="_blank">
           <input type="submit"  class="btn btn-primary btn-lg" value="Generar Reporte" ></input >
           <button type="button"   onclick="agregarCompra(b.value,'b')" class="btn btn-success btn-lg">Agregar Producto</button >
            <input type="button"  class="btn btn-info btn-lg" value="Comprar" onclick="javascript:eraseText();"></input >
          </form>

          <form id="fomr2" action="modificar.php">
            <input type="submit"  class="btn btn-primary btn-lg" value="Cofiguraciones" ></input >
             <input type="button"  class="btn btn-danger btn-lg" value="Limpiar" onclick="javascript:eraseText();"></input >
          </form>

          <form>
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
          </form>
          

      </div>

  </div>
 
</div>
  
  

<div id="productos">
<div class="column">
 <div class="col-sm-1 col-md-2">
     <button id="b1"onclick="iniciarCompra('chetos','b','b1')"> <img src="IMAGENES/chetos.png" alt="hols" width="114px" height="90px"></button>
	  <h3>Chetos $8</h3>
    </div>	
  </div>
  </div>

  <div class="column">
      <div class="col-sm-1 col-md-2">
          <button id="b2"onclick="iniciarCompra('dorinachos','b','b2')"><img src="IMAGENES/dorinachos.png" alt="hols" width="114px" height="90"></button>
            <h3>Dorinachos $20</h3>
     
    </div>	
  </div>
  
<div class="column">
  <div class="col-sm-1 col-md-2">
      <button id="b3"onclick="iniciarCompra('duros','b','b3')"><img src="IMAGENES/duro.png" alt="hols" width="114px" height="90px"> </button>
        <h3>Duros $10</h3>
		</br></br>
    </div>	
  </div>


 <div class="column">
  <div class="col-sm-1 col-md-2">
      <button  id="b4"onclick="iniciarCompra('nachos','b','b4')"   ><img src="IMAGENES/nachos.png" alt="hols" width="114px" height="90px"> </button>
        <h3>Nachos $15</h3>
    </div>	
  </div>
<div class="column">
  <div class="col-sm-1 col-md-2">
      <button id="b5"onclick="iniciarCompra('palomitas','b','b5')"><img src="IMAGENES/p.png" alt="hols" width="114px" height="90px"></button>
        <h3>Palomitas $10</h3>
    </div>	
  </div>

<div class="column">
  <div class="col-sm-1 col-md-2">
      <button id="b6"onclick="iniciarCompra('papas naturales','b','b6')" ><img src="IMAGENES/papas.png" alt="hols" width="114px" height="90px"></button>
        <h3>Papas $10</h3>
		</br></br>
    </div>	
  </div>

<div class="column">
  <div class="col-sm-1 col-md-2">
      <button id="b7"onclick="iniciarCompra('pepsi 600ml','b','b7')"  ><img src="IMAGENES/pepsi.png" alt="hols" width="114px" height="90px"></button>
       <h3>Pepsi $10</h3>
    </div>	
  </div>


<div class="column">
  <div class="col-sm-1 col-md-2">
      <button id="b8"onclick="iniciarCompra('totopos','b','b8')" ><img src="IMAGENES/totopos.png" alt="hols" width="118px" height="90px"></button>
        <h3>Totopos $17</h3>
    </div>	
  </div>

  
  <div class="column">
  <div class="col-sm-1 col-md-2">
      <button id="b10"onclick="iniciarCompra('churros','b','b10')" ><img src="IMAGENES/frituras.png" alt="hols" width="114px" height="90px"></button>
	  <h3>Churros $8</h3>
    </div>	
  </div>
  
  <div class="column">
  <div class="col-sm-1 col-md-2">
      <button id="b9"onclick="iniciarCompra('tostadas','b','b9')" ><img src="IMAGENES/tostadas.png" alt="hols" width="114px" height="90px"></button>
	  <center><h3>Tostadas $15</center></h3>
    </div>	
  </div>
  
  <div class="column">
  <div class="col-sm-1 col-md-2">
      <button id="b11"onclick="iniciarCompra('churros Preparadas','b','b11')" ><img src="IMAGENES/frituraspre.png" alt="hols" width="114px" height="90px"></button>
	  <h3>Churros Preparados $12</h3>
    </div>	
  </div>
  
  <div class="column">
  <div class="col-sm-1 col-md-2">
      <button id="b12"onclick="iniciarCompra('agua de jamaica','b','b12')" ><img src="IMAGENES/jamaica.png" alt="hols" width="118px" height="90px"></button>
	  <h3>Agua de Jamaica $10</h3>
    </div>	
  </div>
  
  <div class="column">
  <div class="col-sm-1 col-md-2">
      <button id="b13"onclick="iniciarCompra('Duros Preparados','b','b13')" ><img src="IMAGENES/duropre.png" alt="hols" width="114px" height="90px"></button>
	  <h3>Duros Preparados $20</h3>
    </div>	
  </div>
  
  <div class="column">
  <div class="col-sm-1 col-md-2">
      <button id="b14"onclick="iniciarCompra('papas adobadas','b','b14')" ><img src="IMAGENES/papaspre.png" alt="hols" width="114px" height="90px"></button>
	  <h3>Papas Adobadas $12</h3>
    </div>	
  </div>
   <div class="column">
  <div class="col-sm-1 col-md-2">
      <button id="b14"onclick="iniciarCompra('tostadas preparadas','b','b14')" ><img src="IMAGENES/pos.png" alt="hols" width="114px" height="90px"></button>
	  <h3>Tostadas Preparadas $20</h3>
    </div>	
  </div>

     
 </body>
</html>