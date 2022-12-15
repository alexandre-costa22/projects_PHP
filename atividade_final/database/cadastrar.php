<?php
function cadastrar($conexao) {
	if (isset($_POST['register']) AND !empty($_POST['email']) AND !empty($_POST['senha1'])) {
		$erros = array();

		if ($_POST['senha1'] != $_POST['senha2']) {
			$erros[] = "Senhas não conferem!";
		}

		$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
		$nome = $_POST['nome'];
		$senha = sha1($_POST['senha1']);
		$queryEmail = "SELECT usuario FROM usuarios WHERE usuario = '$email'";
		$buscaEmail = mysqli_query($conexao, $queryEmail);
		$verifica = mysqli_num_rows($buscaEmail);
		if (!empty($verifica)) {
			$erro[] = "Email já cadastrado!";
		}

		if (empty($erros)) {
			$query = "INSERT INTO usuarios (id, usuario, senha, nome) VALUES ('', '$email','$senha', '$nome')";
			$executar = mysqli_query($conexao, $query);
			if ($executar) {
				header("location: ../login.php");
			} else {
				echo "Erro ao cadastrar!";
			}
		} else {
			foreach ($erros as $erro) {
				echo "<p>$erro</p>";
			}
		}
	}
}
?>