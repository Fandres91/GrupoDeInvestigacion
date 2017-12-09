<?php 
	// se reciben las variables

$nombre_arti = $_POST['nombre_arti'];
$idioma = $_POST['idioma'];
$autores = $_POST['autores'];
$numero_issn = $_POST['numero_issn'];
$fecha	 = $_POST['fecha'];
$nombre_revista = $_POST['nombre_revista'];
$categoria_revista = $_POST['categoria_revista'];

$medio_divul = $_POST['medio_divul'];
$linkarticulo = $_POST['linkarticulo'];
$id_grupo = $_POST['id_grupo'];
$idP = $_POST['idP'];

require('../conexion.php');

$con =Conectar();
$sql = 'UPDATE articulos SET nombre_arti=:nombre_arti, idioma=:idioma, autores=:autores, numero_issn=:numero_issn, fecha=:fecha	, linkarticulo=:linkarticulo, nombre_revista=:nombre_revista, categoria_revista=:categoria_revista, medio_divul=:medio_divul, id_grupo=:id_grupo WHERE id_articulos=:idid_articulos';
$q = $con->prepare($sql);
$q->execute(array(':nombre_arti'=>$nombre_arti,':idioma'=>$idioma, ':autores'=>$autores, ':numero_issn'=>$numero_issn,':fecha'=>$fecha, ':linkarticulo'=>$linkarticulo,':nombre_revista'=>$nombre_revista, ':categoria_revista'=>$categoria_revista, ':medio_divul'=>$medio_divul, ':id_grupo'=>$id_grupo,':idid_articulos'=>$idP));
 ?>