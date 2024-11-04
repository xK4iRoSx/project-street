
<?php
if (isset($_POST['submit'])) {
    include_once("./conexao.php");

    $nomeProduto = $_POST["nomeProduto"];
    $categoriaProduto = $_POST["categoriaProduto"];
    $descricaoProduto = $_POST["descricaoProduto"];
    $precoProduto =  $_POST["precoProduto"];
    $tamanhoProduto =  $_POST["tamanhoProduto"];
    $estoqueProduto =  $_POST["estoqueProduto"];
    $corProduto =  $_POST["corProduto"];
    $hoje = date("Ymd_His"); // Formato seguro para nomear a pasta
    $nomePasta = $nomeProduto . "_" . $hoje;

    // Criar a pasta de destino
    $caminho = "../uploads/" . $nomePasta;
    if (!mkdir($caminho, 0777, true)) {
        die("Erro ao criar diretório.");
    }

    // Função para processar o upload de uma imagem
    function uploadImagem($file, $caminho) {
        if (!empty($file['name'])) {
            $filePath = $caminho . "/" . basename($file["name"]);

            // Move o arquivo da pasta temporária para a pasta de destino
            if (move_uploaded_file($file["tmp_name"], $filePath)) {
                echo "Arquivo " . $file["name"] . " enviado com sucesso!<br>";
                return $filePath; // Retorna o caminho da imagem
            } else {
                echo "Erro, o arquivo " . $file["name"] . " não pode ser enviado.<br>";
                return null;
            }
        }
        return null; // Caso o arquivo não tenha sido enviado
    }

    // Recebendo e processando a imagem 1
    $fotoProduto1 = uploadImagem($_FILES["fotoProduto1"], $caminho);

    // Recebendo e processando a imagem 2
    $fotoProduto2 = uploadImagem($_FILES["fotoProduto2"], $caminho);

    // Inserção no banco de dados
    $inserir = mysqli_query($conexao, "INSERT INTO produtos 
        (categoria, nome_produto, descricao, preco, estoque, tamanho, Cor, Imagem_link_1, Imagem_link_2)
        VALUES ('$categoriaProduto', '$nomeProduto', '$descricaoProduto', '$precoProduto', '$estoqueProduto', '$tamanhoProduto', '$corProduto', '$fotoProduto1', '$fotoProduto2')");

    if ($inserir) {
        // Redireciona para a página de admin
        header("location:../src/admin.php");
    } else {
        echo "Erro ao inserir no banco de dados: " . mysqli_error($conexao);
    }
}
?>