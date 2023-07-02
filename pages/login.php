<?php
session_start();

include_once "Conecta_Cadastro.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VegZone</title>
    <link rel="stylesheet" href="../styles/bootstrap.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="../images/logo_vegzonevetor.png" type="image/x-icon">
</head>
<body>
  <div class="container-fluid m-0 p-0">
    <header class="p-3 mb-3 border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="../index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
            <img class="nav-item logo" src="../images/logo_vegzone.png" alt="" height="50px">
          </a>
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 nav">
            <li><a href="#" class="nav-link px-3 ps-4 my-2 link-success abt">Catálogo</a></li>
            <li><a href="../pages/quemsomos.php" class="nav-link px-3 my-2 link-success abt">Quem Somos</a></li>
            <li><a href="../pages/faleconosco.html" class="nav-link px-3 my-2 link-success abt">Fale Conosco</a></li>
          </ul>
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start nav2">
            <div class="dropdown text-end buttonOff">
              <a href="#" class="d-block link-dark text-decoration-none dropleft" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../images/imgMenu.png" alt="mdo" width="50" height="50" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="#">Catálogo</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a  class="dropdown-item"href="pages/quemsomos.php">Quem Somos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a  class="dropdown-item"href="pages/faleconosco.html">Fale Conosco</a></li>
              </ul>
            </div>
            <form class="col-6 col-lg-auto mb-lg-0 me-lg-3 mx-4 w-50" role="search">
              <input type="search" class="form-control" placeholder="Buscar...">
            </form>
            <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../images/imgLogin.png" alt="mdo" width="50" height="50" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="/pages/cadastro.php">Cadastrar-se</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/pages/login.php">Entrar</a></li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
      <main class="container-fluid m-0 p-0 bg-white d-flex justify-content-center align-items-center flex-column text-center">
        <section class="border border-success my-4 w-75">
        <section class="container-fluid m-0 p-0 text-center pt-4 d-flex justify-content-center align-items-center flex-column bdlogin" style="height: 800px;">
            <p class="h3 text-success">LOGIN</p>
            <?php
            if (isset ($_SESSION['msg'])){
              echo $_SESSION['msg'];
              unset ($_SESSION['msg']);
            }
            ?>
            <form action="logincheck.php" method="POST">
                <label for="ds_email" id="ds_email" class="pt-4" style="font-size: 12px; font-weight: bold;">E-MAIL: <br>
                <input type="email" name="ds_email" class="form-control text-center" style="width: 350px;" placeholder="Informe seu e-mail cadastrado" required>
                </label><br><br>
                <label for="ds_senha" id="ds_senha" style="font-size: 12px; font-weight: bold;">SENHA: <br>
                <input type="password" name="ds_senha" class="form-control text-center" style="width: 350px;" placeholder="Informe sua senha" required>
                </label><br>
            <section>
                <sub><a href="/pages/esqueceusenha.html">Esqueci minha senha</a></sub>
            </section><br>
              <div id="btt" class="my-2 pb-4">
                <button type="submit" class="btn btn-outline-success"name = "botao">Entrar</button>
              </div>
              <section>         
                <p class="mb-0 pb-0">Não tem conta?</p>
                  <sub class="mt-0 pt-0"><a href="/vegzone/VegZone/pages/cadastro.php">Cadastre-se aqui!</a></sub>
              </section><br>
            </form>
        </section>
                    
                </div>
                </div>  
            </div>
        </div>
      </section>
      </main>
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
          <div class="col-md-4 d-flex align-items-center">
          </div>    
          <ul class="nav col-12 justify-content-end list-unstyled d-flex">
              <span class="mb-3 mb-md-0 pe-3 text-white">© 2023 VegZone, Inc</span>
          </ul>
      </footer>
      </div>
      <script src="js/bootstrap.bundle.js"></script>
  </body>
  </html>
