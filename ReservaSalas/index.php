<!DOCTYPE html>
<?php
require 'widgets/Element.php';
require 'widgets/Table.php';
require 'widgets/TableRow.php';
require 'widgets/TableCell.php';
//Elementos html
$html = new Element('html');
$head = new Element('head');
$title = new Element('title');
$body = new Element('body');
//criação da pagina em branco
$title->add('Reserva de Salas de Estudo - Biblioteca IFPI');//Titulo da pagina
$head->add($title);
$html->add($head);
$center = new Element('center');
$body->add($center);
$table = new Table();//Cria uma tabela
$table->width = 600;
$table->border = 1;
$headTable = $table->addRow();
$headTable->addCell('Domingo');
$headTable->addCell('Segunda');
$headTable->addCell('Terça');
$headTable->addCell('Quarta');
$headTable->addCell('Quinta');
$headTable->addCell('Sexta');
$headTable->addCell('Sabado');
$body->add($table);
$html->add($body);
$html->show();