<?php


    session_start();
    include_once('./conexao.php');
    
    // Verifica se o item já existe no carrinho
    $idCliente = $_SESSION['idUsuario'];
    $idProduto = $_POST['id'];
    if(isset($idCliente)){
            // Primeiro, tenta incrementar a quantidade se o item já estiver no carrinho
            $atualizar = mysqli_query($conexao, "UPDATE carrinho SET quantidade = quantidade + 1 WHERE id_cliente = '$idCliente' AND id_produto = '$idProduto'");
                
            if (mysqli_affected_rows($conexao) == 0) {
                // Se não houver linhas afetadas, significa que o item não estava no carrinho, então insere um novo
                
                $inserir = mysqli_query($conexao, "INSERT INTO carrinho (id_cliente, id_produto, quantidade) VALUES ('$idCliente', '$idProduto', '1')");

            }

            
            if ($inserir || $atualizar) {
                echo "Item adicionado ao carrinho com sucesso!";
            } else {
                echo "Erro ao adicionar item ao carrinho: " . mysqli_error($conexao);
            }
 
    }
    
   
    ?>
    