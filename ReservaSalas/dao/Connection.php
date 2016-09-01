<?php
class Connection{
    private $dbHost;
    private $dbUser;
    private $dbPasswd;
    private $database;
    private $dbCharset;
    private $dbPrefix;
    function __construct($db) {
        $this->dbHost='localhost';
        $this->dbUser='root';
        $this->dbPasswd='marcelia';
        $this->database= $db;
        $this->dbCharset='utf8';
        $this->dbPrefix='inf';
    }
    function __destruct() {
        
    }
    function DBConnection(){
    $link = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPasswd, $this->database) or die(mysqli_error($link));
    mysqli_set_charset($link, $this->dbCharset)or die(mysql_error($link));
    return $link;
}
//close conncetion
function DBCloseConnection($link){
    mysqli_close($link)or die(mysqli_error($link));
}
//protection for injection
  function DBEscape($dados){
      $link = $this->DBConnection();
    if(!is_array($dados)){
         $dados=  mysqli_real_escape_string($link,$dados);   
    }else{
        $arr= $dados;
        foreach ($arr as $key => $value){
            $key = mysqli_real_escape_string($link,$key);
            $value = mysqli_real_escape_string($link,$value);
            $dados[$key]=$value;
        }
    }
    $this->DBCloseConnection($link);
    return $dados;
}
function DBExecute($query){
    $link = $this->DBConnection();
    $result = mysqli_query($link, $query);
    $this->DBCloseConnection($link);
    return $result;
}
function DBInsert($table, array $data){
    $table = $this->dbPrefix.'_'.$table;
    $data=  $this->DBEscape($data);
    $fields = implode(',',  array_keys($data));
    $values= "'".implode("', '", $data)."'";
    $query="insert into {$table}({$fields})values({$values})";
    return $this->DBExecute($query);
}
function DBSelect($table, $params = null,$fields='*'){
    $table = $this->dbPrefix.'_'.$table;
    $params = ($params)?" $params":null;
    $query="select {$fields} from {$table}{$params}";
    $result=  $this->DBExecute($query);
    if(!mysqli_num_rows($result)){
    return false;}
    else{
        while($res=  mysqli_fetch_assoc($result)){
            $data[]=$res;
        }
    }
    return $data;
}
function DBlogin($table, $us, $pass, $fields='*'){
    
    $table = $this->dbPrefix.'_'.$table;
    $query="select {$fields} from {$table} where inf_user = '$us' and inf_passwd = '$pass'";
    $result=  $this->DBExecute($query);
    if(!mysqli_num_rows($result)){
    $login = false;}
    else{
        $login = true;
        }
        return $login;
    }
      

function DBUpdate($table,array $data, $where=null){
    foreach ($data as $key => $value) {
        $fields[]="{$key}='{$value}'";
    }
    $fields =  implode(', ', $fields);
    $table = $this->dbPrefix.'_'.$table;
    $where=($where)?" where {$where}":null;
    $query = "update {$table} set {$fields}{$where}";
    return $this->DBExecute($query);
}
function DBDelete($table,$where){
    $table = $this->dbPrefix.'_'.$table;
    $where=($where)?" where {$where}":null;
    $query = "delete from {$table}{$where}";
    return $this->DBExecute($query);
}

}