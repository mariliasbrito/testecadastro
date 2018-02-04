<?php include("cabecalho.php"); 
include("conecta-sql.php");
include("banco-cliente.php");?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Cliente apagado com sucesso.</p>
<?php } ?>

<table class="table table-striped table-dark">

    <?php
    $clientes = listaClientes($conexao);
    foreach($clientes as $cliente) :
    ?>
        <tr><td><?= $cliente['id']?></td> 
            <td><?= $cliente['nome']?></td> 
            <td><?= $cliente['email']?></td>
             <td><?= $cliente['telefone']?></td>
            <td><a class="btn btn-primary" href="cliente-alterarform.php?id=<?=$cliente['id']?>">editar</a></td>
            <td>
            <form action="remove-cliente.php?" method="post">
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



            