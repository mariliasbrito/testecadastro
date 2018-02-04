<?php include("cabecalho.php");
      include("conecta-sql.php");
      include("banco-pedido.php");

$id= $_POST['id'];
removePedido($conexao, $id);

header("Location: pedido-lista.php?removido=true");
die();
?>
