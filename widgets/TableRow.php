<?php
class TableRow extends Element{
    function __construct() {
        parent::__construct('tr');
    }
    function addCell($value){
        $cell =  new TableCell($value);
        parent::add($cell);
        return $cell;
    }
}

