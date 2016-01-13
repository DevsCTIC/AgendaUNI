<?php
session_start();
?>



<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>¡Encontrar mi película favorita!</title>
        
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/calendario.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/calendario.js"></script>
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
                width: 533px;
            }
        </style>
        </head>
    <body>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" >

<!-- Mirrored from apps.pcm.gob.pe/avm/activity/agendaofi.aspx?agn=3 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jan 2016 03:56:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head id="ctl00_Head1"><title>
    .: Cronograma de Actividades UNI
</title><link href="css/default.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="flash/flash.js"></script>

    <meta name="author" content="Miguel Angel Reyna Huancas | Development - www.mreyna.com - www.legolasystem.com" /><meta name="copyright" content="© 2007-2010 MPP / CAEM" /><meta name="date" content="05 Julio 2007 10:18:26 GMT" /><meta name="description" /><meta name="keywords" /><link type="text/css" rel="stylesheet" href="css/Css_extra.css" /><link type="text/css" rel="stylesheet" href="css/styles.css" /><link type="text/css" rel="stylesheet" href="css/Calendar.css" /><link type="text/css" rel="stylesheet" href="css/Window.css" /></head>
<body>
    
    <form name="aspnetForm" method="post" action="asunto_insertar.php" id="aspnetForm" style="width:780px;">
        <input type="hidden" id="RadWindowManagerPromptTemplate" value="    
            %3cscript%3e
                function OkClicked%28%29
                %7b
                    var oArg %3d document.getElementById%28%22TextBox%22%29.value%3b                    
                    GetRadWindow%28%29.ModalDialogCallBack%28oArg%29%3b
                %7d
            %3c/script%3e   
            %3cstyle%3e
            body
            %7b
                font%3a normal 11px Arial%2c Verdana%2c Sans-serif%3b
                overflow%3a hidden%3b
                background%3a white url%28Img/modalDlgBg.gif%29%3b      
            %7d
            .Button
            %7b
                font%3a bold 11px Arial%2c Verdana%2c Sans-serif%3b
                background%3a %23fcfcfb url%28%7b2%7dImg/modalBtnBg.gif%29 no-repeat%3b
                border%3a none%3b
                width%3a 67px%3b
                height%3a 18px%3b
                margin%3a 2px%3b
            %7d
            .FixedDiv
            %7b
                margin%3a 3px%3b
                color%3a black%3b
                text-align%3a center%3b
                margin-top%3a 20px%3b
            %7d
            .promptTxtBox
            %7b
                font%3a bold 11px Arial%2c Verdana%2c Sans-serif%3b
                margin-top%3a 5px%3b
                padding-top%3a 6px%3b
                padding-left%3a 3px%3b
                width%3a 193px%3b
                height%3a 26px%3b
                border%3a none%3b
                background%3a url%28%7b2%7dImg/modalDlgTxtBoxBg.gif%29 no-repeat%3b
                _background-attachment%3a fixed%3b
            %7d
            %3c/style%3e
            %3cdiv class%3d%27FixedDiv%27%3e
                %7b6%7d
                %3cinput type%3d%27textbox%27 style%3d%27width%3a200px%27 id%3d%27TextBox%27 class%3d%22promptTxtBox%22%3e
            %3c/div%3e
            %3cbr%3e
            %3ccenter%3e
                %3cbutton class%3d%22Button%22 onclick%3d%22OkClicked%28%29%22%3b%3e
                    %3cscript%3e
                        document.write%28GetRadWindow%28%29.GetLocalizedString%28%22Ok%22%29%29%3b
                    %3c/script%3e
                %3c/button%3e
                %3cbutton class%3d%22Button%22 onclick%3d%22GetRadWindow%28%29.Close%28%29%22%3b%3e
                    %3cscript%3e
                        document.write%28GetRadWindow%28%29.GetLocalizedString%28%22Cancel%22%29%29%3b
                    %3c/script%3e
                %3c/button%3e
            %3c/center%3e       
            %3cembed src%3d%22%7b2%7dImg/alert.wav%22 height%3d%220%22 width%3d%220%22 style%3d%22display%3a none%3b%22%3e%3c/embed%3e              
        " /><input type="hidden" id="RadWindowManagerConfirmTemplate" value="               
            %3cstyle%3e
            body
            %7b
                font%3a normal 11px Arial%2c Verdana%2c Sans-serif%3b           
                overflow%3a hidden%3b
                background%3a white url%28Img/modalDlgBg.gif%29%3b  
            %7d
            .Button
            %7b
                background%3a url%28%7b2%7dImg/modalBtnBg.gif%29 no-repeat%3b
                border%3a none%3b
                width%3a 67px%3b
                height%3a 18px%3b
                margin%3a 2px%3b
                font%3a bold 11px Arial%2c Verdana%2c Sans-serif%3b         
            %7d
            .FixedDiv
            %7b
                margin%3a 3px%3b            
                color%3a black%3b
                text-align%3a center%3b
                margin-top%3a 20px%3b
            %7d     
            %3c/style%3e
            %3cbr /%3e%3cbr /%3e
            %3cdiv class%3d%27FixedDiv%27%3e
                %3cimg align%3d%27absmiddle%27 style%3d%27vertical-align%3amiddle%3bborder%3a0%27 src%3d%27%7b2%7dImg/confirmIcon.gif%27 alt%3d%27%27 /%3e 
                %7b6%7d
            %3c/div%3e
            %3cbr /%3e%3cbr /%3e
            %3ccenter%3e
                %3cbutton class%3d%22Button%22 onclick%3d%22GetRadWindow%28%29.ModalDialogCallBack%28true%29%3b%22%3e
                    %3cscript%3e
                        document.write%28GetRadWindow%28%29.GetLocalizedString%28%22Yes%22%29%29%3b
                    %3c/script%3e
                %3c/button%3e
                %3cbutton class%3d%22Button%22 onclick%3d%22GetRadWindow%28%29.ModalDialogCallBack%28false%29%3b%22%3e
                    %3cscript%3e
                        document.write%28GetRadWindow%28%29.GetLocalizedString%28%22No%22%29%29%3b
                    %3c/script%3e
                %3c/button%3e
            %3c/center%3e
            %3cembed src%3d%22%7b2%7dImg/alert.wav%22 height%3d%220%22 width%3d%220%22 style%3d%22display%3a none%3b%22%3e%3c/embed%3e      
        " /><input type="hidden" id="RadWindowManagerAlertTemplate" value="
        %3cstyle%3e
        body
        %7b
            font%3a normal 11px Arial%2c Verdana%2c Sans-serif%3b
            overflow%3a hidden%3b
            background%3a white url%28Img/modalDlgBg.gif%29%3b  
        %7d
        .Button
        %7b
            background%3a url%28%7b2%7dImg/modalBtnBg.gif%29 no-repeat%3b
            border%3a none%3b
            width%3a 67px%3b
            height%3a 18px%3b
            font%3a bold 11px Arial%2c Verdana%2c Sans-serif%3b
            margin%3a 2px%3b
        %7d
        .FixedDiv
        %7b
            margin%3a 3px%3b
            color%3a black%3b
            text-align%3a center%3b
            margin-top%3a 20px%3b
        %7d                                             
        %3c/style%3e
            %3cbr /%3e%3cbr /%3e                    
            %3cdiv class%3d%27FixedDiv%27%3e
                %3cimg align%3d%27absmiddle%27 style%3d%27vertical-align%3amiddle%3bborder%3a0%27 src%3d%27%7b2%7dImg/AlertIcon.gif%27 alt%3d%27%27 /%3e 
                %7b6%7d
            %3c/div%3e
            %3cbr /%3e%3cbr /%3e
            %3ccenter%3e
                %3cbutton class%3d%22Button%22 onclick%3d%22GetRadWindow%28%29.Close%28%29%3b%22%3e                 
                    %3cscript%3e
                        document.write%28GetRadWindow%28%29.GetLocalizedString%28%22Ok%22%29%29%3b
                    %3c/script%3e           
                %3c/button%3e
            %3c/center%3e
            %3cembed src%3d%22%7b2%7d/Img/alert.wav%22 height%3d%220%22 width%3d%220%22 style%3d%22display%3a none%3b%22%3e%3c/embed%3e
            
        " /><input type="hidden" id="RadWindowManagerMinimizeTemplate" value="             
            %3ctable border%3d%270%27 style%3d%27display%3ainline%27 id%3d%27RadWMinimized%7b0%7d%27 class%3d%27RadWMinimizedActive%27 cellspacing%3d%270%27 cellpadding%3d%270%27%3e
            %3ctr class%3d%27RadWTitleRow%27%3e
                %3ctd%3e
                    %3cimg class%3d%27RadWIcon%27 src%3d%27%7b3%7d%27 align%3d%27absmiddle%27 border%3d%270%27%3e
                %3c/td%3e
                %3ctd style%3d%27vertical-align%3amiddle%3b%27 nowrap%3e%3cdiv style%3d%27padding%3a1px%3bwidth%3a40px%3boverflow%3ahidden%27 
                %3e%3cspan id%3d%27RadWMinimizedTitle%7b0%7d%27 onselectstart%3d%27return false%3b%27 class%3d%27RadWTitleText%27%3e%7b4%7d%3c/span%3e%3c/div%3e%3c/td%3e                       
                %3ctd nowrap%3e
                    %3cimg  class%3d%27RadWButton%27 style%3d%27vertical-align%3amiddle%3bborder%3a0%27 src%3d%27%7b2%7dImg/Restore.gif%27 id%3d%27RadWMinimizedRestore%7b0%7d%27 onclick%3d%27%7b1%7d.Restore%28%29%27 /%3e
                %3c/td%3e   
                %3ctd nowrap%3e
                    %3cimg class%3d%27RadWButton%27 style%3d%27vertical-align%3amiddle%3bborder%3a0%27 src%3d%27%7b2%7dImg/Close.gif%27 id%3d%27RadWMinimizedClose%7b0%7d%27 onclick%3d%27%7b1%7d.Close%28%29%27/%3e
                %3c/td%3e
            %3c/tr%3e
            %3c/table%3e    
        " /><input type="hidden" name="ctl00_cphMasterCenter_rcCalendar_AD" id="ctl00_cphMasterCenter_rcCalendar_AD" value="[[1980,1,1],[2099,12,30],[2016,1,5]]" /><input type="hidden" name="ctl00_cphMasterCenter_rcCalendar_SD" id="ctl00_cphMasterCenter_rcCalendar_SD" value="[[2016,1,5]]" /><input type="hidden" name="ctl00_cphMasterCenter_RadAjaxPanel1PostDataValue" id="ctl00_cphMasterCenter_RadAjaxPanel1PostDataValue" value="" />
        <input type="hidden" id="ctl00_mnLogin_Hidden" name="ctl00$mnLogin" />
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJNjE4ODk1MTI3D2QWAmYPZBYCAgMPZBYGAgMPDxYCHgRUZXh0BWU8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+ZW1iZWRGbGFzaCgiLi4vdGhlbWVzL2RlZmF1bHQvc3dmL2hlYWRlci5zd2YiLCAiODAwIiwgIjE2NSIpOzwvc2NyaXB0PmRkAgkPFCsAA2QUKwAGFCsAAmRkFCsAAmRkFCsAAmQUKwADFCsAAmRkFCsAAmRkFCsAAmRkFCsAAg8WAh4HVmlzaWJsZWhkZBQrAAIPFgIfAWhkZBQrAAJkZGQWBAIDDw8WAh8BaGRkAgQPDxYCHwFoZGQCDQ9kFg5mDw8WAh8BaBYCHgdvbkNsaWNrBTJqYXZhc2NyaXB0OlNob3dJbnNlcnRGb3JtKCctMScsJzMnKTsgcmV0dXJuIGZhbHNlO2QCAQ8PZBYCHwIFEWphdmFzY3JpcHQ6cHJpbnQ7ZAICDxQrAAwPFhIFCUN1bHR1cmVJRAKKUAUVTmF2aWdhdGlvbkNlbGxTcGFjaW5nAgEFDVNlbGVjdGVkRGF0ZXMPBYkBVGVsZXJpay5XZWJDb250cm9scy5CYXNlLkNhbGVuZGFyLkNvbGxlY3Rpb25zLkRhdGVUaW1lQ29sbGVjdGlvbiwgUmFkQ2FsZW5kYXIuTmV0MiwgVmVyc2lvbj0yLjAuMi4wLCBDdWx0dXJlPW5ldXRyYWwsIFB1YmxpY0tleVRva2VuPW51bGwUKwABBgBIdBCNFdOIBRFFbmFibGVNdWx0aVNlbGVjdGgFDUN1bHR1cmVJbmZvSUQoKW1TeXN0ZW0uR2xvYmFsaXphdGlvbi5DdWx0dXJlSW5mbywgbXNjb3JsaWIsIFZlcnNpb249Mi4wLjAuMCwgQ3VsdHVyZT1uZXV0cmFsLCBQdWJsaWNLZXlUb2tlbj1iNzdhNWM1NjE5MzRlMDg5DlNwYW5pc2ggKFBlcnUpBQ1EYXlOYW1lRm9ybWF0CyonU3lzdGVtLldlYi5VSS5XZWJDb250cm9scy5EYXlOYW1lRm9ybWF0AwUNQ3VsdHVyZU5hbWVJRAUFZXMtUEUFC1NwZWNpYWxEYXlzDwWMAVRlbGVyaWsuV2ViQ29udHJvbHMuQmFzZS5DYWxlbmRhci5Db2xsZWN0aW9ucy5DYWxlbmRhckRheUNvbGxlY3Rpb24sIFJhZENhbGVuZGFyLk5ldDIsIFZlcnNpb249Mi4wLjIuMCwgQ3VsdHVyZT1uZXV0cmFsLCBQdWJsaWNLZXlUb2tlbj1udWxsFCsAAAUMQXV0b1Bvc3RCYWNrZ2QWBB4IQ3NzQ2xhc3MFFXJhZENhbERlZmF1bHRfV2ViQmx1ZR4EXyFTQgICFgQfAwUTVGFibGVMYXlvdXRfV2ViQmx1ZR8EAgIWBB8DBRJvdGhlck1vbnRoX1dlYkJsdWUfBAICFgQfAwUQdGl0bGViYXJfV2ViQmx1ZR8EAgIWBB8DBRRyYWRDYWxTZWxlY3RfV2ViQmx1ZR8EAgIWBB8DBRJEYXlzT2ZXZWVrX1dlYkJsdWUfBAICFgQfAwUVcmFkQ2FsRGlzYWJsZV9XZWJCbHVlHwQCAhYEHwMFEm91dE9mUmFuZ2VfV2ViQmx1ZR8EAgIWBB8DBRxyYWRDYWxXZWVrZW5kRGVmYXVsdF9XZWJCbHVlHwQCAhYEHwMFE3JhZENhbEhvdmVyX1dlYkJsdWUfBAICFgQfAwUYTW9udGhZZWFyRmFzdE5hdl9XZWJCbHVlHwQCAmQCAw88KwANAGQCBA88KwANAGQCBQ88KwANAQAPFgQeC18hRGF0YUJvdW5kZx4LXyFJdGVtQ291bnQCDGQWAmYPZBYcZg8PFgIfAWhkFgJmDw8WAh8BaGRkAgEPD2QWAh4Fc3R5bGUFD2N1cnNvcjpwb2ludGVyOxYEZg8PFgQfAAUCNTEfAWhkZAIBD2QWAgIBDw8WAh8ABQZERVZJREFkZAICDw9kFgIfBwUPY3Vyc29yOnBvaW50ZXI7FgRmDw8WBB8ABQI1Mh8BaGRkAgEPZBYCAgEPDxYCHwAFBERJTklkZAIDDw9kFgIfBwUPY3Vyc29yOnBvaW50ZXI7FgRmDw8WBB8ABQI1Mx8BaGRkAgEPZBYCAgEPDxYCHwAFBklOREVDSWRkAgQPD2QWAh8HBQ9jdXJzb3I6cG9pbnRlcjsWBGYPDxYEHwAFAjU0HwFoZGQCAQ9kFgICAQ8PFgIfAAUISU5ERUNPUElkZAIFDw9kFgIfBwUPY3Vyc29yOnBvaW50ZXI7FgRmDw8WBB8ABQI1NR8BaGRkAgEPZBYCAgEPDxYCHwAFBElORUlkZAIGDw9kFgIfBwUPY3Vyc29yOnBvaW50ZXI7FgRmDw8WBB8ABQI1Nh8BaGRkAgEPZBYCAgEPDxYCHwAFBElSVFBkZAIHDw9kFgIfBwUPY3Vyc29yOnBvaW50ZXI7FgRmDw8WBB8ABQI1Nx8BaGRkAgEPZBYCAgEPDxYCHwAFBUNHQlZQZGQCCA8PZBYCHwcFD2N1cnNvcjpwb2ludGVyOxYEZg8PFgQfAAUCNTgfAWhkZAIBD2QWAgIBDw8WAh8ABRJTSUVSUkEgRVhQT1JUQURPUkFkZAIJDw9kFgIfBwUPY3Vyc29yOnBvaW50ZXI7FgRmDw8WBB8ABQI1OR8BaGRkAgEPZBYCAgEPDxYCHwAFB09TSU5GT1JkZAIKDw9kFgIfBwUPY3Vyc29yOnBvaW50ZXI7FgRmDw8WBB8ABQI2MB8BaGRkAgEPZBYCAgEPDxYCHwAFBlNFUlZJUmRkAgsPD2QWAh8HBQ9jdXJzb3I6cG9pbnRlcjsWBGYPDxYEHwAFAjYxHwFoZGQCAQ9kFgICAQ8PFgIfAAUGQ0VQTEFOZGQCDA8PZBYCHwcFD2N1cnNvcjpwb2ludGVyOxYEZg8PFgQfAAUCODIfAWhkZAIBD2QWAgIBDw8WAh8ABQZJTkRFUEFkZAINDw8WAh8BaGQWAmYPDxYCHwFoZGQCBg9kFgICAQ88KwANAQAPFgYeClNob3dIZWFkZXJoHwVnHwYCJGQWAmYPZBZMZg8PFgIfAWhkZAIBD2QWBGYPZBYCAgEPDxYCHwAFBTA2OjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwMl9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwMi5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDIuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwMi5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMDIkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwMiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDAyX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDAyLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwMi5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDAyLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAICD2QWBGYPZBYCAgEPDxYCHwAFBTA2OjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwM19ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwMy5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDMuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwMy5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMDMkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwMyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDAzX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDAzLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwMy5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDAzLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIDD2QWBGYPZBYCAgEPDxYCHwAFBTA3OjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNF9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNC5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDQuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMDQkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA0X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA0LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNC5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA0LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIED2QWBGYPZBYCAgEPDxYCHwAFBTA3OjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNV9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNS5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDUuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMDUkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA1X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA1LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA1LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIFD2QWBGYPZBYCAgEPDxYCHwAFBTA4OjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDYgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNl9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNi5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDYuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNi5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMDYkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA2X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA2LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNi5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA2LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIGD2QWBGYPZBYCAgEPDxYCHwAFBTA4OjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDcgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwN19ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNy5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDcuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNy5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMDckYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA3X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA3LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwNy5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA3LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIHD2QWBGYPZBYCAgEPDxYCHwAFBTA5OjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwOF9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwOC5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDguc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwOC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMDgkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwOCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA4X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA4LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwOC5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA4LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIID2QWBGYPZBYCAgEPDxYCHwAFBTA5OjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDkgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwOV9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwOS5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMDkuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwOS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMDkkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwOSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA5X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA5LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwwOS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDA5LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIJD2QWBGYPZBYCAgEPDxYCHwAFBTEwOjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTAgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMF9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMC5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTAuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTAkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDEwX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDEwLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMC5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDEwLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIKD2QWBGYPZBYCAgEPDxYCHwAFBTEwOjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTEgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMV9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMS5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTEuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTEkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDExX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDExLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDExLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAILD2QWBGYPZBYCAgEPDxYCHwAFBTExOjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMl9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMi5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTIuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMi5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTIkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDEyX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDEyLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMi5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDEyLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIMD2QWBGYPZBYCAgEPDxYCHwAFBTExOjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxM19ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMy5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTMuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMy5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTMkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDEzX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDEzLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxMy5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDEzLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIND2QWBGYPZBYCAgEPDxYCHwAFBTEyOjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNF9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNC5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTQuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTQkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE0X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE0LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNC5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE0LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIOD2QWBGYPZBYCAgEPDxYCHwAFBTEyOjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNV9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNS5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTUuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTUkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE1X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE1LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE1LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIPD2QWBGYPZBYCAgEPDxYCHwAFBTEzOjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTYgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNl9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNi5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTYuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNi5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTYkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE2X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE2LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNi5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE2LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIQD2QWBGYPZBYCAgEPDxYCHwAFBTEzOjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTcgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxN19ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNy5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTcuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNy5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTckYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE3X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE3LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxNy5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE3LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIRD2QWBGYPZBYCAgEPDxYCHwAFBTE0OjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxOF9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxOC5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTguc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxOC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTgkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxOCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE4X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE4LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxOC5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE4LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAISD2QWBGYPZBYCAgEPDxYCHwAFBTE0OjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTkgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxOV9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxOS5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMTkuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxOS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTkkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxOSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE5X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE5LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwxOS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDE5LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAITD2QWBGYPZBYCAgEPDxYCHwAFBTE1OjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjAgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMF9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMC5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjAuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjAkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDIwX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDIwLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMC5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDIwLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIUD2QWBGYPZBYCAgEPDxYCHwAFBTE1OjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjEgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMV9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMS5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjEuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjEkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDIxX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDIxLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDIxLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIVD2QWBGYPZBYCAgEPDxYCHwAFBTE2OjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMl9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMi5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjIuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMi5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjIkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDIyX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDIyLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMi5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDIyLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIWD2QWBGYPZBYCAgEPDxYCHwAFBTE2OjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyM19ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMy5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjMuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMy5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjMkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDIzX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDIzLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyMy5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDIzLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIXD2QWBGYPZBYCAgEPDxYCHwAFBTE3OjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNF9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNC5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjQuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjQkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI0X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI0LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNC5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI0LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIYD2QWBGYPZBYCAgEPDxYCHwAFBTE3OjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNV9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNS5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjUuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjUkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI1X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI1LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI1LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIZD2QWBGYPZBYCAgEPDxYCHwAFBTE4OjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjYgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNl9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNi5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjYuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNi5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjYkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI2X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI2LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNi5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI2LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIaD2QWBGYPZBYCAgEPDxYCHwAFBTE4OjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjcgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyN19ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNy5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjcuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNy5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjckYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI3X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI3LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyNy5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI3LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIbD2QWBGYPZBYCAgEPDxYCHwAFBTE5OjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyOF9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyOC5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjguc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyOC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjgkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyOCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI4X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI4LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyOC5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI4LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIcD2QWBGYPZBYCAgEPDxYCHwAFBTE5OjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjkgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyOV9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyOS5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMjkuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyOS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjkkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyOSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI5X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI5LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwyOS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDI5LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIdD2QWBGYPZBYCAgEPDxYCHwAFBTIwOjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzAgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMF9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMC5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzAuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzAkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDMwX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDMwLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMC5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDMwLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIeD2QWBGYPZBYCAgEPDxYCHwAFBTIwOjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzEgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMV9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMS5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzEuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzEkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDMxX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDMxLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDMxLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIfD2QWBGYPZBYCAgEPDxYCHwAFBTIxOjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMl9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMi5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzIuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMi5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzIkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDMyX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDMyLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMi5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDMyLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIgD2QWBGYPZBYCAgEPDxYCHwAFBTIxOjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzM19ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMy5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzMuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMy5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzMkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDMzX2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDMzLnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzMy5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDMzLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIhD2QWBGYPZBYCAgEPDxYCHwAFBTIyOjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNF9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNC5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzQuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzQkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDM0X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDM0LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNC5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDM0LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIiD2QWBGYPZBYCAgEPDxYCHwAFBTIyOjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNV9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNS5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzUuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzUkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDM1X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDM1LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDM1LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIjD2QWBGYPZBYCAgEPDxYCHwAFBTIzOjAwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzYgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNl9ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNi5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzYuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNi5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzYkYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDM2X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDM2LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNi5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDM2LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIkD2QWBGYPZBYCAgEPDxYCHwAFBTIzOjMwZGQCAQ9kFggCAQ88KwANAQAPFgQfBWcfBmZkZAIDDw8WAh8BaBYCHwIFkwRqYXZhc2NyaXB0Ogp2YXIgX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzcgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzN19ndndBY3Rpdml0aWVzJyk7CmlmIChfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNy5zdHlsZS5kaXNwbGF5ID09ICdub25lJykgewogX19feHl6NEN0aVYxN2llc2N0bDAwX2NwaE1hc3RlckNlbnRlcl9ndk1haW5fY3RsMzcuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7Cn0gZWxzZSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNy5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnOwp9CnJldHVybiBmYWxzZTtBamF4TlMuQVIoJ2N0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzckYnRuQWN0aXZpdGllcycsICcnLCAnY3RsMDBfY3BoTWFzdGVyQ2VudGVyX1JhZEFqYXhQYW5lbDEnLCBldmVudCk7IHJldHVybiBmYWxzZTtkAgUPDxYCHwFoFgIfAgWVA2phdmFzY3JpcHQ6CnZhciBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDM3X2d2d0FjdGl2aXRpZXMnKTsKaWYgKF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDM3LnN0eWxlLmRpc3BsYXkgPT0gJ25vbmUnKSB7CiBfX194eXo0Q3RpVjE3aWVzY3RsMDBfY3BoTWFzdGVyQ2VudGVyX2d2TWFpbl9jdGwzNy5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsKfSBlbHNlIHsKIF9fX3h5ejRDdGlWMTdpZXNjdGwwMF9jcGhNYXN0ZXJDZW50ZXJfZ3ZNYWluX2N0bDM3LnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7Cn0KcmV0dXJuIGZhbHNlO2QCBw88KwANAQAPFgQfBWcfBmYWAh8HBQ1kaXNwbGF5Om5vbmU7ZAIlDw8WAh8BaGRkGE0FMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjIkZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkBTJjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDAzJGdyd0dyaWRBY3Rpdml0eQ88KwAKAQhmZAUwY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwzMSRndndBY3Rpdml0aWVzDzwrAAoBCGZkBTBjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDI4JGd2d0FjdGl2aXRpZXMPPCsACgEIZmQFMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTAkZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkBTBjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDAyJGd2d0FjdGl2aXRpZXMPPCsACgEIZmQFMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTYkZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkBR9jdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3Z3U2VjdG9yDzwrAAoCA2YIAgFkBTBjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDEzJGd2d0FjdGl2aXRpZXMPPCsACgEIZmQFMGN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzMkZ3Z3QWN0aXZpdGllcw88KwAKAQhmZAUwY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwyNyRndndBY3Rpdml0aWVzDzwrAAoBCGZkBTBjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDIyJGd2d0FjdGl2aXRpZXMPPCsACgEIZmQFMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjUkZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkBTBjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDE1JGd2d0FjdGl2aXRpZXMPPCsACgEIZmQFMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzYkZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkBTJjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDIxJGdyd0dyaWRBY3Rpdml0eQ88KwAKAQhmZAUyY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwzMCRncndHcmlkQWN0aXZpdHkPPCsACgEIZmQFMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMDgkZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkBTJjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDI2JGdyd0dyaWRBY3Rpdml0eQ88KwAKAQhmZAUyY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwzNyRncndHcmlkQWN0aXZpdHkPPCsACgEIZmQFMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjAkZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkBTJjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDI5JGdyd0dyaWRBY3Rpdml0eQ88KwAKAQhmZAUwY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwwNCRndndBY3Rpdml0aWVzDzwrAAoBCGZkBTBjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDM2JGd2d0FjdGl2aXRpZXMPPCsACgEIZmQFMGN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzAkZ3Z3QWN0aXZpdGllcw88KwAKAQhmZAUwY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwwNSRndndBY3Rpdml0aWVzDzwrAAoBCGZkBTJjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDIzJGdyd0dyaWRBY3Rpdml0eQ88KwAKAQhmZAUwY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwyNCRndndBY3Rpdml0aWVzDzwrAAoBCGZkBTJjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDE1JGdyd0dyaWRBY3Rpdml0eQ88KwAKAQhmZAUwY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwwOCRndndBY3Rpdml0aWVzDzwrAAoBCGZkBTJjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDM1JGdyd0dyaWRBY3Rpdml0eQ88KwAKAQhmZAUyY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwxMiRncndHcmlkQWN0aXZpdHkPPCsACgEIZmQFMGN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTIkZ3Z3QWN0aXZpdGllcw88KwAKAQhmZAUyY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwzMiRncndHcmlkQWN0aXZpdHkPPCsACgEIZmQFMGN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzIkZ3Z3QWN0aXZpdGllcw88KwAKAQhmZAUyY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwxMSRncndHcmlkQWN0aXZpdHkPPCsACgEIZmQFMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzQkZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkBTBjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDE0JGd2d0FjdGl2aXRpZXMPPCsACgEIZmQFMGN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjUkZ3Z3QWN0aXZpdGllcw88KwAKAQhmZAUwY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwxOSRndndBY3Rpdml0aWVzDzwrAAoBCGZkBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WBQUjY3RsMDAkY3BoTWFzdGVyQ2VudGVyJFJhZEFqYXhQYW5lbDEFE2N0bDAwJGxzTG9naW4kY3RsMDEFE2N0bDAwJGxzTG9naW4kY3RsMDMFDWN0bDAwJG1uTG9naW4FIGN0bDAwJGNwaE1hc3RlckNlbnRlciRyY0NhbGVuZGFyBTJjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDE0JGdyd0dyaWRBY3Rpdml0eQ88KwAKAQhmZAUwY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwwNyRndndBY3Rpdml0aWVzDzwrAAoBCGZkBTJjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDA1JGdyd0dyaWRBY3Rpdml0eQ88KwAKAQhmZAUwY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwxNiRndndBY3Rpdml0aWVzDzwrAAoBCGZkBTJjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDEzJGdyd0dyaWRBY3Rpdml0eQ88KwAKAQhmZAUyY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwyOCRncndHcmlkQWN0aXZpdHkPPCsACgEIZmQFMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjckZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkBTBjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDExJGd2d0FjdGl2aXRpZXMPPCsACgEIZmQFMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMDIkZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkBTBjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDA2JGd2d0FjdGl2aXRpZXMPPCsACgEIZmQFMGN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTckZ3Z3QWN0aXZpdGllcw88KwAKAQhmZAUwY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwzNSRndndBY3Rpdml0aWVzDzwrAAoBCGZkBTBjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDEwJGd2d0FjdGl2aXRpZXMPPCsACgEIZmQFMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMDYkZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkBTJjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDA0JGdyd0dyaWRBY3Rpdml0eQ88KwAKAQhmZAUwY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwzNCRndndBY3Rpdml0aWVzDzwrAAoBCGZkBTBjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDE4JGd2d0FjdGl2aXRpZXMPPCsACgEIZmQFMGN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjAkZ3Z3QWN0aXZpdGllcw88KwAKAQhmZAUfY3RsMDAkY3BoTWFzdGVyQ2VudGVyJEdyaWRWaWV3MQ9nZAUwY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwzNyRndndBY3Rpdml0aWVzDzwrAAoBCGZkBTBjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDA5JGd2d0FjdGl2aXRpZXMPPCsACgEIZmQFMGN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjkkZ3Z3QWN0aXZpdGllcw88KwAKAQhmZAUyY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwwOSRncndHcmlkQWN0aXZpdHkPPCsACgEIZmQFMGN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMjMkZ3Z3QWN0aXZpdGllcw88KwAKAQhmZAUwY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwyMSRndndBY3Rpdml0aWVzDzwrAAoBCGZkBTJjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDMzJGdyd0dyaWRBY3Rpdml0eQ88KwAKAQhmZAUcY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbg88KwAKAQgCAWQFMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMTckZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkBTJjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDE4JGdyd0dyaWRBY3Rpdml0eQ88KwAKAQhmZAUyY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwyNCRncndHcmlkQWN0aXZpdHkPPCsACgEIZmQFMGN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMDMkZ3Z3QWN0aXZpdGllcw88KwAKAQhmZAUyY3RsMDAkY3BoTWFzdGVyQ2VudGVyJGd2TWFpbiRjdGwxOSRncndHcmlkQWN0aXZpdHkPPCsACgEIZmQFMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMDckZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkBR9jdGwwMCRjcGhNYXN0ZXJDZW50ZXIkR3JpZFZpZXcyD2dkBTBjdGwwMCRjcGhNYXN0ZXJDZW50ZXIkZ3ZNYWluJGN0bDI2JGd2d0FjdGl2aXRpZXMPPCsACgEIZmQFMmN0bDAwJGNwaE1hc3RlckNlbnRlciRndk1haW4kY3RsMzEkZ3J3R3JpZEFjdGl2aXR5DzwrAAoBCGZkzH138BXqm22Fi6nPSlfL6Hhqcis=" />

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


