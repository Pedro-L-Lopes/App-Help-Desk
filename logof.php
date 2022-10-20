<?php 
	
	session_start();

	session_destroy();
	header('location: index.php');

	/*echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";*/

	//Remover indices do array de sessão
	//unset(array indice) //Remove o indice apenas se existir e não da erro
	
	//Destruir a variavel de sessão
	//session_destroy() //Será destruida mas somente em uma proxima requisição que não terá mais acesso a uma variavel de sessão
 ?>