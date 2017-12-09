<?php 
	// se reciben las variables

$idP = $_POST['idP'];

require('../conexion.php');

$con =Conectar();
$sql = 'DELETE FROM grupo WHERE id_grupos=:idid_grupos';
$q = $con->prepare($sql);
$q->execute(array(':id_grupos'=>$idP));
 ?>