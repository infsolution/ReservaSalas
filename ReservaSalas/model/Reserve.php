<?php

class Reserve{
    private $idReserve;
    private $url;
    private $hoaryStart;
    private $horaryEnd;
    private $roon;
    private $group;
    private $day;
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
    function getUrl(){
        return$this->url;
    }
    function setUrl($url){
        $this->url=$url;
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
    
    function getDay(){
        return $this->day;
    } 
    function setDay($day){
        $this->day=$day;
    }
            
    function toString(){
        return "{title: '{$this->group}',url:'{$this->url}', start: '{$this->day}T{$this->hoaryStart}', end: '{$this->day}T{$this->horaryEnd}'}";
    }
    
}

