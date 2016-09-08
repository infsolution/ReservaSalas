<?php
require 'widgets/Element.php';
$mes = date('M');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$meS = strftime('%B', strtotime('today'));
$meS = ucfirst($meS);
$html = new Element('html');
$head = new Element('head');//Section head
$title = new Element('title');
$title->add('Novo usuário');
$meta = new Element('meta');
$meta->charset = 'UTF-8';
$head->add($title);
$head->add($meta);
$body = new Element('body');//section body
$center = new Element('center');



$body->add($center);//End section body



$html->add($head);
$html->add($body);
$html->show();

?>
