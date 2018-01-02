<?php
                  /*Dados para conexçao com a Base de Dados*/

  define("SERVER","sql205.epizy.com");
  define("USER","epiz_21340933");
  define("PASS","0705090888");
  define("DB","epiz_21340933_my_keys");

class DB {
    function bd_connect(){
    $conn = new PDO("mysql:host=".SERVER.";dbname=".DB, USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  }
}

 ?>
