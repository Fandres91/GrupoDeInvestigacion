 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Artículos</title>
  <link href="../../res/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../res/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="../../res/css/estilos.css" rel="stylesheet">
  <script type="text/javascript" src="ajaxarticulo.js"></script>
 
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
        <h1>Artículos</h1>
       <div> <label id="contador" class="contador"></label></div>
        <p class="lead">Aplicación gestión de Artículos</p>
        <button type="button" onclick="Nuevo();" class="btn btn-primary btn-lg" >
          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Registro
        </button>

      </div>
      
      <div class="panel panel-default" style="width:95%">
        <div class="panel-heading">Lista de Artículos</div>
        <table class="table" id="mi-tabla" >
          <thead>
            <tr>
              
              <th>#</th>
              <th>Título</th>
              <th>Idioma</th>
              <th>Autores</th>
              <th>ISSN</th>
              <th>Fecha</th>
              <th>Revista <span class="glyphicon glyphicon-arrow-right"></span></th>
              <th>Categoria</th>
              <th>Medio </th>
              <th><span class="glyphicon glyphicon-globe"></span> Link</th>
             
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
            $sql= "SELECT articulos.*
             FROM articulos JOIN director ON cedula = '$usuario' WHERE articulos.id_grupo = director.id_grupo ";
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
                <td><?php print($row->nombre_arti); ?></td>
                <td><?php print($row->idioma); ?></td>
                <td><?php print($row->autores); ?></td>
                <td><?php print($row->numero_issn); ?></td>
                <td><?php print($row->fecha); ?></td>
                <td><?php print($row->nombre_revista); ?></td>
                <td><?php print($row->categoria_revista); ?></td>
                <td><?php print($row->medio_divul); ?></td>
                <td><a href="<?php print($row->linkarticulo); ?>" target="_blank" ><?php print($row->linkarticulo); ?></a></td>
                
                
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span></button>
                    <ul class="dropdown-menu" role="menu">
                    
                      <li><a onclick="Eliminar(
                        '<?php print($row->id_articulos); ?>',
                        '<?php print($row->nombre_arti); ?>',
                        '<?php print($row->idioma); ?>',
                        '<?php print($row->fecha); ?>',
                        '<?php print($row->nombre_revista); ?>',
                        '<?php print($row->categoria_revista); ?>',
                        '<?php print($row->medio_divul); ?>',
                        '<?php print($row->id_grupo); ?>'
                        );"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></li>

                      <li><a onclick="Editar(
                        '<?php print($row->id_articulos); ?>',
                        '<?php print($row->nombre_arti); ?>',
                        '<?php print($row->autores); ?>',
                        '<?php print($row->numero_issn); ?>',
                        '<?php print($row->idioma); ?>',
                        '<?php print($row->fecha); ?>',
                        '<?php print($row->nombre_revista); ?>',
                        '<?php print($row->categoria_revista); ?>',
                        '<?php print($row->medio_divul); ?>',
                        '<?php print($row->linkarticulo); ?>',
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
              <h4 class="modal-title">Artículo</h4>
            </div>
            
            <form role="form" action="" name="frmArticulo" onsubmit="Registrar(idP, accion); return false">
              <div class="col-lg-12">
                
               <div class="form-group">
                  <label>Título</label>
                  <input name="nombre_arti" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Autores</label>
                  <input name="autores" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>ISSN</label>
                  <input name="numero_issn" type="text" class="form-control" required>
                </div>


                <div class="form-group">
                  <label>Idioma</label> </br>
                                  
                  <select class="selectpicker" name="idioma" title="Seleccione" required>
                
                   <option value="Español"> Español</option>
                   <option value="Ingles"> Ingles</option>
                   <option value="Otro"> Otro</option>
                                     
                 </select>
                 
                </div>

                <div class="form-group">
                  <label>Fecha</label>
                  <input type="date" name="fecha" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Nombre de la revista</label>
                  <input type="text" name="nombre_revista" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Categoria de la revista</label> </br>
                  <select class="selectpicker" name="categoria_revista" title="Seleccione" required="">
                   
                   <option value="A1">A1</option>
                   <option value="A2">A2</option>
                   <option value="B">B </option>
                   <option value="C">C </option>
                   <option value="">Ninguna </option>
                   
                 </select>
                 
                </div>

                <div class="form-group">
                  <label>Medio divulgación</label> </br>
                  <select class="selectpicker" name="medio_divul" title="Seleccione" required>
                 
                   <option value="Electronico">Electronico</option>
                   <option value="Fisico">Fisico</option>
                                     
                 </select>
                 
                </div>
                <div class="form-group">
                  <label>Link</label>
                  <input name="linkarticulo" class="form-control" >
                </div>

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

        
        document.frmArticulo.nombre_arti.value= "";
        document.frmArticulo.idioma.value= "";
        document.frmArticulo.autores.value= "";
        document.frmArticulo.numero_issn.value= "";
        document.frmArticulo.fecha.value= "";
        document.frmArticulo.nombre_revista.value= "";
        document.frmArticulo.categoria_revista.value= "";
        document.frmArticulo.medio_divul.value= "";
        document.frmArticulo.linkarticulo.value= "";
        document.frmArticulo.id_grupo.value;
        //Habilito la casilla de nombre
        
        $("#modal").modal("show");
      }

      function Editar(id_articulos, nombre_arti, autores, numero_issn, idioma, fecha, nombre_revista, categoria_revista, medio_divul, linkarticulo, id_grupo)
      {
        accion = "E";
        idP = id_articulos;
        
        document.frmArticulo.nombre_arti.value= nombre_arti;
        document.frmArticulo.idioma.value= idioma;
        document.frmArticulo.autores.value= autores;
        document.frmArticulo.numero_issn.value= numero_issn;
        document.frmArticulo.fecha.value= fecha;
        document.frmArticulo.nombre_revista.value= nombre_revista;
        document.frmArticulo.categoria_revista.value= categoria_revista;
        document.frmArticulo.medio_divul.value= medio_divul;
        document.frmArticulo.linkarticulo.value= linkarticulo;
        document.frmArticulo.id_grupo.value= id_grupo;
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