<?php

function listaProduto($conexao){
    $produtos= array();
    $dados = mysqli_query($conexao, "select * from produto");

    while($produto = mysqli_fetch_assoc($dados)) {
        array_push($produtos, $produto);
        }
    return $produtos;
}

?>

<?php
function insereProduto($conexao, $nome, $descricao, $preco){
  $query = "insert into produto (nome, descricao, preco) values ('{$nome}', '{$descricao}' , {$preco})";
  return mysqli_query($conexao, $query);  
}
?>

<?php
function alteraProduto($conexao, $id, $nome, $descricao, $preco) {
    $query = "update produto set nome = '{$nome}', descricao = {$descricao}, preco = {$preco} where id = '{$id}'";
    return mysqli_query($conexao, $query);
}
?>

<?php

function buscaProduto($conexao, $id) {
    $query = "select * from produto where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function removeProduto($conexao, $id) {
    $query = "delete from produto where id = {$id}";
    return mysqli_query($conexao, $query);
}

?>