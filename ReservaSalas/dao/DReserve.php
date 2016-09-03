<?php
require 'Connection.php';
class DReserve{
    function __construct() {
        
    }
    function __destruct() {
        
    }
    function DRinsert($reserve){
        $con = new Connection();
        $link = $con->DBConnection();
        $data = array('sal_horary_start'=>$reserve->getHoraryStart(),
                      'sal_horary_end'=>$reserve->getHoraryEnd(),
                      'sal_id_room'=>$reserve->getRoon(),
                      'sal_id_group'=>$reserve->getGroup());
        $ws=$con->DBInsert('reserve', $data);
        $con->DBCloseConnection($link);
        return $ws;
    }
}