<?php
	include "../banco/acessoBanco.php";

	$fk_pedido = $_REQUEST['file'];
	$button =	$_POST['button'];

	echo "TESTANDO FACE DE EXCLUSÃO DE DADOS </br>";

	if ($button == 'delete'){
		delPedido($connect, $fk_pedido);
		delSolicitante($connect, $fk_pedido);
		delData($connect, $fk_pedido);
		delDataIni($connect, $fk_pedido);
		delDataTrat($connect, $fk_pedido);
		delDirecao($connect, $fk_pedido);
		delPublico($connect, $fk_pedido);
		delObjetivo($connect, $fk_pedido);
		delServico($connect, $fk_pedido);
		delArquivo($connect, $fk_pedido);
		delSociais($connect, $fk_pedido);
		delBackdrop($connect, $fk_pedido);
		delBanner($connect, $fk_pedido);
		delCamisa($connect, $fk_pedido);
		delCartao($connect, $fk_pedido);
		delCartaz($connect, $fk_pedido);
		delConvite($connect, $fk_pedido);
		delEvento($connect, $fk_pedido);
		delFlyer($connect, $fk_pedido);
		delFolder($connect, $fk_pedido);
		delPlaca($connect, $fk_pedido);
		delJustificativa($connect, $fk_pedido);	

		$_SESSION ["danger"] = "O Pedido foi Deletado com Sucesso!";
		header("Location: ../perfil/geral.php");
		
	}


?>