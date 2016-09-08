<?php
class TableCell extends Element{
    function __construct($value) {
        parent::__construct('td');
        parent::add($value);
    }
}