<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
    <?php
    $mysqli = new mysqli('localhost', 'root', 'root', 'calendario');

    if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    $strSQL = 'select*from usuario;';

    mysqli_query($mysqli, $strSQL);

    // Visualizar los resultados
    $resultado = $mysqli->query($strSQL);

    /* Obtener un array asociativo */
    while ($fila = $resultado->fetch_assoc()) {
    printf("\n%s (%s)", $fila["log_usr_vc"], $fila["pwd_usr_vb"]);
    }

    /* Liberar el conjunto de resultados */
    $resultado->free();

    // Cerrar la conexión
    $mysqli->close();
    ?>
</body>
</html>
