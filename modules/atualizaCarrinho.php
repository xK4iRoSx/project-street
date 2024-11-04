<?php
session_start();
include_once('./conexao.php');

$selectProduto = "SELECT * FROM carrinho WHERE id_cliente = '$_SESSION[idUsuario]'";
$resProduto = $conexao->query($selectProduto);

$valorTotal = 0; // Inicializa a variável para o valor total

while ($resCarrinho = mysqli_fetch_assoc($resProduto)) {
    $selectProduto1 = "SELECT * FROM produtos WHERE id = '$resCarrinho[id_produto]'";
    $resProduto1 = $conexao->query($selectProduto1);

    while ($res = mysqli_fetch_assoc($resProduto1)) {
        $string = $res['preco'];
        $string = str_replace(',', '.', $string);
        $valor = $resCarrinho['quantidade'] * floatval($string);
        
        // Adiciona o valor ao total
        $valorTotal += $valor; 

        // Formatar com 2 casas decimais
        $valorFormatado = number_format($valor, 2, ',', '.');
        
        echo "<div class='produto'>
                <p>$res[nome_produto] </p>
                <p class='quantidade'>QTD: <button class='seta' onclick='atualizaQuantidade(1,$_SESSION[idUsuario],$resCarrinho[id_produto])'> < </button> $resCarrinho[quantidade] <button class='seta' onclick='atualizaQuantidade(2,$_SESSION[idUsuario],$resCarrinho[id_produto])'> > </button></p>
                <p class='valor'>Valor: R$ $valorFormatado</p>
                <button class='remover' onclick='deleta($_SESSION[idUsuario],$resCarrinho[id_produto])'>Remover</button>
              </div>
              ";
    }
}


// Formatar o valor total com 2 casas decimais


        


