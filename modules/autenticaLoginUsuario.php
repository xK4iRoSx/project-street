<?php

session_start();
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))

{

    include_once('./conexao.php');
    $emailUsuario = $_POST['email'];
    $senhaUsuario = $_POST['senha'];
    $selectUser = "SELECT * FROM clientes WHERE email = '$emailUsuario'";
    $resUser = $conexao->query($selectUser);
    $passUser = mysqli_fetch_assoc($resUser);
    $ResSenha = password_verify("$senhaUsuario","$passUser[senha]");
    $nomeUsuario = $passUser['nome'];
    ;
    $idUsuario = $passUser['id'];

    if ($ResSenha < 1) {
       unset ($_SESSION['emailUsuario']);
       unset ($_SESSION['senhaUsuario']);
       unset ($_SESSION['nomeUsuario']);
       unset ($_SESSION['idUsuario']);

        echo" <script>
        alert('email ou senha incorreto')
        window.location.href='../src/index.php'
    </script>";

        
    }else{
    
        $_SESSION['emailUsuario'] = $emailUsuario;
        $_SESSION['senhaUsuario'] = $senhaUsuario;
        $_SESSION['nomeUsuario'] = $nomeUsuario;
        $_SESSION['idUsuario'] = $idUsuario;
      
    
        header('location:../src/index.php');
    }

}else{
    echo" <script>
    alert('Erro não foi possivel fazer a autenticação')
    window.location.href='../src/index.php'
    </script>";
    header('location:../src/index.php');
   
}