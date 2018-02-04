<?php include("cabecalho.php");
      include("conecta-sql.php");
      include("banco-produto.php"); ?>

<?php

$id = $_POST["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];


if(alteraProduto($conexao, $id, $nome, $descricao, $preco)) { ?>
    <p class="text-success">Produto <?= $nome; ?>, <?= $descricao; ?>, <?= $preco; ?> alterado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">Produto <?= $nome; ?> não foi alterado: <?= $msg ?></p>
<?php
}
?>

<?php include("rodape.php"); ?>



