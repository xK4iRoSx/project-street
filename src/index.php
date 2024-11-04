<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOME - STREET</title>
  <!-- Link Favicon  -->
  <link rel="shortcut icon" href="../img/3.png" type="image/x-icon">
  <link rel="shortcut icon" href="/img/favicon/fundo 2000px.png" type="image/x-icon">
  <!-- Link Css -->
  <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <!-- Link Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Link CDN Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
    rel="stylesheet">
    <script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</head>

<body>
  <?php
  session_start();

  include("../components/navbar/index.php");
  include("../components/carrinho/index.php");
  
  
  if(!isset($_GET['pagina'])){

    include("../components/main/index.php");
    include("../components/contatos/index.php");
    include("../components/footer/index.php");
    
    }else{
      if($_GET['pagina']=="catalogo"){
        include("../components/catalogo/index.php");
    }elseif($_GET['pagina']=="login"){
        include("../components/loginUsuario/index.php");
    }elseif($_GET['pagina']=="cadastro"){
      include("../components/cadastroUsuario/index.php");
  }elseif($_GET['pagina']=="produto"){
    include("../components/produto/index.php");
    }elseif($_GET['pagina']=="quem_somos"){
      include("../components/quemSomos/index.php");
      }
  }
  
  
  ?>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
  </script>
  <script src="/js/bootstrap.bundle.min.js"></script>
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 	       <script type="text/javascript">
       function pesquisa(){
            $('#search').keyup(function(e) {
      var termo = $('#search').val().toUpperCase();
      $('.text-center div').each(function() {
          if($(this).html().toUpperCase().indexOf(termo) === -1) {
              $(this).hide();
          } else {
              $(this).show();
          }
      });
  });
}
        </script>



