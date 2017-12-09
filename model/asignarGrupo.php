 <?php 
// esta linea de código me quita las notificaciones o alvertencias propias del programa xampp
 
            // se obtiene en una variable la conexion
            $con = Conectar();
            
 error_reporting(E_ALL ^ E_NOTICE);
   // obtengo la variable sesión la cual corresponte a la cédula y busco en la BD tabla director con la instrucción siguiente              
    session_start();
    $grupo= $_SESSION["usuario"];

/*..
*Este archivo se usa para asignar el grupo a los objetos agregados(Articulos, libros etc) según el inicio 
sesión 
*/

// La siguietne consulta se hace con el fin de saber a que grupo hace referencia el Director logeado en el sistema, obtengo el id_grupo y le asigno este grupo al objeto a agregar

    
      $sql= "SELECT id_grupo
       FROM director WHERE cedula = '$grupo' ";
      // se prepara la sentencia para ser ejecutada
      $stmt = $con->prepare($sql);
      $result = $stmt->execute();
      // mediane row se obtienen los contenidos en las columnas de la BD
      $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
      foreach ($rows as $row) {
     
    
        echo "<input name='id_grupo' disabled value='$row->id_grupo'>";
         
                  
             }
                  ?>  