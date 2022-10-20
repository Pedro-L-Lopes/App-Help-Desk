<?php 
	
	session_start();

	//Montagem do texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

	//Abrindo arquivo
	$arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');
	//Escrevendo Texto
	fwrite($arquivo, $texto);
	//Fechando arquivo
	fclose($arquivo);

	header('location: abrir_chamado.php');
 ?>