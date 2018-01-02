<?php
  require_once 'classes/db.php';
 /* Constantes de configuração */
 define('QTDE_REGISTROS', 5);
 define('RANGE_PAGINAS', 1);
/*Verificando a numeração da página*/
if(isset($_GET['page']) && is_numeric($_GET['page'])){
    $pagina_atual = $_GET['page'];
}else{
    $pagina_atual =  1;
}

 /* Calcula a linha inicial da consulta */
 $linha_inicial = ($pagina_atual -1) * QTDE_REGISTROS;
 /* Cria uma conexão PDO com MySQL */
 $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
/* Atribui os valores definidos na configuraão de conexão com BD */
 $pdo = new PDO("mysql:host=". SERVER . "; dbname=".DB.";", USER , PASS, $opcoes);
/* Capturar a URL da página atual */
 $url_pagina =  $_SERVER['PHP_SELF'] ;

        if($url_pagina == "/my_keys/index.php"){
            $sqlContador = "SELECT COUNT(*) AS total_registros FROM contas";
            $stm = $pdo->prepare($sqlContador);
            $stm->execute();
            $valor = $stm->fetch(PDO::FETCH_OBJ);
            $sql = "SELECT * FROM contas ORDER BY dataHora DESC LIMIT {$linha_inicial}, " . QTDE_REGISTROS;
        }
        
 $stm = $pdo->prepare($sql);
 $stm->execute();
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);
 ?>
