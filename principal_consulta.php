<?php
session_start();

?>

<html>
    <head>
       <META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
        <title>.:Calendario UNI:.</title>

    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/calendario.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/calendario.js"></script>
    <link href="css/style2.css" rel="stylesheet" />
    <script type="text/javascript">

        $(function () {
            $("#fecha1").datepicker();
            $("#fecha2").datepicker({
                changeMonth: true,
                changeYear: true,
            });
            $("#fecha3").datepicker({
                changeMonth: true,
                changeYear: true,
                showOn: "button",
                buttonImage: "css/images/ico.png",
                buttonImageOnly: true,
                showButtonPanel: true,
            })
        })
    </script>


        <meta charset="utf-8" />
        <style type="text/css">
            .auto-style1 {
                width: 3%;
            }
            .auto-style2 {
                height: 24px;
            }
            .auto-style3 {
                width: 267px;
            }
            .auto-style4 {
                width: 326px;
            }
            .auto-style5 {
                width: 71px;
            }
        </style>
    </head>
    <body class="wrapper">

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

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head id="ctl00_Head1"><link href="css/default.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="flash/flash.js"></script>

   <link type="text/css" rel="stylesheet" href="css/Css_extra.css" /><link type="text/css" rel="stylesheet" href="css/styles.css" /><link type="text/css" rel="stylesheet" href="css/Calendar.css" /><link type="text/css" rel="stylesheet" href="css/Window.css" /></head>
<body>
    
    <form name="aspnetForm" method="post" action="principal_consulta.php" id="aspnetForm" style="width:780px;">
        <input type="hidden" name="ctl00_cphMasterCenter_rcCalendar_AD" id="ctl00_cphMasterCenter_rcCalendar_AD" value="[[1980,1,1],[2099,12,30],[2016,1,5]]" /><input type="hidden" name="ctl00_cphMasterCenter_rcCalendar_SD" id="ctl00_cphMasterCenter_rcCalendar_SD" value="[[2016,1,5]]" />
        <input type="hidden" id="ctl00_mnLogin_Hidden" name="ctl00$mnLogin" />
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />

<script type="text/javascript">
    //<![CDATA[
    var theForm = document.forms['aspnetForm'];
    if (!theForm) {
        theForm = document.aspnetForm;
    }
    function __doPostBack(eventTarget, eventArgument) {
        if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
            theForm.__EVENTTARGET.value = eventTarget;
            theForm.__EVENTARGUMENT.value = eventArgument;
            theForm.submit();
        }
    }
    //]]>
</script>

<link href="css/buttons.css" rel="stylesheet" type="text/css" />
<link href="css/background.css" rel="stylesheet" type="text/css" />



<script src="js/AJAX_4.js" type="text/javascript"></script>
<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWDwL777bcDgLZsL/nBwK0s5X0AgKW0u3XAwLh1a3YAwLs1OzUAwKv1sTWAwLy0/vUAwKt09PVAwKI097aAwLL1LbVAwKl+MTAAQLo+YTBAQKb87ugAQLm9vugAS7uQdZnnp97zZyrbg+4+w7UCoug" />
        
       <span id="ctl00_Labelheader"><img border="0" src="http://fotos.subefotos.com/106f8f41c304c044ba7edd6a25a7fa56o.png" width="100%" height="290px" /></script></span>
        <table cellpadding="0" cellspacing="0" border="0" class="master">
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
                        <tr>
                            <td style="background-color:#ccc; width:17px;"></td>
                            <td class="master-content-top">
                                <div style="background-color:#cccccc; text-align:right; padding:4px;">
                                    <a href="_asunto_insertar.php" class="button yellow radius">
                                        <font class=" body" size=2 color=#ecf0f1>
                                        Nuevo Evento
                                        </font>
                                    </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                     
                                    <a href="logout.php" class="button blue radius">
                                        <font class=" body"=body" size=2 color=#ecf0f1>
                                        Cerrar Sesión
                                        </font>
                                    </a>
                                </div>
                        
                            </td>
                            <td style="background-color:#ccc; width:17px;"></td>
                        </tr>
                    </table>
                    <table class="master-content-main" cellpadding="0" cellspacing="0" border="0" style="width:100%; height: auto;">
                        <tr>
                            <td class="master-content-left">
                            </td>
                            <td style="background-color:#ccc; width:16px;"></td>
                            <td class="master-content-center" style="background-color:#fcf9fe;  width:97%; height: 97%;"">
                                
   <script type="text/javascript">
    </script>
    
    <div style="text-align:right; padding-bottom:6px;">
        &nbsp;
        &nbsp;|&nbsp;
        <a onclick="print(); return false;javascript:print;" id="ctl00_cphMasterCenter_btnActivityPrinter" href="javascript:__doPostBack('ctl00$cphMasterCenter$btnActivityPrinter','')">Imprimir</a>
    </div>
    <table style="width:100%;">
        <tr>
            
            <td style="vertical-align:top; " class="auto-style1">
                
                
                
                
                




            <table>

    
            <h2>Fecha</h2>
            
                <br/>
                <input type="text" name="txt_fec_asu_vc" id="fecha1"  placeholder="Ingrese Fecha"><br/>
                <br/>
        
        </table>
      








                
                
                
                
                
                
                <p>
                    &nbsp;<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr><td>
    
              
                        
                        
     <table class="admin-grid" cellspacing="0" rules="all" border="1" id="ctl00_cphMasterCenter_gvwSector" width="100%">
        
         <tr>
                        <tr class="auto-style3" bgcolor="#E0E0E0">Facultad</tr>
                        <td>


                            <select id="cbo_cod_fac_in" name="cbo_cod_fac_in" placeholder="Facultad">
                                <option value="1">FAUA</option>
                                <option value="2">FC</option>
                                <option value="3">FIA</option>
                                <option value="4">FIC</option>
                                <option value="5">FIEECS</option>
                                <option value="6">FIIS</option>
                                <option value="7">FIEE</option>
                                <option value="8">FIGMM</option>
                                <option value="9">FIM</option>
                                <option value="10">FIP</option>
                                <option value="11">FIQT</option>



                            </select>
                        </td>
                    </tr>

          <tr>
                        <td colspan="2" class="td_cli_btn_env">
                            <button id="btnConsultar" type="submit" value="Consultar" name="btnConsultar" >Consultar</button>
                        </td>
                    </tr>



         


        
    </table>
