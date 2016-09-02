<?php
class Table extends Element{
    function __construct() {
        parent::__construct('table');
    }
    function addRow(){
        $row = new TableRow();
        parent::add($row);
        return $row;
    }
}
