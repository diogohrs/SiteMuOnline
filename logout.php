<?PHP include("conexao.php");
require_once "sql_inject.php"; 
$bDestroy_session = TRUE; 
$url_redirect = 'index.php'; 
$sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect)  ; 

$sqlinject->test($msquery); 
?>
<SCRIPT language=JavaScript>
var message="";
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
</SCRIPT>
<?
require 'config.php'; 

setcookie("login", (""));
echo '<body text="#B30000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><p align="center">
<br><BR><BR><BR><BR><BR><br><BR><BR><font size=5>Saindo...<br>'
?>
<html>
<head>
<style type=text/css>
body{
	background-color: #F0F0F0;
}
.forms {font-family:arial;
font-size:12px;
font-family:Arial;
background-color: transparent;
color:#DDDDDD;
font-weight:bold;
border:1 solid #FFFFFF}

</style>
<meta http-equiv="refresh" content="1; URL=noticias.php"> 
<title>MU UFU MC</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<div align="left"></div>
</html>