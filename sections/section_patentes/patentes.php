 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Patentes</title>
  <link href="../../res/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../res/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="../../res/css/estilos.css" rel="stylesheet">
  <script type="text/javascript" src="ajaxpatentes.js"></script>
 
</head>
<!--onload numero me actualiza el conteo de las filas para saber cuantos artículo hay-->
<body onload="numero()">
  <nav class="navbar navbar-inverse">
    <div class="container">
      <!-- Incorporo el menú de selección-->
      <?php  include("../../model/menuCabecera.php"); ?>
    </div>  
    </nav>
    <div class="container" style="width:95%">
      <div class="starter-template">
        <h1>Patentes</h1>
       <div> <label id="contador" class="contador"></label></div>
        <p class="lead">Aplicación gestión de Patentes</p>
        <button type="button" onclick="Nuevo();" class="btn btn-primary btn-lg" >
          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Registro
        </button>

      </div>
      
      <div class="panel panel-default" style="width:95%">
        <div class="panel-heading">Lista de Patentes</div>
        <table class="table" id="mi-tabla" >
          <thead>
            <tr>
              
              <th>#</th>
              <th>Nombre</th>
              <th>Fecha</th>
              <th>Nombre Comercial</th>
              <th>Autores</th>             
              <th>Disponibilidad</th>
              <th>Institución Financiera</th>
              <th>Tipo de Patente</th>
              
             
            </tr>
          </thead>
          <tbody>

         
          <?php
            require("../../model/conexion.php");
            // se obtiene en una variable la conexion
            $con = Conectar();
             $usuario= $_SESSION["usuario"];
          /*
            Se requiere conocer a que grupo corresponde el director, con el fin de mandar a llamar los artículos
            que corresponden a dicho grupo, para saber que grupo es llamo el archivo asignarGrupo y rescato el valor
            $row->id_grupo 
          */
            $sql= "SELECT patente.*
             FROM patente JOIN director ON cedula = '$usuario' WHERE patente.id_grupo = director.id_grupo ";
            $stmt = $con->prepare($sql);
            $result = $stmt->execute();
            // mediane row se obtienen los contenidos en las columnas de la BD
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            //\PDO::FECH_OBJ devuelve un objeto anonimo con los nombre correspondiente a los nombre de las columbnas de la BD
            $contador = 0;
            foreach ($rows as $row) {
              # code...
                ?>
                 <tr>
                 
                <td><?php //print($row->id_articulos); 
                 print($contador =$contador +1);?></td>
                <td><?php print($row->nombre_patente); ?></td>
                <td><?php print($row->fecha_patente); ?></td>
                <td><?php print($row->nombre_comercial_patente); ?></td>
                <td><?php print($row->autores_patente); ?></td>
                <td><?php print($row->disponibilidad_patente); ?></td>
                <td><?php print($row->instfinanciera_patente); ?></td>
                <td><?php print($row->tipo_patente); ?></td>
                       
                
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span></button>
                    <ul class="dropdown-menu" role="menu">
                    
                      <li><a onclick="Eliminar(
                        '<?php print($row->id_patente); ?>',
                        '<?php print($row->nombre_patente); ?>',
                        '<?php print($row->fecha_patente); ?>',
                        '<?php print($row->nombre_comercial_patente); ?>',
                        '<?php print($row->autores_patente); ?>',
                        '<?php print($row->disponibilidad_patente); ?>',
                        '<?php print($row->instfinanciera_patente); ?>',
                        '<?php print($row->tipo_patente); ?>',
                        '<?php print($row->id_grupo); ?>'
                        );"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></li>

                      <li><a onclick="Editar(
                        '<?php print($row->id_patente); ?>',
                        '<?php print($row->nombre_patente); ?>',
                        '<?php print($row->fecha_patente); ?>',
                        '<?php print($row->nombre_comercial_patente); ?>',
                         '<?php print($row->autores_patente); ?>',
                        '<?php print($row->disponibilidad_patente); ?>',
                        '<?php print($row->instfinanciera_patente); ?>',
                        '<?php print($row->tipo_patente); ?>',
                        '<?php print($row->id_grupo); ?>'
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
              <h4 class="modal-title">Patentes</h4>
            </div>
            
            <form role="form" action="" name="frmPatente" onsubmit="Registrar(idP, accion); return false">
              <div class="col-lg-12">
                
               <div class="form-group">
                  <label>Nombre</label>
                  <input name="nombre_patente" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Fecha</label>
                  <input type="date" name="fecha_patente" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Nombre comercial</label>
                  <input name="nombre_comercial_patente" type="text" class="form-control" required>
                </div>
                 <div class="form-group">
                  <label>Autores</label>
                  <input name="autores_patente" type="text" class="form-control" required>
                </div>


                <div class="form-group">
                  <label>Disponibilidad</label> </br>
                                  
                  <select class="selectpicker" name="disponibilidad_patente" title="Seleccione" required>
                
                   <option value="Restringido"> Restringido</option>
                   <option value="No restringido"> No restringido</option>
                                                        
                 </select>
                 
                </div>

                <div class="form-group">
                  <label>Inst. Financiera</label>
                  <input type="text" name="instfinanciera_patente" class="form-control" required>
                </div>

                
                <div class="form-group">
                  <label>Tipo de patente</label> </br>
                  <select class="selectpicker" name="tipo_patente" title="Seleccione" required="">
                   
                   <option value="Invención">Invención</option>
                   <option value="Innovación">Innovación</option>
                                      
                 </select>
                 
                </div>

                
                <!--(( internamente Asigno el grupo al que pertenece esta patente))-->
                <div class="form-group" hidden="true">
                <label>Grupo:</label>
                <?php include('../../model/asignarGrupo.php'); ?>
            
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

        
        document.frmPatente.nombre_patente.value= "";
        document.frmPatente.fecha_patente.value= "";
        document.frmPatente.nombre_comercial_patente.value= "";
        document.frmPatente.autores_patente.value= "";
        document.frmPatente.disponibilidad_patente.value= "";
        document.frmPatente.instfinanciera_patente.value= "";
        document.frmPatente.tipo_patente.value= "";
        document.frmPatente.id_grupo.value;
        //Habilito la casilla de nombre
        
        $("#modal").modal("show");
      }

      function Editar(id_patente, nombre_patente, fecha_patente, nombre_comercial_patente, autores_patente, disponibilidad_patente, instfinanciera_patente, tipo_patente, id_grupo)
      {
        accion = "E";
        idP = id_patente;
        
        document.frmPatente.nombre_patente.value= nombre_patente;
        document.frmPatente.autores_patente.value= autores_patente;
        document.frmPatente.fecha_patente.value= fecha_patente;
        document.frmPatente.nombre_comercial_patente.value= nombre_comercial_patente;
        document.frmPatente.disponibilidad_patente.value= disponibilidad_patente;
        document.frmPatente.instfinanciera_patente.value= instfinanciera_patente;
        document.frmPatente.tipo_patente.value= tipo_patente;
        document.frmPatente.id_grupo.value= id_grupo;
        //Deshabilito la casilla del nombre de grupo
        
        $("#modal").modal("show");
      }
      /*function b()
      {
        alert("accion"+accion);
      }*/

    </script>
    <script type="text/javascript">
    $(function numero() {

      var nFilas = $("#mi-tabla tr").length;
      var nColumnas = $("#mi-tabla tr:last td").length;
      /*var msg = "Filas: "+nFilas+" - Columnas: "+nColumnas;
          alert(msg);*/
          nFilas = nFilas - 1;
          document.getElementById("contador").innerHTML = nFilas;

         } );


    </script>

  </body>
  </html>