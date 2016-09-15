<?php
class Group{
    private $idGroup;
    private $students;
    private $name;
            
    function __construct() {
        
    }
    
    function __destruct() {
        
    }
    function getIdGroup(){
        return $this->idGroup;
    }
    function setIdGroup($idgroup){
        $this->idGroup=$idgroup;
    }
    function getStudents(){
        return$this->students;
    }
    function setStudents($stuents){
        $this->students=$stuents;
    }
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name=$name;
    }
    function toString(){
        $res="";
        if($this->name!=''){
            $res+= "\nGrupo: {$this->name}\nParticipantes:\n";
            foreach ($this->students as $value) {
                $res+= "{$value->getName()}\n";
            }
        }else{
            $res+= "\nParticipantes:\n";
            foreach ($this->students as $value) {
                $res+= "{$value->getName()}\n";
            }
        }
    }
}

