<?php
class Image extends Element{
    private $source;
    function __construct($source) {
        parent::__construct('img');
        $this->src=$source;
        $this->border=0;
    }
}

