
<!DOCTYPE html>
 
<html>
  
<head>
	 
<meta charset="utf-8">
	 
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">

<!-- Vinculación con hoja de estilo -->

<link rel="stylesheet" type="text/css" href="CSS/index.css">

<link rel = "icon" href="IMÁGENES/hackatronlogo.png" type = "image/png">

<!-- Título -->

<title> HACKATHON </title>

</head>

<!-- Cuerpo -->

<body>
<form action="brasil.php" method="POST">
<header>

<a href="index.html" class="logo">

<img src="IMÁGENES/LogoHackathon.png" alt="HACKATRON">

</a> 

</header> 

<img src="IMÁGENES/BrazilPixeleado.jpg" style="width: 260px; height: 180px; margin-top: 40px; margin-left: 600px;">

<h1 id="radio-title">De qué área eres </h1>
<select class="zonas" name="zona" style="margin-right: 20px;">
<option>Acre</option>
<option>Alagoas</option>
<option>Amapá</option>
<option>Amazonas</option>
<option>Bahia</option>
<option>Ceará</option>
<option>Distrito Federal</option>
<option>Espírito Santo</option>
<option>Goiás</option>
<option>Maranhão</option>
<option>Mato Grosso</option>
<option>Mato Grosso do Sul</option>
<option>Minas Gerais</option>
<option>Pará</option>
<option>Paraíba</option>
<option>Paraná</option>
<option>Pernambuco</option>
<option>Piauí</option>
<option>Rio de Janeiro</option>
<option>Rio Grande do Norte</option>
<option>Rio Grande do Sul</option>
<option>Rondônia</option>
<option>Roraima</option>
<option>Santa Catarina</option>
<option>São Paulo</option>
<option>Sergipe</option>
<option>Tocantins</option>

</select>
<br>
<br>
<h1 id="radio-title"> Quantos anos voce tem? </h1>
<input type="number" max="99" maxlength="2" name="anio" id="radio60" style="margin-left:660px" required>
<h1 id="radio-title"> Qual o seu sexo? </h1>

<section class="radio-section">    

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="sexo" value="Homen" id="radio1"> <label for="radio1"> Homem </label> </div>
<div class="radio-item"> <input type="radio" name="sexo" value="Mulher" id="radio2"> <label for="radio2"> Mulher </label> </div>
<div class="radio-item"> <input type="radio" name="sexo" value="Nc" id="radio3"> <label for="radio3"> Prefiro não dizer </label> </div>
</div>
</section>

<h1 id="radio-title-2"> 1-Qual é o setor ou área da sua especialidade? </h1>
<section class="radio-section-2">    

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="sector" value="Informatica"id="radio4"> <label for="radio4"> Informática/IT </label> </div>
<div class="radio-item"> <input type="radio" name="sector" value="Artes" id="radio5"> <label for="radio5"> Desenho/Design Gráfico/Audiovisual </label> </div>
<div class="radio-item"> <input type="radio" name="sector" value="Industrial" id="radio6"> <label for="radio6"> Industrial </label> </div>
<div class="radio-item"> <input type="radio" name="sector" value="Agrario" id="radio7"> <label for="radio7"> Agrario </label> </div>
<div class="radio-item"> <input type="radio" name="sector" value="Servicios" id="radio8"> <label for="radio8"> Servicios </label> </div>
<div class="radio-item"> <input type="radio" name="sector" value="Administración" id="radio9"> <label for="radio9"> Administração </label>  </div>
<div class="radio-item"> <input type="radio" name="sector" value="Electroelectrónica" id="radio10"> <label for="radio10"> Eletrotecnica </label> </div>
<div class="radio-item"> <input type="radio" name="sector" value="Automotriz" id="radio11"> <label for="radio11"> Especialidade automotiva </label> </div>
<div class="radio-item"> <input type="radio" name="sector" value="Turismo" id="radio12"> <label for="radio12"> Turismo </label> </div>
<div class="radio-item"> <input type="radio" name="sector" value="Energías" id="radio13"> <label for="radio13"> Energia renovavel </label> </div>
<div class="radio-item"> <input type="radio" name="sector" value="Robótica/Automatismos" id="radio14"> <label for="radio14"> Robótica/Automatismos </label> </div>
<div class="radio-item"> <input type="radio" name="sector" value="Telecomunicaciones" id="radio15"> <label for="radio15"> Telecomunicação </label> </div>
<div class="radio-item"> <input type="radio" name="sector" value="otro" id="radio16"> <label for="radio16"> Outro </label> </div>
</div>
</section>


