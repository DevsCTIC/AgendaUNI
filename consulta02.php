<?php


try {
    
     $dsn='mysql:host=localhost;dbname=calendario';
     $dbh=new PDO($dsn,'root','root');
     $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
     $dbh->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
     $query="CALL usp_consulta_facultad()";
     $stm=$dbh->query($query);
     while ($row=$stm->fetch())
     {
         echo "{$row['nom_fac_vc']}<br/>";     
     }
    $dbh=null;
} catch (PDOException $e) {
    echo $e->GetMessage();
}
?>