<?php include("cabecalho.php")?>  
<form action="adiciona-produto.php" method="post">
    <h3>Cadastrar novo produto</h3>
    
    <table class= table>
            <tr>
            <td>Nome:</td>
            <td><input class="form-control" type= "text" name="nome"><br/><br/></td>
            </tr>
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
        </tr>
        
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" /></td>
        </tr>
        <tr>
            <td><button type="submit" class="btn btn-secondary">Cadastrar</button></td> 
            
            </tr>
    </table>
    </form>

<?php include("rodape.php")?>  