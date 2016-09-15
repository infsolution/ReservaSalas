<?php
require '../dao/DUser.php';
        $name = $_POST['name'];
        $regis = $_POST['registration'];
        $dateBirth = $_POST['date_birth'];
        $email = $_POST['email'];
        $user = $_POST['user'];
        $conf_pass = $_POST['confirm_password'];
        $dataUser = array('sal_name'=>$name,'sal_date_birth'=>$dateBirth,
                           'sal_registration'=>$regis,'sal_email'=>$email,
                           'sal_activation'=>0,'sal_use_status'=>0,
                           'sal_life'=>1,'sal_user'=>$user,'sal_password'=>$conf_pass);
        $du = new DUser();
        $res=$du->DUInsert($dataUser);
        
        if($res>0){
        header('location:../home.php');
        }else{
            echo $res;
            header('location:../newuser_.php');
        }