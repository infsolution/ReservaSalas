<?php
require '../dao/DReserve.php';
$opcao = isset($_GET['opcao']) ? $_GET['opcao'] : '';
$valor = isset($_GET['valor']) ? $_GET['valor'] : ''; 

$horStart = array('7:00','8:00','9:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00');
$horUnavSt = [];
$horAvaiEnd =[];
$horAvaiSt=[];
$datDb;
 
if(!empty($opcao)){
    switch ($opcao){
        case 'date':
            echo getHorary($valor);
            break;
    }
    
    
}






function getHorary($valor){
    $horStart = array('7:00','8:00','9:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00');
    $datDb=implode('-', array_reverse(explode('/', $valor)));
    $dr = new DReserve();
    $dtDAy = $dr->DRSelDay($datDb);
    if($dtDAy){
    foreach ($horStart  as $val) {
    foreach ($dtDAy as $value) {
        if($val==$value['sal_horary_start']){
            $horUnavSt[]=$val;
        }     
    }   
    }
$horAvaiSt = array_diff($horStart, $horUnavSt);
echo json_encode($horAvaiSt);
}else{
    $horAvaiSt =  $horStart;
echo json_encode($horAvaiSt);    
}

}
//var_dump($horUnavSt);
//echo "<br><br>";
//var_dump($horAvaiSt);
