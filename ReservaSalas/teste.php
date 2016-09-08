<html>
    <head>
        <title>Teste de classes</title>
    </head>
    <body>
        <?php
        require 'dao/DReserve.php';
        $dateDb = date("Y-m-d");
        echo $dateDb."<br>";
        $date = date("d/m/Y");
        //echo $date."<br>";
        $dr = new DReserve();
        //$res->setHoraryStart('16:00');
        //$res->setHoraryEnd('18:00');
        //$res->setRoon('1');
        //$res->setGroup('459');
        //$res->setDay('2016-09-11');
        $dataRes =  array('sal_horary_start'=>'16:00',
                      'sal_horary_end'=>'18:00',
                      'sal_id_room'=>2,
                      'sal_id_group'=>12,
                      'sal_day'=>'2017-10-11'
                        );
        //$res = $dr->DRNewObject($dataRes);
        //$data = $dr->DRSelect('reserve');
        //$res = $dr->DRNewObject($data[4]);
        //echo $res->toString();
        //var_dump($dr->DRinsert($dataRes));
        $resTt=$dr->loadReserves('reserve');
        //var_dump($resTt);
        echo $dr->upStrReserv($resTt);
        //echo $res->toString();
         //var_dump($data);
         
        //var_dump($arr);
        //echo json_encode($arr);
       // $day->loadReserves('reserve');
        //var_dump($day->getReserves());
        /*$res=$day->getReserves();
        foreach ($res as $value) {
    echo $value->toString();
}*/
        
        ?>
    </body>
    
    
</html>

