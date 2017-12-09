<?php 
	// se reciben las variables
$nombre_patente = $_POST['nombre_patente'];
$fecha_patente = $_POST['fecha_patente'];
$nombre_comercial_patente = $_POST['nombre_comercial_patente'];
$disponibilidad_patente = $_POST['disponibilidad_patente'];
$instfinanciera_patente = $_POST['instfinanciera_patente'];
$tipo_patente = $_POST['tipo_patente'];
$autores_patente = $_POST['autores_patente'];
$id_grupo = $_POST['id_grupo'];

require('../conexion.php');

$con =Conectar();
$sql = 'INSERT INTO patente (nombre_patente, fecha_patente, nombre_comercial_patente, disponibilidad_patente, instfinanciera_patente, tipo_patente, autores_patente, id_grupo) VALUES (:nombre_patente, :fecha_patente, :nombre_comercial_patente, :disponibilidad_patente, :instfinanciera_patente, :tipo_patente	, :autores_patente, :id_grupo)';

$q = $con->prepare($sql);
$q->execute(array(':nombre_patente'=>$nombre_patente, ':instfinanciera_patente'=>$instfinanciera_patente, ':fecha_patente'=>$fecha_patente, ':disponibilidad_patente'=>$disponibilidad_patente,':nombre_comercial_patente'=>$nombre_comercial_patente,':tipo_patente'=>$tipo_patente, ':autores_patente'=>$autores_patente,  ':id_grupo'=>$id_grupo));
 ?>