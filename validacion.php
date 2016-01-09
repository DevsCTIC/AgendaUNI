<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>


    <?php 
ini_set('display_errors', 'Off');
ini_set('display_startup_errors', 'Off');
error_reporting(0);



     $log_usr_vc= $_POST['log_usr_vc'];
     $pwd_usr_vb= $_POST['pwd_usr_vb'];




    $mysqli = new mysqli('localhost', 'root', '', 'calendario');
    echo "conexion valida\n";

       
$query = " SELECT log_usr_vc,pwd_usr_vb FROM usuario WHERE log_usr_vc ='".$log_usr_vc."' AND pwd_usr_vb='".$pwd_usr_vb."' " ;
        /*echo  $query*/;


if ( $resultado = $mysqli->query($query) ) {

    if ( $resultado->num_rows > 0 ) {
        echo "concidencia";
        $row = $resultado->fetch_assoc();
        if ($pwd_usr_vb==$row['pwd_usr_vb'] && $log_usr_vc==$row['log_usr_vc']) {
            echo "Login exitoso";
        } else {

            echo "Datos son incorrectos";
        }

    }

}
mysql_close($connect);
?> 


</body>
</html>
