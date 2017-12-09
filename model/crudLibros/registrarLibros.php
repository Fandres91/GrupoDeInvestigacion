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

require('../conexion.php');

$con =Conectar();
$sql = 'INSERT INTO libros (titulo_libro, autor_libro, isbn_libro, link_libro, fecha_libro, lugar_publica, medio_divul_libro, id_grupo) VALUES (:titulo_libro, :autor_libro, :isbn_libro, :link_libro, :fecha_libro	, :lugar_publica, :medio_divul_libro,  :id_grupo)';

$q = $con->prepare($sql);
$q->execute(array(':titulo_libro'=>$titulo_libro, ':autor_libro'=>$autor_libro, ':link_libro'=>$link_libro,':isbn_libro'=>$isbn_libro,':fecha_libro'=>$fecha_libro, ':lugar_publica'=>$lugar_publica, ':medio_divul_libro'=>$medio_divul_libro,':id_grupo'=>$id_grupo));
 ?>