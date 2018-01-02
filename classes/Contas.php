<?php

require_once 'db.php';

class Conta {

              /*Pesquisa todos os registros da tabela Contas*/

  function show(){
   try {
       $db = new DB();
       $conn = $db->bd_connect();
       $stmt = $conn->prepare("SELECT * FROM Contas");
       $stmt->execute();
       return $stmt;
       }
   catch(PDOException $e)
       {
         echo "Connection failed: " . $e->getMessage();
       }
       $conn = null;
     }

     /*Insere novos registros na tabela Contas*/

  public function insert($usuario,$senha){
    try {
      $db = new DB();
      $conn = $db->bd_connect();
      $sql = "INSERT INTO Contas (usuario, senha)
      VALUES ('$usuario', '$senha')";
      $conn->exec($sql);
      }
      catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }
      $conn = null;
    }

    /*Atualiza registros da tabela Contas*/

  function update($id,$usuario,$senha){
   try {
      $db = new DB();
      $conn = $db->bd_connect();
      $sql = "UPDATE Contas SET usuario = '".$usuario."', senha = '".$senha."' WHERE  id = '" . $id ."'";
      $conn->exec($sql);
       }
   catch(PDOException $e)
       {
       echo "Connection failed: " . $e->getMessage();
       }
       $conn = null;
     }

     /*Remove registros pelo ID*/

 function delete($id){
  try {
      $db = new DB();
      $conn = $db->bd_connect();
      $sql = "DELETE FROM Contas WHERE id = '" . $id . "'" ;
      $conn->exec($sql);
      }
  catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }
      $conn = null;
    }

/*Pesquisa registros na tabela Contas dentro de um intervalo e ordena pela data de atualização*/


function showContasPagination($start, $limit){
  try {
      $db = new DB();
      $conn = $db->bd_connect();
      $stmt = $conn->prepare("SELECT * FROM Contas order by dataHora DESC LIMIT $start, $limit");
      $stmt->execute();
      return $stmt;
      }
  catch(PDOException $e)
      {
        echo "Connection failed: " . $e->getMessage();
      }
      $conn = null;
    }

    /*Pesquisa quantos registros existem na tabela Contas*/

function showContasRows(){
  try {
      $db = new DB();
      $conn = $db->bd_connect();
      $stmt = $conn->prepare("SELECT Count(id) AS rows FROM Contas");
      $stmt->execute();
      return $stmt;
      }
  catch(PDOException $e)
      {
        echo "Connection failed: " . $e->getMessage();
      }
      $conn = null;
    }
}
 ?>
