<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Recebe os dados do formulário
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Cria um sistema decisório simples para verificar as informações
	if ($username == 'joao.santos1791@etec.sp.gov.br' && $password == 'Juliasouza14') {
		// Informações corretas, redireciona para a página de boas-vindas
		header('Location: progressao da tela correta.php');
		exit;
	} else {
		// Informações incorretas, exibe o arquivo com mensagem de erro
		header('Location: conclusao de erro.php');
		exit;
	}
}
?>

