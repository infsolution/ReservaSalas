<html>
    <head>
        <title>
            Reserva de salas de estudo
        </title>
        <meta charset='utf-8' />
        <link href='css/fullcalendar.css' rel='stylesheet' />
        <link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
        <script type="text/javascript" src="jquery/njquery.min.js"></script>
        <script src='jquery/moment.min.js'></script>
        <script src='jquery/jquery.min.js'></script>
        <script src='jquery/fullcalendar.min.js'></script>
        <script src='jquery/funcs.js'></script>
        <link type="text/css" rel="stylesheet" media="screen" href="css/style.css" />
        <style type="text/css">
            fieldset{width:450px; alignment-adjust:central}
            ul{padding:2px;list-style:none}
            label{float:left;width:200px}
        </style>
        <script type="text/javascript">
$(function () {
  function removeCampo() {
	$(".removerCampo").unbind("click");
	$(".removerCampo").bind("click", function () {
	   if($("tr.linhas").length > 1){
		$(this).parent().parent().remove();
	   }
	});
  }
 
  $(".adicionarCampo").click(function () {
	novoCampo = $("tr.linhas:first").clone();
	novoCampo.find("input").val("");
	novoCampo.insertAfter("tr.linhas:last");
	removeCampo();
  });
});
</script>
<style type="text/css">
fieldset{width:600px;}
ul{padding:2px;list-style:none;}
label{float:left;width:200px;}
td{width: 150px}
</style>
    </head>
    <body>
        <div id="body">
            <div id="header">
                
            </div><div id="content">
                <div id="col-left">
                    
                </div>
                <div id="col-right">
                   
   
                    <form action="front/NGroup.php" method="post">
                        <fieldset style = "width:600px">
                            <legend>Criar Grupo</legend>
                            <table>
                                    <tr>
                                        <td>
                                            <label>Nome do grupo: </label>
                                        </td>
                                        <td>
                                            <input type="text" value="" name="name_group" id="name"/>
                                        </td>
                                    </tr>
                                    <tr class="linhas">
                                        <td>
                                        <label>Matricula do aluno: </label>
                                        </td>
                                        <td>
                                        <input type="text"  name="registration[]"  id="busca" onkeyup="buscarNoticias(this.value)"/>
                                        </td>
                                        <td><a href="#" class="removerCampo" title="Remover linha"><img src="img/remove_user.png" border="0" /></a></td>
                                        <td><div id= "resultado"></div></td>
                                    </tr>
                                    <tr><td colspan="4">
                                            <a href="#" class="adicionarCampo" title="Adicionar item"><img src="img/user_add.png" border="0" /></a>
                                    </td></tr>
                                <tr>
                                    <td style="text-align:right">
                            <input type = "submit"  value="Cadastrar" />
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div id="footer"></div>
        </div>
    </body>
</html>





