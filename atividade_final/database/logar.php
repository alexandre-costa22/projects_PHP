<?php
function logar($conexao) {
	if (isset($_POST['login']) AND !empty($_POST['email']) AND !empty($_POST['senha'])) {
		$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
		$senha = sha1($_POST['senha']);
		$query = "SELECT * FROM usuarios WHERE usuario = '$email' AND senha = '$senha'";
		$executar = mysqli_query($conexao, $query);
		$return = mysqli_fetch_assoc($executar);

		if (!empty($return['usuario'])) {
			echo $return['usuario'];
			session_start();
			$_SESSION['nome'] = $return['nome'];
			$_SESSION['id'] = $return['id'];
			$_SESSION['ativa'] = TRUE;
			header("location: ../dashboard.php");
		} else {
			echo "Usuário ou senha inválidos.";
		};
	};
};
?>