<!DOCTYPE html>
<html>
<head>
  <meta charset="ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>INVESTIGACIÓN</title>
  <link href="../../res/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../res/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="../../res/css/estilos.css" rel="stylesheet">
  
  <script type="text/javascript" src="../../res/js/ajax.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../../res/js/bootstrapcdn.js"></script>
  <script type="text/javascript" src="../../res/js/jssor.slider.min.js"></script>
  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</head>
<body>

<nav class="navbar navbar-default cabecera" >
  <div class="container-fluid"  >
    <!--Incorporo el menú cabecera de sesión-->
    <?php  include("../menu-cabecera.php"); ?> 
    </div>
  
</nav>
<section id="inicio-sedes"> </br>
<center>
<!--............................IMAGEN PRINCIPAL.........................-->
 <img src="../../res/img/gruposInv/banner_hydra.jpg">

</section>
<!-- ............................ Sección principal contiene a los grupos .........................-->
<section id="section-sangil">
<!-- ............................ TITULOS .........................-->
 <div id="etiqueta">PRODUCTOS GENERADOS<span id="etiqueta3"></span></div>
<!-- ........ Div desplegables en los cuales esta contenido las tablas de los productos...................-->
<div id="accordion" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Artículos  <div> <label id="contadorArticulo" class="contador"></label></div>
        </a>
      </h4>
    </div>
    </br>
    <div id="collapseTwo" class="panel-collapse collapse textoNegro" role="tabpanel" aria-labelledby="headingTwo">
    <!-- ================================= 
    Panel de artículos
    =================================--> 
    <div class="panel panel-default" style="width:95%">
        <div class="panel-heading">Lista de Artículos</div>
        <table class="table" id="mi-tabla" >
          <thead>
            <tr>       
              <th>#</th>
              <th>Nombre</th>
              <th>Idioma</th>
              <th>Autores</th>
              <th>Issn</th>
              <th>Fecha</th>
              <th>Revista <span class="glyphicon glyphicon-arrow-right"></span></th>
              <th>Categoria</th>
              <th>Medio </th>
              <th>Link</th>  
          <?php
            require("../../model/conexion.php");
            // se obtiene en una variable la conexion
            $con = Conectar();
             
            
              $sql= "SELECT *
             FROM articulos WHERE id_grupo = '2'  ";
             
            // se prepara la sentencia para ser ejecutada
            $stmt = $con->prepare($sql);
            $result = $stmt->execute();
            // mediane row se obtienen los contenidos en las columnas de la BD
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            //\PDO::FECH_OBJ devuelve un objeto anonimo con los nombre correspondiente a los nombre de las columbnas de la BD
            $contadorArticulo =0;
            foreach ($rows as $row) {
              # code...
                ?>
           
            </tr>
          </thead>
          <tbody>  
                 <tr>                 
                <td><?php print($contadorArticulo =$contadorArticulo +1); ?></td>
                <td><?php print($row->nombre_arti); ?></td>
                <td><?php print($row->idioma); ?></td>
                <td><?php print($row->autores); ?></td>
                <td><?php print($row->numero_issn); ?></td>
                <td><?php print($row->fecha); ?></td>
                <td><?php print($row->nombre_revista); ?></td>
                <td><?php print($row->categoria_revista); ?></td>
                <td><?php print($row->medio_divul); ?></td>
                <td><a href="<?php print($row->linkarticulo); ?>" target="_blank" ><?php print($row->linkarticulo); ?></a></td>
                      </div>
                
              </tr>
            <?php
            }

          ?>                     
             </tbody>
        </table>
      </div>            
              

    </div>
  </div>
  
   <!-- ............................ Fin tabla de artículos .........................--> 
    <!-- ================================= 
      Tabla de libros
      =================================--> 
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Libros  <div> <label id="contadorLibro" class="contador"></label></div>
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse textoNegro" role="tabpanel" aria-labelledby="headingFour">
     
    <div class="panel panel-default" style="width:95%">
        <div class="panel-heading">Lista de Artículos</div>
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
            /*require("../../model/conexion.php");
            // se obtiene en una variable la conexion
            $con = Conectar();*/
               
            $sql= "SELECT *
             FROM libros WHERE id_grupo = '2' ";
            // se prepara la sentencia para ser ejecutada
            $stmt = $con->prepare($sql);
            $result = $stmt->execute();
            // mediane row se obtienen los contenidos en las columnas de la BD
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            //\PDO::FECH_OBJ devuelve un objeto anonimo con los nombre correspondiente a los nombre de las columbnas de la BD

            $contadorLibro =0;
            foreach ($rows as $row) {
              # code...
                ?>
                 <tr>                 
                <td><?php print($contadorLibro =$contadorLibro +1); ?></td>
                <td><?php print($row->titulo_libro); ?></td>
                <td><?php print($row->autor_libro); ?></td>
                <td><?php print($row->fecha_libro); ?></td>
                <td><?php print($row->isbn_libro); ?></td>
                <td><?php print($row->lugar_publica); ?></td>
                <td><?php print($row->medio_divul_libro); ?></td>
                
                <td><a href="<?php print($row->link_libro); ?>" target="_blank" ><?php print($row->link_libro); ?></a></td>
                      </div>
                
              </tr>
            <?php
            }

          ?>                 
             </tbody>
        </table>
      </div> 

    </div>
  </div>
 <!-- ================================= 
      Tabla de libros
      =================================--> 
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Libros  <div> <label id="contadorLibro" class="contador"></label></div>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse textoNegro" role="tabpanel" aria-labelledby="headingFour">
     
    <div class="panel panel-default" style="width:95%">
        <div class="panel-heading">Lista de Artículos</div>
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
            /*require("../../model/conexion.php");
            // se obtiene en una variable la conexion
            $con = Conectar();*/
               
            $sql= "SELECT *
             FROM libros WHERE id_grupo = '2' ";
            // se prepara la sentencia para ser ejecutada
            $stmt = $con->prepare($sql);
            $result = $stmt->execute();
            // mediane row se obtienen los contenidos en las columnas de la BD
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            //\PDO::FECH_OBJ devuelve un objeto anonimo con los nombre correspondiente a los nombre de las columbnas de la BD
            $contadorLibro =0;
            foreach ($rows as $row) {
              # code...
                ?>
                 <tr>                 
                <td><?php print($contadorLibro =$contadorLibro +1); ?></td>
                <td><?php print($row->titulo_libro); ?></td>
                <td><?php print($row->autor_libro); ?></td>
                <td><?php print($row->fecha_libro); ?></td>
                <td><?php print($row->isbn_libro); ?></td>
                <td><?php print($row->lugar_publica); ?></td>
                <td><?php print($row->medio_divul_libro); ?></td>
                
                <td><a href="<?php print($row->link_libro); ?>" target="_blank" ><?php print($row->link_libro); ?></a></td>
                      </div>
                
              </tr>
            <?php
            }

          ?>
                      
             </tbody>
        </table>
      </div> 

    </div>
  </div>

 <!-- ================================= 
      Tabla de libros
      =================================--> 
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Libros  <div> <label id="contadorLibro" class="contador"></label></div>
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse textoNegro" role="tabpanel" aria-labelledby="headingFive">
     
    <div class="panel panel-default" style="width:95%">
        <div class="panel-heading">Lista de Artículos</div>
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
            /*require("../../model/conexion.php");
            // se obtiene en una variable la conexion
            $con = Conectar();*/
               
            $sql= "SELECT *
             FROM libros WHERE id_grupo = '2' ";
            // se prepara la sentencia para ser ejecutada
            $stmt = $con->prepare($sql);
            $result = $stmt->execute();
            // mediane row se obtienen los contenidos en las columnas de la BD
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            //\PDO::FECH_OBJ devuelve un objeto anonimo con los nombre correspondiente a los nombre de las columbnas de la BD
            $contadorLibro =0;
            foreach ($rows as $row) {
              # code...
                ?>
                 <tr>                 
                <td><?php print($contadorLibro =$contadorLibro +1); ?></td>
                <td><?php print($row->titulo_libro); ?></td>
                <td><?php print($row->autor_libro); ?></td>
                <td><?php print($row->fecha_libro); ?></td>
                <td><?php print($row->isbn_libro); ?></td>
                <td><?php print($row->lugar_publica); ?></td>
                <td><?php print($row->medio_divul_libro); ?></td>
                
                <td><a href="<?php print($row->link_libro); ?>" target="_blank" ><?php print($row->link_libro); ?></a></td>
                      </div>
                
              </tr>
            <?php
            }

          ?>
                      
             </tbody>
        </table>
      </div> 

    </div>
  </div>


</div>






<!-- ............................ Fin de los div desplegables .........................-->
</section>
<section id="section-yopal">
 

</section>
<section id="section-chiquinquira">
 

</section>

<a href="sections/section_grupo/grupo.php" class="btn btn-info  btn-lg">CRUD GRUPO</a> </br></br>
<a href="sections/section_director/director.php" class="btn btn-danger  btn-lg"> CRUD DIRECTOR</a></br></br>
<a href="sections/section_articulo/articulo.php" class="btn btn-info  btn-lg">CRUD Artículo</a>

<script type="text/javascript">
    $(function numero() {
    
     document.getElementById("contadorArticulo").innerHTML = <?php echo $contadorArticulo?>;
     document.getElementById("contadorLibro").innerHTML = <?php echo $contadorLibro?>; 
         } );
    </script>
 
</body>
</html>