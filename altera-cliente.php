<?php include("cabecalho.php");
      include("conecta-sql.php");
      include("banco-cliente.php"); ?>

<?php

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];


if(alteraCliente($conexao, $id, $nome, $email, $telefone)) { ?>
    <p class="text-success">Cliente <?= $nome; ?>, <?= $email; ?>, <?= $telefone; ?> alterado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">Cliente <?= $nome; ?> não foi alterado: <?= $msg ?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
