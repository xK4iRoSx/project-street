<?php
if (isset($_POST['submit'])) {

    include_once('conexao.php');
    $select = "SELECT * FROM clientes WHERE email = '$_POST[email]'";
    $res= $conexao->query($select);

    if(mysqli_num_rows($res)>=1){
        echo" <script>
        alert('email $_POST[email] ja cadastrado')
        window.location.href='../src/index.php?pagina=cadastro'
    </script>";
    }else{
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = password_hash( $_POST["senha"],PASSWORD_DEFAULT);
        $resutado = mysqli_query($conexao, "INSERT INTO clientes (nome,sobrenome,email,senha)
                VALUES('$nome','$sobrenome','$email','$senha')");
    
    header("location:../src/index.php?pagina=login");
    }



   
}