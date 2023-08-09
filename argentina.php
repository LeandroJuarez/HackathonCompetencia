
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

<form action="argentina.php" method="POST">

<!-- Cabecera -->

<header>

<a href="index.html" class="logo">

<img src="IMÁGENES/LogoHackathon.png" alt="HACKATRON">

</a> 

<nav>

<a href="index.html" class="nav-link"> INICIO </a>
<a href="sobrenosotros.html" class="nav-link"> SOBRE NOSOTROS </a>
<a href="grafi.php" class="nav-link"> GRAFICOS </a>
    
</nav>
</header> 

<!-- Portada -->

<div class="container-cover-argentina">

<div class="container-info-cover">
      
<h1> ARGENTINA </h1>

</div>

</div>

<h1 id="radio-title"> De qué área eres </h1>
<select class="zonas" name="zona">
    
    <option> Buenos Aires </option>
    <option> Mendoza </option>
    <option> La Rioja </option>
    <option> Tucumán </option>
    <option> Misiones </option>
    <option> Tierra del fuego </option>
    <option> Cordoba </option> 
    <option> La Pampa </option>
    <option> Santa Cruz </option>
    <option> Neuquen </option>
    <option> CABA </option>
    <option> San Luis </option>
    <option> Catamarca </option>
    <option> Santiago del estero </option>
    <option> Formosa </option>
    <option> Corrientes </option> 
    <option> Chaco </option>
    <option> Jujuy </option> 
    <option> Salta </option>
    <option> Entre Rios </option> 
    <option> Chubut </option>
    
</select>
<h1 id="radio-title"> ¿Cuántos años tienes? </h1>
<input type="number" max="99" min="0" maxlength="2" name="anio" id="radio2" class="edades" style="margin-left:40px" required>

<h1 id="radio-title"> ¿Cuál es tu sexo? </h1>
<section class="radio-section">

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="sexo" id="radio3" required> <label for="radio3"> Masculino </label> </div>
<div class="radio-item"> <input type="radio" name="sexo" id="radio4" required> <label for="radio4"> Mujer </label> </div>
<div class="radio-item"> <input type="radio" name="sexo" id="radio5" required> <label for="radio5"> Prefiero no decirlo </label> </div>
</div>

</section>

<h1 id="radio-title-2"> ¿De qué sector o área es tu carrera? </h1>
<section class="radio-section-2">

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="sector"  id="radio6" value="Informatica" required> <label for="radio6"> Informática/IT </label> </div>
<div class="radio-item"> <input type="radio" name="sector"  id="radio7" value="Disenoartes" required> <label for="radio7"> Diseño/Artes Gráficas/Audiovisual </label> </div>
<div class="radio-item"> <input type="radio" name="sector"  id="radio8" value="Industrial" required> <label for="radio8"> Industrial </label> </div>
<div class="radio-item"> <input type="radio" name="sector"  id="radio9" value="Agrario" required> <label for="radio9"> Agrario </label> </div>
<div class="radio-item"> <input type="radio" name="sector"  id="radio10" value="Servicios" required> <label for="radio10"> Servicios </label> </div>
<div class="radio-item"> <input type="radio" name="sector"  id="radio11" value="Administracion" required> <label for="radio11"> Administración </label> </div>
<div class="radio-item"> <input type="radio" name="sector"  id="radio12" value="electroelectronica" required> <label for="radio12"> Electroelectrónica </label> </div>
<div class="radio-item"> <input type="radio" name="sector"  id="radio13" value="automotriz" required> <label for="radio13"> Automotriz </label></div>
<div class="radio-item"> <input type="radio" name="sector"  id="radio14" value="turismo" required> <label for="radio14">  Turismo </label>  </div>
<div class="radio-item"> <input type="radio" name="sector"  id="radio15" value="energias" required> <label for="radio15">  Energias</label>   </div>
<div class="radio-item"> <input type="radio" name="sector"  id="radio16" value="robotica" required> <label for="radio16">  Robotica / Automotismos </label>  </div>
<div class="radio-item"> <input type="radio" name="sector"  id="radio17" value="telecomunicaciones" required> <label for="radio17">  Telecomunicaciones </label>  </div>
<div class="radio-item"> <input type="radio" name="sector"  id="radio18" value="otro" required> <label for="radio18">  Otro </label> </div>
</div>

