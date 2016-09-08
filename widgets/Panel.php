<?php
class IPanel extends IElement{
    function __construct($widht,$height) {
        $panel_style = new IStyle('ipanel');
        $panel_style->position='relative';
        $panel_style->width=$widht;
        $panel_style->height=$height;
        $panel_style->border='2 px solid';
        $panel_style->border_color='#343434';
        $panel_style->background_color='#f0f0f0';
        $panel_style->show();
        parent::__construct('div');
        $this->class = 'ipanel';
    }
    function put($widget, $col, $row){
        $layer = new IElement('div');
        $layer->style="position:absolute; left:{$col}px; top:{$row}px";
        $layer->add($widget);
        parent::add($layer);
    }
}
