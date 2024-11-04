<?php

include_once('conexao.php');
$select = "SELECT * FROM produtos WHERE categoria = '$_GET[categoria]'";
$res= $conexao->query($select);

while($resX = mysqli_fetch_assoc($res)){
    echo"
    <div class='card' style='width: 80%;'><a  href='./index.php?pagina=produto&id=$resX[id]'><img src='$resX[Imagem_link_1]' class='card-img-top' alt='...' style='width: 100%; height: 390px; object-fit: cover;'></a>
        <svg onclick='addcarrinho($resX[id])' xmlns='http://www.w3.org/2000/svg' width='40' height='40' fill='currentColor' class='bi bi-bag-plus-fill' viewBox='0 0 16 16'>
        <path fill-rule='evenodd' d='M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z'/>
        </svg>
        <div class='card-body'>
        <p class='card-title text-start' style='font-size: 15px;font-weight: bold;'>$resX[nome_produto]</p>
        <h6 class='card-text text-start' >$resX[descricao]<span class='text-end'style='margin-left:25px'> $$resX[preco]</span></h6>
        </div>
        </div>";
}































