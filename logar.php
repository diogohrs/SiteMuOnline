<?PHP include("conexao.php");
require_once "login.php";
require_once "sql_inject.php";
$bDestroy_session = TRUE; 
$url_redirect = 'index.php'; 
$sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect)  ; 

$sqlinject->test($msquery); 
?>
<html>
<head>
<title>logar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
<style type="text/css">
<!--
body {
	background-color: #F0F0F0;
}
-->
</style>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<div align="left">
  <table width="480" height="20" border="0" cellpadding="0" cellspacing="0" background="imagens/img_topo_paginas.gif">
    <tr>
      <td width="14">&nbsp;</td>
      <td width="466" class="textosp"><a href="index.php" target="_parent" class="linque1">MU UFU MC</a></td>
    </tr>
  </table>
  <br>
  <?php
require 'config.php';
require_once "sql_inject.php"; 

$bDestroy_session = FALSE; 
$url_redirect = 'index.php'; 
$sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect) ; 

$pass = stripslashes($_POST['senha']);
$pass = htmlspecialchars($pass,ENT_QUOTES);
$login = stripslashes($_POST['login']);
$login = htmlspecialchars($login,ENT_QUOTES);

$sql_username_check = "SELECT memb___id FROM memb_info WHERE memb___id='$login'";
$sqlinject->test($sql_username_check); 
$sql_username_check = mysqli_query($sql_username_check); 
$username_check 	= mysqli_num_rows($sql_username_check); 

$sql_pass_check = "SELECT memb__pwd FROM memb_info WHERE memb__pwd='$pass' AND memb___id = '$login'";
$sqlinject->test($sql_pass_check); 
$sql_pass_check = mysqli_query($sql_pass_check); 
$pass_check = mysqli_num_rows($sql_pass_check); 

if (empty($login) || empty($pass) || ($username_check <= 0) || ($pass_check <= 0))
{
	echo '<body bgcolor="none" text="#006699" link="#006699" vlink="#006699" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><p align="center">Erro:</p><br>';
	if (empty($login) || empty($pass))
		echo '<p align="center">Campos em branco. Preencha todos os campos corretamente.<br><br>
		<a href="noticias.php">Clique aqui para voltar.</a></p>';
	elseif (($username_check <= 0) || ($pass_check <= 0))
		echo '<p align="center">Login/Senha incorreto(s). Preencha os campos corretamente.<br><br>
		<a href="notícias.php" target="main">Clique aqui para voltar.</a></p>';
}
else
{
	$SQL_Verift = mysqli_query( "SELECT * FROM accountcharacter WHERE Id = '$login'");
	$Resultado = mysqli_fetch_object( $SQL_Verift );
	$VipPlace = $Resultado->vip;
	if ( $VipPlace == "" )
	{
		echo "<script>window.alert(\"Acessando....\");window.location='manager1.php';</script>";
	} else {
		echo "<script>window.alert(\"Olá VIP! Aguarde...\");window.location='manager.php'</script>";
	}
	$sql_nome = "SELECT memb_name FROM memb_info WHERE memb___id='$login'";
	$sqlinject->test($sql_nome); 
	$sql_nome = mysqli_query($sql_nome); 
	$nome = mysql_result($sql_nome, 0,0);

	$sql_mail = "SELECT mail_addr FROM memb_info WHERE memb___id='$login'";
	$sqlinject->test($sql_mail); 
	$sql_mail = mysqli_query($sql_mail); 
	$email = mysql_result($sql_mail, 0,0);

	setcookie("login", $login);
	setcookie("pass", $pass);
	setcookie("nome", $nome);
	setcookie("email", $email);

	echo '<body bgcolor="none" text="#006699" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<p align="center"><br><br><br><br><br><BR><BR><br><br><size="10" face="Verdana><b>Aguarde, carregando dados...<br>
	<meta http-equiv="refresh" content="1; URL=manager.php"> 
	</p>';
}
?>
</div>
</body>
</html>
