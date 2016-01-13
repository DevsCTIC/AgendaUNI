

<?php
session_start();

function valid_conect(){

if($_SESSION['est_usr_in']!=1)
{
    $_SESSION['log_usr_vc'] = $_POST['log_usr_vc'];
    $_SESSION['pwd_usr_vb'] = $_POST['pwd_usr_vb'];
    $_SESSION['est_usr_in'] = 0;

    // Verificar el usuario y el password del usuario
    /*if (($_SESSION['log_usr_vc'] == 'admin') and ( $_SESSION['pwd_usr_vb'] == 'uni')) {
        $_SESSION['est_usr_in'] = 1;
    } else {
        echo 'Lo sentimos, pero usted no tiene permiso para ver esta página!';
        printf ("<script type='text/javascript'>window.location='errorLogin.html';</script>");
    }*/

    try {

               $dsn='mysql:host=localhost;dbname=calendario';
               $dbh=new PDO($dsn,'root','root');
               $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
               $dbh->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
               $query=$dbh->prepare("CALL exist_usr(?,?)");
               $query->bindParam(1,$_SESSION['log_usr_vc'],PDO::PARAM_STR);
               $query->bindParam(2,$_SESSION['pwd_usr_vb'],PDO::PARAM_STR);
               $query->execute();

               //$query="CALL exist_usr('$_SESSION[log_usr_vc]','$_SESSION[pwd_usr_vb]')";
               //$stm=$dbh->query($query);
               //print_r("$query");
               $row=$query->fetch();
               if ($row['facultad']=='1') {
            printf ("INVITADO");
            header('Location: errorLogin.html');
        } else {
            printf (" Se ha logeado como ADMIN $row[user_log]");
            //echo $stm;
            $_SESSION['est_usr_in']=1;
            header("Location: principal_consulta.php");
        }

              $dbh=null;


} catch (PDOException $e) {
              echo "<br/>";
              echo $e->GetMessage();
              }

}

}
?>