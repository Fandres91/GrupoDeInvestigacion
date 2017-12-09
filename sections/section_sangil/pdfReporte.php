 
<?php 

require_once("../../dompdf/autoload.inc.php");

$codigo='
 <title>INVESTIGACIÓN</title>
  <link href="../../res/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../res/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="../../res/css/estilos.css" rel="stylesheet">
  <h1>REPORTE DE ARTICULOS</h1>

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
              <th>Revista</th>
              <th>Categoria</th>
              <th>Medio </th>
              <th>Link</th> 

         ';
            require("../../model/conexion.php");
            // se obtiene en una variable la conexion
            $con = Conectar();
             
            
              $sql= "SELECT *
             FROM articulos WHERE id_grupo = 8  ";
             
            // se prepara la sentencia para ser ejecutada
            $stmt = $con->prepare($sql);
            $result = $stmt->execute();
            // mediane row se obtienen los contenidos en las columnas de la BD
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            //\PDO::FECH_OBJ devuelve un objeto anonimo con los nombre correspondiente a los nombre de las columbnas de la BD
            $contadorArticulo =0;
            
            foreach ($rows as $row) {
              
         $codigo.='       
           
            </tr>
          </thead>
          <tbody>  
                 <tr>                 
                <td>' .$contadorArticulo = ($contadorArticulo+1).'</td>
                <td>' .$row->nombre_arti.'</td>
                <td>' .$row->idioma.'</td>
                <td>' .$row->autores.'</td>
                <td>' .$row->numero_issn.'</td>
                <td>' .$row->fecha.'</td>
                <td>' .$row->nombre_revista.'</td>
                <td>' .$row->categoria_revista.'</td>
                <td>' .$row->medio_divul.'</td>
                <td><a href=" '.$row->linkarticulo.'" target="_blank" >'.$row->linkarticulo.'</a></td>
                      </div>
                      </div>
                
              </tr>
             ';
             }

           $codigo.='                     
             </tbody>
        </table>
      </div>            
              

    </div>
  </div>          
              
';
  

 

 
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($codigo);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("reporteSangil", array("Attachment" =>0));


  /*$codigo=utf8_decode($codigo);
  $dompdf = new Dompdf();
  $dompdf->load_html('<h1>hola</h1>');
  ini_set("memory_limit","32M");
  $dompdf->render();
  $dompdf->stream("ejemplo.pdf", array("Attachment" =>0));
*/
 ?>

