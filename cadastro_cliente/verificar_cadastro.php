<?php
session_start();

$usuarioCorreto = "Aline";
$senhaCorreta = "1234567";

if ( isset($_POST["entrar"]) ) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if( $login == $usuarioCorreto &&$senha == $senhaCorreta) {
        $_SESSION["msg"] = "Você está logado!";
        $_SESSION["logado"] = true;
    } else {
        $_SESSION["msg"] = "Login ou Senha inválidos.";
        $_SESSION["logado"] = false;
    }
}

if (isset($_SESSION["logado"])) {
    if( $_SESSION["logado"]) {
        header("location: index.php");
    }

}
