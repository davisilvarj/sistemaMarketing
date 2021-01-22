<?php 
	include "../banco/acessoBanco.php";

	$id_pedido = $_POST['id_pedido'];
	$dt_inicial = date("d/m/Y");
	$drt_inicial = $_POST['drt'];
	$cf_inicial = $_POST['cf_inicial'];
	$status = 'Inicializado';

if($cf_inicial == 1){
	if(inserirInicial($connect, $dt_inicial, $drt_inicial, $cf_inicial, $id_pedido)
		and upInicial($connect, $status, $id_pedido)){

		header("Location: ../pages/pedido.php?file=$id_pedido");
	}else{
			$msg = mysqli_error($connect);
			echo $msg;
	}
	require "email_inicia.php";
}

