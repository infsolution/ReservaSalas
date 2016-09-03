<html>
    <head>
        <title>Teste de classes</title>
    </head>
    <body>
        <?php
        //require 'dao/DReserve.php';
        require 'model/Reserve.php';
        require 'dao/Connection.php';
        $con = new Connection();
        $res = new Reserve();
        //$dr = new DReserve();
        //$res->setHoraryStart('17:00');
        //$res->setHoraryEnd('18:00');
        //$res->setRoon('1');
        //$res->setGroup('459');
        $data = $con->DBSelect('reserve',null,"*");
        //echo $res->toString();
        //var_dump($dr->DRinsert($res));
        $res->setIdReserve($data[0]['sal_id_reserve']);
        $res->setHoraryStart($data[0]['sal_horary_start']);
        $res->setHoraryEnd($data[0]['sal_horary_end']);
        $res->setRoon($data[0]['sal_id_room']);
        $res->setGroup($data[0]['sal_id_group']);
        echo $res->toString();
         //var_dump($data[0]);
         //var_dump($res);
        ?>
    </body>
    
    
</html>

