<?php
require '../dao/DUser.php';
$registration = $_GET['valor'];

$du = new DUser();
$res = $du->DUSelReg($registration);

if($res){
    echo"<img src = 'img/check.png'>";
}else{
    echo"<a href ='newuser.php'>Cadastrar usuário</a>";
}
header("Content-Type: text/html; charset=ISO-8859-1",true);