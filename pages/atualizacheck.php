 <?php 

  
// efetua atualização do usuário informado em atualiza.php
 
$id_usuario = $_COOKIE['cookie_token'];

  $nome = $_POST["ds_nome"];
  $genero = $_POST["genero"];
  $uf_residencia = $_POST["uf_residencia"];
  $id_status = $_POST["id_status"];
  $ds_email_novo = $_POST["ds_email"];
  $senha_nova = $_POST["ds_senha"];
  $senha_segura = password_hash($senha_nova, PASSWORD_DEFAULT);
  
  include_once "Conecta_Cadastro.php";

  if (isset($_COOKIE['cookie_token'])) {
    $cookieValor = $_COOKIE['cookie_token'];
  

  
  $query = "UPDATE tb_usuario SET
      ds_nome = '$nome', genero = '$genero', 
      uf_residencia = '$uf_residencia', id_status = '$id_status', 
      ds_email = '$ds_email_novo', ds_senha = '$senha_segura'    
      WHERE  id_usuario = '$id_usuario'";
  if ($result = mysqli_query($link, $query)) {
	  echo "Atualização efetuada com sucesso";
  }
}

?>  