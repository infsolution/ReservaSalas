<?php
class Password extends Field{
    
    function show(){
        $this->tag->name = $this->name;
        $this->tag->value = $this->value;
        $this->tag->type='password';
        $this->tag->style="width:{$this->size}";
        if(!parent::getEditable()){
            $this->tag->readonly = "1";
            $this->tag->class = 'field_disabled';
        }
        $this->tag->show();
    }
}

