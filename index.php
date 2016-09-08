<!DOCTYPE html>
<?php
function __autoload($classe){
    if(file_exists("widgets/{$classe}.php")){
        require "widgets/{$classe}.php";

    }
    if(file_exists("controler/{$classe}.php")){
        require "controler/{$classe}.php";
    }
}
$cont = new Controler();
$ldCal=$cont->loadCalendar();
$today = date("Y-m-d");
//date in portuquese
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
$linkCss = new Element('link');
$linkCss->rel='stylesheet';
$linkCss->href='css/fullcalendar.css';
$linkCss->add('');
$linkCssPri=new Element('link');
$linkCssPri->rel='stylesheet';
$linkCssPri->href='css/fullcalendar.print.css';
$linkCssPri->media='print';
$linkCssPri->add('');
$scrJqMo = new Element('script');
$scrJqMo->src='jquery/moment.min.js';
$scrJqMo->add('');
$scrJq = new Element('script');
$scrJq->src='jquery/jquery.min.js';
$scrJq->add('');
$scrJqFc = new Element('script');
$scrJqFc->src='jquery/fullcalendar.min.js';
$scrJqFc->add('');
$scrCal = new Element('script');
$scrCal->add("$(document).ready(function() {\$('#calendar').fullCalendar({header: {left: 'prev,next today',center: 'title',right: 'month,agendaWeek,agendaDay,listWeek'},defaultDate: '{$today}',navLinks: true,editable: true,eventLimit: true,events: [{$ldCal}]});});"
);
$styCal = new Element('style');
$styCal->add("body {margin: 40px 10px;padding: 0;font-family: 'Lucida Grande',Helvetica,Arial,Verdana,sans-serif;font-size: 14px;}#calendar {max-width: 900px; margin: 0 auto;}
");
$head->add($meta);
$head->add($linkCss);
$head->add($linkCssPri);
$head->add($scrJqMo);
$head->add($scrJq);
$head->add($scrJqFc);
$head->add($scrCal);
$head->add($styCal);
//criação da pagina em branco
$title->add('Reserva de Salas de Estudo - Biblioteca IFPI');//Titulo da pagina
$head->add($title);
$html->add($head);
$center = new Element('center');
$paT = new Paragraph('Reserva de Horário de Salas');
$center->add($paT);
//$paM = new Paragraph('Mês: '.$meS);
//$center->add($paM);
$divCal = new Element('div');
$divCal->id='calendar';
$divCal->add('');
$center->add($divCal);
$body->bgcolor = '#ffffff';
$body->add($center);


$html->add($body);
$html->show();