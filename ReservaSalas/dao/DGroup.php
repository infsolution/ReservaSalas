<?php
require 'Connection.php';
require '../model/Group.php';
class DGroup{
    private $conn;
    function __construct() {
                $this->conn = Connection::getInstance(); 
    }
    function __destruct() {
        
    }
    function DGinsertName($group,$studentes){
        $link = $this->conn->DBConnection();
        $ws=$this->conn->DBInsert('group', $group);     
        foreach ($studentes as $value) {        
            $st=array('sal_id_group'=>$ws,'sal_id_user_data'=>(int)$value['sal_id_user_data']);
            $id = $this->conn->DBInsert('group_user',$st);
            echo $id;   
        } 
        $this->conn->DBCloseConnection($link);
        return $ws;
    }
    
    function DGGetId($registration){
        $link = $this->conn->DBConnection();
        $data = $this->conn->DBSelect('user_data',"where sal_registration = '{$registration}'",'sal_id_user_data');
        $this->conn->DBCloseConnection($link);
        return $data;
    }
    
}