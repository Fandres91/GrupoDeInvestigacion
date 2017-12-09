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
 <img src="../../res/img/banner_sede_sg.jpg">

</section>
<!-- .......... Sección principal contiene a los grupos ..........-->
<center>
<a href="pdfReporte.php" role="button" class="btn btn-info btn-lg" role="button" target="black"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Generar Reporte</a>
</center>
<section id="section-sangil">


<!-- ================================= 
FACULTAD INGENIERIA
=================================-->
 <div id="etiqueta">Facultad de Ciencias Naturales e Ingeniería<span id="etiqueta3"></span></div>
</br>
<!--(( Consulta a la base de datos los grupos correspondiente ))-->
      <?php
            require("../../model/conexion.php");
            // se obtiene en una variable la conexion
            $con = Conectar();
            // variable para almacenar sql
            //$sql = "SELECT * FROM grupo";
            $sql= "SELECT grupo.categoria, grupo.linea_investigacion, director.nombre, director.correo, grupo.nombre_grupos, director.telefono 
             FROM grupo LEFT JOIN director ON director.id_grupo = grupo.id_grupos WHERE sede = 'San Gil' AND facultad = 'Naturales e Ingeniería'";
            // se prepara la sentencia para ser ejecutada  
            $stmt = $con->prepare($sql);
            $result = $stmt->execute();
            // mediane row se obtienen los contenidos en las columnas de la BD
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            //\PDO::FECH_OBJ devuelve un objeto anonimo con los nombre correspondiente a los nombre de las columbnas de la BD
            foreach ($rows as $row) {
              # code...
                ?>
<article class="grupos-investiga" id="grupo-hydra">
   <div class="tamano-divlogo alLado">
  <!--<img class=" d-block shake " src="../../res/img/hydra.png" /> </br>-->
  <p class="textoNegro titulo"><?php print($row->nombre_grupos); ?></p>
  </div>
  <div class="posicion-left alLado">
   <table class="table textoNegro ">
    <thead>
      <tr>
       <th>Categoría</th>
        <th>Lineas de Investigación</th>       
        <th><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Director</th>
                
      </tr>
    </thead>
    <tbody>
                <tr>
                 <!--El foreach recorrre los campos y se muestran en la tabla según los datos de la consulta realizada-->
                <td><?php print($row->categoria); ?></td>
                <td><?php print($row->linea_investigacion); ?></td>                
                <td class="color"><?php print($row->nombre); ?> <br>
                    <?php print($row->correo); ?><br>
                    <?php print($row->telefono); ?>
               </td>
                
         <!-- El botón ver mas me lleva al archivo de cada grupo de investigación, como estoy creando por medio 
         de la base de datos cada grupo; en la etiqueta <a> muestro el nombre del grupo y le coloco la terminación .php esto para que me lleve en cada Article creado, al archivo correspondiente de cada grupo. .........................-->         
<td> <a href="<?php print($row->nombre_grupos); ?>.php" class="btn btn-primary btn-lg pull-right "  role="button"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver más</a> </td>
      </tr>  
    </tbody>
  </table>
</div>
 </article>
 <hr>
           <?php } ?>      
<!-- ================================= 
FACULTA DE CIENACIAS DE LA SALUD 
=================================-->
 <div id="etiqueta">Facultad de Ciencias de la Educación y de la Salud<span id="etiqueta3"></span></div>
