<!--
      Projeto desenvolvido por: Felipe Mendes
      para o desafio ACESSO Trainee 2018
-->
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Importando a classe Contas -->
    <?php require_once 'classes/Contas.php';?>
    <!-- Definindo o viewport do sistema para Mobile First -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Importando a fonte Roboto e os ícones utilizados no sistema -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
    <!-- Importando o framework Bootstrap Material desenvolvido por https://fezvrasta.github.io/bootstrap-material-design/ -->
    <link rel="stylesheet" href="css/bootstrap-material-design.css" />
    <!-- Importando a fonte Quicksand utilizada na logo do sistema-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"/>
    <!-- Importando minha folha de estilos pessoal -->
    <link rel="stylesheet" href="css/main.css" />
    <!-- Importando o ícone favicon -->
    <link rel="shortcut icon" href="https://image.ibb.co/fvp3gb/room_key.png" />
    <!-- Importando o framework de animações das páginas desenvolvido por https://daneden.github.io/animate.css/ -->
    <link rel="stylesheet" href="css/animate.css"/>
    <meta charset="utf-8" />
    <title>Home · ACESSO My Keys</title>
  </head>
  <body>
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
    <form action="create_conta.php" class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-info" type="submit">Nova Conta</button>
    </form>
  </div>
</nav>
                  <!-- fim do script da barra de navegação -->
<br>
<?php
  /*Instanciando um objeto da classe Conta*/
  $contaOBJ = new Conta();
  /*Definindo os limites de linhas para exibição na tabela de contas*/
  $start=0;
  $limit=5;
  /*Verificando se existe numeração na página, se não existir, é atribuido valor 1*/
 if(isset($_GET['page'])){
   $page= $_GET['page'];
   $start=($page-1)*$limit;
 }
 else {
  $page = 1;
};
  /*Acessando o método que traz do banco de dados os 5 registros mais recentes em atualização*/
  $arrayContas = $contaOBJ->showContasPagination($start, $limit);
 ?>
                <!-- Início do script da tabela de contas -->
<div class="container animated fadeIn">
<div class="card">
  <div class="card-body">
    <table class="table table-hover table-responsive" id="table-contas">
      <thead>
        <tr class="centralize">
          <th>Conta</th>
          <th>Senha</th>
          <th>Data/Hora</th>
        </tr>
      </thead>
      <tbody>
  <!-- Envolvendo os registros trazidos do banco em um laço e exibindo na tabela -->
        <?php foreach ($arrayContas as $objContas): ?>
        <tr class="centralize item">
          <td class="negrito" scope="row"> <?php echo $objContas['usuario']; ?>  </td>
          <td><?php echo $objContas['senha']; ?></td>
          <td><?php echo $objContas['dataHora']; ?></td>
          <td>
            <div class="dropdown">
              <button class="btn bmd-btn-icon dropdown-toggle" type="button" id="ex1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
              </button>
              <div class="dropdown-menu dropdown-menu-left" aria-labelledby="ex1">
                <a class="dropdown-item" <?php echo 'href="update_conta.php?usuario='.$objContas['usuario']."&senha=".$objContas['senha']."&id=".$objContas['id'].'"';?>>Atualizar</a>
                <a class="dropdown-item" <?php echo 'href="delete_conta.php?id='.$objContas['id'].'"';?>>Remover</a>
              </div>
            </div>
          </td>
        </tr>
      <?php endforeach ; ?>
                            <!-- Fim do laço -->
      </tbody>
    </table>
                      <!-- Fim do script da tabela de contas -->
  </div>
</div>
</div>
<br><br>
                <!-- Início do script de paginação -->
  <?php
      $objRows = $contaOBJ->showContasRows();
      foreach ($objRows as $objLinha):
          $rows = $objLinha['rows'];
      endforeach;
      $total = ceil($rows/$limit);
      ?>
      <nav class="animated fadeIn">
        <ul class="pagination justify-content-center pagination-lg">
      <?php
      for($i=1;$i<=$total;$i++) {
          if($i==$page) {
            echo "<li class='current page-item'> <span class ='page-link grey'> "  .$i." </span> </li>";
          }
          else {
            echo "<li class = 'page-item' ><a class='page-link' href='?page=".$i."'>".$i."</a></li>"; }
          };
       ?>
     </ul>
   </nav>

                <!-- Fim do script de paginação -->

    <!-- Importando jQuery -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Importando framework Popper.js desenvolvido por https://github.com/FezVrasta/popper.js/ -->
    <script src="js/popper.js"></script>
    <!-- Importando framework Tooltip.js desenvolvido por https://github.com/FezVrasta -->
    <script src="js/tooltip.js"></script>
    <!-- Importando script referente ao framework Bootstrap Material desenvolvido por https://fezvrasta.github.io/bootstrap-material-design/ -->
    <script src="js/bootstrap-material-design.js"></script>
    <!-- Iniciando o script do Bootstrap Material que acabou de ser importado -->
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    <!-- Importando script de conveções W3 -->
    <script src="js/w3.js"></script>
      <!-- Utilizando o script W3 para organizar a tabela de contas em ordem alfabética apartir do nome da conta -->
      <script>
        w3.sortHTML('#table-contas','.item', 'td:nth-child(1)');
      </script>
      <!-- Importando script pessoal -->
    <script src="js/main.js"></script>
  </body>
</html>
