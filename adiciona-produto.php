<?php include("cabecalho.php"); ?>
<?php include("conecta-sql.php"); ?>
<?php include("banco-produto.php");?>

<?php

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];



if (insereProduto($conexao, $nome, $descricao, $preco)){ ?>
   <p class="text-success">Produto <?= $nome ?> adicionado com sucesso!</p> 
<?php }else { 
$msg= mysqli_error($conexao);
?>
    <p class="text-danger">Produto <?= $nome ?> não foi adicionado: <?=$msg ?></p>
<?php
    
}
?>
<?php include("rodape.php"); ?>