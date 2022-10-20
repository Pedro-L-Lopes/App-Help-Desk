<?php 
	session_start();

	//Verifica se a autenticação foi realizada
	$usuarios_autenticado = false;
	$usuario_id = null;
	$usuario_perfi_id = null;

	$perfis = [1 => 'administrador', 2 => 'usuario'];

	//Usuarios do sistema
	$usuarios_app = [
		['id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123', 'perfil_id' => 1],
		['id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123', 'perfil_id' => 1],
		['id' => 3, 'email' => 'crebin@teste.com.br', 'senha' => '123', 'perfil_id' => 2],
		['id' => 4, 'email' => 'sonic@teste.com.br', 'senha' => '123', 'perfil_id' => 2],
	];

	foreach($usuarios_app as $user){
		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
			$usuarios_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}
	}

	if ($usuarios_autenticado){
		echo "Usuario autenticado";
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('location: home.php');
	}else{
		$_SESSION['autenticado'] = 'NÃO';
		header('location: index.php?login=erro'); //Ao encontrar a instrução header, força o redirecionamento
	}

 ?>
