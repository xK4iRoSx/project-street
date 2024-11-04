<?php  
  include("../modules/produto.php");

  ?>
  

  <!-- Produto -->
  <div class="container mt-5 pt-5">
    <div class="row">
      <!-- Imagem do Produto -->
      <div class="col-md-6">
        <img src="<?=$row["Imagem_link_1"]?>" class="img-fluid" alt="Imagem do Produto">
      </div>

      <!-- Informações do Produto -->
      <div class="col-md-6">
        <h1 class="mb-3"><?=$row["nome_produto"]?></h1>
        <h4 class="mb-3">R$ <?=$row["preco"]?></h4>

        <!-- Seleção de cor -->
        <div class="mb-3">
          <label for="corProduto" class="form-label">Cor</label>
          <select class="form-select" id="corProduto">
            <option value="preto">Preto</option>
            <option value="branco">Branco</option>
          </select>
        </div>

        <!-- Seleção de tamanho -->
        <div class="mb-3">
          <label for="tamanhoProduto" class="form-label">Tamanho</label>
          <select class="form-select" id="tamanhoProduto">
            <option value="p">P</option>
            <option value="m">M</option>
            <option value="g">G</option>
            <option value="gg">GG</option>
          </select>
        </div>

        <!-- Botões de ação -->
        <div class="mb-3">
          <button type="button"  onclick="addcarrinho(<?= $row['id'] ?>)"class="btn btn-outline-secondary">Adicionar ao Carrinho</button>
        </div>

        <!-- Descrição do produto -->
        <div class="mb-3">
          <h5>Descrição</h5>
          <p><?=$row["descricao"]?></p>
        </div>
      </div>
    </div>


  </div>

  <!-- Footer -->
  <footer class="mt-5 bg-light text-center py-3">
    <p>&copy; 2024 Street Clothing. Todos os direitos reservados.</p>
  </footer>