<h1 id="radio-title-3">2-Se sente bem no seu ambiente escolar? </h1>
<section class="radio-section">    

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="comodo" value="si" id="radio17"> <label for="radio17"> Sim </label> </div>
<div class="radio-item"> <input type="radio" name="comodo" value="no"id="radio18"> <label for="radio18"> Não </label> </div>
</div>
</section>

<h1 id="radio-title">3-Os professores levam em conta a diversidade em suas aulas? </h1>
<section class="radio-section">    

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="diversidad" value="si" id="radio19"> <label for="radio19"> Sim </label> </div>
<div class="radio-item"> <input type="radio" name="diversidad" value="no" id="radio20"> <label for="radio20"> Sim </label> </div>
<div class="radio-item"> <input type="radio" name="diversidad" value="no seguro" id="radio21"> <label for="radio21"> Não me sinto seguro </label> </div>
<div class="radio-item"> <input type="radio" name="diversidad" value="No a todo" id="radio22"> <label for="radio22"> Apenas em alguns casos </label> </div>
</div>
</section>


<h1 id="radio-title"> 4-No seu grupo há pessoas com deficiência: </h1>
<section class="radio-section">    

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="dif" value="visuales" id="radio23"> <label for="radio23"> Visuais </label> </div>
<div class="radio-item"> <input type="radio" name="dif" value="auditivas" id="radio24"> <label for="radio24"> Auditivas </label> </div>
<div class="radio-item"> <input type="radio" name="dif" value="motrices"id="radio25"> <label for="radio25"> Paraplegico </label> </div>
<div class="radio-item"> <input type="radio" name="dif" value="cognitivas"id="radio26"> <label for="radio26"> Cognitivas </label> </div>
</div>
</section>

<h1 id="radio-title"> 5-Você acha que essas pessoas têm as mesmas oportunidades que as outras? </h1>
<section class="radio-section">    

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="posi" value="si" id="radio28"> <label for="radio28"> Sim </label> </div>
<div class="radio-item"> <input type="radio" name="posi" value="no" id="radio29"> <label for="radio29"> Não </label> </div>
</div>
</section>

<h1  id="radio-title"> ¿Você já sofreu ou viu alguém sofrendo Bullying? Você informou alguém sobre o evento? </h1>
<section class="radio-section">    

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="bull" value="Sí, pero no lo reporte"id="radio30"> <label for="radio30"> Sim, mas eu não denunciei. </label> </div>
<div class="radio-item"> <input type="radio" name="bull" value="Sí, lo reporte" id="radio31"> <label for="radio31"> Sim, e eu denunciei. </label> </div>
<div class="radio-item"> <input type="radio" name="bull" value="no"id="radio32"> <label for="radio32"> Não </label> </div>
</div>
</section>

<h1  id="radio-title"> ¿A sua instituição toma medidas contra comportamentos inadequados?</h1>
<section class="radio-section">    

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="comp" value="si" id="radio33"> <label for="radio33"> Sim </label> </div>
<div class="radio-item"> <input type="radio" name="comp" value="aveces" id="radio34"> <label for="radio34"> As vezes </label> </div>
<div class="radio-item"> <input type="radio" name="comp" value="no" id="radio35"> <label for="radio35"> Não </label> </div>
</div>
</section>

<h1 id="radio-title"> ¿Tem apoio psicológico para os estudantes na sua instituição? </h1>
<section class="radio-section">    

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="apoyo" value="Psicológico" id="radio36"> <label for="radio36"> Psicológico </label> </div>
<div class="radio-item"> <input type="radio" name="apoyo" value="Pedagógico" id="radio37"> <label for="radio37"> Pedagógico </label> </div>
<div class="radio-item"> <input type="radio" name="apoyo" value="Otro" id="radio38"> <label for="radio38"> Outro </label> </div>
<div class="radio-item"> <input type="radio" name="apoyo" value="no" id="radio39"> <label for="radio39"> Não </label> </div>
</div>
</section>

