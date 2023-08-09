<!DOCTYPE html>
 
<html>
  
<head>
	 
<meta charset="utf-8">
	 
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">

<!-- Vinculación con hoja de estilo -->



<!-- Título -->

<title> HACKATHON </title>

</head>

<body>
<form action="convivencia.php" method="POST">
<p>1-Você usa transporte público? </p>
<input type="radio" name="transporte" value="sim"> Sim<br>
<input type="radio" name="transporte" value="nao"> Não

<p>2-Qual é a duração da viagem normalmente? </p>
<input type="radio" name="duracao" value="0-30min"> 0 a 30min<br>
<input type="radio" name="duracao" value="30-60min"> 30 a 60min<br>
<input type="radio" name="duracao" value="60-90min"> 60 a 90min<br>
<input type="radio" name="duracao" value="mais-de-2horas"> 2 ou mais horas

<p>3-Quanto tempo o transporte demora para chegar? </p>
<input type="radio" name="tempo" value="0-15min"> 0 a 15min<br>
<input type="radio" name="tempo" value="15-30min"> 15 a 30min<br>
<input type="radio" name="tempo" value="30-45min"> 30 a 45min<br>
<input type="radio" name="tempo" value="mais-de-45min"> 45 ou mais min
 
<p>4-O estado cobra os custos com transporte público? </p>
<input type="radio" name="custos" value="sim"> Sim<br>
<input type="radio" name="custos" value="nao"> Não<br>
<input type="radio" name="custos" value="sim-desconto"> Sim mas com desconto

<p>5-Dado o caso do transporte público não chegar, como você faz? </p>
<input type="radio" name="alternativa" value="caminhada"> Caminhada<br>
<input type="radio" name="alternativa" value="bicicleta"> Bicicleta<br>
<input type="radio" name="alternativa" value="aplicativos"> Aplicativos de transporte<br>
<input type="radio" name="alternativa" value="pais"> Com seus pais<br>

<br>
<a href="datos.php">
	<input type="button" name="grabarCon" value="Siguiente">
</a>  
</form>
 <?php
   include"PHP/sentencias.php";
   $sentencia = new sentencias();
    if(isset($_POST["grabarCon"])){
     $tran=$_POST["transporte"];
     $dura=$_POST["duracion"];
     $tiem=$_POST["tempo"];
     $cost=$_POST["costo"];
     $alt=$_POST["alternativa"];
     $sql="insert into convivencia values()";
     $ins=$sentencia->insertar($sql);
     if(!$ins){
        $url="curriculum.php";
         echo '<meta http-equiv=refresh content="0; '.$url.'">';
        }
       }
 ?>
</body>

</html>