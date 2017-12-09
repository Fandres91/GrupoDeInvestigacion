<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Directores</title>
  <link href="../../res/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../res/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="../../res/css/estilos.css" rel="stylesheet">
  <script type="text/javascript" src="ajaxDirector.js"></script>
 
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">UNISANGIL</a>
      </div>
      <?php 
      session_start(); 
     
     ?>
      <ul class="nav navbar-nav navbar-right ">
        <li><p class="navbar-text"><span class="glyphicon glyphicon-user"></span>  Usuario: <?php echo $_SESSION["usuario"]; ?> </p></li>
        <li>
        <a href="../../model/sesion/cerrar.php"><span class="glyphicon glyphicon-remove-sign"></span> Salir </a>
        </li>
      </ul>
    </nav>
    <div class="container">
      <div class="starter-template">
        <h1>Directores - Grupos de investigación</h1>
        <p class="lead">Aplicación gestión de directores</p>
        <button type="button" onclick="Nuevo();" class="btn btn-primary btn-lg" >
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Registro
        </button>

      </div>
      <div class="panel panel-default">
        <div class="panel-heading">Lista de Directores</div>
        <table class="table">
          <thead>
            <tr>
              
              <th>Cédula</th>
              <th>Nombre</th>
              <th>Teléfono</th>
              <th><span class="glyphicon glyphicon-envelope"></span> Correo</th>
              <th>Contraseña</th>
              <th>Profesión</th>
              <th>Grupo</th>
            </tr>
          </thead>
          <tbody>
          <?php
            require("../../model/conexion.php");
            // se obtiene en una variable la conexion
            $con = Conectar();
            // variable para almacenar sql
            //$sql = "SELECT * FROM grupo";
            $sql= "SELECT director.*, grupo.nombre_grupos 
             FROM director LEFT JOIN grupo ON director.id_grupo = grupo.id_grupos";
            // se prepara la sentencia para ser ejecutada
            $stmt = $con->prepare($sql);
            $result = $stmt->execute();
            // mediane row se obtienen los contenidos en las columnas de la BD
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            //\PDO::FECH_OBJ devuelve un objeto anonimo con los nombre correspondiente a los nombre de las columbnas de la BD
            foreach ($rows as $row) {
              # code...
                ?>
                 <tr>
                 
                <td><?php print($row->cedula); ?></td>
                <td><?php print($row->nombre); ?></td>
                <td><?php print($row->telefono); ?></td>
                <td><?php print($row->correo); ?></td>
                <td><?php print($row->contrasena); ?></td>
                <td><?php print($row->profesion); ?></td>
                <td><?php print($row->nombre_grupos); ?></td>
                <td>
                  <div class="btn-group">
                   
                    <button type="button" class="btn btn-danger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span></button>
                    <ul class="dropdown-menu" role="menu">
                    
                      <li><a onclick="Eliminar('<?php print($row->cedula);?>',
                        '<?php print($row->nombre);?>',
                        '<?php print($row->telefono);?>',
                        '<?php print($row->correo); ?>',
                        '<?php print($row->contrasena);?>',
                        '<?php print($row->profesion);?>'
                        );"> <span class="glyphicon glyphicon-trash"></span> Eliminar</a></li>

                      <li><a onclick="Editar( '<?php print($row->cedula);?>',
                        '<?php print($row->nombre);?>',
                        '<?php print($row->telefono);?>',
                        '<?php print($row->correo);?>',
                        '<?php print($row->contrasena);?>',
                        '<?php print($row->profesion);?>',
                        '<?php print($row->id_grupo);?>'
                        );"><span class="glyphicon glyphicon-repeat"></span> Actualizar</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
            <?php
            }

          ?>
             
             </tbody>
        </table>
      </div>

      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Directores</h4>
            </div>
            
            <form role="form" action="" name="frmDirector" onsubmit="Registrar(idP, accion); return false">
              <div class="col-lg-12">
                
               <div class="form-group">
                  <label>Cédula</label>
                  <input type="number" id="idcedula" name="cedula" class="form-control" required>
                </div>


                <div class="form-group">
                  <label>Nombres y Apellidos</label>
                    <input name="nombre" class="form-control" required>              
                                  
                </div>

                <div class="form-group">
                  <label>Teléfono</label>
                  <input  name="telefono" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Correo </label>
                  <input name="correo" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Contraseña</label>
                  <input type="password" name="contrasena" class="form-control" required>
                 
                </div>
                <div class="form-group">
                  <label>Repita la contraseña</label>
                  <input  type="password" name="contrasena2" class="form-control" placeholder="Escriba de nuevo la contraseña">
                 
                </div>

                <div class="form-group">
                  <label>Profesión </label>
                  <input type="text" name="profesion" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Id grupo </label>
                  <select class="selectpicker" name="id_grupo">
                   <option value="">---</option>
                   <?php include("../../model/selectGrupo.php"); ?>              
                 </select>
                </div>
                

                <button type="submit" class="btn btn-info btn-lg">
                  <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Registrar
                </button>

              </div>
            </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-circle" data-dismiss="modal"><i class="fa fa-times"></i>x</button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <script src="../../res/js/jquery.min.js"></script>
    <script src="../../res/js/bootstrap.min.js"></script>
    <script src="../../res/js/bootstrap-select.min.js"></script>
    <!--Llamado a la ventana modal-->
    <script type="text/javascript">
    var accion;
    var idP;
       function Nuevo()
      {
        accion = "N";

        document.frmDirector.cedula.value= "";
        document.frmDirector.nombre.value= "";
        document.frmDirector.telefono.value= "";
        document.frmDirector.correo.value= "@unisangil.edu.co";
        document.frmDirector.contrasena.value= "";
        document.frmDirector.profesion.value= "";
        document.frmDirector.id_grupo.value= "";
        //Habilito la casilla de nombre
        document.getElementById("idcedula").disabled = false;
        $("#modal").modal("show");
      }

      function Editar(cedula, nombre, telefono, correo, contrasena, profesion,id_grupo)
      {
        accion = "E";
        idP = cedula;
        document.frmDirector.cedula.value= idP;
        document.frmDirector.nombre.value= nombre;
        document.frmDirector.telefono.value= telefono;
        document.frmDirector.correo.value= correo;
        document.frmDirector.contrasena.value= contrasena;
        document.frmDirector.profesion.value= profesion;
        document.frmDirector.id_grupo.value= id_grupo;

        //Deshabilito la casilla del nombre de grupo
        document.getElementById("idcedula").disabled = true;
        $("#modal").modal("show");
      }
      /*function b()
      {
        alert("accion"+accion);
      }*/

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
  //variables
  var contrasena = $('[name=contrasena]');
  var contrasena2 = $('[name=contrasena2]');
  var confirmacion = "Las contraseñas si coinciden";
  var longitud = "La contraseña debe estar formada entre 6-10 carácteres (ambos inclusive)";
  var negacion = "No coinciden las contraseñas";
  var vacio = "La contraseña no puede estar vacía";
  //oculto por defecto el elemento span
  var span = $('<span></span>').insertAfter(contrasena2);
  span.hide();
  //función que comprueba las dos contraseñas
  function coincidePassword(){
  var valor1 = contrasena.val();
  var valor2 = contrasena2.val();
  //muestro el span
  span.show().removeClass();
  //condiciones dentro de la función
  if(valor1 != valor2){
  span.text(negacion).addClass('negacion'); 
  }
  if(valor1.length==0 || valor1==""){
  span.text(vacio).addClass('negacion');  
  }
  if(valor1.length<6 || valor1.length>10){
  span.text(longitud).addClass('negacion');
  }
  if(valor1.length!=0 && valor1==valor2){
  span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
  }
  }
  //ejecuto la función al soltar la tecla
  contrasena2.keyup(function(){
  coincidePassword();
  });
});



    </script>

 <div class="navbar navbar-default ">
    <div class="container">
      <p class="navbar-text pull-left">© 2016 -  By Mr. F.
           <a href="#" target="_blank" >Hydra</a>
      </p>
      
      <a href="#" class="navbar-btn btn-danger btn pull-right">
      <span class="glyphicon glyphicon-home"></span>  Página</a>
    </div>
  </body>
  </html>