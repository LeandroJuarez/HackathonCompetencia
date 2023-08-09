<?php
$nombreservidor="localhost";
$nombreusuario="root";
$passwordd="";
$nombrebd="hkt";
$enlace = mysqli_connect($nombreservidor,
$nombreusuario, $passwordd, $nombrebd);
 
if(!$enlace) {
    
 echo"Error de conexión: ".mysqli_connect_error();

}

?>