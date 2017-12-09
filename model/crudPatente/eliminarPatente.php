<?php 
	// se reciben las variables

$idP = $_POST['idP'];

require('../conexion.php');

$con =Conectar();
$sql = 'DELETE FROM patente WHERE id_patente=:idid_patente';
$q = $con->prepare($sql);
$q->execute(array(':idid_patente'=>$idP));
 ?>