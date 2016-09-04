<?php

class Paragraph extends Element{
    function __construct($text) {
        parent::__construct('p');
        parent::add($text);
    }
    function setAlign($align){
        $this->align=$align;
    }
}