</br>
<!--(( Consulta a la base de datos los grupos correspondiente ))-->
<?php
            
            // se obtiene en una variable la conexion
            $con = Conectar();
            // variable para almacenar sql
            //$sql = "SELECT * FROM grupo";
            $sql= "SELECT grupo.categoria, grupo.linea_investigacion, director.nombre, director.correo, grupo.nombre_grupos, director.telefono 
             FROM grupo LEFT JOIN director ON director.id_grupo = grupo.id_grupos WHERE sede = 'San Gil' AND facultad = 'Educación y de la Salud'";
            // se prepara la sentencia para ser ejecutada  
            $stmt = $con->prepare($sql);
            $result = $stmt->execute();
            // mediane row se obtienen los contenidos en las columnas de la BD
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            //\PDO::FECH_OBJ devuelve un objeto anonimo con los nombre correspondiente a los nombre de las columbnas de la BD
            foreach ($rows as $row) {
              # code...
                ?>
<article class="grupos-investiga" id="grupo-hydra">
   <div class="tamano-divlogo alLado">
  <!--<img class=" d-block shake " src="../../res/img/hydra.png" /> </br>-->
  <p class="textoNegro titulo"><?php print($row->nombre_grupos); ?></p>
  </div>
  <div class="posicion-left alLado">
   <table class="table textoNegro ">
    <thead>
      <tr>
       <th>Categoría</th>
        <th>Lineas de Investigación</th>       
        <th><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Director</th>
                
      </tr>
    </thead>
    <tbody>
                <tr>
                 <!--El foreach recorrre los campos y se muestran en la tabla según los datos de la consulta realizada-->
                <td><?php print($row->categoria); ?></td>
                <td><?php print($row->linea_investigacion); ?></td>                
                <td class="color"><?php print($row->nombre); ?> <br>
                    <?php print($row->correo); ?><br>
                    <?php print($row->telefono); ?>
               </td>
                
         <!-- El botón ver mas me lleva al archivo de cada grupo de investigación, como estoy creando por medio 
         de la base de datos cada grupo; en la etiqueta <a> muestro el nombre del grupo y le coloco la terminación .php esto para que me lleve en cada Article creado, al archivo correspondiente de cada grupo. .........................-->         
<td> <a href="<?php print($row->nombre_grupos); ?>.php" class="btn btn-primary btn-lg pull-right "  role="button"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver más</a> </td>
      </tr>  
    </tbody>
  </table>
</div>
 </article>
 <hr>
           <?php } ?>
<!-- ================================= 
FACULTAD ECONOMICAS 
=================================-->
 <div id="etiqueta">Facultad de Ciencias Económicas y Administrativas<span id="etiqueta3"></span></div>
</br>
<?php
            
            // se obtiene en una variable la conexion
            $con = Conectar();
            // variable para almacenar sql
            //$sql = "SELECT * FROM grupo";
            $sql= "SELECT grupo.categoria, grupo.linea_investigacion, director.nombre, director.correo, grupo.nombre_grupos, director.telefono 
             FROM grupo LEFT JOIN director ON director.id_grupo = grupo.id_grupos WHERE sede = 'San Gil' AND facultad = 'Económicas y Administrativas'";
            // se prepara la sentencia para ser ejecutada  
            $stmt = $con->prepare($sql);
            $result = $stmt->execute();
            // mediane row se obtienen los contenidos en las columnas de la BD
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            //\PDO::FECH_OBJ devuelve un objeto anonimo con los nombre correspondiente a los nombre de las columbnas de la BD
            foreach ($rows as $row) {
              # code...
                ?>
<article class="grupos-investiga" id="grupo-hydra">
   <div class="tamano-divlogo alLado">
  <!--<img class=" d-block shake " src="../../res/img/hydra.png" /> </br>-->
  <p class="textoNegro titulo"><?php print($row->nombre_grupos); ?></p>
  </div>
  <div class="posicion-left alLado">
   <table class="table textoNegro ">
    <thead>
      <tr>
       <th>Categoría</th>
        <th>Lineas de Investigación</th>       
        <th><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Director</th>
                
      </tr>
    </thead>
    <tbody>
                <tr>
                 <!--El foreach recorrre los campos y se muestran en la tabla según los datos de la consulta realizada-->
                <td><?php print($row->categoria); ?></td>
                <td><?php print($row->linea_investigacion); ?></td>                
                <td class="color"><?php print($row->nombre); ?> <br>
                    <?php print($row->correo); ?><br>
                    <?php print($row->telefono); ?>
               </td>
                
         <!-- El botón ver mas me lleva al archivo de cada grupo de investigación, como estoy creando por medio 
         de la base de datos cada grupo; en la etiqueta <a> muestro el nombre del grupo y le coloco la terminación .php esto para que me lleve en cada Article creado, al archivo correspondiente de cada grupo. .........................-->         
<td> <a href="<?php print($row->nombre_grupos); ?>.php" class="btn btn-primary btn-lg pull-right "  role="button"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver más</a> </td>
      </tr>  
    </tbody>
  </table>
</div>
 </article>
 <hr>
           <?php } ?>

