<?php
session_start();
include_once('./conexao.php');

$idCliente = $_POST['idusuario'];
$idProduto = $_POST['idproduto'];
$deletar = mysqli_query($conexao, "DELETE FROM carrinho WHERE id_cliente = '$idCliente' AND id_produto = '$idProduto'");
