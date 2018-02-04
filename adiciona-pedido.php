<?php include("cabecalho.php"); ?>
<?php include("conecta-sql.php"); ?>
<?php include("banco-cliente.php");?>
<?php include("banco-produto.php");?>
<?php include("banco-pedido.php");?>

<?php
$id= $_POST['id'];
$id_cliente = $_POST["id_cliente"];
$id_produto = $_POST["id_produto"];




if (inserePedido($conexao, $id_cliente, $id_produto )){ ?>
   <p class="text-success">Pedido <?= $id ?> adicionado com sucesso!</p> 
<?php }else { 
$msg= mysqli_error($conexao);
?>
    <p class="text-danger">Pedido <?= $id ?> não foi adicionado: <?=$msg ?></p>
<?php
    
}
?>
<?php include("rodape.php"); ?>