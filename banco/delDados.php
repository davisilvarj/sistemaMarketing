<?php
/*USUARIO*/
	function delControle ($connect, $id_usuario){
		$query = "delete from usuarios where id_usuario = '{$id_usuario}'";
		return mysqli_query($connect, $query);
	}

/*PEDIDO*/
	function delPedido($connect, $fk_pedido){
		$query = "delete from pedido where pedido.id_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}
	
	function delSolicitante($connect, $fk_pedido){
		$query = "delete from solicitante where solicitante.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}

	function delData($connect, $fk_pedido){
			$query = "delete from data where data.fk_pedido = '{$fk_pedido}'";
			return mysqli_query($connect, $query);
		}

	function delDataIni($connect, $fk_pedido){
			$query = "delete from data_inicia where data_inicia.fk_pedido = '{$fk_pedido}'";
			return mysqli_query($connect, $query);
		}	

	function delDataTrat($connect, $fk_pedido){
		$query = "delete from data_trat where data_trat.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
		}

	function delPublico($connect, $fk_pedido){
			$query = "delete from publico where publico.fk_pedido = '{$fk_pedido}'";
			return mysqli_query($connect, $query);
		}
	
	function delObjetivo($connect, $fk_pedido){
			$query = "delete from objetivo where objetivo.fk_pedido = '{$fk_pedido}'";
			return mysqli_query($connect, $query);
		}

	function delServico($connect, $fk_pedido){
			$query = "delete from servico where servico.fk_pedido = '{$fk_pedido}'";
			return mysqli_query($connect, $query);
		}	
	

	function delArquivo($connect, $fk_pedido){
		$query = "delete from arquivo where arquivo.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}

	
	function delSociais($connect, $fk_pedido){
		$query = "delete from rd_sociais where rd_sociais.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}

			
	function delBackdrop($connect, $fk_pedido){
		$query = "delete from proj_backdrop where proj_backdrop.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}

	function delBanner($connect, $fk_pedido){
		$query = "delete from proj_banner where proj_banner.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}

	function delCamisa($connect, $fk_pedido){
		$query = "delete from proj_camisa where proj_camisa.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}

	function delCartao($connect, $fk_pedido){
		$query = "delete from proj_cartao where proj_cartao.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}

	function delCartaz($connect, $fk_pedido){
		$query = "delete from proj_cartaz where proj_cartaz.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}

	function delConvite($connect, $fk_pedido){
		$query = "delete from proj_convite where proj_convite.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}

	function delEvento($connect, $fk_pedido){
		$query = "delete from proj_evento where proj_evento.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}

	function delFlyer($connect, $fk_pedido){
		$query = "delete from proj_flyer where proj_flyer.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}

	function delFolder($connect, $fk_pedido){
		$query = "delete from proj_folder where proj_folder.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}

	function delPlaca($connect, $fk_pedido){
		$query = "delete from proj_placa where proj_placa.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
	}

	function delJustificativa($connect, $fk_pedido){
		$query = "delete from justificativa where justificativa.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
		}

	function delDirecao ($connect, $fk_pedido){
		$query = "delete from direcao where direcao.fk_pedido = '{$fk_pedido}'";
		return mysqli_query($connect, $query);
		}