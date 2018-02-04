<?php include("cabecalho.php")?>  
<form action="adiciona-pedido.php" method="post">
    <h3>Cadastrar novo pedido</h3>
    
    <table class= table>
            <tr>
            <td>Insira o id do cliente desejado</td>
            <td><input class="form-control" type= "number" name="id_cliente"><br/><br/></td>
            </tr>
        
            <tr>
            <td>Insira a id do produto desejado</td>
            <td><input class="form-control" type= "number" name="id_produto"><br/><br/></td>
            </tr>
        <tr>
            <td><button type="submit" class="btn btn-secondary">Adicionar</button></td> 
            
            </tr>
    </table>
    </form>

<?php include("rodape.php")?>  