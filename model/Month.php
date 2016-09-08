<?php
class Month{
    private $month;
    private $days;
            
    function __construct($month) {
        $this->month=$month;
        
    }
    function __destruct() {
        
    }
    
    function getMonth(){
        return $this->month;
    }
    function setMonth($month){
        $this->month=$month;
    }
    function getDays(){
        return $this->days;
    }
    function addDays(){
        
    }
    
}
