<?php include("cabecalho.php");
include("banco-cliente.php"); 
include("conecta-sql.php"); 

$id = $_GET['id'];
$cliente = buscaCliente($conexao, $id);

?>


    <h3>Editar cliente</h3>
    <form action="altera-cliente.php" method="post">
        <input type="hidden" name="id" value="<?=$cliente['id']?>" />
    <table class= table>
            <tr>
            <td>Nome:</td>
            <td><input class="form-control" type= "text" name="nome" value="<?=$cliente['nome']?>"><br/><br/></td>
            </tr>
        <tr>
            <td>Email:</td>
            <td><input class="form-control" type="text" name="email" value="<?=$cliente['email']?>"><br/><br/></td>
            </tr>
        <tr>
            <td>Telefone:</td>
            <td><input class="form-control" type="text" name="telefone" value="<?=$cliente['telefone']?>"><br/><br/></td>
            </tr>
        <tr>
            <td><button type="submit" class="btn btn-secondary">Salvar</button></td> 
            
            </tr>
    </table>
    </form>

<?php include("rodape.php")?>  