<!DOCTYPE html>
<?php
require 'widgets/Element.php';
require 'widgets/Table.php';
require 'widgets/TableRow.php';
require 'widgets/TableCell.php';
require 'widgets/Paragraph.php';
$mes = date('M');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$meS = strftime('%B', strtotime('today'));
$meS = ucfirst($meS);
//Elementos html
$html = new Element('html');
$head = new Element('head');
$title = new Element('title');
$body = new Element('body');
$meta = new Element('meta');
$meta->charset = 'UTF-8';
$head->add($meta);
//criação da pagina em branco
$title->add('Reserva de Salas de Estudo - Biblioteca IFPI');//Titulo da pagina
$head->add($title);
$html->add($head);
$center = new Element('center');
$paT = new Paragraph('Reserva de Horário de Salas');
$center->add($paT);
$paM = new Paragraph('Mês: '.$meS);
$center->add($paM);
$body->bgcolor = '#ffffdd';
$body->add($center);

$table = new Table();//Cria uma tabela
$table->width = 600;
$table->border = 1;
$table->bordercolor ='#ff00dd';
$headTable = $table->addRow();
$headTable->addCell('Domingo');
$headTable->addCell('Segunda');
$headTable->addCell('Terça');
$headTable->addCell('Quarta');
$headTable->addCell('Quinta');
$headTable->addCell('Sexta');
$headTable->addCell('Sabado');
$center->add($table);
$html->add($body);
$html->show();