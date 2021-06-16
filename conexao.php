<?php

$host = "localhost";
$user = "root";
$password = "103099";
$banco = "muonline";

$link = mysqli_connect($host,$user,$password) or(mysqli_error());
$db = mysqli_select_db($link,$banco);

    Class Usuario{
            
        private $pdo;
        public $msg = "";

        public function conectar($dbname,$host,$login,$senha){
            global $pdo;
            try {                
                $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $login, $senha);
                
            } catch (PDOException $erro) {
                global $msg;
                $msg = $erro->getMessage();
            }
            
        }
        
        public function cadastrar($login,$senha){
            global $pdo;
            $senhaMD5=MD5($senha);
            //  Verifica se já existe
            $sql = $pdo -> prepare("SELECT ID FROM memb_info WHERE login = $login");
            $sql->execute();
            if($sql->rowCount() > 0){
                // já existe
                return false;
            }else{
                // não existe, cadastrar
                $sql = $pdo->prepare("INSERT INTO memb_info (login,senha) VALUES ('$login','$senhaMD5')");
                $sql->execute();
                return true;
            }
            
        }

        public function logar($login,$senha){
            global $pdo;
            $senhaMD5=MD5($senha);
            // //  Verifica se está cadastrado
            $sql = $pdo->prepare("SELECT login FROM memb_info WHERE login = '$login' AND senha = '$senhaMD5'");
            $sql->execute();
            if($sql->rowCount() > 0){
                // está cadastrado
                $dado = $sql -> fetch();
                session_start();
                $_SESSION['ID'] = $dado['login'];
                return true;
            }else{
                // não está cadastrado
                return false;
            }
        }
    }

?>