<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<?
include("config.php");
$query = 'SELECT TOP 100 Name,Class,cLevel,Resets from Character order by Resets desc, cLevel desc ';
$result = mssql_query($query);
?>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	width:100%;
	height:100%;
	scrollbar-face-color:#ECECEC;
	scrollbar-highlight-color:#ECECEC;
	scrollbar-3dlight-color:#525252;
	scrollbar-darkshadow-color:#525252;
	scrollbar-shadow-color:#ECECEC;
	scrollbar-arrow-color:#525252;
	scrollbar-track-color:#E0E0E0;
	background-color: #F0F0F0;
}
.login {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	color: #003366;
	text-decoration: none;
}
.campos {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: normal;
	color: #003366;
	text-decoration: none;
	border: 1px solid #003366;
}
#ie5menu{
position:absolute;
width:120px;
border:2px solid black;
background-color:menu;
font-family:Verdana;
font-size: 11px;
line-height:17px;
cursor:default;
visibility:hidden;
}
.menuitems{
padding-left:15px;
padding-right:15px;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #999999;
}
-->
</style>

<html>
<link href="estilos.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style97 {color: #b30000}
-->
</style>
<head>

<title>Rankings</title>
</head>
<body scroll="auto" onLoad="hidemenuie5()">
<div align="center">
  <table width="480" height="20" border="0" cellpadding="0" cellspacing="0" background="imagens/img_topo_paginas.gif">
    <tr>
      <td width="14">&nbsp;</td>
      <td width="466" class="textosp"><div align="left"><a href="index.php" target="_parent" class="linque1">MU UFU MC</a>&gt;Ranking</div></td>
    </tr>
  </table>
  <br>
  <p><span class="textosp">Ranking Resets |</span> <span class="texto"><a href="rguild.php" class="linque1">Ranking Guilds </a></span></p>
  <p><br>
  </p>
</div>
<table width="27%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><table width="273" border="1" cellpadding="0" cellspacing="0">
        <tr bordercolor="#999999">
          <td width="33" align="center" class="texto"> 
          <div align="center" class="texto style97">Rank</div></td>
          <td width="121" align="center" bordercolor="#999999" class="texto"><div align="center" class="texto style97">Nome</div></td>
          <td width="36" align="center" class="texto"><div align="center" class="texto style97">Classe</div></td>
          <td width="30" align="center" class="texto"><div align="center" class="texto style97">Level</div></td>
          <td width="41" align="center" class="texto"><div align="center" class="texto style97">Resets</div></td>
        </tr>
        <?
		for($i=0;$i < mssql_num_rows($result);++$i)
			{
			$row = mssql_fetch_row($result);
			$rank = $i+1;
			if($row[1] == 0){ $row[1] =  'DW';
			}
			if($row[1] == 1){ $row[1] =  'SM';
			}
			if($row[1] == 16){ $row[1] =  'DK';
			}
			if($row[1] == 17){ $row[1] =  'BK';
			}
			if($row[1] == 32){ $row[1] =  'Elf';
			}
			if($row[1] == 33){ $row[1] =  'ME';
			}
			if($row[1] == 48){ $row[1] =  'MG';
			}
			if($row[1] == 64){ $row[1] =  'DL';
			}
			echo "<tr>
			  <td valign=top align=center bgcolor=#F0F0F0 class=style1>$rank</td>
              <td valign=top align=left bgcolor=#F0F0F0 class=style1>$row[0]</td>
              <td valign=top align=center bgcolor=#F0F0F0 class=style1>$row[1]</td>
              <td valign=top align=center bgcolor=#F0F0F0 class=style1>$row[2]</td>
              <td valign=top align=center bgcolor=#F0F0F0 class=style1>$row[3]</td>
              </tr>";
			}
		?>
    </table>
    <br>
    <input name="Button" type="button" class="textosp" value="Atualizar" onClick="javascript:window.location='ranking.php'"></td>
  </tr>
<!--[if IE]>
<div id="ie5menu" onMouseover="highlightie5()" onMouseout="lowlightie5()" onClick="jumptoie5()">
<div class="menuitems" url="javascript:history.go(0)">Atualizar</div>
<div class="menuitems" url="javascript:history.go(-1)">Voltar</div>
<div class="menuitems" url="info.php">Principal</div>
</div>
<![endif]-->
<script language="JavaScript1.2">
document.oncontextmenu=showmenuie5
if (document.all&&window.print)
document.body.onclick=hidemenuie5
</script>
</table>
</body>
</html>
