<?php
class Message{
    
    function __construct($type,$message) {
        $style = new Style('message');
        $style->position = 'absolute';
        $style->left = '30%';
        $style->top = '30%';
        $style->width = '300';
        $style->height = '150';
        $style->color = 'black';
        $style->background ='#DDDDDD';
        $style->border ='4px solid #000000';
        $style->z_index = '10000000000000000';
        $style->show();
        $panel = new Element('div');
        $panel->class = "message";
        $panel->id = "message";
        $button = new Element('input');
        $button->type = 'button';
        $button->value = 'Fechar';
        $button->onclick = "document.getElementById('message').style.display='none'";
        $table = new Table();
        $table->align='center';
        $row = $table->addRow();
        $row->addCell(new Image("img/{$type}.png"));
        $row->addCell($message);
        $row1 = $table->addRow();
        $row1->addCell('');
        $row1->addCell($button);
        $panel->add($table);
        $panel->show();
    }
}
