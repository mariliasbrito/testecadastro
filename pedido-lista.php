<?php include("cabecalho.php"); 
include("conecta-sql.php");
include("banco-cliente.php");
include("banco-produto.php");
include("banco-pedido.php")?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Pedido apagado com sucesso.</p>
<?php } ?>

<table class="table table-striped table-dark">

    <?php
    $pedidos = listaPedidos($conexao);
    foreach($pedidos as $pedido) :
    ?>
        <tr><td><?= $pedido['id']?></td> 
            <td><?= $pedido['id_cliente']?></td> 
            <td><?= $pedido['id_produto']?></td>
             <td><a class="btn btn-primary" href="cliente-alterarform.php?id=<?=$cliente['id']?>">editar</a></td>
            <td>
            <form action="remove-pedido.php?" method="post">
                <input type="hidden" name="id" value="<?=$cliente['id']?>">
                <button class="btn btn-danger">remover</button>
            </form>
        </td>

        </tr>

    <?php
    endforeach
    ?>
</table>

<?php include("rodape.php")?>   



            