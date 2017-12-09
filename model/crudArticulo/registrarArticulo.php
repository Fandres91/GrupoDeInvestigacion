<?php 
	// se reciben las variables
$nombre_arti = $_POST['nombre_arti'];
$autores = $_POST['autores'];
$numero_issn = $_POST['numero_issn'];
$idioma = $_POST['idioma'];
$fecha= $_POST['fecha'];
$nombre_revista = $_POST['nombre_revista'];
$categoria_revista = $_POST['categoria_revista'];
$medio_divul = $_POST['medio_divul'];
$linkarticulo = $_POST['linkarticulo'];
$id_grupo = $_POST['id_grupo'];

require('../conexion.php');

$con =Conectar();
$sql = 'INSERT INTO articulos (nombre_arti, autores, numero_issn, linkarticulo, idioma, fecha, nombre_revista, categoria_revista, medio_divul, id_grupo) VALUES (:nombre_arti, :autores, :numero_issn, :linkarticulo, :idioma, :fecha	, :nombre_revista, :categoria_revista, :medio_divul, :id_grupo)';

$q = $con->prepare($sql);
$q->execute(array(':nombre_arti'=>$nombre_arti, ':idioma'=>$idioma, ':autores'=>$autores, ':linkarticulo'=>$linkarticulo,':numero_issn'=>$numero_issn,':fecha'=>$fecha, ':nombre_revista'=>$nombre_revista, ':categoria_revista'=>$categoria_revista, ':medio_divul'=>$medio_divul, ':id_grupo'=>$id_grupo));
 ?>