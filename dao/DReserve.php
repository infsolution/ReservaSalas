<?php
function __autoload($classe){
    if(file_exists("model/{$classe}.php")){
        require_once "model/{$classe}.php";
    }
}
require 'Connection.php';

class DReserve{
    private $conn;
    function __construct() {
                $this->conn = Connection::getInstance(); 
    }
    function __destruct() {
        
    }
    function DRinsert($reserve){
        $link = $this->conn->DBConnection();
        $ws=$this->conn->DBInsert('reserve', $reserve);
        $this->conn->DBCloseConnection($link);
        return $ws;
    }
    function DRSelect($table){
         $link = $this->conn->DBConnection();
         $data = $this->conn->DBSelect($table,null,"*");
         $this->conn->DBCloseConnection($link);
         return $data;
    }
    function DRSelDay($day){
        $link = $this->conn->DBConnection();
        $data = $this->conn->DBSelect('reserve',"where sal_day = '{$day}'","*");
        $this->conn->DBCloseConnection($link);
        return $data;
    }
            
    function DRNewObject($data){
        $res = new Reserve();
        $res->setIdReserve($data['sal_id_reserve']);
        $res->setUrl($data['sal_url']);
        $res->setHoraryStart($data['sal_horary_start']);
        $res->setHoraryEnd($data['sal_horary_end']);
        $res->setRoon($data['sal_id_room']);
        $res->setGroup($data['sal_id_group']);
        $res->setDay($data['sal_day']);
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
    function upStrReserv($reserves){
        $upString="";
        for($i=0;$i<count($reserves);$i++){
            if($upString==""){
            $upString.="{$reserves[$i]->toString()}";
            }else{
               $upString.=",{$reserves[$i]->toString()}"; 
            }
        }
        return $upString;
    }
            
    function loadCalendar(){
        $dr = new DReserve();
        return $dr->upStrReserv($dr->loadReserves('reserve'));
    }
    
    function validRes($dataDb, $start,$end){
        $val=false;
        foreach ($dataDb as $value) {
            if($value['sal_horary_start']==$start||$value['sal_horary_end']==$end){
            $val=true;  
            }
        }
        return $val;
    }
    
    function ldSelHor(){
        
    }
}