<?php
class Text extends Field{
    private $width;
    private $height;
    function __construct($name) {
        parent::__construct($name);
        $this->tag = new Element('textarea');
        $this->tag->class='field';
        $this->height=100;
    }
    function setSize($width, $height){
        $this->width=$width;
        $this->height=$height;
    }
    function show(){
        $this->tag-> name =  $this->name;
        $this->tag->style = "width:{$this->size}; height:{$this->height}";
        if(parent::getEditable()){
            $this->tag->readonly="1";
            $this->tag->class='field_disabled';
            $this->tag->add(hmtlspecialchars($this->value));
            $this->tag->show();
        }
        $this->show();
    }
    
}