<html>
    <head>
        <title>Teste de classes</title>
    </head>
    <body>
        <?php
        require 'dao/DReserve.php';
        require 'model/Reserve.php';
        $res = new Reserve();
        $dr = new DReserve();
        $res->setHoraryStart('17:00');
        $res->setHoraryEnd('18:00');
        $res->setRoon('1');
        $res->setGroup('459');
        echo $res->toString();
        var_dump($dr->DRinsert($res));
        ?>
    </body>
    
    
</html>

