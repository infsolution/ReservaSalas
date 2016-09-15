<?php
require '../dao/DGroup.php';
        $nameG = $_POST['name_group'];
        $regis = $_POST['registration'];

        $dataG = array('sal_name_group'=>$nameG);
        $du = new DGroup();
        $ids=[];
        foreach ($regis as $value) {
             $id = $du->DGGetId($value);
             $ids[]=$id[0];
}
        $res=$du->DGinsertName($dataG,$ids);
        if($res>0){
        header('location:../home.php');
        }else{
            echo 'Erro ao cadastrar usuario';
        }