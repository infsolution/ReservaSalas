<?php
class Button extends Field{
    private $action;
    private $label;
    private $formName;
    
    function setAction($action, $label){
        $this->action=$action;
        $this->label=$label;
    }
    function setFromName($formName){
        $this->formName=$formName;
    }
    function show(){
        $url = $this->action->serialize();
        $this->tag->name = $this->name;
        $this->tag->type = 'button';
        $this->tag->value = $this->label;
        if(!parent::getEditable()){
            $this->tag->disabled="1";
            $this->tag->class = 'field_disabled';
        }
        $this->tag->onclick = "document.{$this->formName}.action='{$url}';".
                              "document.{$this->formName}.submit()";
                      $this->tag->show();
    }
}