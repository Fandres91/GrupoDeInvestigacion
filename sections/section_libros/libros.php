 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Libros</title>
  <link href="../../res/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../res/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="../../res/css/estilos.css" rel="stylesheet">
  <script type="text/javascript" src="ajaxlibro.js"></script>
 
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
        <h1>Libros</h1>
       <div> <label id="contador" class="contador"></label></div>
        <p class="lead">Aplicación gestión de Libros</p>
        <button type="button" onclick="Nuevo();" class="btn btn-primary btn-lg" >
          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Registro
        </button>

      </div>
      
      <div class="panel panel-default" style="width:95%">
        <div class="panel-heading">Lista de Libros</div>
        <table class="table" id="mi-tabla" >
          <thead>
            <tr>
              
              <th>#</th>
              <th>Título</th>            
              <th>Autores</th>
              <th>Fecha</th>
              <th>Isbn</th>              
              <th>Publicado</th>
              <th>Medio</th>             
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
            $sql= "SELECT libros.*
             FROM libros JOIN director ON cedula = '$usuario' WHERE libros.id_grupo = director.id_grupo ";
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
                <td><?php print($row->titulo_libro); ?></td>
                <td><?php print($row->autor_libro); ?></td>
                <td><?php print($row->fecha_libro); ?></td>
                <td><?php print($row->isbn_libro); ?></td>
                <td><?php print($row->lugar_publica); ?></td>
                <td><?php print($row->medio_divul_libro); ?></td>
                
                <td><a href="<?php print($row->link_libro); ?>" target="_blank" ><?php print($row->link_libro); ?></a></td>
                
                
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span></button>
                    <ul class="dropdown-menu" role="menu">
                    
                      <li><a onclick="Eliminar(
                        '<?php print($row->id_libro); ?>',
                        '<?php print($row->titulo_libro); ?>',
                        '<?php print($row->autor_libro); ?>',
                        '<?php print($row->fecha_libro); ?>',
                        '<?php print($row->isbn_libro); ?>',
                        '<?php print($row->lugar_publica); ?>',
                        '<?php print($row->medio_divul_libro); ?>',
                        '<?php print($row->link_libro); ?>',
                        '<?php print($row->id_grupo); ?>'
                        );"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></li>

                      <li><a onclick="Editar(
                        '<?php print($row->id_libro); ?>',
                        '<?php print($row->titulo_libro); ?>',
                        '<?php print($row->autor_libro); ?>',
                        '<?php print($row->fecha_libro); ?>',
                        '<?php print($row->isbn_libro); ?>',
                        '<?php print($row->lugar_publica); ?>',
                        '<?php print($row->medio_divul_libro); ?>',
                        '<?php print($row->link_libro); ?>',                       
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
              <h4 class="modal-title">Libros</h4>
            </div>
            
            <form role="form" action="" name="frmArticulo" onsubmit="Registrar(idP, accion); return false">
              <div class="col-lg-12">
                
               <div class="form-group">
                  <label>Título</label>
                  <input name="titulo_libro" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Autores</label>
                  <input name="autor_libro" class="form-control" required>
                </div>
                 <div class="form-group">
                  <label>Fecha</label>
                  <input type="date" name="fecha_libro" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Isbn</label>
                  <input name="isbn_libro" type="text" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Lugar de publicación</label>
                  <input type="text" name="lugar_publica" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Medio divulgación</label> </br>
                  <select class="selectpicker" name="medio_divul_libro" title="Seleccione" required>
                 
                   <option value="Electronico">Electronico</option>
                   <option value="Fisico">Fisico</option>
                                     
                 </select>
                 
                </div>
                <div class="form-group">
                  <label>Link</label>
                  <input name="link_libro" class="form-control" >
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

        
        document.frmArticulo.titulo_libro.value= "";
        document.frmArticulo.autor_libro.value= "";        
        document.frmArticulo.fecha_libro.value= "";
        document.frmArticulo.isbn_libro.value= "";
        document.frmArticulo.lugar_publica.value= "";
        document.frmArticulo.medio_divul_libro.value= "";
        document.frmArticulo.link_libro.value= "";
        document.frmArticulo.id_grupo.value;
        //Habilito la casilla de nombre
        
        $("#modal").modal("show");
      }

      function Editar(id_libro, titulo_libro, autor_libro, fecha_libro, isbn_libro, lugar_publica, medio_divul_libro, link_libro, id_grupo)
      {
        accion = "E";
        idP = id_libro;
        
        document.frmArticulo.titulo_libro.value= titulo_libro;       
        document.frmArticulo.autor_libro.value= autor_libro;
         document.frmArticulo.fecha_libro.value= fecha_libro;
        document.frmArticulo.isbn_libro.value= isbn_libro;       
        document.frmArticulo.lugar_publica.value= lugar_publica;
        document.frmArticulo.medio_divul_libro.value= medio_divul_libro;
        document.frmArticulo.link_libro.value= link_libro;
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