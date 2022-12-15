<!DOCTYPE html>
<html lang="pt-BR">
<?php include("template/head.php");?>
<body>
    <?php include("template/header.php");?>
    <main role="main">
        <!-- Carrossel HERE-->        
        <section>
            <div id="carouselBanner" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselBanner" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselBanner" data-slide-to="1"></li>
                  <li data-target="#carouselBanner" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/carousel-1.jpg" alt="BMW">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/carousel-2.jpg" alt="Mercedes">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/carousel-3.jpg" alt="Chrysler">
                  </div>    
                </div>
                <a class="carousel-control-prev" href="#carouselBanner" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselBanner" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
                </a>
            </div>
        </section>
        <!-- Slick Carros HERE -->
        <section>
            <div id="home-div-slick-father" class="section-div">
                <div id="home-legend" class="div-legend">
                    <h3 class="legend">Recomendamos!</h3>
                </div>
                <div id="home-slick" class="slick-father">
                    <div class="slick-child">
                        <div class="slick-image">
                            <a href="carros/id_01.php"><img src="img/veiculos/id_01_bmw320i.jpeg" alt="BMW 320i" class="mini-image"/></a>
                        </div>
                        <div class="slick-title">
                            <a href="carros/id_01.php" class="mini-text">BMW 320i 2.0 16V TURBO GASOLINA GP AUTOMÁTICO</a>
                        </div>
                    </div>
                    <div class="slick-child">
                        <div class="slick-image">
                            <a href="carros/id_02.php"><img src="img/veiculos/id_02_hyundai_creta.jpeg" alt="Hyundai Creta" class="mini-image"/></a>
                        </div>
                        <div class="slick-title">
                            <a href="carros/id_02.php" class="mini-text">HYUNDAI CRETA 1.6 16V FLEX PULSE PLUS AUTOMÁTICO</a>
                        </div>
                    </div>
                    <div class="slick-child">
                        <div class="slick-image">
                            <a href="carros/id_03.php"><img src="img/veiculos/id_03_jetta.jpeg" alt="Jetta" class="mini-image"/></a>
                        </div>
                        <div class="slick-title">
                            <a href="carros/id_03.php" class="mini-text">VOLKSWAGEN JETTA 1.4 16V TSI COMFORTLINE 4P TIPTRO</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("template/footer.php");?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>