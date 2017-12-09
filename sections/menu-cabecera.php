<div class="navbar-header">
    
      <a class="navbar-brand" href="../../index.php">
       <LEFT><img class=" d-block" alt="Brand" src="../../res/img/unisangil.png"></LEFT> UNISANGIL INVESTIGACIÓN
      </a>
      </div>
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
                
                 <form class="form" role="form" method="post" action="../../model/sesion/login.php" accept-charset="UTF-8" id="login-nav">
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
        <a href="../../model/sesion/cerrar.php"><span class="glyphicon glyphicon-remove-sign"></span> Salir </a>
        </li>
  <?php } ?> 
  </ul>
      </ul>
   

     

