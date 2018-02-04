<?php include("cabecalho.php"); 
include("conecta-sql.php");
include("banco-produto.php");?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>

<table class="table table-striped table-dark">

    <?php
    $produtos = listaProduto($conexao);
    foreach($produtos as $produto) :
    ?>
        <tr><td><?= $produto['nome']?></td> 
            <td><?= $produto['descricao']?></td>
             <td><?= $produto['preco']?></td>
            <td><a class="btn btn-primary" href="produto-alterarform.php?id=<?=$produto['id']?>">editar</a></td>
            <td>
            <form action="remove-produto.php?" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
                <button class="btn btn-danger">remover</button>
            </form>
        </td>

        </tr>

    <?php
    endforeach
    ?>
</table>

<?php include("rodape.php")?>   



            