</td></tr></table>
                </p>
            </td>
            <td>
                <div id="ctl00_cphMasterCenter_RadAjaxPanel1">
    <!-- 1.6.2 --><div><input type="hidden" name="ctl00_cphMasterCenter_RadAjaxPanel1PostDataValue" id="ctl00_cphMasterCenter_RadAjaxPanel1PostDataValue" value="" /></div>
<script type="text/javascript" src="js/AJAX.js"></script><script type="text/javascript" src="js/AJAX_1.js"></script><script type="text/javascript">/*<![CDATA[*/window["ctl00_cphMasterCenter_RadAjaxPanel1"] = new RadAjaxPanelNamespace.RadAjaxPanel({ ClientID: "ctl00_cphMasterCenter_RadAjaxPanel1", EnableOutsideScripts: false, EnablePageHeadUpdate: true, Url: "/avm/activity/agendaofi.aspx?agn=3", LoadingPanelID: "", ActiveElementID: "", ClientEvents: { OnRequestStart: "", OnRequestSent: "", OnResponseReceived: "", OnResponseEnd: "" }, FormID: "aspnetForm", UniqueID: "ctl00$cphMasterCenter$RadAjaxPanel1" });/*]]>*/</script>
                    

                    <table width="100%">


                    <tr>
                    <th align="center" class="auto-style5"><b>Hora</b></th>
                      <th align="center" class="auto-style4"><b>Asunto</b></th>
                    <th align="center"><b>Lugar</b></th>
                    </tr>
                    </table>
                    <div>
        <table class="admin-grid" cellspacing="0" rules="all" border="1" id="ctl00_cphMasterCenter_gvMain" ;">
          
    



            
                 <?php






          
    $txt_fec_asu_vc = $_POST['txt_fec_asu_vc'];
    $cbo_cod_fac_in = $_POST['cbo_cod_fac_in'];
    


     $mysqli = new mysqli('localhost', 'root', 'root', 'calendario');




    if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }




            // Visualizar los títulos de las películas y su género después de 1990
            $strSQL = 'select nom_asu_vc,lug_asu_vc,cod_hra_ini_in , cod_hra_fin_in, est_asu_in from asunto
        WHERE   asunto.fec_asu_vc="'.$txt_fec_asu_vc .'" and  asunto.cod_fac_in='.$cbo_cod_fac_in.';';

            mysqli_query($mysqli, $strSQL);

            // Visualizar los resultados
            $resultado = $mysqli->query($strSQL);

            /* Obtener un array asociativo */
       
   /* Obtener un array asociativo */
    
            echo "<tr><th>Inicio</th><th> Fin  </th><th>  Evento  </th><th>      </th>";
            while ($fila = $resultado->fetch_assoc()) {


           echo '<tr><tH>';
            switch ($fila["cod_hra_ini_in"]) {
            case 1: echo '6:00';break;
            case 2: echo '7:00';break;
            case 3: echo '7:30';break;
            case 4: echo '8:00';break;
            case 5: echo '9:00';break;
            case 6: echo '9:30';break;
            case 7: echo '10:00';break;
            case 8: echo '10:30';break;
            case 9: echo '11:00';break;
            case 10: echo '11:30';break;
            case 11: echo '12:00';break;
            case 12: echo '12:30';break;
            case 13: echo '13:00'; break;
            case 14: echo '13:30';break;
            case 15: echo '14:00'; break;
            case 16: echo '14:30';break;
            case 17: echo '15:00';break;
            case 18: echo '15:30'; break;
            case 19: echo '16:00';break;
            case 20: echo '16:30';break;
            case 21: echo '17:00';break;
            case 22: echo '17:30';break;
            case 23: echo '18:00'; break;
            case 24: echo '18:30'; break;
            case 25: echo '19:00'; break;
            case 26: echo '19:30';break;
            case 27: echo '20:00'; break;
            case 28: echo '20:30'; break;
            case 29: echo '21:00'; break;
            case 30: echo '21:30';break;
            case 31: echo '22:00';break;
            case 32: echo '22:30';break;
            case 33: echo '23:00'; break;
            case 34: echo '23:30';break;
            case 35: echo '24:00';  break;
            case 36: echo '00:30';break;
        }



        echo  '</tH>';



        echo '<tH>';
            switch ($fila["cod_hra_fin_in"]) {
            case 1: echo '6:00';break;
            case 2: echo '7:00';break;
            case 3: echo '7:30';break;
            case 4: echo '8:00';break;
            case 5: echo '9:00';break;
            case 6: echo '9:30';break;
            case 7: echo '10:00';break;
            case 8: echo '10:30';break;
            case 9: echo '11:00';break;
            case 10: echo '11:30';break;
            case 11: echo '12:00';break;
            case 12: echo '12:30';break;
            case 13: echo '13:00';break;
            case 14: echo '13:30';break;
            case 15: echo '14:00';break;
            case 16: echo '14:30';break;
            case 17: echo '15:00';break;
            case 18: echo '15:30';break;
            case 19: echo '16:00';break;
            case 20: echo '16:30';break;
            case 21: echo '17:00';break;
            case 22: echo '17:30';break;
            case 23: echo '18:00';break;
            case 24: echo '18:30';break;
            case 25: echo '19:00';break;
            case 26: echo '19:30';break;
            case 27: echo '20:00';break;
            case 28: echo '20:30';break;
            case 29: echo '21:00';break;
            case 30: echo '21:30';break;
            case 31: echo '22:00';break;
            case 32: echo '22:30';break;
            case 33: echo '23:00';break;
            case 34: echo '23:30';break;
            case 35: echo '24:00';break;
            case 36: echo '00:30';break;
        }

        
        echo  '</th>';
        
                echo '<th>'.$fila["nom_asu_vc"].'</th><th>'.$fila["lug_asu_vc"].'</th></tr>'; 

                    
             }




            /* Liberar el conjunto de resultados */
            $resultado->free();

            // Cerrar la conexión
            $mysqli->close();
            ?>





