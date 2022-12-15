<?php
$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'trab';
$conexao = mysqli_connect($host, $db_user, $db_pass, $db_name);

require("cadastrar.php");
require("logar.php");
require("painel.php");
require("logout.php");


if (isset($_POST['register'])) {
	cadastrar($conexao);
}

if (isset($_POST['login'])) {
    logar($conexao);
}

if (isset($_POST['listar'])) {
	listar($conexao);
}

if (isset($_POST['deletar'])) {
    $delete_mail = $_POST['delete-mail'];
	deletar($conexao, $delete_mail);
}

?>