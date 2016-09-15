<?php
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
class FormUser{
    private $actionSave;
   

function onSave(){
        $name = $_POST['name'];
        $regis = $_POST['registration'];
        $dateBirth = $_POST['date_birth'];
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['password'];
        $conf_pass = $_POST['confirm_password'];
        $dataUser = array('sal_name'=>$name,'sal_date_birth'=>$dateBirth,
                           'sal_registration'=>$regis,'sal_email'=>$email,
                           'sal_activation'=>0,'sal_use_status'=>0,
                           'sal_life'=>1,'sal_user'=>$user,'sal_password'=>$conf_pass);
        $du = new DUser();
        $res=$du->DUInsert($dataUser);
        if($res>0){
            echo "Parabéns dados inseridos com sucesso!";
        }else{
            echo "Falha ao inserir os dados!";
        }
    }
    
}
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
        <link type="text/css" rel="stylesheet" media="screen" href="css/style.css" />
        <style type="text/css">
            fieldset{width:450px; alignment-adjust:central}
            ul{padding:2px;list-style:none}
            label{float:left;width:200px}
        </style>
    </head>
    <body>
        <div id="body">
            <div id="header">
                
            </div><div id="content">
                <div id="col-left">
                    
                </div>
                <div id="col-right">
                   
                    <form action="front/Nuser.php" method="post">
                        <fieldset style = "width:600px">
                            <legend style="color:red">Nome de usuário ou matricula já cadastrado!</legend>
                            <ul>
                                <li><label>Nome: </label><input type="text" value="" name="name" id="name"/></li>
                                <li><label>Matricula: </label><input type="text" value="" name="registration" id="registration"/></li>
                                <li><label>Data de Nascimento: </label><input type="text" value="" name="date_birth" id="date_birth"/></li>
                                <li><label>Email: </label><input type="text" value="" name="email" id="email"/></li>
                                <li><label>Usuário: </label><input type="text" value="" name="user" id="user"/></li>
                                <li><label>Senha: </label><input type="password" value="" name="password" id="password"/></li>
                                <li><label>Confirmar senha: </label><input type="password" value="" name = "confirm_password" /></li>
                            </ul>
                            <input type = "submit" value="Cadastrar" />
                        </fieldset>
                    </form>
                </div>
            </div>
            <div id="footer"></div>
        </div>
    </body>
</html>
