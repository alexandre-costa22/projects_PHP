<!DOCTYPE html>
<html lang="pt-BR">
<?php
require("database/conector.php");
include("template/head.php");
?>
<body>
    <?php include("template/header.php");?>
        <div id="div-login-page">
            <form action="database/conector.php" id="formulario" method="POST">
                <h1>Entrar:</h1><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required/>
        
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite a senha" required/><br>

                <input type="submit" name="login" value="Entrar">
            </form>
        </div>
    <?php include("template/footer.php");?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>