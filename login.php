<?php 

    require_once 'conexao.php';
    $u = new usuario();

    if(isset($_POST['login'])){
        $login = addslashes($_POST['login']);
        $senha = addslashes($_POST['senha']);
        /*echo "login: ".$login.", senha: ".$senha;
        echo "";*/
        if(!empty($login) && !empty($senha)){
            $u->conectar('Diogo','localhost','root','103099'); 
            //echo "msg: ".$msg;
            if($u->msg == ""){
                if($u->logar($login,$senha)){
                  $_COOKIE['login']= $_POST['login'];
                  echo "variavel global: ".$_COOKIE['login'];
                  header("location: index.php");
                }else{
                    echo "<script language='javascript' type='text/javascript'>alert('Não foi possivel logar no sistema!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='login.html';</script>";
                }
            }else{
                echo "Erro: ".$u->msg;
            }
        }else {
            echo "<script language='javascript' type='text/javascript'>alert('Preenha todos os campos!')</script>";
            echo "<script language='javascript' type='text/javascript'>window.location.href='logar.php';</script>";
        }
    }

?>