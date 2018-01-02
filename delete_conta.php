
<?php
if (isset($_GET["id"])) {
    require_once 'classes/Contas.php';
    $contaOBJ = new Conta();
    $contaOBJ->delete($_GET['id']);
    header("Location: index.php");
}
?>
