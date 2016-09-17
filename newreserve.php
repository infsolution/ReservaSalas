<?php
session_start();
$horary = array('7:00','8:00','9:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00');
?>
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
        <link type="text/css" rel="stylesheet" media="screen" href="css/menu.css" />
        <script src='jquery/menu.js'></script>
        <!--<link type="text/css" rel="stylesheet" media="screen" href="css/style.css" />-->
        <style type="text/css">
            fieldset{width:450px; alignment-adjust:central}
            ul{padding:2px;list-style:none}
            label{float:left;width:200px}
        </style>
        <script>
        $(function() {
            $( "#calendario" ).datepicker();
             console.log(this.getMoment().format('DD MMMM YYYY'));
        });
</script>

<script type="text/javascript">
$(document).ready(function(){
    var jsonRes;
     $('#btDate').click(function(e){ 
       var date = document.getElementsByName('dat');
       if(date[0].value !=''){
          $.getJSON('front/LoadInputDate.php?opcao=date&valor='+date[0].value, function(dados){
              jsonRes = dados;
              
              alert(jsonRes);
          
          } )}
         else{
             alert('Informe uma data!');
         }
   })
});    

</script> 
    </head>
    <body>
        <div id="body">
            <div id="header">
                
            </div><div id="content">
                 <!--start menu-->
                
                    <div id="sse50">
                    <div id="sses50">
                      <ul>
                        <li><a href="home.php">Home</a></li>  
                        <li><a href="?menu=50&skin=2&p=Javascript-Menus">Javascript Menus</a></li>
                        <li><a href="#">Horizontal Menus</a></li>
                        <li><a href="newreserve.php">Reservar sala</a></li>
                      </ul>
                    </div>
                  </div>
                    <!--end menu-->
                <div id="col-left">
                    
                </div>
                <div id="col-right">
                   
                    <form action="front/NReserve.php" method="post" id ="res">
                        <fieldset style = "width:600px">
                            <legend>Agenda Horário de Reserva</legend>
                            <ul>
                                <li><label>Nome do grupo: </label><input type="text" value=""name="name_group"/></li>
                                <li><label>Data da reserva: </label><input type="text" id = "calendario" name="dat"/></li>
                                <li><label>Horários disponíveis: </label><input type="button" id="btDate" value="Carregar horários disponíveis" class="botao"/></li>
                                <li><label>Horário de entrada: </label>
                                    <div id="horSt">    
                                <select name="horary_start" id="horaryStart">
                                    <option value="" selected="selected">Horário de inicio</option>
                 
                                </select>
                                    </div>
                                </li>
                                <li><label>Horário de saída: </label>
                                <select name="horary_end">
                                    <option value="" selected="selected">Horário de término</option>
                                    <option value="8:00:00">8:00</option>
                                    <option value="9:00:00">9:00</option>
                                    <option value="10:00:00">10:00</option>
                                    <option value="11:00:00">11:00</option>
                                    <option value="12:00:00">12:00</option>
                                    <option value="13:00:00">13:00</option>
                                    <option value="14:00:00">14:00</option>
                                    <option value="15:00:00">15:00</option>
                                    <option value="16:00:00">16:00</option>
                                    <option value="17:00:00">17:00</option>
                                    <option value="18:00:00">18:00</option>
                                </select>    
                                </li>
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



