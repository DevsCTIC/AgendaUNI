
<?php
session_start();
$mysqli = new mysqli('localhost', 'root', 'root', 'calendario');
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
if (isset($_POST['login'])) {

    $log_usr_vc = $_POST['log_usr_vc'];
    $pwd_usr_vb = $_POST['pwd_usr_vb'];
    $_SESSION['est_usr_in'] = 0;

    $strSQL = 'SELECT * FROM CALENDARIO.usuario WHERE log_usr_vc="'.$log_usr_vc.'" AND pwd_usr_vb="'.$pwd_usr_vb.'" ;';

    echo ($strSQL);

    mysqli_query($mysqli, $strSQL);
    $resultado = $mysqli->query($strSQL);

    $cnt = 0;
    while ($fila = $resultado->fetch_assoc()) {
        $cnt = $cnt + 1;
        $_SESSION['log_usr_vc'] = $fila['log_usr_vc'];
        $_SESSION['cod_fac_in'] = $fila['cod_fac_in'];
        $_SESSION['est_usr_in'] = 1;
        $_SESSION['user'] = $fila['nom_usr_vc'];
    }

    if (($cnt) > 0) {
        echo 'Iniciando sesión para ' . $_SESSION['user'] . ' <p>';
    } else {
      
        echo '<script> window.location="frmlogin.php"; </script>';
    }


    echo '<br>';
    echo ($cnt);
    echo '<br>';
}
$mysqli->close();
?>





















<html>
    <head>
        <META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
        <title></title>
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

 
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head id="ctl00_Head1"><title>
            .: Cronograma de Actividades UNI</title><link href="css/default.css" rel="stylesheet" type="text/css" />
        <!--<script type="text/javascript" src="flash/flash.js"></script>-->

       <meta name="description" /><meta name="keywords" /><link type="text/css" rel="stylesheet" href="css/Css_extra.css" /><link type="text/css" rel="stylesheet" href="css/styles.css" /><link type="text/css" rel="stylesheet" href="css/Calendar.css" /><link type="text/css" rel="stylesheet" href="css/Window.css" /></head>
    <body>

        <form name="aspnetForm" method="post" action="principal_consulta.php" id="aspnetForm" style="width:75%; height: auto;">
      
            <script type="text/javascript">
            
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
           
            </script>


        
        <link href="css/buttons.css" rel="stylesheet" type="text/css" />
        <link href="css/background.css" rel="stylesheet" type="text/css" />



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
                                <!--<td style="background-color:#ccc; width:16px;"></td>-->
                                <td class="master-content-center" style="background-color:#fcf9fe; width:97%; height: 97%;">

                                    <script type="text/javascript">
                                        function ShowEditForm(id, agenda)
                                        {
                                            window.radopen("detail.aspx?AC71vty1D=" + id + "&agn=" + agenda, "AgendaVirtual");
                                            return false;
                                        }

                                        function ShowInsertForm(id, agenda)
                                        {
                                            window.radopen("maintenance.aspx?AC71vty1D=" + id + "&agn=" + agenda, "AgendaVirtual");
                                            return false;
                                        }

                                        function refreshGrid(arg)
                                        {
                                            if (!arg)
                                            {
                                                window["ctl00_cphMasterCenter_RadAjaxPanel1"].AjaxRequest('ctl00$cphMasterCenter$RadAjaxPanel1', 'Rebind');
                                            } else
                                            {
                                                window["ctl00_cphMasterCenter_RadAjaxPanel1"].AjaxRequest('ctl00$cphMasterCenter$RadAjaxPanel1', 'RebindAndNavigate');
                                            }


                                        }
                                    </script>

                                    <div style="text-align:right; padding-bottom:6px;">
                                        &nbsp;
                                        &nbsp;|&nbsp;
                                        <a onclick="print();
                return false;
                javascript:print;" id="ctl00_cphMasterCenter_btnActivityPrinter" href="javascript:__doPostBack('ctl00$cphMasterCenter$btnActivityPrinter','')">Imprimir</a>
                                    </div>
                                    <table style="width:100%;">
                                        <tr>

                                            <td style="vertical-align:top; " class="auto-style1">


                                                <table width="200px">

                                                    <h2>Fecha</h2>

                                                    <br/>
                                                    <input type="text" name="txt_fec_asu_vc" id="fecha1" placeholder="Seleccione"><br/>
                                                    <br/>

                                                </table>
                                                <p>
                                                    &nbsp;<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr><td>




                                                            <table class="admin-grid" cellspacing="0" rules="all" border="1" id="ctl00_cphMasterCenter_gvwSector" width="100%">

                                                                <tr>
                                                                <tr class="auto-style3" >Facultad</tr>
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
                                                            <button id="btnConsultar" type="submit"  value="Consultar" name="btnConsultar" >Consultar</button>
                                                        </td>
                                                    </tr>

                                                </table>
                                            </td></tr></table>
                                    </p>
                                </td>
                                <td>
                                    <div id="ctl00_cphMasterCenter_RadAjaxPanel1">
                                        <!-- 1.6.2 --><div><input type="hidden" name="ctl00_cphMasterCenter_RadAjaxPanel1PostDataValue" id="ctl00_cphMasterCenter_RadAjaxPanel1PostDataValue" value="" /></div>
                                        <script type="text/javascript" src="js/AJAX.js"></script><script type="text/javascript" src="js/AJAX_1.js"></script><script type="text/javascript">/*<![CDATA[*/window["ctl00_cphMasterCenter_RadAjaxPanel1"] = new RadAjaxPanelNamespace.RadAjaxPanel({ClientID: "ctl00_cphMasterCenter_RadAjaxPanel1", EnableOutsideScripts: false, EnablePageHeadUpdate: true, Url: "/avm/activity/agendaofi.aspx?agn=3", LoadingPanelID: "", ActiveElementID: "", ClientEvents: {OnRequestStart: "", OnRequestSent: "", OnResponseReceived: "", OnResponseEnd: ""}, FormID: "aspnetForm", UniqueID: "ctl00$cphMasterCenter$RadAjaxPanel1"});/*]]>*/</script>



                                        <table width="100%">
                                            <tr>
                                                <th width="40" align="center"><b>Hora</b></th>
                                                <th align="center"><b>Asunto</b></th>
                                                <th align="center"><b>Lugar</b></th>
                                            </tr>
                                        </table>
                                        <div>
                                            <table class="admin-grid" cellspacing="0" rules="all" border="1" id="ctl00_cphMasterCenter_gvMain" style="width:100%;border-collapse:collapse;">
                                                <tr id="ctl00_cphMasterCenter_gvMain_ctl02" class="row">
                                                    <td style="font-size:9pt;width:25px;">
                                                        &nbsp;</td><td>
                                                        &nbsp;</td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        </table> 
                        <table id="ctl00_cphMasterCenter_rwmActivity_wrapper" cellpadding="0" cellspacing="0" border="0" width="100%" style="position:absolute"><tr><td>
                                    <!-- 1.7.2 --><script type="text/javascript" src="js/AJAX_3.js"></script><span id="ctl00_cphMasterCenter_rwmActivityStyleSheetHolder" style="display:none;"></span><span id="ctl00_cphMasterCenter_rwmActivity" style="display:inline-block;width:0px;height:0px;"><span><input type="hidden" id="RadWindowManagerMinimizeTemplate" value="             
