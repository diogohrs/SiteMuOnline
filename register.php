<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Cadastrar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
}
-->
</style>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>

<style type="text/css">
<!--
body {
	background-color: #F0F0F0;
}

-->
</style>
<html>
<head>
<script>
function send(){
	erro='';
	if(document.form1.login.value==''){ erro+='Login está em branco \n'; }
	if(document.form1.senha.value==''){ erro+='senha está em branco \n'; }
	if(erro!=''){ alert(erro) }
	else { document.form1.submit() }
}

</script>
<title>Cadastro</title>
</head>
<body scroll=no onLoad="hidemenuie5()">
<div align="left">
  <table width="480" height="20" border="0" cellpadding="0" cellspacing="0" background="imagens/img_topo_paginas.gif">
    <tr>
      <td width="14">&nbsp;</td>
      <td width="466" class="textosp"><a href="index.php" target="_parent" class="linque1">MU UFU MC</a>&gt;Cadastro</td>
    </tr>
  </table>
</div>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0">
  <tr>
    <td align="center" valign="top"><div align="left">
      <table width="480" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><form name="form1" method="post" action="">
              <div align="center"><span class="textosp2">Antes da realiza&ccedil;&atilde;o do cadastro leia as <a href="regras.html" target="main" class="linque1">regras</a>!</span><br>
                  <table width="204" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="200" colspan="2" bordercolor="#999999" bgcolor="#F0F0F0" class="style18"><div align="center" class="style4"></div></td>
      </tr>
                    <tr>
                      <td colspan="2" bordercolor="#999999" bgcolor="#F0F0F0" class="texto"><div align="left" class="style20 style21"><span class="textosp" style="font-size: 10px;" #invalid_attr_id="none">Total De Contas =</span> <span class="textosp"><? echo $rows; ?></span></div></td>
      </tr>
                    <tr>
                      <td colspan="2" bordercolor="#999999" bgcolor="#F0F0F0" class="texto"><div align="left" class="style22"><span class="textosp" style="font-size: 10px;" #invalid_attr_id="none">Maximo De Contas=</span> <span class="textosp"><? echo $maxacc; ?></span></div></td>
      </tr>
                    <tr>
                      <td colspan="2" bordercolor="#999999" bgcolor="#F0F0F0" class="style15"><div align="left" class="textosp">Login:</div></td>
      </tr>
                    <tr>
                      <td colspan="2" bordercolor="#999999" bgcolor="#F0F0F0" class="login"><div align="left" class="style22">
                          <input name="login" type="text" class="textosp2" id="login" style="border: 1px solid #666666; font-size: 10px;" size="40" #invalid_attr_id="none">
                      </div></td>
      </tr>
                    <tr>
                      <td colspan="2" bordercolor="#999999" bgcolor="#F0F0F0" class="style15"><div align="left" class="textosp">Senha:</div></td>
      </tr>
                    <tr>
                      <td colspan="2" bordercolor="#999999" bgcolor="#F0F0F0" class="login"><div align="left" class="style22">
                          <input name="senha" type="password" class="textosp2" id="senha" style="border: 1px solid #666666; font-size: 10px;" size="40" #invalid_attr_id="none">
                      </div></td>
      </tr>
                    <tr>
                      <td colspan="2" bordercolor="#999999" bgcolor="#F0F0F0" class="style15"><div align="left" class="textosp">E-mail:</div></td>
      </tr>
                    <tr>
                      <td colspan="2" bordercolor="#999999" bgcolor="#F0F0F0" class="login"><div align="left">
                          <input name="email" type="text" class="textosp2" id="email" size="40">
                      </div></td>
      </tr>
                    <tr>
                      <td colspan="2" bgcolor="#F0F0F0" class="textosp2"><div align="left">
                        <?
		if(isset($resultado)){
		echo $resultado." ";
			}
		?>
                      </div>
                        <div align="left">
                          <input name="Button" type="button" class="textosp" value="Enviar" onClick="send()">
                      </div></td>
      </tr>
                  </table>
              </div>
              <p>&nbsp;</p>
            </form></td>
          </tr>
        </table>
    </div>      <p align="left">&nbsp;</p></td>
  </tr>
