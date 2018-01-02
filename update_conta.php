<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Importando a classe Contas -->
    <?php require_once 'classes/Contas.php';?>
    <!-- Definindo o viewport do sistema para Mobile First -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Importando a fonte Roboto e os ícones utilizados no sistema -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <!-- Importando o framework Bootstrap Material desenvolvido por https://fezvrasta.github.io/bootstrap-material-design/ -->
    <link rel="stylesheet" href="css/bootstrap-material-design.css">
    <!-- Importando a fonte Quicksand utilizada na logo do sistema-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- Importando minha folha de estilos pessoal -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Importando o ícone favicon -->
    <link rel="shortcut icon" href="https://image.ibb.co/fvp3gb/room_key.png" />
    <!-- Importando o framework de animações das páginas desenvolvido por https://daneden.github.io/animate.css/ -->
    <link rel="stylesheet" href="css/animate.css">
    <meta charset="utf-8">
    <title>Home · ACESSO My Keys</title>
  </head>
  <body>

      <!-- Script que verifica se vieram dados via POST -->

    <?php
    if (isset($_POST["id"]) && isset($_POST["usuario"]) && isset($_POST["senha"])) {
    $contaOBJ = new Conta();
    $contaOBJ->update($_POST["id"],$_POST["usuario"],$_POST['senha']);
    header("Location: index.php");
    }
    ?>
      <!-- Início do script da barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="navbar-brand quicksand" href="index.php"> ACESSO <span class="negrito">My Keys</span></a>
      </li>
    </ul>
  </div>
</nav>
    <!-- fim do script da barra de navegação -->
<br>
<div class="centralize animated fadeInDown">
  <h3>Atualizar Conta</h3>
</div>
<br>
    <!-- Início do script do formulário para preencimendo de dados -->
<div class="container animated fadeIn">
  <div class="card">
    <div class="card-body">
      <form method="POST" action="update_conta.php" name="form_conta" onsubmit="return validarConta();">
  <div class="form-group centralize">
    <label for="InputEmail">Usuário</label>
    <input type="text" class="form-control" id="InputUsuario" aria-describedby="usuario" name="usuario" <?php echo "value='".$_GET['usuario']."'"?>>
  </div>
  <div class="form-group centralize">
    <label for="InputSenha">Senha</label>
    <input type="text" class="form-control" id="senha" placeholder="" name="senha" <?php echo "value='".$_GET['senha']."' "?>>
  </div>
  <div class="form-group centralize esconder">
    <label for="InputID">ID</label>
    <input type="text" class="form-control" id="InputID" aria-describedby="id" name="id" <?php echo "value='".$_GET['id']."'"?>>
  </div>
<br>
<div class="centralize">
  <input class="btn btn-outline-info" type="submit" value="Confirmar">
</div>
<div class="centralize">
  <p id="flag" class="red"></p>
</div>

    <!-- Fim do script do formulário para preencimendo de dados -->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/tooltip.js"></script>
    <script src="js/bootstrap-material-design.js"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    <script src="js/main.js"></script>
  </body>
</html>
