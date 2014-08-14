<?php

class Nota
{
    private $idNota;
    private $nombre;
    private $parcial;
    private $final;
    private $mejoramiento;
    private $notapromedio;
    
    
     function __construct($idNota,$nombre,$parcial,$final,$mejoramiento,$notapromedio) {
       $this->idNota = $idNota;
       $this->nombre = $nombre;
       $this->parcial = $parcial;
       $this->final = $final;
       $this->mejoramiento = $mejoramiento;
       $this->notapromedio = $notapromedio;
       
     }
    
     function setIdNota($idNota){
       $this->idNota = $idNota;
     } 
     function getIdNota(){
       return $this->idNota;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setParcial($parcial){
       $this->parcial = $parcial;
     } 
     function getParcial(){
       return $this->parcial;
     }
     function setFinal($final){
       $this->final = $final;
     } 
     function getFinal(){
       return $this->final;
     }
     function setMejoramiento($mejoramiento){
       $this->mejoramiento = $mejoramiento;
     } 
     function getMejoramiento(){
       return $this->mejoramiento;
     }
     function setNotaProm($notapromedio){
       $this->notapromedio = $notapromedio;
     } 
     function getNotaProm(){
       return $this->notapromedio;
     }
    
}

?> 

