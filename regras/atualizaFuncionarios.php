<?php
	include "../banco/acessoBanco.php";	

	$nome	=	$_POST['nome'];
	$drt	=	$_POST['drt'];
	$email	=	$_POST['email'];
	$funcao	=	$_POST['funcao'];

	$button	=	$_POST['button'];
	$id_usuario 	= 	$_POST['id_usuario'];


	if($button == 'atualiza'){
			
		upControle($connect, $nome, $drt, $email, $funcao, $id_usuario);

		header("Location: ../perfil/geral.php");
	}
	if ($button == 'deleta') {
		delControle($connect, $id_usuario);
		
		header("Location: ../perfil/geral.php");
	}