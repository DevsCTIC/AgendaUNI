
<!DOCTYPE html>
<html>
<head>
<title>leonelrojas18</title>
</head>
<link rel="stylesheet" type="text/css" href="http://leonelrojas18.xtrweb.com/css/leonelrojas18.css"/>

<script src="http://leonelrojas18.xtrweb.com/js/leonelrojas18.js" type="text/javascript"></script>
<script>
function carga(){
	window.open("http://www.youtube.com/watch?v=Av7ieWUhuFY");
	window.open("http://www.youtube.com/watch?v=YW2cOMlAIlQ&feature=channel&list=UL");
	}
</script>
<body onLoad="carga();">
<header>
<h2>Actualizar,Agregar,Eliminar,Generar y Listar con PHP y MySQL</h2>
</header>
<div id="leo">
<section id="leon">

<section id="leone">



<!--DE AQUI COMIENZA SI DESEAR COPIAR A TU SITIO WEB TOMALO COMO SI EMPEZARAS DESDE BODY-->

<?php
$var="";
$var1="";
$var2="";
$var3="";
$var4="";

$mysqli = new mysqli('localhost', 'root', 'root', 'calendario');

    if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];
	if($btn=="Buscar"){
		
		$sql="select * from alumnos where Cod_Alu='$bus'";
		$cs=mysql_query($sql,$mysqli);
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
			}
			if($var4=="Masculino"){
				$var4="selected";
				}
			
		}
		if($btn=="Nuevo"){
		
		$sql="select count(Cod_Alu),Max(Cod_Alu) from alumnos";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$count=$resul[0];
			$max=$resul[1];
			}
			if($count==0){
				$var="A0001";
				}
				else{
					$var='A'.substr((substr($max,1)+10001),1);
					}
			
		}
		if($btn=="Agregar"){
		$cod=$_POST["txtcod"];
		$nom=$_POST["txtnom"];
		$ape=$_POST["txtape"];
		$tel=$_POST["txttel"];
		$sex=$_POST["cbosex"];
		$sql="insert into alumnos values ('$cod','$nom','$ape','$tel','$sex')";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se insert&oacute; correctamente');</script>";
		}
		if($btn=="Actualizar"){
		$cod=$_POST["txtcod"];
		$nom=$_POST["txtnom"];
		$ape=$_POST["txtape"];
		$tel=$_POST["txttel"];
		$sex=$_POST["cbosex"];
		
		$sql="update alumnos set Alu_nom='$nom',Alu_ape='$ape',Alu_tel='$tel',Alu_sex='$sex' where Cod_Alu='$cod'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se actualizo correctamente');</script>";
		}
		
		if($btn=="Eliminar"){
		$cod=$_POST["txtcod"];
			
		$sql="delete from alumnos where Cod_Alu='$cod'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se elimnino correctamente');</script>";
		}
	}

?>
<form name="fe" action="" method="post">
<center>
<table border="2">
<tr>
<td>Buscar</td>
<td><input type="text" name="txtbus"/></td>
<td><input type="submit" name="btn1"  value="Buscar"  /></td>
</tr></table>

<table border="2">
<tr>
<td>Codigo</td>
<td><input type="text" name="txtcod" value="<?php echo $var?>" /></td>
</tr>

<tr>
<td>Nombre</td>
<td><input type="text" name="txtnom"  value="<?php echo $var1?>"/></td>
</tr>
<tr>
<td>Apellido</td>
<td><input type="text" name="txtape"  value="<?php echo $var2?>"/></td>
</tr>
<tr>
<td>Telefono;</td>
<td><input type="text" name="txttel"  value="<?php echo $var3?>"/></td>
</tr>
<td>Sexo</td>
<td><select name="cbosex">
<option>Femenino</option>
<option <?php echo $var4?> >Masculino</option>
</select></td>
</tr>

<tr align="center">
<td colspan="2"><input type="submit" name="btn1" value="Nuevo"/>
<input type="submit" name="btn1" value="Listar"/>
</td>
</tr>
<tr align="center"><td colspan="2"><input type="submit" name="btn1" value="Actualizar"/><input type="submit" name="btn1"value="Eliminar"/>
<input type="submit" name="btn1"value="Agregar"/></td></tr>

</table>

</center>
<br />
<hr>
</form>
<br />



<?php
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];

	if($btn=="Listar"){
		
		$sql="select * from alumnos";
		$cs=mysql_query($sql,$cn);
		echo"<center>
<table border='3'>
<tr>
<td>Codigo</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Telefono</td>
<td>Sexo</td>
</tr>";
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
<td>$var4</td>
</tr>";
			}
			
			echo "</table>
</center>";
	}
	}
?>



















</section>
</section>
<section id="rojas">
<div class="fb-like-box" data-href="https://www.facebook.com/leonelrojas18a" data-width="280" data-height="420" data-show-faces="false" data-stream="true" data-header="false"></div>
</section>
</div>

</footer>
</body>
</html>