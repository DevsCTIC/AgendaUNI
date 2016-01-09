

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <style type="text/css">
            .auto-style1 {
                height: 30px;
            }
            .auto-style2 {
                height: 30px;
                width: 167px;
            }
            .auto-style3 {
                width: 167px;
            }
            #Select1 {
                width: 123px;
            }
            #cbo_cod_hra_ini_asu_in {
                width: 125px;
            }
            #cbo_cod_hra_fin_asu_in {
                width: 124px;
            }
            #btnGrabar {
                width: 298px;
            }
        </style>

       <body>


           
           <form id="frm_cliente_" name="frm_cliente_actualizar" action="actualizacion01.php" method="post" onsubmit="return valida_formulario();">
        <table>
            <tr>
                <td class="auto-style3" bgcolor="#E0E0E0">Codigo</td>
                <td>
                    <select id="cbo_cod_asu_in" name="cbo_cod_asu_in">
                        <option value="1"> 1 </option>
                        <option value="1">1</option>
                         </select>
                </td>
            </tr>
            <tr>
                <td bgcolor="#E0E0E0" class="auto-style2">Asunto: </td>
                <td class="auto-style1">
                    <input id="txt_nom_asu_vc" type="text" name="txt_nom_asu_vc" />
                </td>
            </tr>
            <tr>
                <td class="auto-style3" bgcolor="#E0E0E0">Lugar</td>
                <td>
                    <input id="txt_lug_asu_vc" type="text" name="txt_lug_asu_vc" />
                </td>
            </tr>
            <tr>
                <td class="auto-style3" bgcolor="#f0f0f0">Hora Inicio</td>
                <td>
                    <select id="cbo_cod_hra_ini_in" name="cbo_cod_hra_ini_in">
                        <option value="0"></option>
                        <option value="1">6:00 a.m.</option>
                        <option value="2">6:30 a.m.</option>
                        <option value="3">7:00 a.m.</option>
                        <option value="4">7:30 a.m.</option>
                        <option value="5">8:00 a.m.</option>
                        <option value="6">8:30 a.m.</option>
                        <option value="7">9:00 a.m.</option>
                        <option value="8">9:30 a.m.</option>
                        <option value="9">10:00 a.m.</option>
                        <option value="10">10:30 a.m.</option>
                        <option value="11">11:00 a.m.</option>
                        <option value="12">11:30 a.m.</option>
                        <option value="13">12:00 a.m.</option>
                        <option value="14">12:30 p.m.</option>
                        <option value="15">1:00 p.m.</option>
                         <option value="16">1:30 p.m.</option>
                         <option value="17">2:00 p.m.</option>
                         <option value="18">2:30 p.m.</option>
                         <option value="19">3:00 p.m.</option>
                         <option value="20">3:30 p.m.</option>
                         <option value="21">4:00 p.m.</option>
                         <option value="22">4:30 p.m.</option>
                         <option value="23">5:00 p.m.</option>
                         <option value="24">5:30 p.m.</option>
                         <option value="25">6:00 p.m.</option>
                         <option value="26">6:30 p.m.</option>
                         <option value="27">7:00 p.m.</option>
                         <option value="28">7:30 p.m.</option>
                         <option value="29">8:00 p.m.</option>
                         <option value="30">8:30 p.m.</option>
                         <option value="31">9:00 p.m.</option>
                         <option value="32">9:30 p.m.</option>
                         <option value="33">10:00 p.m.</option>
                         <option value="34">10:30 p.m.</option>
                         <option value="34">11:00 p.m.</option>

                    </select>
                </td>
            </tr>


            <tr>
                <td class="auto-style3" bgcolor="#E0E0E0">Hora Fin</td>
                <td>
                    <select id="cbo_cod_hra_fin_in" name="cbo_cod_hra_fin_in">
                        <option value="0"></option>
                        <option value="1">6:00 a.m.</option>
                        <option value="2">6:30 a.m.</option>
                        <option value="3">7:00 a.m.</option>
                        <option value="4">7:30 a.m.</option>
                        <option value="5">8:00 a.m.</option>
                        <option value="6">8:30 a.m.</option>
                        <option value="7">9:00 a.m.</option>
                        <option value="8">9:30 a.m.</option>
                        <option value="9">10:00 a.m.</option>
                        <option value="10">10:30 a.m.</option>
                        <option value="11">11:00 a.m.</option>
                        <option value="12">11:30 a.m.</option>
                        <option value="13">12:00 a.m.</option>
                        <option value="14">12:30 p.m.</option>
                        <option value="15">1:00 p.m.</option>
                         <option value="16">1:30 p.m.</option>
                         <option value="17">2:00 p.m.</option>
                         <option value="18">2:30 p.m.</option>
                         <option value="19">3:00 p.m.</option>
                         <option value="20">3:30 p.m.</option>
                         <option value="21">4:00 p.m.</option>
                         <option value="22">4:30 p.m.</option>
                         <option value="23">5:00 p.m.</option>
                         <option value="24">5:30 p.m.</option>
                         <option value="25">6:00 p.m.</option>
                         <option value="26">6:30 p.m.</option>
                         <option value="27">7:00 p.m.</option>
                         <option value="28">7:30 p.m.</option>
                         <option value="29">8:00 p.m.</option>
                         <option value="30">8:30 p.m.</option>
                         <option value="31">9:00 p.m.</option>
                         <option value="32">9:30 p.m.</option>
                         <option value="33">10:00 p.m.</option>
                         <option value="34">10:30 p.m.</option>
                         <option value="34">11:00 p.m.</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td class="auto-style3" bgcolor="#E0E0E0">Facultad</td>
                <td>


                    <select id="cbo_cod_fac_in" name="cbo_cod_fac_in">
                         <option  value="1">FAUA</option>
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
               
            </tr>
            <tr>
                <td colspan="2" class="td_cli_btn_env">
                    <input id="btnGrabar" type="submit" value="Actualizar" name="btnGrabar" />
                </td>
            </tr>
        </table>
    </form>
    </form>
                <!-- ***********************************************************-->

           <!-- ***********************************************************-->

                <!-- ***********************************************************-->
    </body>
</html>
