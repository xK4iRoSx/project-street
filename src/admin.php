<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();

if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha'])== true))
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            include_once('../components/login/index.php');
        }else{
            include_once('../components/admin/index.php');
                
        }    
?>  
</body>
</html>