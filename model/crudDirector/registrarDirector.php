<?php 
	// se reciben las variables
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$telefono= $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$profesion = $_POST['profesion'];
$id_grupo = $_POST['id_grupo'];

require('../conexion.php');

$con =Conectar();
$sql = 'INSERT INTO director (cedula, nombre, telefono, correo, contrasena, profesion, id_grupo) VALUES (:cedula, :nombre, :telefono, :correo, :contrasena, :profesion, :id_grupo)';
$q = $con->prepare($sql);
$q->execute(array(':cedula'=>$cedula, ':nombre'=>$nombre, ':telefono'=>$telefono, ':correo'=>$correo,':contrasena'=>$contrasena, ':profesion'=>$profesion, ':id_grupo'=>$id_grupo));
 ?>