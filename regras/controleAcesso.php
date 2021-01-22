<?php
	include "acessoUser.php";

	$drt = $_POST['drt'];
	$pass = $_POST['pass'];

	$ldap_dn =  $_POST['drt'].'@exemplo.br';
	
	$ldap_password = $_POST["pass"];
	
	$ldap_con = ldap_connect("ldap://exemplo.br");
	
	ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
	
	if($ldap_password == null){
		$_SESSION["danger"] = "Insira uma Senha Válida.";
		header("Location: ../estrutura/login.php");
	}else{	
		if (@ldap_bind($ldap_con, $ldap_dn, $ldap_password)){
		
			$_SESSION["success"] = "Usuário logado com sucesso.";
			logUser($drt);
			header("Location: ../perfil/geral.php");
		}else{
			$_SESSION["danger"] = "Usuário ou senha inválido.";
			header("Location: ../estrutura/login.php");
			die();
		}
	}	