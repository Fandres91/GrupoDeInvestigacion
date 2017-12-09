<!DOCTYPE html>
<html>
<head>
  <meta charset="ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>INVESTIGACIÓN</title>
  <link href="res/css/bootstrap.min.css" rel="stylesheet">
  <link href="res/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="res/css/estilos.css" rel="stylesheet">
  <link href="res/css/sliderIndex.css" rel="stylesheet">
  <link href="res/css/bootstrap-responsive.css" rel="stylesheet">
  
  <script type="text/javascript" src="res/js/ajax.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="res/js/bootstrapcdn.js"></script>
  <script type="text/javascript" src="res/js/jssor.slider.min.js"></script>
  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</head>
<body>

<nav class="navbar navbar-default cabecera" >
  <div class="container-fluid"  >
    <div class="navbar-header">
    
      <a class="navbar-brand" href="#">
       <LEFT><img class=" d-block" alt="Brand" src="res/img/unisangil.png"></LEFT> UNISANGIL INVESTIGACIÓN
      </a>
      </div>
      <!-- ================================= 
      Panel de Login
      =================================-->

     <?php 
// Valido la sesión, en el caso que el usuario no este autenticado sera enviado al index
     error_reporting(E_ALL ^ E_NOTICE);
session_start(); 

if($_SESSION["autentica"] != "SIP")
// echo "Session is set"; // for testing purposes
//header("Location: ../../index.php");
   {
 ?>


      <ul class="nav navbar-nav navbar-right ">
        <li><p class="navbar-text">Directores</p></li>
        <li class="dropdown cabecera">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b> <span class="glyphicon glyphicon-log-in"></span>  Inicio de sesión</b> <span class="caret"></span></a> 
          
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row cabecera" >
              <div class="col-md-12">
                
                 <form class="form" role="form" method="post" action="model/sesion/login.php" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                    <label>Ingreso al sistema</label>
                     </br>
                       <input type="number" name="cedulaSesion" class="form-control"  placeholder="Digite su cédula" required>
                    </div>
                    <div class="form-group">
                       
                       <input type="password" name="contrasenaSesion" class="form-control"  placeholder="Contraseña" required>
                    <div class="help-block text-right"><a href="">Olvido su contraseña?</a></div>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                   
                 </form>

              </div>
              <div class="bottom text-center">
                Eres nuevo ? <a href="#"><b>Join Us</b></a>
              </div>
           </div>
        </li>
      </ul>
        </li>

        <?php  }
   else
   { ?>
 <ul class="nav navbar-nav navbar-right ">
    <li><p class="navbar-text"><span class="glyphicon glyphicon-user"></span>  Usuario: <?php echo $_SESSION["usuario"]; ?> </p></li>
        <li>
        <a href="model/sesion/cerrar.php"><span class="glyphicon glyphicon-remove-sign"></span> Salir </a>
        </li>
  <?php } ?> 
  </ul>
      </ul>
    </div>
  
</nav>


<!--................... SLIDER DE IMAGENES DINAMICA........................-->
<section id="inicio"> </br>
<center>
<article id="article-slide">
    <!-- use jssor.slider.debug.js instead for debug -->
   <script type="text/javascript" src="res/js/sliderIndex.js"></script>

    <div id="jssor_1" style="position: relative;  top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('res/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="res/img/01.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="res/img/02.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="res/img/03.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="res/img/04.jpg" />
            </div>
            <a data-u="ad" href="http://www.jssor.com" style="display:none">Bootstrap Slider</a>
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
            <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
    </div>
    <script>
        jssor_1_slider_init();
    </script>
</article>
   <!-- ================================= 
   Panel de Sedes de Unisangil
   =================================-->
<article id="article-sedes">
   <h1 class="titulo-negro">Sedes Unisangil</h1>
   <article id="sangil">
   <a href="sections/section_sangil/sangil.php">
     <img src="res/img/sede_sangil1.png">
     <div class="img-tag" style="text-align: center;"> San Gil </div>
    </a>
   </article>
   <article id="yopal">
   <a href="">
      <img src="res/img/sede_yopal1.png">
      <div class="img-tag" style="text-align: center;"> Yopal </div>
    </a>
   </article>

   <article id="chiquinquira">
   <a href="">
      <img src="res/img/sede_chiq1.png">
      <div class="img-tag" style="text-align: center;">Chiquinquirá</div>
    </a>
   </article>

</article> </center>
 </section>
<!-- ================================= 
Panel de Convocatorias
=================================-->
<section id="section-sangil">
 <div id="etiqueta">CONVOCATORIAS<span id="etiqueta3"></span></div>
<center>
 <div class="posicion-left alLado">
   <table class="table textoNegro ">
    <thead>
      <tr>
        <th>Número</th>
        <th>Título</th>
        <th>Descripción</th>
        <th>Total recursos</th>
        <th>Fecha de apertura</th>       
        <th>Requisitos</th>
        <th>Inscripción</th>       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>36</td>
       <td>Convocatoria de investigación interna 2016</td>
       <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in porta lorem. Morbi condimentum est nibh, et consectetur tortor feugiat at.</td>
        <td>$35.564.000</td>
        <td>13/11/2016</td>
        <td> <a href=""> requisitos.pdf</a></td>
        <td><a href=""> Formulario</a></td>
        
       <td> <a href="../section_director/Director.php" class="btn btn-primary btn-lg pull-right "  role="button"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver Mas</a> </td>
      </tr>
     
    </tbody>
  </table>
</div>
</center>
</section>

<!--
<section id="section-yopal">
 <iframe src="http://publicaciones.unisangil.edu.co" height="600" width="100%"></iframe>

</section>-->

</body>
</html>