<h1 id="radio-title">¿Qué tan exigente es la carrera en la que estás estudiando?</h1>
<section class="radio-section">    

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="exi" value="Muy exigente"id="radio40"> <label for="radio40"> Muito exigente </label> </div>
<div class="radio-item"> <input type="radio" name="exi" value="exigente" id="radio41"> <label for="radio41"> Exigente </label> </div>
<div class="radio-item"> <input type="radio" name="exi" value="Poco exigente" id="radio42"> <label for="radio42"> Pouco exigente </label> </div>
<div class="radio-item"> <input type="radio" name="exi"  value="Muy Poco exigente"id="radio43"> <label for="radio43"> Não exige muito </label> </div>
</div>
</section>

<h1 id="radio-title">¿Qual é a carga de trabalho (tarefas) que você tem por semana?</h1>
<section class="radio-section">    

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="tareas" value="Demasiada" id="radio44"> <label for="radio44"> Muito Pouco </label> </div>
<div class="radio-item"> <input type="radio" name="tareas" value="Mucha"id="radio45"> <label for="radio45"> Muito </label> </div>
<div class="radio-item"> <input type="radio" name="tareas" value="Poca"id="radio46"> <label for="radio46"> Pouco </label> </div>
<div class="radio-item"> <input type="radio" name="tareas" value="Insuficiente"id="radio47"> <label for="radio47"> limitado </label> </div>
</div>
</section>

<h1 id="radio-title">De que ano é o plano do estudo que você cursa</h1>
<section class="radio-section">    

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="plan" value="2021"id="radio48"> <label for="radio48"> 2021 </label> </div>
<div class="radio-item"> <input type="radio" name="plan" value="2020" id="radio49"> <label for="radio49"> 2020 </label> </div>
<div class="radio-item"> <input type="radio" name="plan" value="2014-2010"id="radio50"> <label for="radio50"> 2014-2010 </label> </div>
<div class="radio-item"> <input type="radio" name="plan" value="2010-anterior" id="radio51"> <label for="radio51"> 2010-anterior </label> </div>
</div>
</section>

<div class="btn-enviar">
<input type="submit" name="grabar" value="Enviar">
</div>
</form>

<br>
    
</form>
 <?php
 //arreglo de preguntas
 $p=array("país","zona","ano","sexo","setor","confortável","diversidade","diferença","possibilidades","bullying","comportamentos","apoio","demanda","tarefas","plano");
   include"PHP/sentencias.php";
   $user = new sentencias();
   if(isset($_POST["grabar"])){
	  //obtener la ultima persona
	  $result=$user->contar("preguntas", "distinct idpers");
		foreach ($result as $value) {
		$idp=$value["cantidad"];                   
		}
	$idp++;
	$zona=$_POST["zona"];
	$anio=$_POST["anio"];
	$sexo=$_POST["sexo"];
	$sector=$_POST["sector"];
    $comodo=$_POST["comodo"];
    $diver=$_POST["diversidad"];
    $dif=$_POST["dif"];
    $posi=$_POST["posi"];
	$bull=$_POST["bull"]; 
	$comp=$_POST["comp"]; 
	$apoyo=$_POST["apoyo"]; 
	$exi=$_POST["exi"]; 
	$tareas=$_POST["tareas"];  
	$plan=$_POST["plan"]; 
	 //arreglo de respuestas
	$res=array("Brasil",$zona,$anio,$sexo,$sector,$comodo,$diversidad,$dif,$posi,$bull,$comp,$apoyo,$exi,$tareas,$plan);
	 $cont=1;
	 for($i=0;$i<count($res);$i++){
		$sql="insert into preguntas values($idp,$cont,'$p[$i]','$res[$i]','General')";
		$ins=$user->insertar($sql);
		$cont++;
	 }// fin ciclo
	 //ir a inicio
     $url="index.html";
     echo '<meta http-equiv=refresh content="0; '.$url.'">';
      
      }
 ?>
<!-- Final -->

</body>

</html>