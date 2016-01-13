<?php  

session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Screen</title>
    <link href="css/style.css" rel="stylesheet" />

        <script src='js/libreria/libreria.js'></script>
        <script type="js/index.js">
            function foco() {
                document.frmLogin.log_usr_vc.focus();
            }
            function validaForm() {
                cadena = "";
                estado = true;
                if (nulo(frmLogin.log_usr_vc.value) === false) {
                    frmLogin.log_usr_vc.focus();
                    cadena = "El campo usuario no puede ser un valor nulo vacío";
                    estado = false;
                }
                if (nulo(frmLogin.pwd_usr_vb.value) === false && estado === true) {
                    frmLogin.pwd_usr_vb.focus();
                    cadena = "El campo password no puede ser un valor vacío";
                    estado = false;
                }

                if (estado === true) {
                    return true;
                } else {
                    alert(cadena);
                    return false;
                }
            }
            function nulo(texto)
            {
                if (texto.length === 0)
                {
                    return false;
                } else
                if (!espacio(texto)) {
                    return false;
                } else {
                    return true;
                }
            }

            function espacio(texto)
            {
                if (texto.charAt(0) === ' ')
                    return false;
                return true;
            }


        </script>
    </head>

    <body onload="foco()">
        <?php include 'fecha02.php'; ?>


         <div class="wrapper">
           <div class="container">
            <h1>Universidad Nacional de Ingenieria</h1>



            <form id="frmLogin" name="frmLogin" action="principal.php" method="post"  onsubmit="return validaForm()">
                <input type="hidden" name="control" value="12345">
                <input type="text" id="log_usr_vc" name="log_usr_vc" placeholder="Usuario">
                <input type="password" id="pwd_usr_vb" name="pwd_usr_vb" placeholder="Contraseña">
                <button type="submit" name="login" id="login">Ingreso</button>
            </form>

         </div>
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            
        </ul>
    </div>

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>



