<?php
class sentencias
{
  private $host   ="localhost";
    private $usuario="root";
    private $clave  ="";
    private $db     ="hkt";
    public $conexion;
    public function __construct(){
        $this->conexion = new mysqli($this->host, $this->usuario, $this->clave,$this->db) or die(mysql_error());
        $this->conexion->set_charset("utf8");
    }
public function buscar($tabla, $condicion){
		$sql="SELECT * FROM $tabla WHERE $condicion";
	        $resultado = $this->conexion->query($sql) or die($this->conexion->error);
		    return $resultado;
        
    } 

public function contar($tabla,$campo){
        $sql="SELECT count($campo) as cantidad FROM $tabla" ;
            $resultado = $this->conexion->query($sql) or die($this->conexion->error);
            return $resultado;
        
    } 
public function contarCondicion($tabla,$campo,$condicion){
        $sql="SELECT count($campo) as cantidad FROM $tabla where $condicion" ;
            $resultado = $this->conexion->query($sql) or die($this->conexion->error);
            return $resultado;
        
    }
    public function insertar($sql){
        $insert=$this->conexion->query($sql) or die($this->conexion->error);
           return $insert; 
        
    }
    
    public function buscarSql($sql){
    $resultado = $this->conexion->query($sql) or die($this->conexion->error);
     return $resultado;
        
    } 
}

?>
