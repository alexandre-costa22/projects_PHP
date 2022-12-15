<!DOCTYPE html>
<html lang="pt-BR">
<?php include("template/head.php");?>
<body>
    <?php include("template/header.php");?>
    <main role="main">
        <section class="container">
            <form action="processadados.php" id="formulario" method="POST">
              <h1>Cadastro</h1>
      
              <div>
                <label for="nome">Nome:</label>
              </div>
              <input type="text" id="nome" placeholder="Digite seu nome" required autofocus/>
      
              <label for="senha">Senha:</label>
              <input
                type="password"
                id="senha"
                placeholder="Digite uma senha"
                required
              />
      
              <label for="email">Email:</label>
              <input
                type="email"
                id="email"
                placeholder="Digite seu email"
                required
              />
      
              <label for="rg">RG:</label>
              <input type="number" id="rg" placeholder="Digite seu rg" required />
      
              <label for="cpf">CPF:</label>
              <input type="number" id="cpf" placeholder="Digite seu cpf" required />
      
              <label for="tel">Telefone:</label>
              <input type="tel" id="tel" placeholder="Digite seu telefone" required />
      
              <label for="data">Data de nascimento:</label>
              <input type="date" id="data" required />
      
              <button>Enviar</button>
            </form>
          </section>
    </main>
    <?php include("template/footer.php");?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>