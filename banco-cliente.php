<?php

function listaClientes($conexao){
    $clientes= array();
    $dados = mysqli_query($conexao, "select * from cliente");

    while($cliente = mysqli_fetch_assoc($dados)) {
        array_push($clientes, $cliente);
        }
    return $clientes;
}

?>

<?php
function insereCliente($conexao, $nome, $email, $telefone){
  $query = "insert into cliente (nome, email, telefone) values ('{$nome}', '{$email}' , '{$telefone}')";
  return mysqli_query($conexao, $query);  
}
?>

<?php
function alteraCliente($conexao, $id, $nome, $email, $telefone) {
    $query = "update cliente set nome = '{$nome}', email = '{$email}', telefone = {$telefone} where id = '{$id}'";
    return mysqli_query($conexao, $query);
}
?>

<?php

function buscaCliente($conexao, $id) {
    $query = "select * from cliente where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function removeCliente($conexao, $id) {
    $query = "delete from cliente where id = {$id}";
    return mysqli_query($conexao, $query);
}

?>