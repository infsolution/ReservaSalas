<?php
require 'Connection.php';
require 'model/Reserve.php';
class DReserve{
    private $conn;
    function __construct() {
         $this->conn = new Connection();  
    }
    function __destruct() {
        
    }
    function DRinsert($reserve){
        $link = $this->conn->DBConnection();
        $data = array('sal_horary_start'=>$reserve->getHoraryStart(),
                      'sal_horary_end'=>$reserve->getHoraryEnd(),
                      'sal_id_room'=>$reserve->getRoon(),
                      'sal_id_group'=>$reserve->getGroup());
        $ws=$this->conn->DBInsert('reserve', $data);
        $this->conn->DBCloseConnection($link);
        return $ws;
    }
    function DRSelect($table){
         $link = $this->conn->DBConnection();
         $data = $this->conn->DBSelect($table,null,"*");
         $this->conn->DBCloseConnection($link);
         return $data;
    }
            
    function DRNewObject($data){
        $res = new Reserve();
        $res->setIdReserve($data['sal_id_reserve']);
        $res->setHoraryStart($data['sal_horary_start']);
        $res->setHoraryEnd($data['sal_horary_end']);
        $res->setRoon($data['sal_id_room']);
        $res->setGroup($data['sal_id_group']);
        $res->setDay($data['sal_id_day']);
        return $res;
    }
    function loadReserves($table){
        $data = $this->DRSelect($table);
        $len = count($data);
        for ($i=0;$i<$len;$i++) {
            $this->reserves[] =  $this->DRNewObject($data[$i]);
        }
        return $this->reserves;
    }
}