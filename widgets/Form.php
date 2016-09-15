<?php
class Form{
    protected $fields;
    private $name;
    function __construct($name) {
        $this->name=$name;
    }
    function setName($name){
        $this->name=$name;
    }
            
    function setEditable($bool){
        if($this->fields){
            foreach ($this->fields as $object){
                $object->setEditable($bool);
            }
        }
    }
    function setFields($field){
        if($field instanceof Field){
            $name = $field->getName();
            $this->fields[$name]= $field;
            if($field instanceof Button){
                $field->setFormName($this->name);
            }
        }
    }
    function getField(){
        return $this->fields[$name];
    }
    function setData($object){
        foreach ($this->fields as $name => $field){
            if($name){
                $field->setValue($object->$name);
            }
        }
    }
    function getData($class = 'StdClass'){
        $object = new $class;
        foreach ($_POST as $key=>$val){
            if(get_class($this->fields[$key])=='Combo'){
                if($val !==0){
                    $object->$key=$val;
                }
            }else{
               $object->$key=$val; 
            }
        }
        foreach ($_FILES as $key=>$content){
            $object->$key= $content['tmp_name'];
        }
        return $object;
    }
    function add($object){
        $this->child=$object;
    }
    function show(){
        $tag= new Element('form');
        $tag->name=$this->name;
        $tag->method='post';
        $tag->add($this->child);
        $tag->show();
    }
}

