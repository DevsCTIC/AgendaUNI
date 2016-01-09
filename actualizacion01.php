<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
            $_cod_asu_in =  $_POST['cbo_cod_asu_in'];
            $_txt_nom_asu_vc = $_POST['txt_nom_asu_vc'];
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
            //Actualizacion
            try {

               $dsn='mysql:host=localhost;dbname=calendario';
               $dbh=new PDO($dsn,'root','');
               $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
               $dbh->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
               $query="CALL actualizar_asunto('$_cod_asu_in','$_txt_nom_asu_vc','$txt_lug_asu_vc','$cbo_cod_hra_ini_in','$cbo_cod_hra_fin_in','$cbo_cod_fac_in')";
               $stm=$dbh->query($query);
               
               echo "Actualizacion Correcta!<br />";
               while ($row=$stm->fetch())
              {
                echo "{$row['nom_fac_vc']}<br />";
              }
              $dbh=null;
              } catch (PDOException $e) {
              echo "<br/>";
              echo $e->GetMessage();
              }
            
             mysqli_query($mysqli, $query);


            $mysqli->close();
            ?>





