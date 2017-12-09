<?php 
	// se reciben las variables

$idP = $_POST['idP'];

require('../conexion.php');

$con =Conectar();
$sql = 'DELETE FROM director WHERE cedula=:idcedula';
$q = $con->prepare($sql);
$q->execute(array(':idcedula'=>$idP));
 ?>