<!-- ================================= 
FACULTAD JURIDICAS
=================================-->
 <div id="etiqueta">Facultad de Ciencias Jurídicas y Políticas<span id="etiqueta3"></span></div>
</br>
<?php
            
            // se obtiene en una variable la conexion
            $con = Conectar();
            // variable para almacenar sql
            //$sql = "SELECT * FROM grupo";
            $sql= "SELECT grupo.categoria, grupo.linea_investigacion, director.nombre, director.correo, grupo.nombre_grupos, director.telefono 
             FROM grupo LEFT JOIN director ON director.id_grupo = grupo.id_grupos WHERE sede = 'San Gil' AND facultad = 'Jurídicas y Políticas'";
            // se prepara la sentencia para ser ejecutada  
            $stmt = $con->prepare($sql);
            $result = $stmt->execute();
            // mediane row se obtienen los contenidos en las columnas de la BD
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            //\PDO::FECH_OBJ devuelve un objeto anonimo con los nombre correspondiente a los nombre de las columbnas de la BD
            foreach ($rows as $row) {
              # code...
                ?>
<article class="grupos-investiga" id="grupo-hydra">
   <div class="tamano-divlogo alLado">
  <!--<img class=" d-block shake " src="../../res/img/hydra.png" /> </br>-->
  <p class="textoNegro titulo"><?php print($row->nombre_grupos); ?></p>
  </div>
  <div class="posicion-left alLado">
   <table class="table textoNegro ">
    <thead>
      <tr>
       <th>Categoría</th>
        <th>Lineas de Investigación</th>       
        <th><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Director</th>
                
      </tr>
    </thead>
    <tbody>
                <tr>
                 <!--El foreach recorrre los campos y se muestran en la tabla según los datos de la consulta realizada-->
                <td><?php print($row->categoria); ?></td>
                <td><?php print($row->linea_investigacion); ?></td>                
                <td class="color"><?php print($row->nombre); ?> <br>
                    <?php print($row->correo); ?><br>
                    <?php print($row->telefono); ?>
               </td>
                
         <!-- El botón ver mas me lleva al archivo de cada grupo de investigación, como estoy creando por medio 
         de la base de datos cada grupo; en la etiqueta <a> muestro el nombre del grupo y le coloco la terminación .php esto para que me lleve en cada Article creado, al archivo correspondiente de cada grupo. .........................-->         
<td> <a href="<?php print($row->nombre_grupos); ?>.php" class="btn btn-primary btn-lg pull-right "  role="button"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver más</a> </td>
      </tr>  
    </tbody>
  </table>
</div>
 </article>
 <hr>
           <?php } ?>


</section>
<section id="section-yopal">
 

</section>
<section id="section-chiquinquira">
 

</section>

<a href="sections/section_grupo/grupo.php" class="btn btn-info  btn-lg">CRUD GRUPO</a> </br></br>
<a href="sections/section_director/director.php" class="btn btn-danger  btn-lg"> CRUD DIRECTOR</a></br></br>
<a href="sections/section_articulo/articulo.php" class="btn btn-info  btn-lg">CRUD Artículo</a>

 
</body>
</html>
