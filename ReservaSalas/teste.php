<html>
    <head>
        <title>Teste de classes</title>
    </head>
    <body>
        <?php
        require 'model/Day.php';
        require 'dao/DDay.php';
        $dateDb = date("Y-m-d");
        echo $dateDb;
        $date = date("d/m/Y");
        echo $date."<br>";
        //$dr = new DReserve();
        //$res->setHoraryStart('17:00');
        //$res->setHoraryEnd('18:00');
        //$res->setRoon('1');
        //$res->setGroup('459');
       // $data = $dr->DRSelect('reserve');
        //echo $res->toString();
        //var_dump($dr->DRinsert($res));
        //$res = $dr->DRNewObject($data[0]);
       // echo $res->toString();
         //var_dump($data);
         //var_dump($res);
        $day = new Day($dateDb);
        $dd = new DDay();
        var_dump($dd->DDselect('day'));
       // $day->loadReserves('reserve');
        //var_dump($day->getReserves());
        /*$res=$day->getReserves();
        foreach ($res as $value) {
    echo $value->toString();
}*/
        
        ?>
    </body>
    
    
</html>

