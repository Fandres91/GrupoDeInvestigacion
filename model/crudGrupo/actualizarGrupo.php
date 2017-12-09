<?php 
	// se reciben las variables
$nombre_grupos = $_POST['nombre_grupos'];
$categoria = $_POST['categoria'];
$ano_creacion = $_POST['ano_creacion'];
$descripcion = $_POST['descripcion'];
$linea_investigacion = $_POST['linea_investigacion'];
$programas_vincula	 = $_POST['programas_vincula'];
$facultad = $_POST['facultad'];
$sede = $_POST['sede'];
$idP = $_POST['idP'];

require('../conexion.php');

$con =Conectar();
$sql = 'UPDATE grupo SET nombre_grupos=:nombre_grupos, categoria=:categoria, ano_creacion=:ano_creacion, descripcion=:descripcion, linea_investigacion=:linea_investigacion, programas_vincula	=:programas_vincula	, facultad=:facultad, sede=:sede WHERE id_grupos=:idnombre_grupos';
$q = $con->prepare($sql);
$q->execute(array(':nombre_grupos'=>$nombre_grupos, ':categoria'=>$categoria,':ano_creacion'=>$ano_creacion,':descripcion'=>$descripcion,':linea_investigacion'=>$linea_investigacion,':programas_vincula'=>$programas_vincula, ':facultad'=>$facultad, ':sede'=>$sede, ':idnombre_grupos'=>$idP));
 ?>