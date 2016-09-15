<html>
    <head>
        <title>Teste de classes</title>
    </head>
    <body>
        <?php
        function __autoload($classe){
    if(file_exists("widgets/{$classe}.php")){
        require "widgets/{$classe}.php";

    }
}
        /*$form= new Form('meu_form');
        $tab = new Table();
        $tab->width=400;
        $tab->border=1;
        $tab->bgcolor='#ffffdd';
        $title = new Label('Teste Formulario');
        $title->colspan=2;
        $rowT= $tab->addRow();
        $title = $rowT->addCell($title);
        $nomeL = new Label('Nome: ');
        $row1 = $tab->addRow();
        $nomeL = $row1->addCell($nomeL);
        $nomTex = new EditText('nome');
        $nomTex = $row1->addCell($nomTex);
        $form->add($tab);
        $form->show();*/
        
        $jan = new Window('Janela de teste');
        $jan->setPosition(20, 20);
        $jan->setSize(100, 100);
        $jan->add(new Paragraph('Conteudo da janela'));
        $jan->show();
        
        $jan1 = new Window('Janela de teste2');
        $jan1->setPosition(120, 60);
        $jan1->setSize(100, 100);
        $jan1->add(new Paragraph('Conteudo da janela'));
        $jan1->show();
        ?>
    </body>
    
    
</html>

