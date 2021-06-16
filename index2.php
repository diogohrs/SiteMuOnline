<?php
    require_once 'conexao.php';
    $u = new usuario();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MuOnline</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
.style97 {font-size: 10px; color: #000000; font-family: Verdana;}
-->
</style>

</head>

<body>
<div id="centro" onmouseover="MM_displayStatusMsg('Mu UFU MC');return document.MM_returnValue">
  <div id="topo">
</div>
  <div id="meio">
    <table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="155" background="imagens/img_menu.gif"><div id="menu_esquerdo"><img src="imagens/img_usuario.gif" width="155" height="24" />
            <div id="login_area">
               <form action="logar.php" target="main" method="post" name="login" id="login">


                  <div align="center">
                    <table width="123" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="41" class="textosp"><div align="center"><img src="imagens/01.gif" width="12" height="16" /></div></td>
                        <td width="109"><div align="left">
                            <input name="login" type="text" class="textosp" id="login" size="12" />
                        </div></td>
                      </tr>
                      <tr>
                        <td class="textosp"><div align="center"><img src="imagens/02.gif" width="12" height="16" /></div></td>
                        <td><div align="left">
                            <input name="senha" type="password" class="textosp" id="senha" size="12" />
                        </div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><div align="left">
                            <input type="image" name="imageField" src="imagens/img_acessar.gif" />
                        </div></td>
                      </tr>
                    </table>
                  </div>
              </form>
                <div align="center"><a href="cadastro.php" target="main" class="linque1">Fa&ccedil;a j&aacute; seu cadastro!</a> </div>
            </div>
              <p><img src="imagens/img_informacoes.gif" width="155" height="21" /></p>
          <table width="155" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="10">&nbsp;</td>
                  <td width="145"><span class="textosp">Servidor: MU UFU MC<br />
                    Status: <span class="texto">

<? $fp = @fsockopen("127.0.0.1", 55901, $errno, $errstr, 1);
if($fp >= 1){ 
echo '<b><font color=006600>Online</font>';}
else{ echo '<b><font color=666666>Offline</font>'; } 
?>
                  
                      </span><br />
                    Usu&aacute;rios Online:
                  
                    <br />
                    Link: 1,0Mbps<br />
                    IP/Porta: Launcher<br />
                    Vers&atilde;o: 97d+99<br />
                    Expei&ecirc;ncia: 1000x<br />
                    Drop de itens: 50%<br />
                    Suc. SOUL: 50%<br />
                    Suc. SOUL+LUCK: 75%<br />
                    Suc. LIFE: 75%<br />
                    Total de contas:
                  
                    <br />
                    Total de chars:
         
                    <br />
                  </span></td>
                </tr>
            </table>
          <p><img src="imagens/img_administrcao.gif" width="155" height="21" /><br/>
          <table width="95%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td width="25%" height="19" align="center">
    
    </td>
    <td width="75%" align="center">
    
    </td>
  </tr>

</table></p>
        </div>
        <p><a href="downloads.html" target="main"><img src="imagens/gamedownload.gif" width="140" height="60" border="0" /></a></p>
        <p><a href="suporte.php" target="main"><img src="imagens/suporte.gif" width="140" height="60" border="0" /></a></p>
        <p><a href="shop.php" target="main"><img src="imagens/shop.gif" width="140" height="60" border="0" /></a></p>
        <p><a href="vip.php" target="main"><img src="imagens/planosvip.gif" width="140" height="60" border="0" /></a></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p></td>
        <td width="490"><div align="right">
          <table width="460" height="20" border="0" cellpadding="0" cellspacing="0" background="imagens/menu.gif">
            <tr>
              <td align="left"><div align="right" class="textosp">
				<a href="register.php" target="main" class="linque1">CADASTRO</a> | <a href="downloads.html" target="main" class="linque1">DOWNLOADS</a> | <a href="info.php" target="main" class="linque1">INFORMA&Ccedil;&Otilde;ES</a> | <a href="ranking.php" target="main" class="linque1">RANKINGS</a> | <a href="regras.html" target="main" class="linque1">REGRAS</a> | <a href="shop/index.html" target="_blank" class="linque1">SHOP</a> | </div></td>
            </tr>
          </table>
        </div>
		  <iframe src="noticias.php" name="main" width="480" height="440" align="Center" frameborder="0" id="main"></iframe>
		  <div align="center"><br />
            <a href="http://www.muufumc.com.br" target="_blank"><img src="468x60.gif" width="468" height="60" border="0" /></a> 
        </div></td>
        <td width="155" bgcolor="#999999"><p align="center"><a href="shop/index.html" target="_blank"><img src="imagens/img_dir.gif" alt="ACESSE NOSSO SHOP! CLIQUE AQUI!" width="140" height="320" border="0" /></a><br />
            <br />
              <br />
              <br />
              <br />
            <br />
              <br />
            <br />
        </p>
        </td>
      </tr>
    </table>
    <br />
  </div>
  <div class="textosp" id="rodape">Todos os direitos reservados &copy; - MU-UFU-MC </div>
</div>
</body>
</html>
