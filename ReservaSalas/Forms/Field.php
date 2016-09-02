<?php
abstract class IField{
    protected $name;
    protected $size;
    protected $value;
    protected $editable;
    protected $table;
    
    function __construct($name) {
        self::setEditable(true);
        self::setName($name);
        self::setSize(200);
        $styleOn = new IStyle('ifield');
        $styleOn->border = 'solid';
        $styleOn->border_color = '#a0a0a0';
        $styleOn->border_width='1px';
        $styleOn->z_index='1';
        $styleOff = new IStyle('ifield_disable');
        $styleOff->border = 'solid';
        $styleOff->border_color='#a0a0a0';
        $styleOff->border_width='1px';
        $styleOff->background_color='#e0e0e0';
        $styleOff->color='#a0a0a0';
        $styleOn->show();
        $styleOff->show();
        $this->tag = new IElement('input');
        $this->tag->class = 'ifield';
    }
    function setName($name){
        $this->name= $name;
    }
    function getName(){
        return $this->name;
    }
    function setValue($value){
        $this->value=$value;
    }
    function getValue(){
        return $this->value;
    }
    function setEditable($editable){
        $this->editable=$editable;
    }
    function getEditable(){
        return $this->editable;
    }
    function setProperty($name, $value){
        $this->tag->name=$value;
    }
    function setSize($size){
        $this->size=$size;
    }
}