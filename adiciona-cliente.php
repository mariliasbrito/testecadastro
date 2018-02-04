<?php include("cabecalho.php"); ?>
<?php include("conecta-sql.php"); ?>
<?php include("banco-cliente.php");?>

<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];



if (insereCliente($conexao, $nome, $email, $telefone)){ ?>
   <p class="text-success">Cliente <?= $nome ?> adicionado com sucesso!</p> 
<?php }else { 
$msg= mysqli_error($conexao);
?>
    <p class="text-danger">Cliente <?= $nome ?> não foi adicionado: <?=$msg ?></p>
<?php
    
}
?>
<?php include("rodape.php"); ?>