
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <body>

            <?php
            $txt_nom_asu_vc = $_POST['txt_nom_asu_vc'];
            $txt_lug_asu_vc = $_POST['txt_lug_asu_vc'];
            $cbo_cod_hra_ini_in = $_POST['cbo_cod_hra_ini_in'];
            $cbo_cod_hra_fin_in = $_POST['cbo_cod_hra_fin_in'];
            $cbo_cod_fac_in = $_POST['cbo_cod_fac_in'];
            $mysqli = new mysqli('localhost', 'root', '', 'calendario');
            if (!$mysqli->set_charset("utf8")) {
                printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
                exit();
            } else {
                printf("Conjunto de caracteres actual: %s\n   ", $mysqli->character_set_name());
            }
            if ($mysqli->connect_error) {
                die('Error de Conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
            }
            //Ingreso del Registro Asunto 
            
           
            
            // Ingresar el asunto 

			try {

               $dsn='mysql:host=localhost;dbname=calendario';
               $dbh=new PDO($dsn,'root','');
               $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
               $dbh->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
               $query="CALL insertar_asunto('$txt_nom_asu_vc','$txt_lug_asu_vc','$cbo_cod_hra_ini_in','$cbo_cod_hra_fin_in','$cbo_cod_fac_in')";
               $stm=$dbh->query($query);
               
               echo "Actualizacion Correcta!<br />";
               while ($row=$stm->fetch())
              {
                echo "{$row['nom_fac_vc']}<br />";
              }
              $dbh=null;
			  echo "El nuevo Asunto  ha sido creado correctamente <br />";
              } catch (PDOException $e) {
              echo "<br/>";
              echo $e->GetMessage();
              }



     


            $mysqli->close();
            ?>
        </body>
</html>




















