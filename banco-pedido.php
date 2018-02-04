<?php

function listaPedidos($conexao){
    $pedidos= array();
    $dados = mysqli_query($conexao, "select * from pedido");

    while($pedido = mysqli_fetch_assoc($dados)) {
        array_push($pedidos, $pedido);
        }
    return $pedidos;
}

?>

<?php
function inserePedido($conexao, $id_cliente, $id_produto){
  $query = "insert into pedido (id_cliente, id_produto) values ('{$ $id_cliente}', '{$ $id_produto}')";
  return mysqli_query($conexao, $query);  
}
?>

<?php
function alteraPedido($conexao, $id, $id_cliente, $id_produto) {
    $query = "update pedido set $id_cliente= '{$id_cliente}', $id_produto= '{$id_produto} where id = '{$id}'";
    return mysqli_query($conexao, $query);
}
?>

<?php

function buscaPedido($conexao, $id) {
    $query = "select * from pedido where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function removePedido($conexao, $id) {
    $query = "delete from pedido where id = {$id}";
    return mysqli_query($conexao, $query);
}

?>