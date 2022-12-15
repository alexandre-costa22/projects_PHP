<!DOCTYPE html>
<html lang="pt-BR">
<?php
require("database/conector.php");
include("template/head.php");
?>
<body>
    <?php include("template/header.php");?>
    <main role="main">
        <div id="div-register-page">
            <form action="database/conector.php" id="formulario" method="POST">
                <h1>Cadastrar:</h1>
                <label for="nome">Nome:</label>
                <input type="text" id="field-nome" name="nome" placeholder="Digite seu nome" required/><br>

                <label for="email">Email:</label>
                <input type="email" id="field-email" name="email" placeholder="Digite seu email" required/><br>
        
                <label for="senha1">Senha:</label>
                <input type="password" id="field-senha1" name="senha1" placeholder="Digite a senha" required/><br>

                <label for="senha2">Confirmar Senha:</label>
                <input type="password" id="field-senha2" name="senha2" placeholder="Confime a senha" required/><br>

                <input type="submit" name="register" value="Cadastrar">
            </form>
        </div>
    </main>
    <?php include("template/footer.php");?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>