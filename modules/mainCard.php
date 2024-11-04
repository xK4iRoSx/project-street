<?php
include_once('conexao.php');
   $selectProduto = "SELECT * FROM produtos ORDER BY id DESC LIMIT 4";
   $resProduto = $conexao->query($selectProduto);

   while($verifica = mysqli_fetch_assoc($resProduto)){
      
                    echo"<div class='col'>
                            <div class='card'>
                               <a href='./index.php?pagina=produto&id=$verifica[id]'> <img src='$verifica[Imagem_link_1]' class='card-img-top' alt='Imagem 1'></a>
                                 
                                <div class='card-body'>
                                    <h5 class='card-title'>$verifica[nome_produto]</h5>
                                    <p class='card-text'>Conteúdo do primeiro card.</p>
                                </div>
                            </div>
                        </div>";
       
   }
