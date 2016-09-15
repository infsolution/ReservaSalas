<?php

session_start();
class Login{
    private $user;
    private $password;
    function __construct($user,$password) {
        $this->user=$user;
        $this->password=$password;
    }
    function login(){
       require 'dao/connect.php';
       $con = new Connect();
       $link=$con->DBConnection();
       $clie = $con->DBlogin('user',$this->user,$this->passwd);
       $con->DBCloseConnection($link);
       if($clie){
	$_SESSION['sal_user']=$this->user;
	$_SESSION['sal_password']=$this->passwd;
	header('location:home.php');	
        }else{
	unset($_SESSION['sal_usur']);
	unset($_SESSION['sal_password']);
	header('location:home_.php');	
}
    }
}

