<?php
error_reporting(E_ALL ^ E_NOTICE);
$op = $_GET["op"];

switch ($op) {
	case "articulo":
		$contenido = "../section_articulo/articulo.php";
		$titulo ="Artículos";
		break;

	case "grupo":
		$contenido = "../section_grupo/grupo.php";
		$titulo ="Grupos";
		break;

	case "cambios":
		$contenido = "php/cambios-contacto.php";
		$titulo ="Notas proyecto";
		break;

	case "consultas":
		$contenido = "php/consultas-contacto.php";
		$titulo ="Consultas a contacto";
		break;
	case "notas":
		$contenido = "php/editor-notas/estructura-editor.php";
		$titulo ="NOTAS";
		break;
	
	
}


?>

<!DOCTYPE html>

<html lang="es">

<head>
	
	<meta charset="utf-8"/>
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" type="text/css" href="css/mis-contactos.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		!window.Jquery && document.write("<script src='../js/jquery.min.js'><\/script>");
	</script>
	<script src="js/mis-contactos.js"></script>

	<body>
<!---->
		
			<a href="../index.php"><img class="zoom" src="../img/Titulo.png"></a>
	<article>
				<!--<ul>Para enviar variables por php se usa (?) ese signo indica que después de la URL viene una variable de la siguiente manera:<li><a class="cambio"href="?op=alta"> -->
			<nav>
				<ul>

					<li><a class="cambio" href="?op=articulo">Artíulos</a></li>
					<li><a class="cambio" href="?op=grupo">Grupos de investigación</a></li>
					<li><a class="cambio" href="?op=baja">Baja de contactos</a></li>
					<li><a class="cambio" href="?op=cambios">Cambios de contacto</a></li>
					<li><a class="cambio" href="?op=consultas">Consultas de contacto</a></li>
					
				</ul>

			</nav>
			<section id="principal">
				<?php include($contenido); ?>

			

		</article>
<footer><p><b>&copy; Copyright</b> Fabián Durán <br/><br/></p></footer>	
</section>




	</body>

</head>