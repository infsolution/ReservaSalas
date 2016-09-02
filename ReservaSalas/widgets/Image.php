<?php
class Image extends IElement{
    private $source;
    function __construct($source) {
        parent::__construct('img');
        $this->src=$source;
        $this->border=0;
    }
}

