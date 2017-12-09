<?php 
	// se reciben las variables


$nombre = $_POST['nombre'];
$telefono= $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$profesion = $_POST['profesion'];
$id_grupo = $_POST['id_grupo'];
$cedula = $_POST['cedula'];

require('../conexion.php');

$con =Conectar();
$sql = 'UPDATE director SET nombre=:nombre, telefono=:telefono, correo=:correo,profesion=:profesion, contrasena=:contrasena, id_grupo=:id_grupo WHERE cedula=:idcedula';
$q = $con->prepare($sql);
$q->execute(array(':nombre'=>$nombre,':telefono'=>$telefono, ':correo'=>$correo,':contrasena'=>$contrasena, ':profesion'=>$profesion, ':id_grupo'=>$id_grupo, ':idcedula'=>$cedula));
 ?>