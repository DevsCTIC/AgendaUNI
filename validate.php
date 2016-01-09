<?php 
ini_set('display_errors', 'Off');
ini_set('display_startup_errors', 'Off');
error_reporting(0);

$login = $_POST['log_usr_vc'];
$password = $_POST['pwd_usr_vb'];

$session_login = true;


function Connect(){
    if(!($link = mysql_connect("localhost","root"))){
        echo "ERROR!";
        exit();
    }
    if(!mysql_select_db("calendario", $link)){
        echo "ERROR al seleccionar BASE";
        exit();
    }
    return $link;
      
}

$connect = Connect();
$query = " SElECT * FROM usuario WHERE log_usr_vc ='".$log_usr."' AND pwd_usr_vb='".$pwd_usr."'";
$q = mysql_query($query,$connect);

try{
    if(mysql_result($q,0)){
        $resultado = mysql_result($q, 0);
        echo "VALIDADO";
    }
    else{echo "NO VALIDADO";}
    
}catch(Exception $error){}
mysql_close($connect);
?> 