<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>

		<?php
     $mysqli = new mysqli('localhost', 'root', 'root', 'calendario');
    if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error); }
			
			if(isset($_POST['login'])){
				$usuario = $_POST['user'];
				$pw = $_POST['pw'];            

		 $log = 'SELECT * FROM CALENDARIO.usuario WHERE log_usr_vc="'.$usuario.'" AND pwd_usr_vb="'.$pw.'" ;';



          
   		 mysqli_query($mysqli, $log);
         $resultado = $mysqli->query($log);

           while ($fila = $resultado->fetch_assoc()) {
  				echo '<th>'.$fila["nom_usr_vc"].'</th>'; 
  				$_SESSION['user'] = $fila['nom_usr_vc']; 
  				$_SESSION['log_usr_vc'] = $fila['log_usr_vc']; 
  				$_SESSION['cod_fac_in'] = $fila['cod_fac_in']; 

				  }		
				$cnt=0;
			while ($fila = $resultado->fetch_assoc())
					 { 
		              $cnt++;
		             }
             	echo '<br>';
                echo ($cnt);


				if (($cnt)>0 )
                {
	
				  	echo 'Iniciando sesion para ';
					//echo 'Iniciando sesión para '.$_SESSION['user'].' <p>';
		
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
				
				}

}
            /* Liberar el conjunto de resultados */
          

            // Cerrar la conexión
            $mysqli->close();
            ?>
            <h1>hola <?php  echo ($_SESSION['user']); ?> 
             </h1>

</body>
</html>


