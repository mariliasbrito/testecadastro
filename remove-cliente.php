<?php include("cabecalho.php");
      include("conecta-sql.php");
      include("banco-cliente.php");

$id= $_POST['id'];
removeCliente($conexao, $id);

header("Location: cliente-lista.php?removido=true");
die();
?>