" /><span id='RadWSplashHolder' style='display:none;'></span><script type='text/javascript'>/*<![CDATA[*/
                                                window.RadWLoc = null;
                                                if (window.loc) {
                                                    RadWLoc = window.loc; }
                                                window.loc = localization_en_US = {};
                                                loc["Maximize"] = "Maximize";
                                                loc["Minimize"] = "Minimize";
                                                loc["Close"] = "Close";
                                                loc["Restore"] = "Restore";
                                                loc["PinOff"] = "Pin Off";
                                                loc["PinOn"] = "Pin On";
                                                loc["ConfirmMessage"] = "Are you sure?";
                                                loc["PromptMessage"] = "Enter value:";
                                                loc["Ok"] = "Ok";
                                                loc["Cancel"] = "Cancel";
                                                loc["Yes"] = "Yes";
                                                loc["No"] = "No";
                                                loc["Loading"] = "Loading...";
                                                loc["Reload"] = "Reload";
                                                loc["Alert"] = "r.a.d.window alert";
                                                loc["Prompt"] = "r.a.d.window prompt";
                                                loc["Confirm"] = "r.a.d.window confirm";
                                                if (RadWLoc) {
                                                    window.loc = RadWLoc;
                                                }
                                                RadWindowManagerInitialize("ctl00_cphMasterCenter_rwmActivity", "http://apps.pcm.gob.pe/avm/", "http://apps.pcm.gob.pe/avm/_extras/rad/Window/Skins/eMail/", "en_US", false, "", false,
                                                        false, [['FocusNextWindow', 'CTRL+TAB'], ['MinimizeAll', 'CTRL+F2'], ['EscapeActiveWindow', 'ESC']], "", "", "", "", "", "", "", "",
                                                        "", "", "", 0, 68, 1, true, true, true, false, "",
                                                        "", false, true, true, true, true);

                                                /*]]>*/</script></span><script type='text/javascript'>/*<![CDATA[*/
                                                    RadWindowInitialize("ctl00_cphMasterCenter_rwmActivity_AgendaVirtual", "AgendaVirtual", "radWindow_ctl00_cphMasterCenter_rwmActivity_AgendaVirtual", false, "", "", "", "", "", "", "400px", "450px",
                                                            "", "", "Agenda Virtual", "", 0, 68, 1, true, null, null, null, "", "", null, true, true, "");

                                                    /*]]>*/</script></span>
                                </td></tr></table>

                    </td>
                    <!--<td style="background-color:#ccc; width:16px;"></td>-->
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
                Copyright &copy; 2007 PCM - Todos los derechos reservados.
                <br />
                <strong>PRESIDENCIA DEL CONSEJO DE MINISTROS</strong>
            </div--></td>
    </tr>
</table>



<h1>
<?php
echo ( $_SESSION['log_usr_vc']);
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

<!-- Mirrored from apps.pcm.gob.pe/avm/activity/agendaofi.aspx?agn=3 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jan 2016 03:56:24 GMT -->
</html>








