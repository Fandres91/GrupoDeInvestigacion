<?php 
	// se reciben las variables

$titulo_libro = $_POST['titulo_libro'];
$autor_libro = $_POST['autor_libro'];
$isbn_libro = $_POST['isbn_libro'];
$fecha_libro= $_POST['fecha_libro'];
$lugar_publica = $_POST['lugar_publica'];
$medio_divul_libro = $_POST['medio_divul_libro'];
$link_libro = $_POST['link_libro'];
$id_grupo = $_POST['id_grupo'];
$idP = $_POST['idP'];

require('../conexion.php');

$con =Conectar();
$sql = 'UPDATE libros SET titulo_libro=:titulo_libro, autor_libro=:autor_libro, fecha_libro=:fecha_libro, isbn_libro=:isbn_libro, lugar_publica=:lugar_publica, medio_divul_libro=:medio_divul_libro, link_libro=:link_libro, id_grupo=:id_grupo WHERE id_libro=:idid_libro';
$q = $con->prepare($sql);
$q->execute(array(':titulo_libro'=>$titulo_libro,':autor_libro'=>$autor_libro, ':fecha_libro'=>$fecha_libro, ':isbn_libro'=>$isbn_libro,':lugar_publica'=>$lugar_publica, ':medio_divul_libro'=>$medio_divul_libro,':link_libro'=>$link_libro, ':id_grupo'=>$id_grupo,':idid_libro'=>$idP));
 ?>