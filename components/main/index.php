<main>
        <!-- Carrossel -->
        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true"
            space-between="30" loop="true">
            <swiper-slide><img src="../img/slide/anc1.png" alt="" style="width: 100%;"></swiper-slide>
            <swiper-slide><img src="../img/slide/anc2.png" alt="" style="width: 100%;"></swiper-slide>
            <swiper-slide><img src="../img/slide/ancPainel1.png" alt="" style="width: 100%;"></swiper-slide>
        </swiper-container>

        <!-- Nome CardCarrossel -->
        <h3 class="m-3">Encontre agora seu estilo</h3>

        <!-- Card Carrossele -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Grupo cards -->
                <div class="carousel-item active">
                    <div class="row row-cols-1 row-cols-md-4 g-3">
                        
                           
                             <?php include_once("../modules/mainCard.php")?>
         
                     </div>
                 </div>
                </div>
            <!-- Controles de navegação -->
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button> -->
        </div>

        <br>
        <!-- Anuncio  -->
        <img src="../img/slide/anc4.png" class="" alt="" id="imgAnuncio" style="height: 530px; width: 100%;">

        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Grupo cards -->
                <div class="carousel-item active">
                    <div class="row row-cols-1 row-cols-md-4 g-3">
                        
                           
                             <?php include_once("../modules/mainCard2.php")?>
         
                     </div>
                 </div>
                </div>

            <!-- Controles de navegação -->
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button> -->
        </div>

        <br>
        <!-- Anuncio  -->
        <img src="../img/slide/anc5.png" class="" alt="" id="imgAnc" style="height: 525px; width: 100%;"
            alt="Logo Anuncio">
    </main>