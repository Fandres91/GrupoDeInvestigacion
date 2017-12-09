<?php 
	// se reciben las variables

$idP = $_POST['idP'];

require('../conexion.php');

$con =Conectar();
$sql = 'DELETE FROM articulos WHERE id_articulos=:idid_articulos';
$q = $con->prepare($sql);
$q->execute(array(':idid_articulos'=>$idP));
 ?>