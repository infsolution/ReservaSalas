<?php

abstract class User{
    private $userId;
    private $name;
    private $userName;
    private $password;
    private $dateBirth;
    private $registration;
    private $email;
    private $activation;
    private $useStatus;
    private $lifeStatus;
    function __construct($userName) {
        $this->userName=$userName;
    }
    function __destruct() {
        
    }
    function getUserId(){
        return $this->userId;
    }
    function setUserId($userId){
        $this->userId=$userId;
    }
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name=$name;
    }
            
    function getUserName(){
        return $this->userName;
    }
    function setUserName($userName){
        $this->userName=$userName;
    }
    function getPassword(){
        return $this->password;
    }
    function setPassword($password){
        $this->password=$password;
    }            
    function getDateBirth(){
        return $this->dateBirth;
    } 
    function setDateBirth($dateBirth){
        $this->dateBirth = $dateBirth;
    }
    function getRegistration(){
        return $this->registration;
    }
    function setRegistration($registration){
        $this->registration=$registration;
    }
    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $this->email=$email;
    }
    function getActivation(){
        return $this->activation;
    }
    function setActivation($activation){
        $this->activation=$activation;
    }
    function getUseStatus(){
        return $this->useStatus;
    }
    function setUseStatus($useStatus){
        $this->useStatus=$useStatus;
    }
    function getLifeStatus(){
        return $this->lifeStatus;
    }
    function setLifeStatus($lifeStatus){
        $this->lifeStatus=$lifeStatus;
    }
    
    function toString(){
        return "Nome: {$this->userName}<br>Matricula: {$this->registration}";
    }
    
}