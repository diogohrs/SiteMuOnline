<?php

$xa = getenv('REMOTE_ADDR');
$badwords = array(";","'","\"","*","union","del","DEL","insert","update","drop","sele","memb","set","$","res3t","wareh","%","--"); 

foreach($_POST as $value) 
  foreach($badwords as $word) 
    if(substr_count($value, $word) > 0) 
      die("FOI DETECTADA UMA TENTATIVA DE INVASÃO A COMUNIDADE DE SEGURANCA DO MUTRIPLOX.VAI.LA JA ESTA TOMANDO AS PROVIDENCIAS PARA QUE POSSAMOS TER UM MU CADA VEZ MELHOR E SEM LAMMERS EM NOSSO SERVER!");

// Enter the IP or DSN of the database server to connect to
// Change to your server IP (if remote only) works with DNS
$dbhost = "127.0.0.1";

// Enter the username to connect to the db
$dbuser = "root";

// Enter the password for the SQL Server
$dbpasswd = "103099";

//Admin Login
$alogin = "admDiogo";

//Admin Password
$apass = "soeupowx3";

//Database Name
$db = 'muonline';

//Host. IP If working remotely
$host = '127.0.0.1';

$ip = "127.0.0.1";

$regsubmit = "regform.submit()";
$msconnect=mssql_connect("$host","$alogin","$apass");
$msdb=mssql_select_db("$db",$msconnect);

?>