<script src="js/AJAX_4.js" type="text/javascript"></script>
<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWDwL777bcDgLZsL/nBwK0s5X0AgKW0u3XAwLh1a3YAwLs1OzUAwKv1sTWAwLy0/vUAwKt09PVAwKI097aAwLL1LbVAwKl+MTAAQLo+YTBAQKb87ugAQLm9vugAS7uQdZnnp97zZyrbg+4+w7UCoug" />
        
       <span id="ctl00_Labelheader"><script type="text/javascript">embedFlash("http://fotos.subefotos.com/3deff14d05a5bf81e655e57edf980803o.png", "780", "290");</script></span>
        <table cellpadding="0" cellspacing="0" border="0" class="master">
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
                        <tr>
                            <td style="background-color:#ccc; width:17px;"></td>
                            <td class="master-content-top">
                                <div style="background-color:#cccccc; text-align:right; padding:4px;">
                                    <a href="principal.php" class="button blue radius">
                                        <font class=" body"=body" size=2 color=#ecf0f1>
                                      Retornar
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
                    <table class="master-content-main" cellpadding="0" cellspacing="0" border="0" style="width:100%; height: 400px;">
                        <tr>
                            <td class="master-content-left">
                                

                            </td>
                            <td style="background-color:#ccc; width:16px;"></td>
                            <td class="master-content-center" style="background-color:#fff;">
                                
   <script type="text/javascript">
       function ShowEditForm(id, agenda) {
           window.radopen("detail.aspx?AC71vty1D=" + id + "&agn=" + agenda, "AgendaVirtual");
           return false;
       }

       function ShowInsertForm(id, agenda) {
           window.radopen("maintenance.aspx?AC71vty1D=" + id + "&agn=" + agenda, "AgendaVirtual");
           return false;
       }

       function refreshGrid(arg) {
           if (!arg) {
               window["ctl00_cphMasterCenter_RadAjaxPanel1"].AjaxRequest('ctl00$cphMasterCenter$RadAjaxPanel1', 'Rebind');
           }
           else {
               window["ctl00_cphMasterCenter_RadAjaxPanel1"].AjaxRequest('ctl00$cphMasterCenter$RadAjaxPanel1', 'RebindAndNavigate');
           }


       }
    </script>
    
    <div style="text-align:right; padding-bottom:6px;">
        &nbsp;
        &nbsp;|&nbsp;
        <a onclick="print(); return false;javascript:print;" id="ctl00_cphMasterCenter_btnActivityPrinter" href="javascript:__doPostBack('ctl00$cphMasterCenter$btnActivityPrinter','')">Imprimir</a>
    </div>
    
                 <form id="frm_cliente_insertar" name="frm_cliente_insertar" action="asunto_insertar.php" method="post" onsubmit="return valida_formulario();">
        <table align="center" style="width: 361px">
            <tr>
                <td bgcolor="#E0E0E0" class="auto-style2">Asunto: </td>
                <td class="auto-style1">
                    <input id="txt_nom_asu_vc" type="text" name="txt_nom_asu_vc" />
                </td>
            </tr>
            <tr>
                <td class="auto-style3" bgcolor="#E0E0E0">Lugar</td>
                <td class="auto-style1">
                    <input id="txt_lug_asu_vc" type="text" name="txt_lug_asu_vc" />
                </td>
            </tr>
            <tr>
                <td class="auto-style3" bgcolor="#E0E0E0">Hora Inicio</td>
                <td class="auto-style1">
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
                <td class="auto-style1">
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
                <td class="auto-style3" bgcolor="#E0E0E0">Fecha</td>
               
                   </td>





              <td>
			
				
				<input type="text" name="txt_fec_asu_vc" id="fecha1" placeholder="Seleccione"><br/>
				
		</td>
	
      





            </tr>
            <tr>
                <td class="auto-style3" bgcolor="#E0E0E0">Facultad </td>
                <td class="auto-style1">


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
                <td colspan="2" class="td_cli_btn_env">
                    <input id="btnGrabar" type="submit" value="Añadir" name="btnGrabar" />
                </td>
            </tr>
        </table>
    </form>
    </form>                 
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
                        Copyright &copy; 2007 PCM - Todos los derechos reservados.
                        <br />
                        <strong>PRESIDENCIA DEL CONSEJO DE MINISTROS</strong>
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

<!-- Mirrored from apps.pcm.gob.pe/avm/activity/agendaofi.aspx?agn=3 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jan 2016 03:56:24 GMT -->
</html>





















