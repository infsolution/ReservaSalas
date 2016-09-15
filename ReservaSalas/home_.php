<?php
session_start();
function __autoload($classe){
    if(file_exists("widgets/{$classe}.php")){
        require_once "widgets/{$classe}.php";

    }
    if(file_exists("controler/{$classe}.php")){
        require_once "controler/{$classe}.php";
    }
    if(file_exists("dao/{$classe}.php")){
        require_once "dao/{$classe}.php";
    }
}
$cont = new DReserve();
$ldCal=$cont->loadCalendar();
$today=date("Y-m-d");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>
            Reserva de salas de estudo
        </title>
        <meta charset='utf-8' />
        <link href='css/fullcalendar.css' rel='stylesheet' />
        <link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
        <script src='jquery/moment.min.js'></script>
        <script src='jquery/jquery.min.js'></script>
        <script src='jquery/fullcalendar.min.js'></script>

        <script>
		$(document).ready(function() {
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek'
			},
			defaultDate: <?php echo "'".$today."'"; ?>,
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [<?php echo $ldCal;?>]
			
			});
		});

</script>
<link type="text/css" rel="stylesheet" media="screen" href="css/style.css" />

    </head>
    <body>
        <div id="body">
            <div id="header">
                <table >
                    <tr>
                        <td style="width: 1100px">
                            
                        </td><td style="width: 100px">
                <?php
            echo "Faça Login!";
	?>
                            </td>
                        </tr>
                </table>
            </div><div id="content">
                <div id="col-left">
                    
                </div>
                <div id="col-right">
                   
                    <div id='calendar'></div>
                </div>
            </div>
            <div id="footer"></div>
        </div>
    </body>
</html>

<?php

