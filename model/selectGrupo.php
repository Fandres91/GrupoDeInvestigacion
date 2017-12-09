<?php


            // se obtiene en una variable la conexion
            $con = Conectar();

 $sql= "SELECT id_grupos, nombre_grupos
             FROM grupo ";
            // se prepara la sentencia para ser ejecutada
            $stmt = $con->prepare($sql);
            $result = $stmt->execute();
            // mediane row se obtienen los contenidos en las columnas de la BD
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            foreach ($rows as $row) {

           echo "<option value='$row->id_grupos'> $row->nombre_grupos</option>";

}

//print($row->nombre);

//echo "<option value='$nombre_pais'";


//$consulta="SELECT id_grupos FROM grupo ORDER BY id_grupos";




?>