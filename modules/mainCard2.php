<?php
include_once('conexao.php');
   $selectProduto2 = "SELECT * FROM produtos ORDER BY id ASC LIMIT 4";
   $resProduto2 = $conexao->query($selectProduto2);

   while($verifica2 = mysqli_fetch_assoc($resProduto2)){
      
                    echo"<div class='col'>
                            <div class='card'>
                               <a href='./index.php?pagina=produto&id=$verifica2[id]'> <img src='$verifica2[Imagem_link_1]' class='card-img-top' alt='Imagem 1'></a>
                                 
                                <div class='card-body'>
                                    <h5 class='card-title'>$verifica2[nome_produto]</h5>
                                    <p class='card-text'>Conteúdo do primeiro card.</p>
                                </div>
                            </div>
                        </div>";
       
   }