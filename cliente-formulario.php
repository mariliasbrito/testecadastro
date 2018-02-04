<?php include("cabecalho.php")?>  
<form action="adiciona-cliente.php" method="post">
    <h3>Cadastrar novo cliente</h3>
    
    <table class= table>
            <tr>
            <td>Nome:</td>
            <td><input class="form-control" type= "text" name="nome"><br/><br/></td>
            </tr>
        <tr>
            <td>Email:</td>
            <td><input class="form-control" type="text" name="email"><br/><br/></td>
            </tr>
        <tr>
            <td>Telefone:</td>
            <td><input class="form-control" type="text" name="telefone"><br/><br/></td>
            </tr>
        <tr>
            <td><button type="submit" class="btn btn-secondary">Cadastrar</button></td> 
            
            </tr>
    </table>
    </form>

<?php include("rodape.php")?>  