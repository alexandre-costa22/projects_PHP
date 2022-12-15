<?php
function listar($conexao) {
	if (isset($_POST['listar'])) {
		$query = "SELECT id, usuario, senha, nome FROM usuarios";
		$executar = mysqli_query($conexao, $query);

        echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Nome</th>
        </tr>";
        
        while($row = mysqli_fetch_array($executar)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['usuario'] . "</td>";
          echo "<td>" . $row['senha'] . "</td>";
          echo "<td>" . $row['nome'] . "</td>";
          echo "</tr>";
        }
        echo "</table>";
        mysqli_close($conexao);
	};
};

function deletar($conexao, $delete_mail) {
	if (isset($_POST['deletar'])) {
        echo $delete_mail;
		$query = "DELETE FROM usuarios WHERE usuario = '$delete_mail'";
		$executar = mysqli_query($conexao, $query);
        mysqli_close($conexao);
        header("location: ../dashboard.php");
	};
};
?>