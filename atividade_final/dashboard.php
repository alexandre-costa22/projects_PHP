<!DOCTYPE html>
<html lang="pt-BR">
<?php include("template/head.php");?>
<body>
    <?php include("template/header.php");?>
	<br><br><h1>Dashboard!</h1><br><br>
    <div id="dash-painel-f">
        <div id="dash-painel-1">
            <p id="title-dash-1">Gerenciar Usuários</p>
            <form action="database/conector.php" id="dash-list-button" method="POST">
                <input type="submit" name="listar" value="Listar" class="dash-buttons">
            </form>
            <form action="database/conector.php" id="dash-delete-button" method="POST">
                <label for="delete-mail">Deletar usuário por e-mail:</label>
                <input type="text" name="delete-mail" required>
                <input type="submit" name="deletar" value="Deletar" class="dash-buttons">
            </form>
        </div>
        <div id="dash-painel-2">
            
        </div>
    </div>
    <?php include("template/footer.php");?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>