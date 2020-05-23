<?php  
class MySQL{  
 private $conexion;  

   public function MySQL(){  
    if(!isset($this->conexion)){ 
    $this->conexion = (mysqli_connect("localhost","root","Maximo979899")) or die("No se pudo conectar");  
    mysqli_select_db($this->conexion,"mydb") or die(mysqli_error($this->conexion));  
    }  

  }  
 public function consulta($consulta){   
    $resultado = mysqli_query($this->conexion,$consulta);  
      if(!$resultado){  
      echo 'MySQL Error: ' . mysqli_error($this->conexion);  
      exit;  
    }  
    return $resultado;   
  }     
 }
?>