<?php

class Reserve{
    private $idReserve;
    private $hoaryStart;
    private $horaryEnd;
    private $roon;
    private $group;
    function __construct() {
        
    }
    function __destruct() {
        
    }
    function getIdReserve(){
        return $this->idReserve;
    }
    function setIdReserve($idReserve){
        $this->idReserve=$idReserve;
    }
    function getHoraryStart(){
        return $this->hoaryStart;
    }
    function setHoraryStart($horaryStart){
        $this->hoaryStart= $horaryStart;
    }
    function getHoraryEnd(){
        return $this->horaryEnd;
    }
    function setHoraryEnd($horaryEnd){
        $this->horaryEnd=$horaryEnd;
    }
    function getRoon(){
        return $this->roon;
    }
    function setRoon($roon){
        $this->roon = $roon;
    }
    function getGroup(){
        return $this->group;
    }
    function setGroup($group){
        $this->group = $group;
    }
    
    function toString(){
        return "Horario inicio: $this->hoaryStart<br>Horario fim: $this->horaryEnd"
                . "<br>Grupo: $this->group<br>Sala: $this->roon<br>";
    }
    
}

