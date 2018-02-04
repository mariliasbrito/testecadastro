<?php include("cabecalho.php");
include("banco-produto.php"); 
include("conecta-sql.php"); 

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);

?>


    <h3>Editar produto</h3>

    <form action="altera-produto.php" method="post">
    <input type="hidden" name="id" value="<?=$produto['id']?>" />
    <table class="table">
            <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>" /></td>
        </tr>
         <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>" /></td>
        </tr>
        
        <tr>
            <td><button type="submit" class="btn btn-secondary">Salvar</button></td> 
            
            </tr>
    </table>
    
</form>
<?php include("rodape.php")?>  

