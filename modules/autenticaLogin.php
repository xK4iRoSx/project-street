<?php

session_start();
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))

{

    include_once('./conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $selectUser = "SELECT * FROM usuarios WHERE email = '$email'";
    $resUser = $conexao->query($selectUser);
    $passUser = mysqli_fetch_assoc($resUser);
    $ResSenha = password_verify("$senha","$passUser[senha]");
    $adm = $passUser['adm'];
    $nome = $passUser['nome'];

    if ($ResSenha < 1) {
       unset ($_SESSION['email']);
       unset ($_SESSION['senha']);
        echo" <script>
        alert('email ou senha incorreto')
        window.location.href='../src/admin.php'
    </script>";

        
    }else{
    
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        header('location:../src/admin.php');
    }

}else{
   header('location:../src/admin.php');
   echo"erro de login";
}