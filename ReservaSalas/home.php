<?php
session_start();
require 'dao/DReserve.php';
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
        <script src='jquery/menu.js'></script>

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
<link type="text/css" rel="stylesheet" media="screen" href="css/menu.css" />
    <style type="text/css">
                fieldset{width:350px; alignment-adjust:central}
                ul{padding:2px;list-style:none}
                label{float:left;width:200px}
            </style>
    </head>
    <body>
        <div id="body">
            <div id="header">
                 <table >
                    <tr>
                        <td style="width: 1100px">
                            
                        </td><td style="width: 100px">
        <?php
        $logado="Cicero";
        if($logado){
	echo"Seja bem vindo $logado!";
        }else{
            echo "Faça Login!";
        }
	?>
                            </td>
                        </tr>
                </table>
        
            </div><div id="content">
                <!--start menu-->
                
                    <div id="sse50">
                    <div id="sses50">
                      <ul>
                        <li><a href="home.php">Home</a></li>  
                        <li><a href="newuser.php">Cadastrar</a></li>
                        <li><a href="#">Horizontal Menus</a></li>
                        <li><a href="newreserve.php">Reservar sala</a></li>
                      </ul>
                    </div>
                  </div>
                    <!--end menu-->
                <div id="col-left">
                    <fieldset  >
                        <legend>Reserva de hoje</legend>
                        
                        </fieldset>
                    
                </div>
                
                   <div id="col-right" style="background-color:#fff">
                       
                    <div id='calendar'></div>
                    
                </div>
            </div>
            <div id="footer">
                
            </div>
        </div>
    </body>
</html>

<?php

