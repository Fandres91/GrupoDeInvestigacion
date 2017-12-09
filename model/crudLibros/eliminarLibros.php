<?php 
	// se reciben las variables

$idP = $_POST['idP'];

require('../conexion.php');

$con =Conectar();
$sql = 'DELETE FROM libros WHERE id_libro=:idid_libro';
$q = $con->prepare($sql);
$q->execute(array(':idid_libro'=>$idP));
 ?>