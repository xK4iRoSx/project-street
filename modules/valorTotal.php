<?php
session_start();
include_once('./conexao.php');
if(isset($_SESSION['idUsuario'])){
$selectProdutototal = "SELECT * FROM carrinho WHERE id_cliente = '$_SESSION[idUsuario]'";
$resProdutototal = $conexao->query($selectProdutototal);

$valorTotaltotal = 0; // Inicializa a variável para o valor total

while ($resCarrinhototal = mysqli_fetch_assoc($resProdutototal)) {
    $selectProdutototal1 = "SELECT * FROM produtos WHERE id = '$resCarrinhototal[id_produto]'";
    $resProdutototal1 = $conexao->query($selectProdutototal1);

    while ($restotal = mysqli_fetch_assoc($resProdutototal1)) {
        $stringtotal = $restotal['preco'];
        $stringtotal = str_replace(',', '.', $stringtotal);
        $valortotal = $resCarrinhototal['quantidade'] * floatval($stringtotal);
        
        // Adiciona o valor ao total
        $valorTotaltotal += $valortotal; 

        // Formatar com 2 casas decimais
        $valorFormatadototal = number_format($valortotal, 2, ',', '.');
         
    }
}
$valorTotalFormatadototal = number_format($valorTotaltotal, 2, ',', '.');
echo"<div><span class='preco'>Total: R$$valorTotalFormatadototal</span></div>";
}



        