<tr id="ctl00_cphMasterCenter_gvMain_ctl02" class="row">



        </table>
           
</div>
           
        </tr>


    </table> 
    <table id="ctl00_cphMasterCenter_rwmActivity_wrapper" cellpadding="0" cellspacing="0" border="0" width="100%" style="position:absolute"><tr><td>
</td></tr></table>

                            </td>
                            <td style="background-color:#ccc; width:16px;"></td>
                            <td class="master-content-right" style="text-align:right;">
                                

                            </td>
                        </tr>
                    </table>
                    <table class="master-content-bottom" cellpadding="0" cellspacing="0" border="0" style="width:100%;">
                        <tr>
                            <td class="master-content-bottom">
                                
                        <br />

                            </td>
                        </tr>
                    </table>
                    &nbsp;<!-- div class="master-copyright">
                        Copyright &copy; 2015 UNI - Todos los derechos reservados.
                        <br />
                        <strong>UNIVERSIDAD NACIONAL DE INGENIERÍA</strong>
                    </div--></td>
            </tr>
        </table>
    




<h1>
    <?php   echo ( $_SESSION['log_usr_vc']);
    echo ( $_SESSION['cod_fac_in']);
    echo ( $_SESSION['user']);
    ?>

</h1>







    
<script type="text/javascript"></script>
<script type="text/javascript">
    //<![CDATA[
    Sys.Application.initialize();
    //]]>
</script>
</form>
</body>


</html>










