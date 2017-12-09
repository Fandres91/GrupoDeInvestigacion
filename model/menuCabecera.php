 

<?php 
// Valido la sesión, en el caso que el usuario no este autenticado sera enviado al index
 session_start(); 

if($_SESSION["autentica"] != "SIP")
// echo "Session is set"; // for testing purposes
header("Location: ../../index.php");
    
 ?>
 <center>
<div class="navbar-header">
<!--(( para que sea resposive le falta un codigo boton  ))-->
        <a class="navbar-brand" href="../../index.php"><LEFT><img class=" d-block" alt="Brand" src="../../res/img/unisangil.png"></LEFT> UNISANGIL</a>
      </div>

      <ul class="nav navbar-nav">
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">  <span class="glyphicon glyphicon-chevron-right"></span> Generación Conocimineto <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../section_articulo/articulo.php">Artículos</a></li>
          <li><a href="../section_libros/libros.php">Libros</a></li>
          <li><a href="../section_patentes/patentes.php">Patentes</a></li>
          <li><a href="#">Variedad Vegetal &</br> Nueva raza animal </a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Producto de investigación</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Desarrollo tecnológico <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Diseño industrial</a></li>
          <li><a href="#">Esquema de trazado de </br>circuito integrado</a></li>
          <li><a href="#">Software</a></li>
          <li><a href="#">Planta piloto </a></li>
          
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Apropiación social <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Diseño industrial</a></li>
          <li><a href="#">Esquema de trazado de </br>circuito integrado</a></li>
          <li><a href="#">Software</a></li>
          <li><a href="#">Planta piloto </a></li>
          
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Recursos humanos <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Diseño industrial</a></li>
          <li><a href="#">Esquema de trazado de </br>circuito integrado</a></li>
          <li><a href="#">Software</a></li>
          <li><a href="#">Planta piloto </a></li>
          
        </ul>
      </li>
     
     <li><p class="navbar-text"><span class="glyphicon glyphicon-user"></span>  Usuario: <?php echo $_SESSION["usuario"]; ?> </p></li>
        <li>
        <a href="../../model/sesion/cerrar.php"><span class="glyphicon glyphicon-remove-sign"></span> Salir </a>
        </li>
     
     
    </ul></center>