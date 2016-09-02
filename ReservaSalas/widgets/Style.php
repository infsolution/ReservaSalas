<?php
class IStyle{
    private $name;
    private $properties;
    private static $loaded;
    function __construct($name) {
        $this->name=$name;
    }
    function __set($name, $value) {
        $name = str_replace('_', '-', $name);
        $this->properties[$name]=$value;
    }
    function show(){
        if(!self::$loaded[$this->name]){
            echo "<style type = 'text/css' media = 'screen'>";
            echo ".{$this->name}\n";
            echo "{\n";
            if($this->properties){
                foreach ($this->properties as $name => $value){
                    echo "\t{$name} : {$value};\n";
                }
            }
            echo "}\n";
            echo "</style>\n";
            self::$loaded[$this->name]=TRUE;
        }
    }
}