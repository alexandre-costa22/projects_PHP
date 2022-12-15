<?php 
session_start();

?>

<header id="header">
        <div id="div-cabecalho">
            <!-- Logo HERE -->
            <div id="logo">
                <a href="index.php">
                    <img id="logo" src="img/logo.png" alt="Senac StockCar"/>
                </a>
            </div>
            <?php if (isset($_SESSION['ativa'])) { ?>
                    <div class="div-auth-status"><a href="#nada" id="button-login-auth-status" class="button-auth-status"><?php echo "Bem Vindo ".$_SESSION['nome'] ?></a><a class="button-auth-status">|</a><a href="database/forcalogout.php" id="button-register-auth-status" class="button-auth-status">Logout</a></div>
            <?php } else { ?>
                    <div class="div-auth-status"><a href="login.php" id="button-login-auth-status" class="button-auth-status">Entrar</a><a class="button-auth-status">|</a><a href="register.php" id="button-register-auth-status" class="button-auth-status">Cadastrar</a></div>
            <?php } ?>
            <!-- Social Media HERE -->
            <nav id="social-midia">
                <div id="fb" class="sm-div"><a href="https://www.facebook.com" class="sm-div-a">f</a></div>
                <div id="go" class="sm-div"><a href="https://www.google.com" class="sm-div-a">g</a></div>
                <div id="ig" class="sm-div"><a href="https://www.instagram.com" class="sm-div-a">i</a></div>
            </nav>
            <!-- Menu Bar HERE -->
            <div id="div-menu">
                <div id="div-menu-child">
                    <nav id="nav-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="veiculos-em-estoque.php">Veículos em Estoque</a></li>
                            <li><a href="ficha-cadastral.php">Ficha Cadastral</a></li>
                            <li><a href="localizacao.php">Localizaçao</a></li>
                            <li><a href="entre-em-contato.php">Entre em Contato</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>