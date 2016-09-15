<?php
require '../dao/DReserve.php';
require '../controler/Action.php';
require '../widgets/Element.php';
require '../ViewReserve.php';

$name = $_POST['name_group'];
$dat = $_POST['date_reserve'];
$start = $_POST['horary_start'];
$end = $_POST['horary_end'];
$room = $_POST['room'];
$datDb=implode('-', array_reverse(explode('/', $dat)));
//$act = new Action(array(new ViewReserve(),'show'));
//$act->setParameter('name_group',$name);
//$url = new Element('a');
//$url->href=$act->serialize();
//$urlP ="http://localhost/reserva_salas/ViewReserve.php?method=show&name_group={$name}";
//echo $url;
$dtReserve = array('sal_horary_start'=>$start,'sal_horary_end'=>$end,
                    'sal_id_room'=>$room,'sal_id_group'=>$name,'sal_day'=>$datDb,
                    'sal_url'=>$urlP);
$dr = new DReserve();
$res = $dr->DRinsert($dtReserve);
 if($res>0){
        //header('location:../home.php');
        echo "ok";
        }else{
            echo $res;
            echo "fail";
            //header('location:../newreserve_.php');
        }