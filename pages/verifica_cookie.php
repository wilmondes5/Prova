// Criar arquivo em php para verificar se o cookie está ativo
<?php
if(isset($_COOKIE['cookie_token'])) {
    // O cookie está ativo
    // os print são opcionais, podem ser removidos mas a verificação é necessária
    print_r("usuario logado");
} else {
    // O cookie não está ativo
    print_r("Cookie não está ativo");
}
?>



// Substituir no logincheck.php
<?php 
session_start();

// efetua inclusao do usuário informado em cadastro.php
$ds_email = $_POST["ds_email"];
$senha = $_POST["ds_senha"];
    
include_once "Conecta_Cadastro.php";

$query = "SELECT ds_senha FROM tb_usuario WHERE ds_email = '$ds_email';";

if ($result = mysqli_query($link, $query)){
    $senha_db = mysqli_fetch_assoc($result);

    if (password_verify($senha, $senha_db['ds_senha'] )){

        // criando token
        $token = bin2hex(random_bytes(32));

        // salvando no cookie
        setcookie("cookie_token", $token, time() + 3600, "/", "", true, true);

        header("Location: ../index.php");
    } else {
        
        $_SESSION['msg'] = "<p style= 'color:red'>Email ou senha inválidos.<br>Tente logar novamente ou se cadastre!";
        header("Location: login.php");
    }
}
?>



// inserir nem cada pagina se o professor desejar verificar a conexção, mas nao acredito que precise
<?php include('verifica_cookie.php'); ?>