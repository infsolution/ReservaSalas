<html>
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
        <script src="jquery/jquery-1.8.2.js"></script>
        <script src="jquery/jquery-ui.js"></script>
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <!--<link type="text/css" rel="stylesheet" media="screen" href="css/style.css" />-->
        <style type="text/css">
            fieldset{width:450px; alignment-adjust:central}
            ul{padding:2px;list-style:none}
            label{float:left;width:200px}
        </style>
        <script>
        $(function() {
            $( "#calendario" ).datepicker();
             console.log(this.getMoment().format('Do MMMM YYYY'));
        });
</script>
    </head>
    <body>
        <div id="body">
            <div id="header">
                
            </div><div id="content">
                <div id="col-left">
                    
                </div>
                <div id="col-right">
                   
                    <form action="front/NReserve.php" method="post">
                        <fieldset style = "width:600px">
                            <legend>Agenda Horário de Reserva</legend>
                            <ul>
                                <li><label>Nome do grupo: </label><input type="text" value=""name="name_group"/></li>
                                <li><label>Data da reserva: </label><input type="text" id = "calendario" name="date_reserve"/></li>
                                <li><label>Horário de entrada: </label><input type="text" value="" name="horary_start"/></li>
                                <li><label>Horário de saída: </label><input type="text" value="" name="horary_end"/></li>
                                <li><label>Sala: </label><input type="text" value="" name="room"/></li>
                                
                            </ul>
                            <input type = "submit" value="Confirmar reserva" />
                        </fieldset>
                    </form>
                </div>
            </div>
            <div id="footer"></div>
        </div>
    </body>
</html>



