<?php

include('databaseControlador.php');
include('notaClase.php');

class notaControlador extends DataBaseControlador
{
    
    function mostrarNotas() {
    $row = self::$db->getRow("SELECT * FROM Notas");
    $arrayNota= array();  
    
        foreach ($row as $c){
          $notaAuxiliar = new Nota($c{'idNota'},$c{'nombre'},$c{'parcial'},$c{'final'},$c{'mejoramiento'},$c{'notapromedio'});
          array_push($arrayNota, $notaAuxiliar);
        }
        
        
        
    return $arrayNota;        
  }

}
?>
