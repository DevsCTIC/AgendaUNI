<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Mostrar la fecha y hora actual</title>
        <link href="../../../../styles/curso.css" rel="stylesheet" />
        <meta charset="utf-8" />
    </head>
    <body>
        <div style="text-align: center">
            <h1>¡Bienvenidos a la Agenda de Actividades UNI</h1>
            <?php

            // Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
            date_default_timezone_set('America/Lima');
            echo '<h3>';
  
            echo date('d');
  ECHO   '/';
            echo date('MM');
  ECHO   '/';
            echo date('Y');
              ?>
            <br/>
            <h5>La hora actual es, <?php echo date('h:i:s a'); ?></h5>
        </div>
    </body>
</html>