<?php


    $txt_fec_asu_vc = $_POST['txt_fec_asu_vc'];
    $cbo_cod_fac_in = $_POST['cbo_cod_fac_in'];
    
     $mysqli = new mysqli('localhost', 'root', '', 'calendario');

    if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }




if (!$mysqli->multi_query("call consulta_asunto('$txt_fec_asu_vc','$cbo_cod_fac_in')")) {
    echo "Falló la llamada: (" . $mysqli->errno . ") " . $mysqli->error;
}


do {
    /*En el if recogemos una fila de la tabla*/
    if ($res = $mysqli->store_result()) { 
        /*Imprimimos el resultado de la fila y debajo un salto de línea*/
        var_dump($res->fetch_all());
        printf("\n");
        /*La llamada a free() no es obligatoria, pero si recomendable para aligerar memoria y para evitar problemas si después hacemos una llamada a otro procedimiento*/
        $res->free();
    } else {
        if ($mysqli->errno) {
            echo "Store failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
} while ($mysqli->more_results() && $mysqli->next_result());



    // Cerrar la conexión
    $mysqli->close();
?>



