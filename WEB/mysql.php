<?php  
  class MySQL{  
    public $cont=0;
    private $conexion;  
    private $total_consultas;  
    
    public function MySQL(){  
      if(!isset($this->conexion)){ 
        $this->conexion = (mysqli_connect("localhost","root","1503")) or die("No se pudo conectar");  
        mysqli_select_db($this->conexion,"mydb") or die(mysqli_error($this->conexion));  
      }  
    }  
    
    public function consulta($consulta){  
      $this->total_consultas++;  
      $resultado = mysqli_query($this->conexion,$consulta);  
      if(!$resultado){  
        echo 'MySQL Error: ' . mysqli_error($this->conexion);  
        exit;  
      }  
      return $resultado;   
    }  
     
    public function fetch_array($consulta){   
      return mysqli_fetch_array($consulta);  
    }  
     
    public function num_rows($consulta){   
      return mysqli_num_rows($consulta);  
    }  

    public function getTotalConsultas(){  
      return $this->total_consultas;  
    }  
  }
?>