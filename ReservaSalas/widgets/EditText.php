<?php
class EditText extends Field{
    function show(){
        $this->tag->name= $this->name;
        $this->tag->value=  $this->value;
        $this->tag->type='text';
        $this->tag->style='width:{$this->size}';
        if(!parent::getEditable()){
            $this->tag->readonly = '1';
            $this->tag->class = 'ifield_disable';
        }
        $this->tag->show();
    }
}