<?php
error_reporting(E_ALL ^ E_NOTICE);
  session_start();
 
  // Obtengo los datos cargados en el formulario de login.
  $cedulaSesion = $_POST['cedulaSesion'];
  $contrasenaSesion = $_POST['contrasenaSesion'];
   $_SESSION['usuario'] = $_POST['cedulaSesion'];
  require('../conexion.php');
   $con = Conectar();


  
   // Realizo la consulta
   $sql=  "SELECT * FROM director WHERE cedula= '$cedulaSesion' AND contrasena = '$contrasenaSesion'";
    $stmt = $con->prepare($sql);
    $stmt->execute(array(":cedula"=>$cedulaSesion));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
     $count = $stmt->rowCount();
  // Esto se puede remplazar por un usuario real guardado en la base de datos.
  /*if($cedulaSesion == '123456' && $contrasenaSesion == 'fabian'){
    // Guardo en la sesión el cedulaSesion del usuario.
    $_SESSION['usuario'] = $cedulaSesion;*/
     
     // evaluo si la consulta es validad
   
   // header("HTTP/1.1 302 Moved Temporarily");
   
  if($row['contrasena']==$contrasenaSesion){

     header("Location: ../../sections/section_articulo/articulo.php");
   
    
     $_SESSION['autentica'] = "SIP";
   }

   elseif ($cedulaSesion =='1111' AND $contrasenaSesion == '1111') {
     # code...
    header("Location: ../../sections/section_grupo/grupo.php");
    
     $_SESSION['autentica'] = "SIP";
   }
   else{
    
   
    header("Location: mensaje.php");
   }
 
?>