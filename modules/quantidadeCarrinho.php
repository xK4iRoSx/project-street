<?php
session_start();
include_once('./conexao.php');

// Certifique-se de que a variável $_POST está sendo acessada corretamente
$idCliente = $_POST['idusuario']; // Corrigido: deve ser $_POST
$idProduto = $_POST['idproduto'];
$maismenos = $_POST['maismenos'];

if ($maismenos == 2) {
    // Incrementa a quantidade se o item já estiver no carrinho
    $atualizar = mysqli_query($conexao, "UPDATE carrinho SET quantidade = quantidade + 1 WHERE id_cliente = '$idCliente' AND id_produto = '$idProduto'");

    if ($atualizar) {
        echo "Quantidade aumentada com sucesso!";
    } else {
        echo "Erro ao atualizar a quantidade: " . mysqli_error($conexao);
    }
} elseif ($maismenos == 1) {
    // Verifica a quantidade atual antes de decrementar
    $verificaQuantidade = mysqli_query($conexao, "SELECT quantidade FROM carrinho WHERE id_cliente = '$idCliente' AND id_produto = '$idProduto'");
    $row = mysqli_fetch_assoc($verificaQuantidade);
    
    if ($row && $row['quantidade'] > 1) {
        // Decrementa a quantidade se for maior que 1
        $atualizar = mysqli_query($conexao, "UPDATE carrinho SET quantidade = quantidade - 1 WHERE id_cliente = '$idCliente' AND id_produto = '$idProduto'");

        if ($atualizar) {
            echo "Quantidade diminuída com sucesso!";
        } else {
            echo "Erro ao atualizar a quantidade: " . mysqli_error($conexao);
        }
    } elseif ($row && $row['quantidade'] == 1) {
        // Remove o item se a quantidade for 1
        $deletar = mysqli_query($conexao, "DELETE FROM carrinho WHERE id_cliente = '$idCliente' AND id_produto = '$idProduto'");
        
        if ($deletar) {
            echo "Item removido do carrinho.";
        } else {
            echo "Erro ao remover o item: " . mysqli_error($conexao);
        }
    } else {
        echo "O item não está no carrinho.";
    }
} else {
    echo "Ação inválida.";
}
?>
