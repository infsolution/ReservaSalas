<?php
require 'Connection.php';
class DUser{
    private $conn;
    private $du;
    function __construct() {
         $this->conn = Connection::getInstance(); 
    }
    function __destruct() {
        
    }
    function DUInsert($user){
        $link = $this->conn->DBConnection();
        $dataR = $this->conn->DBSelect('user_data',"where sal_registration ='{$user['sal_registration']}'","sal_registration");
        $dataU = $this->conn->DBSelect('user_data',"where sal_user ='{$user['sal_user']}'","sal_user");
        if(!$dataR && !$dataU){
            $this->du=$this->conn->DBInsert('user_data', $user);
        }else{
            $this->du = "O usuário ou matricula já é cadastrado.";
        }
        $this->conn->DBCloseConnection($link);
        return $this->du;
    }
    function DUSelect($table){
         $link = $this->conn->DBConnection();
         $data = $this->conn->DBSelect($table,null,"*");
         $this->conn->DBCloseConnection($link);
         return $data;
    }
    function DUSelReg($registration){
         $link = $this->conn->DBConnection();
         $data = $this->conn->DBSelect('user_data',"where sal_registration ='{$registration}'","sal_registration");
         $this->conn->DBCloseConnection($link);
         return $data;
    }
    
}