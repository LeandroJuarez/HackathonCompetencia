<?php
include"PHP/sentencias.php";
$user = new sentencias();
?>
<html>
 <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
</head>
<?php
 //Sexo
//Mujer
	$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=4 AND `RESP`='Mujer' OR `RESP`='MULHER'");
		foreach ($result as $value){
			$mujer=$value["cantidad"];
		}
//Hombre
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=4 AND `RESP`='Hombre' OR `RESP`='Homem'");
		foreach ($result as $value){
			$hombre=$value["cantidad"];
		}
//NoC
		$result = $user ->contarCondicion("preguntas", "Resp", "IDQ=4 AND RESP='Nc'");
		foreach ($result as $value){
				$nc=$value["cantidad"];
		}
$porcentajeH=(int)$hombre;
$porcentajeM=(int)$mujer;
$porcentajeN=(int)$nc;
$data = array(
  array('Sexo', 'Porcentaje'),
  array('Hombre', $porcentajeH),
  array('Mujer', $porcentajeM),
  array('No Contesta', $porcentajeN),
  // Agrega más filas según tus necesidades
);
?>

<body  align="center" >

<header>

<a href="index.html" class="logo">

<img src="IMÁGENES/WaranáLogo.png" alt="HACKATRON">

</a> 

<nav>

<a href="index.html" class="nav-link"> INICIO </a>
<a href="sobrenosotros.html" class="nav-link"> SOBRE NOSOTROS </a>
<a href="grafi.php" class="nav-link btn"> GRAFICOS </a>
    
</nav>
</header> 

<style>

/* CABECERA */

header {

display: flex;
justify-content: space-between;
height: 80px;
align-items: center;
padding: 20px;
background-image: url(../IMÁGENES/FondoHeader.png);
background-position: center;
background-size: cover;
background-repeat: no-repeat;
z-index: 1;
font-family: Silkscreen, cursive; 

}

/* MODIFICACIÓN DEL LOGO */

.logo {

  display: flex;
  align-items: center;

}

.logo img {

  height: 45px;
  transition: transform 0.4s ease-in-out;

}

.logo img:hover {

transform: scale(1.1);

}

/* MODIFICACIÓN DE LINKS */

nav a {

  font-weight: 200;
  padding-right: 40px;
  color: #000000;
  font-size: 12px;

/* ANIMACIÓN CABECERA */

  opacity: 0;
  transform: translateY(-100%);
  animation: aparecer 0.5s ease-in-out forwards;

}

nav a:hover {

color: #676767;
transition: 0.50s;

}

</style> 	

  <h1 class="">Gráficas de las Encuestas</h1>

  <div style="display:flex;">

  <div id="chartSexo" class="chart-Sexo" style="width: 500px; height: 300px; margin-bottom: 20px; margin-top: 100px;"></div>

  <script>
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable(<?php echo json_encode($data); ?>);

      var options = {
        title: 'Distribución por Sexo',
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('chartSexo'));
      chart.draw(data, options);
    }
  </script>
  <?php
 //PAIS
//Brasil
	$result = $user ->contarCondicion("preguntas", "Resp", "`resp`='Brasil'");
		foreach ($result as $value){
			$b=$value["cantidad"];
		}
//Argentina
		$result = $user ->contarCondicion("preguntas", "Resp", "`resp`='Argentina'");
		foreach ($result as $value){
			$a=$value["cantidad"];
		}
//Uruguay
		$result = $user ->contarCondicion("preguntas", "Resp", "`resp`='Uruguay'");
		foreach ($result as $value){
				$u=$value["cantidad"];
		}
//paraguay
		$result = $user ->contarCondicion("preguntas", "Resp", "`resp`='Paraguay'");
		foreach ($result as $value){
				$p=$value["cantidad"];
		}
$brasil=(int)$b;
$arg=(int)$a;
$uru=(int)$u;
$pa=(int)$p;
$datap = array(
  array('Pais', 'Porcentaje'),
  array('Brasil', $brasil),
  array('Argentina', $arg),
  array('Uruguay', $uru),
  array('Paraguay', $pa),
  // Agrega más filas según tus necesidades
);
?>
 <div id="chartPais" style="width: 500px; height: 300px; margin-top: 100px;"> </div>

  <script>
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable(<?php echo json_encode($datap); ?>);

      var options = {
        title: 'Distribución por Pais',
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('chartPais'));
      chart.draw(data, options);
    }
  </script> 
   <?php
 //EDADES
//MENOS 15
	$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=3 AND `RESP`< 15");
		foreach ($result as $value) {

			$a=$value["cantidad"];
		
    }
    
//15 a 18
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=3 AND `RESP` BETWEEN 15 AND 18");
		foreach ($result as $value){
			$b=$value["cantidad"];
		}
