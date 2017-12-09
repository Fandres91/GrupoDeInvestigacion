<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>INVESTIGACIÓN</title>
  <link href="../../res/css/bootstrap.css" rel="stylesheet">
   <link href="../../res/css/estilos.css" rel="stylesheet">
  <link href="../../res/css/bootstrap-select.min.css" rel="stylesheet">
  <script type="text/javascript" src="ajaxGrupo.js"></script>
 
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container">
     
    <!-- Incorporo el menú de la cabecera, este menú contiene los diferentes CRUD de los objetos del sistema-->
       <div class="container">
      <!-- Incorporo el menú de selección-->
      <?php  include("../../model/menuCabecera.php"); ?>
    </div>     
      </div>
    </nav>
    <div class="container">
      <div class="starter-template">
        <h1>Grupos de investigación</h1>
        <p class="lead">Aplicación gestión de grupos</p>
        <button type="button" onclick="Nuevo();" class="btn btn-primary btn-lg" >
          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Registro Grupo
        </button> 
        <a href="../section_director/Director.php" class="btn btn-primary btn-lg pull-right "  role="button"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Directores</a> 

      </div>
      <div class="panel panel-default">
        <div class="panel-heading">Lista de Grupos</div>
        <table class="table">
          <thead>
            <tr>
              
              <th>Nombres</th>
              <th>Categorias</th>
              <th>Año</th>
              <th>Descripción</th>
              <th>Linea de investigación</th>
              <th>Programas</th>
              <th>Facultad de:</th>
              <th>Sede</th>
              <th>Director</th>
            </tr>
          </thead>
          <tbody>
          <?php
            require("../../model/conexion.php");
            // se obtiene en una variable la conexion
            $con = Conectar();
            // variable para almacenar sql
            //$sql = "SELECT * FROM grupo";
            $sql= "SELECT grupo.*, director.nombre 
             FROM grupo LEFT JOIN director ON director.id_grupo = grupo.id_grupos ORDER BY grupo.categoria ASC ";
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
                 <!--El foreach recorrre los campos y se muestran en la tabla según los datos de la consulta realizada-->
                <td><?php print($row->nombre_grupos); ?></td>
                <td><?php print($row->categoria); ?></td>
                <td><?php print($row->ano_creacion); ?></td>
                <td><?php print($row->descripcion); ?></td>
                <td><?php print($row->linea_investigacion); ?></td>
                <td><?php print($row->programas_vincula); ?></td>
                <td><?php print($row->facultad); ?></td>
                <td><?php print($row->sede); ?></td>
                <td><?php print($row->nombre); ?></td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog "></span></button>
                   
                    <ul class="dropdown-menu" role="menu">
                     
                      <li><a onclick="Eliminar('<?php print($row->id_grupos); ?>');"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></li>

                      <li><a onclick="Editar( 
                        '<?php print($row->id_grupos); ?>',
                        '<?php print($row->nombre_grupos); ?>',
                        '<?php print($row->categoria); ?>',
                        '<?php print($row->ano_creacion); ?>',
                        '<?php print($row->descripcion); ?>',
                        '<?php print($row->linea_investigacion); ?>',
                        '<?php print($row->programas_vincula); ?>',
                        '<?php print($row->facultad); ?>',
                        '<?php print($row->sede); ?>'
                        ); "><span class="glyphicon glyphicon-repeat"></span>  Actualizar</a></li>
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
              <h4 class="modal-title">Grupo</h4>
            </div>
            
            <form role="form" action="" name="frmGrupo" onsubmit="Registrar(idP, accion); return false">
              <div class="col-lg-12">
                
               <div class="form-group">
                  <label>Nombre</label>
                  <input id="idgrupo" name="nombre_grupos" class="form-control" required>
                </div>


                <div class="form-group">
                  <label>Categoria ante Colciencias</label>
                    </br>              
                  <select class="selectpicker show-tick " name="categoria"  title="Seleccione la categoria" required>
                                    
                   <option value="A"> A</option>
                   <option value="B"> B</option>
                   <option value="C"> C</option>
                   <option value="D"> D</option>
                   <option value="Reconocido"> Reconocido</option>
                   <option value=""> Ninguno</option>
                   
                 </select>
                 
                </div>
                <div class="form-group">
                  <label>Año creación</label>
                  <input type="number" name="ano_creacion" class="form-control" required>
                </div>

                <div class="form-group">                                    
                  <label>Descripción del grupo</label>
                <textarea name="descripcion" rows="4" cols="50" class="form-control">
               </textarea>

                  </textarea>
                </div>

                <div class="form-group">                                    
                  <label>linea_investigacion</label>
                  <input name="linea_investigacion" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Programas vinculados</label>
                  <input type="text" name="programas_vincula" class="form-control" required>
                </div>

                  <div class="form-group">
                  <label>Facultad a la que pertenece: </label>
                  </br>
                  <select class="selectpicker show-tick" name="facultad" title="Seleccione la facultad:" required>
                  
                   <option value="Educación y de la Salud">Educación y de la Salud </option>
                   <option value="Económicas y Administrativas"> Económicas y Administrativas </option>
                   <option value="Jurídicas y Políticas"> Jurídicas y Políticas </option>
                   <option value="Naturales e Ingeniería"> Naturales e Ingeniería </option>

                 </select>
                 
                </div>

                <div class="form-group">
                  <label>Sede</label>
                  </br>
                  <select class="selectpicker show-tick" name="sede" title="Seleccione la Sede" required>
                  
                   <option value="San Gil"> San Gil </option>
                   <option value="Yopal"> Yopal </option>
                   <option value="Chiquinquira"> Chiquinquira </option>
                   
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
    <!--Llamado a la ventana modal, para el caso de registro y actulización se utiliza la misma interfaz es decir la misma ventana modal, por consiguiente para el caso de registro se evalua la opción N y en el caso de actualización de datos la acción E estas son simples variables que se evaluan en el javaScript-->
    <script type="text/javascript">
    var accion;
    var idP;
       function Nuevo()
      {
        accion = "N";

        document.frmGrupo.nombre_grupos.value= " ";
        document.frmGrupo.categoria.value= "";
        document.frmGrupo.ano_creacion.value="";
        document.frmGrupo.descripcion.value=" ";
        document.frmGrupo.linea_investigacion.value= "";
        document.frmGrupo.programas_vincula.value= "";
        document.frmGrupo.facultad.value= "";
        document.frmGrupo.sede.value= "";
        //Habilito la casilla de nombre
       // document.getElementById("idgrupo").disabled = false;
        $("#modal").modal("show");
      }

      function Editar(id_grupos, nombre_grupos, categoria, ano_creacion, descripcion, linea_investigacion, programas_vincula, facultad, sede)
      {
        accion = "E";
        idP = id_grupos;
        document.frmGrupo.nombre_grupos.value= nombre_grupos;
        document.frmGrupo.categoria.value= categoria;
        document.frmGrupo.ano_creacion.value= ano_creacion;
        document.frmGrupo.descripcion.value= descripcion;
        document.frmGrupo.linea_investigacion.value= linea_investigacion;
        document.frmGrupo.programas_vincula.value= programas_vincula;
        document.frmGrupo.facultad.value= facultad;
        document.frmGrupo.sede.value= sede;
        //Deshabilito la casilla del nombre de grupo
       // document.getElementById("idgrupo").disabled = true;
        $("#modal").modal("show");
      }
      /*function b()
      {
        alert("accion"+accion);
      }*/

    </script>
     <!-- Espacio para el pie de página-->
    <div class="navbar navbar-default ">
    <div class="container">
      <p class="navbar-text pull-left">© 2016 -  By Mr. F.
           <a href="#" target="_blank" >Hydra</a>
      </p>
      
      <a href="#" class="navbar-btn btn-danger btn pull-right">
      <span class="glyphicon glyphicon-home"></span>  Página</a>
     <!--</br></br></br></br>
<address>
  <strong>Empresa S.A.</strong><br>
  Avenida Principal 123<br>
  Ciudad, Provincia 00000<br>
  <abbr title="Phone">Tel:</abbr> 9XX 123 456
</address>
 
<address>
  <strong>Nombre Apellido</strong><br>
  <a href="mailto:#">nombre.apellido@ejemplo.com</a>
</address>--> 
    </div>

  </body>

  </html>