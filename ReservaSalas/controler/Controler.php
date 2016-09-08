<?php
require 'dao/DReserve.php';
class Controler{
    private $reserves;
            
    function __construct() {
        
    }
    function __destruct() {
        
    }
    function getReserve(){
        return $this->reserves;
    }
    
    function setReserve($reserves){
        $this->reserves=$reserves;
    }
            
    function loadCalendar(){
        $dr = new DReserve();
        return $dr->upStrReserv($dr->loadReserves('reserve'));
    }
}