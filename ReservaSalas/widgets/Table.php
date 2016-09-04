<?php
class Table extends Element{
    function __construct() {
        parent::__construct('table');
        $this->bordercolor='black';
    }
    function addRow(){
        $row = new TableRow();
        parent::add($row);
        return $row;
    }
}
