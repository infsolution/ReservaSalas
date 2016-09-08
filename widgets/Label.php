<?php
class Label extends Field{
    private $fontFace;
    private $fontSize;
    private $fontColor;
    
    
    function __construct($value){
        $this->setValue($value);
        $this->tag = new IElement('font');
        $this->fontSize='14';
        $this->fontColor='black';
        $this->fontFace='arial';
    }
    function setFontSize($size){
        $this->fontSize=$size;
    }
    function setFontFace($font){
        $this->fontFace=$font;
    }
    function setFontColor($color){
        $this->fontColor=$color;
    }
    function show(){
        $this->tag->style="font-family:{$this->fontFace};".
                "color:{$this->fontColor};".
                  "font-size:{$this->fontSize}";
          $this->tag->add($this->value);
          //$this->tag->show();
    }
}