</section>

<h1 id="radio-title-3"> ¿Te sientes comodo en tu ambiente escolar? </h1>
<section class="radio-section">

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="comodo" value="si" id="radio1" required> <label for="radio1"> Si </label> </div>
<div class="radio-item"> <input type="radio" name="comodo" value="no"id="radio20" required> <label for="radio20">  No </label> </div>
</div>

</section>

<h1 id="radio-title-3"> ¿Los profesores toman en cuenta la diversidad en sus clases? </h1>>
<section class="radio-section">

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="diversidad" value="si" id="radio21" required> <label for="radio21"> Si </label> </div>
<div class="radio-item"> <input type="radio" name="diversidad" value="no" id="radio22" required> <label for="radio22"> No </label> </div>
<div class="radio-item"> <input type="radio" name="diversidad" value="no seguro" id="radio23" required> <label for="radio23"> No estoy seguro </label> </div>
<div class="radio-item"> <input type="radio" name="diversidad" value="No a todo" id="radio24" required> <label for="radio24"> No en todos los casos </label>  </div>
</div>
</section>


<h1 id="radio-title-3"> En tu clase hay personas con dificultades: </h1>
<section class="radio-section">

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="dif" value="visuales" id="radio25" required> <label for="radio25"> Visuales </label> </div>
<div class="radio-item"> <input type="radio" name="dif" value="auditivas" id="radio26" required> <label for="radio26"> Auditivas </label> </div>
<div class="radio-item"> <input type="radio" name="dif" value="motrices"id="radio27" required> <label for="radio27"> Motrices </label> </div>
<div class="radio-item"> <input type="radio" name="dif" value="cognitivas"id="radio28" required> <label for="radio28"> Cognitivas </label> </div>
</div>
</section>



<h1 id="radio-title-3"> ¿Consideras que estas personas tienen las mismas posibilidades que los demás?</h1>
<section class="radio-section">

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="posi" value="si" id="radio29" required> <label for="radio29"> Si </label> </div>
<div class="radio-item"> <input type="radio" name="posi" value="no" id="radio30" required> <label for="radio30"> No </label> </div>
</div>
</section>

<h1 id="radio-title-3"> ¿Alguna vez has sufrido o visto a alguien sufriendo de Bullying? ¿Informó a alguien sobre el evento?
</h1>

<section class="radio-section">

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="bull" value="Sí, pero no lo reporte"id="radio31" required> <label for="radio31"> Sí, pero no lo reporté </label> </div>
<div class="radio-item"> <input type="radio" name="bull" value="Sí, lo reporte" id="radio32" required> <label for="radio32"> Sí, pero lo reporté </label> </div>
<div class="radio-item"> <input type="radio" name="bull" value="no"id="radio33" required> <label for="radio33"> No </label> </div>
</div>
</section>


<h1 id="radio-title-3"> ¿Tu institución toma medidas ante los comportamientos inadecuados?</h1>
<section class="radio-section">

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="comp" value="si" id="radio34" required> <label for="radio34"> Si </label> </div>
<div class="radio-item"> <input type="radio" name="comp" value="aveces" id="radio35" required> <label for="radio35"> Aveces </label> </div>
<div class="radio-item"> <input type="radio" name="comp" value="no" id="radio36" required> <label for="radio36"> No </label> </div>
</div>
</section>

<h1 id="radio-title-3"> ¿Tu instituto dispone de algún tipo de apoyo para sus estudiantes? 
 </h1>
 <section class="radio-section">

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="apoyo" value="Psicológico" id="radio37" required> <label for="radio37"> Psicológico </label> </div>
<div class="radio-item"> <input type="radio" name="apoyo" value="Pedagógico" id="radio38" required> <label for="radio38"> Psicológico </label> </div>
<div class="radio-item"> <input type="radio" name="apoyo" value="Otro" id="radio39" required> <label for="radio39"> Otro </label> </div>
<div class="radio-item"> <input type="radio" name="apoyo" value="no" id="radio40" required> <label for="radio40"> No </label> </div>
</div>
</section>

