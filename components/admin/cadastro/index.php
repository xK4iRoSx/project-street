<div class="container mt-5"style="width: 50%;">
        <h2>Cadastro de Produto</h2>
        <form action="../modules/cadastroProdutos.php" method="post" enctype="multipart/form-data">
            <!-- Categoria do Produto -->
            <div class="mb-3">
            <label for="categoriaProduto" class="form-label">Categoria do Produto</label>
                <select name="categoriaProduto" id="categoriaProduto">
                    <option value="blusa">Blusa</option>
                    <option value="calca">Calça</option>
                    <option value="acessorio">Acessorio</option>
                </select>
            </div>
            <!-- Nome do Produto -->
            <div class="mb-3">
                <label for="nomeProduto" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" id="nomeProduto" name="nomeProduto"placeholder="Digite o nome do produto" required>
            </div>

            <!-- descrição do Produto -->
            <div class="mb-3">
                <label for="descricaoProduto" class="form-label">Descrição do Produto</label>
                <textarea type="text" class="form-control" id="descricaoProduto" name="descricaoProduto" placeholder="Digite a descrição do produto" required></textarea>
            </div>
            
            <!-- Preço do Produto -->
            <div class="mb-3">
                <label for="precoProduto" class="form-label">Preço</label>
                <input type="text" class="form-control" id="precoProduto"name="precoProduto" placeholder="Digite o preço" required>
            </div>

            <!-- Tamanho do Produto -->
            <div class="mb-3">
                <label for="tamanhoProduto" class="form-label">Tamanho</label>
                <select class="form-select" name="tamanhoProduto" id="tamanhoProduto" required>
                    <option selected disabled>Selecione o tamanho</option>
                    <option value="P">Pequeno</option>
                    <option value="M">Médio</option>
                    <option value="G">Grande</option>
                    <option value="tamanho unico">Tamanho unico</option>
                </select>
            </div>

             <!-- Em estoque -->
             <div class="mb-3">
                <label for="estoqueProduto" class="form-label">Quantidade em estoque</label>
                <input type="number" class="form-control" id="estoqueProduto" name="estoqueProduto" placeholder="Digite a quantidade em estoque" required>
            </div>

            <!-- Cor do Produto -->
            <div class="mb-3">
                <label for="corProduto" class="form-label">Cor</label>
                <input type="color" class="form-control form-control-color" id="corProduto"name="corProduto" value="#000000" title="Escolha a cor do produto" required>
            </div>

            <!-- foto do Produto -->
            <div class="mb-3">
                <label for="fotoProduto1" class="form-label">foto do Produto de frente</label>
                <input type="file" class="form-control" name="fotoProduto1" id="fotoProduto1" placeholder="Digite o nome do produto" required>
            </div>
            <!-- foto do Produto -->
            <div class="mb-3">
                <label for="fotoProduto2" class="form-label">foto do Produto de frente</label>
                <input type="file" class="form-control" name="fotoProduto2" id="fotoProduto2" placeholder="Digite o nome do produto" required>
            </div>

            <!-- Botão de envio -->
            <button type="submit" name="submit" class="btn btn-primary">Cadastrar Produto</button>
        </form><br><br>
    </div>
