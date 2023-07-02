<?php 
session_start();

// efetua inclusao do usuário informado em cadastro.php
$ds_email = $_POST["ds_email"];
$senha = $_POST["ds_senha"];
    
include_once "Conecta_Cadastro.php";

$query = "SELECT id_usuario, ds_senha FROM tb_usuario WHERE ds_email = '$ds_email';";

if ($result = mysqli_query($link, $query)){
    $senha_db = mysqli_fetch_assoc($result);

    if (password_verify($senha, $senha_db['ds_senha'] )){

        // criando token
        //$token = bin2hex(random_bytes(32));
        $id_usuario = $senha_db['id_usuario'];
        // salvando no cookie
        setcookie("cookie_token", $id_usuario, time() + 3600, "/", "", true, true);

        header("Location: ../index.php");
    } else {
        
        $_SESSION['msg'] = "<p style= 'color:red'>Email ou senha inválidos.<br>Tente logar novamente ou se cadastre!";
        header("Location: login.php");
    }
}
?>