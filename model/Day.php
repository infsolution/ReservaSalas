<?php
class Day{
    private $idDay;
    private $reserves;
    private $date;
    function __construct($date) {
        $this->date=$date;

    }
    function __destruct() {
        
    }
    function getIdDay(){
        return $this->idDay;
    }
    function setIdDay($idDay){
        $this->idDay = $idDay;
    }
    function getReserves(){
        return $this->reserves;
    }
    function setReserves($reserves){
        $this->reserves=$reserves;
    }
            
    function getDate(){
        return $this->date;
    }
    function setDate($date){
        $this->date=$date;
    }
    

}

