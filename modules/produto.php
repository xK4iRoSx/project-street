
<?php
include_once("conexao.php");
if(isset($_GET["id"])){
    $sqlproduto = "SELECT * FROM produtos WHERE id= $_GET[id]";
    $resultado = mysqli_query($conexao, $sqlproduto);
    $row = mysqli_fetch_assoc($resultado);
}

$sqlprodutotodos = "SELECT * FROM produtos";
$resultadotodos = mysqli_query($conexao, $sqlprodutotodos);

