<?php include("cabecalho.php");
      include("conecta-sql.php");
      include("banco-produto.php");

$id= $_POST['id'];
removeProduto($conexao, $id);

header("Location: produto-lista.php?removido=true");
die();
?>