//18 a 21
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=3 AND `RESP` BETWEEN 19 AND 21");
		foreach ($result as $value){
				$c=$value["cantidad"];
		}
//mas de 21
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=3 AND `RESP` > 21");
		foreach ($result as $value){
				$d=$value["cantidad"];
		}
$aa=(int)$a;
$bb=(int)$b;
$cc=(int)$c;
$dd=(int)$d;
$dataE = array(
  array('Edad', 'Porcentaje'),
  array('Menos de 15', $aa),
  array('De 15 a 18', $bb),
  array('De 18 a 21', $cc),
  array('Más de 21', $dd),
  // Agrega más filas según tus necesidades
);
?>
<div id="chartEdad" style="width: 500px; height: 300px; margin-top: 100px;"></div>

  <script>
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable(<?php echo json_encode($dataE); ?>);

      var options = {
        title: 'Distribución por Edad',
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('chartEdad'));
      chart.draw(data, options);
    }
    
  </script>
  </div>
  <?php
 //TECNICATURAS
//INFO
	$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=5 AND `RESP`='Informática/IT' OR `RESP`='Informática/TI'");
		foreach ($result as $value){
			$i=$value["cantidad"];
		}
//artes
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=5 AND `RESP`='Diseño/Artes Gráficas/Audiovisual' OR `RESP`='Design/Artes Gráficas'");
		foreach ($result as $value){
			$a=$value["cantidad"];
		}
//indu
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=5 AND `RESP`='Industrial' OR `RESP`='Industrial'");
		foreach ($result as $value){
				$in=$value["cantidad"];
		}
//agricola
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=5 AND `RESP`='Agrario' OR `RESP`='Agrícola'");
		foreach ($result as $value){
				$ag=$value["cantidad"];
		}
//servicios
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=5 AND `RESP`='Servicios' OR `RESP`='Serviços'");
		foreach ($result as $value){
				$se=$value["cantidad"];
		}
//admin
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=5 AND `RESP`='Administración' OR `RESP`='Administração'");
		foreach ($result as $value){
				$ad=$value["cantidad"];
		}
//electronica
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=5 AND `RESP`='Electroelectrónica' OR `RESP`='Eletroeletrônica'");
		foreach ($result as $value){
				$ele=$value["cantidad"];
		}
//auto
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=5 AND `RESP`='Automotriz' OR `RESP`='Automotiva'");
		foreach ($result as $value){
				$au=$value["cantidad"];
		}
//turismo
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=5 AND `RESP`='Turismo' OR `RESP`='Turismo'");
		foreach ($result as $value){
				$tu=$value["cantidad"];
		}
//energias
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=5 AND `RESP`='Energías Renovables' OR `RESP`='Energias Renováveis '");
		foreach ($result as $value){
				$en=$value["cantidad"];
		}
//robotica
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=5 AND `RESP`='Robótica/Automatismos' OR `RESP`='Robótica/Automatismos'");
		foreach ($result as $value){
				$ro=$value["cantidad"];
		}
//tele
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=5 AND `RESP`='Telecomunicaciones' OR `RESP`='Telecomunicações'");
		foreach ($result as $value){
				$tel=$value["cantidad"];
		}
//otro
		$result = $user ->contarCondicion("preguntas", "Resp", "`IDQ`=5 AND `RESP`='Otro' OR `RESP`='Outro'");
		foreach ($result as $value){
				$ot=$value["cantidad"];
		}
		
//variables 		
$info=(int)$i;
$arte=(int)$a;
$indu=(int)$in;
$agri=(int)$ag;
$servi=(int)$se;
$admin=(int)$ad;
$electro=(int)$ele;
$auto=(int)$au;
$tur=(int)$tu;
$ene=(int)$en;
$robo=(int)$ro;
$tele=(int)$tel;
$otro=(int)$ot;
$dataT = array(
  array('TECNICATURAS', 'Porcentaje'),
  array('Informática/IT', $info),
  array('Artes', $arte),
  array('Industrial', $indu),
  array('Agrícola', $agri),
  array('Servicios', $servi),
  array('Administración', $admin),
  array('Electroelectrónica', $electro),
  array('Automotiva', $auto),
   array('Turismo', $tur),
   array('Energias', $ene),
    array('Robótica/Automatismos', $robo),
	 array('Telecomunicaciones', $tele),
	  array('Otro', $otro),
  // Agrega más filas según tus necesidades
);
?>
<div id="chartTec" style="width: 900px; height: 500px; margin-left: 300px;"></div>
  <script>
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable(<?php echo json_encode($dataT); ?>);

      var options = {
        title: 'Distribución por Tecnicaturas',
        pieHole: 0.4,
      };

      var chart = new google.visualization.Histogram(document.getElementById('chartTec'));
      chart.draw(data, options);
    }
  </script>
</body>