<h1 id="radio-title-3"> ¿Qué tan exigente es la carrera en la que estás estudiando? </h1>
<section class="radio-section">

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="exi" value="Muy exigente"id="radio41" required> <label for="radio41"> Muy exigente </label> </div>
<div class="radio-item"> <input type="radio" name="exi" value="exigente" id="radio42" required> <label for="radio42"> Exigente </label> </div>
<div class="radio-item"> <input type="radio" name="exi" value="Poco exigente" id="radio43" required> <label for="radio43"> Poco exigente </label> </div>
<div class="radio-item"> <input type="radio" name="exi"  value="Muy Poco exigente"id="radio44" required> <label for="radio44"> Muy poco exigente </label> </div>
</div>
</section>

<h1 id="radio-title-3"> ¿Cuál es la carga de trabajo (tareas) que tienes por semana?
Casi nada >> Demasiadas (4 niveles)</h1>
<section class="radio-section">

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="tareas" value="Demasiada" id="radio45" required> <label for="radio45"> Demasiada </label> </div>
<div class="radio-item"> <input type="radio" name="tareas" value="Mucha"id="radio46" required> <label for="radio46"> Mucha </label> </div>
<div class="radio-item"> <input type="radio" name="tareas" value="Poca"id="radio47" required> <label for="radio47"> Poca </label> </div>
<div class="radio-item"> <input type="radio" name="tareas" value="Insuficiente"id="radio48" required> <label for="radio48"> Insuficiente </label> </div>
</div>
</section>

<h1 id="radio-title-3"> Año antigüedad de plan </h1>
<section class="radio-section">

<div class="radio-list">
<div class="radio-item"> <input type="radio" name="plan" value="2021"id="radio49" required> <label for="radio49"> 2021 </label></div>
<div class="radio-item"> <input type="radio" name="plan" value="2020" id="radio50" required> <label for="radio50"> 2020 </label> </div>
<div class="radio-item"> <input type="radio" name="plan" value="2014-2010"id="radio51" required> <label for="radio51"> 2014-2010 </label> </div>
<div class="radio-item"> <input type="radio" name="plan" value="2010-anterior" id="radio52" required> <label for="radio52"> 2010 o anterior </label> </div>
</div>
</section>

<div class="btn-enviar">
<input type="submit" name="grabar" value="Enviar">
</div>
</form>

<!-- Pie de página -->

<footer>

<div class="footer-container">
        
<div class="footer-content-container">
        
<img class="website-logo" src="IMÁGENES/MercosurLogo.png"> 
                
</div>
                
<div class="footer-menus">
                    
<div class="footer-content-container">
                        
<span class="menu-title"> Menú </span>

<a href="index.html" class="menu-item-footer"> Inicio </a>
<a href="sobrenosotros.html" class="menu-item-footer"> Sobre nosotros </a>
<a href="materiales.html" class="menu-item-footer" target="_blank"> Graficos </a>
                    
</div>
                    
<div class="footer-content-container">
                    
<span class="menu-title"> Descripción </span>
                        
<a href="LEGAL/politica.html" class="menu-item-footer"> Mercosur / Mercosul </a>
                    
</div>
                
</div>
                
<div class="footer-content-container">
                
</div>
            
</div>
        
</footer>

<?php
 //arreglo de preguntas
 $p=array("pais","zona","anio","sexo","sector","comodo","diversidad","diferencia","posibilidades","bullying","comportamientos","apoyo","exigencia","tareas","plan");
 include"PHP/sentencias.php";
 
 $user = new sentencias();

 if(isset($_POST["grabar"])) {

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
	 $res=array("Argentina",$zona,$anio,$sexo,$sector,$comodo,$diver,$dif,$posi,$bull,$comp,$apoyo,$exi,$tareas,$plan);
	 $cont=1;
	 for($i=0;$i<count($res);$i++) {

  $sql="insert into preguntas values($idp,$cont,'$p[$i]','$res[$i]','General')";
	echo $sql;
	$ins=$user->insertar($sql);
	$cont++;

} // fin ciclo
	 
//ir a inicio
$url="index.html";
echo '<meta http-equiv=refresh content="0; '.$url.'">';
      
      }
 ?>
</body>






















</html>
