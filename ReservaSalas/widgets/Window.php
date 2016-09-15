<?php
class Window{
    private $x;
    private $y;
    private $width;
    private $height;
    private $title;
    private $content;
    static private $counter;
    function __construct($title) {
        self::$counter++;
        $this->title=$title;
    }
    function setPosition($x,$y){
        $this->x=$x;
        $this->y=$y;
    }
    function setSize($width,$height){
        $this->width=$width;
        $this->height=$height;
    }
    function add($content){
        $this->content=$content;
    }
    function show(){
        $window_id = 'Window'.self::$counter;
        $style = new Style($window_id);
        $style->position ='absolute';
        $style->left =  $this->x;
        $style->top =  $this->y;
        $style->width = $this->width;
        $style->height = $this->height;
        $style->background = '#000000';
        $style->border='1px solid #000000';
        $style->z_index = 10000;
        $style->show();
        $panel = new Element('div');
        $panel->id = $window_id;
        $panel->class = $window_id;

        $tab = new Table();
        $tab->border=1;
        $tab->width ='30%';
        $tab->height ='30%';
        $tab->style = 'border-collapse: collapse';
     
        
        $rowT = $tab->addRow();
        $rowT->gbcolor='#000000';
        $rowT->height='20px';
        $titCel = $rowT->addCell("<font face= arial size = 2 color = black><b>{$this->title}</b></font>");
        $titCel->width='100%';
        $link = new Element('a');
        $link->add(new Image("img/bt_close.png"));
        $link->onclick = "document.getElement.ById('$window_id').style.display='none'";
        $cell = $rowT->addCell($link);
        $rowC = $tab->addRow();
        $rowC->valign = 'top';
        $cellC = $rowC->addCell($this->content);
        $cellC->colspan=2;
        $panel->add($tab);
        $panel->show();        
    }
 
}
