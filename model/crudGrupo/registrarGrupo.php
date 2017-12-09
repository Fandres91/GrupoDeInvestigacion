<?php 
	// se reciben las variables
$nombre_grupos = $_POST['nombre_grupos'];
$categoria = $_POST['categoria'];
$ano_creacion  =$_POST['ano_creacion'];
$descripcion = $_POST['descripcion'];
$linea_investigacion= $_POST['linea_investigacion'];
$programas_vincula = $_POST['programas_vincula'];
$facultad = $_POST['facultad'];
$sede = $_POST['sede'];


require('../conexion.php');

$con =Conectar();
$sql = 'INSERT INTO grupo (nombre_grupos, categoria, ano_creacion, descripcion, linea_investigacion, programas_vincula, facultad, sede) VALUES (:nombre_grupos, :categoria, :ano_creacion, :descripcion, :linea_investigacion	, :programas_vincula,:facultad, :sede)';
$q = $con->prepare($sql);
$q->execute(array(':nombre_grupos'=>$nombre_grupos, ':categoria'=>$categoria, ':ano_creacion'=>$ano_creacion, ':descripcion'=>$descripcion, ':linea_investigacion'=>$linea_investigacion, ':programas_vincula'=>$programas_vincula,':facultad'=>$facultad,':sede'=>$sede));
 ?>