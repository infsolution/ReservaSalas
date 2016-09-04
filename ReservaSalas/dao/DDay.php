<?php
require 'Connection.php';
class DDay{
    private $conn;
    function __construct() {
         $this->conn = new Connection();
    }
    function __destruct() {
        
    }
    function DDinsert($day){
        $link = $this->conn->DBConnection();
        $data = array('sal_date'=>$day->getDate());             
        $ws=$this->conn->DBInsert('day', $data);
        $this->conn->DBCloseConnection($link);
        return $ws;
    }
    function DDSelect($table){
         $link = $this->conn->DBConnection();
         $data = $this->conn->DBSelect($table,null,"*");
         $this->conn->DBCloseConnection($link);
         return $data;
    }
    
}