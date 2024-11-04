<!-- Navigation Bar -->
<script src="../components/navbar/scripts.js"></script>
<link rel="stylesheet" href="../components/navbar/style.css">
<nav class="navbar bg-dark fixed-top navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <!-- link inicio -->
            <a class="navbar-brand" href="../src/index.php">
                <!-- link imagem -->
                <img src="../img/icons/1.png" alt="street" width="70" height="40" alt="Logo Anuncio">
            </a>
            <!-- Button responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../src/index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Vestuario
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./index.php?pagina=catalogo&categoria=blusa">Blusa</a></li>
                            <li><a class="dropdown-item" href="./index.php?pagina=catalogo&categoria=calca">Calças</a></li>
                            <li><a class="dropdown-item" href="./index.php?pagina=catalogo&categoria=acessorio">Acessorios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?pagina=quem_somos">Quem Somos</a>
                    </li>
                </ul>
                <!-- icons -->
                <div class="d-flex align-items-center ms-5  ">
                    <?php
                    if(isset(($_GET['pagina']))){
                        if($_GET['pagina']=="catalogo"){
                            echo"
                            <form class='d-flex align-items-center' role='search'>
                                    <div class='input-group'>
                                        <span class='input-group-text' id='basic-addon1'>
                                            <i class='bi bi-search'></i>
                                        </span>
                                        <input class='form-control' id='search' onkeyup='pesquisa()' type='search' placeholder='Search' aria-label='Search'>
                                    </div>
                                </form>
                            ";
                        }else{

                        }}
                    ?>
                    <div class="d-flex align-items-center ms-3">
                        <!-- Cart Icon -->
                        <button class="btn me-2" onclick="abrirCarrinho(),atualizaCarrinho(),valorTotal()">
                            <i class="bi bi-cart"></i>
                        </button>
                        <div class="offcanvas offcanvas" tabindex="1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel">Carrinho</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <!-- Dentro do Offcanvas -->
                            <div class="offcanvas-body">

                            </div>
                        </div>
                        <!-- Login Icon -->
                        <?php if(isset($_SESSION['emailUsuario']))
                        {echo "<div class='btn' id='login'>
                            <i id='login' class='bi bi-person-circle'></i><br>$_SESSION[nomeUsuario]
                            <a href='../modules/sair.php'><button class='sair'>Sair</button></a>
                        </div>";
                        }
                        else
                        {
                            echo"<div class='btn' id='login'>
                            <a href='./index.php?pagina=login'><i class='bi bi-person-circle'></i></a>
                        </div>";

                        } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>
 