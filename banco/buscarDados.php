<?php
	function buscarUsuarios($connect){
		$usuarios = array();
		$resultUsuario = mysqli_query($connect, "select * from usuarios");
		while ($usuario = mysqli_fetch_assoc($resultUsuario)){
			array_push($usuarios, $usuario);
		}
		return $usuarios;
	}

	function buscaUsuario($connect, $drt){
		$usuarios = array();
		$resultUsuario = mysqli_query($connect, "select * from usuarios
			where drt_user = $drt");
		while ($usuario = mysqli_fetch_assoc($resultUsuario)){
			array_push($usuarios, $usuario);
		}
		return $usuarios;
	}

	function buscaColab($connect, $colab_drt){
		$setores = array();
		$resultSetor = mysqli_query($connect, "select * from usuarios
			where drt_user = '{$colab_drt}'");
			while ($setor = mysqli_fetch_assoc($resultSetor)){
			array_push($setores, $setor);
		}
		return $setores;
	}

	function buscaSetor($connect, $setor){
	$setores = array();
	$resultSetor = mysqli_query($connect, "select * from usuarios
		where funcao = '{$setor}'");
			while ($setor = mysqli_fetch_assoc($resultSetor)){
			array_push($setores, $setor);
		}
		return $setores;
	}

	function buscaFuncao($connect){
		$funcoes = array();
		$resultFuncao = mysqli_query($connect, "select * from funcoes");
			while ($funcao = mysqli_fetch_assoc($resultFuncao)){
			array_push($funcoes, $funcao);
		}
		return $funcoes;
	}

	function buscaJust($connect, $id_pedido){
		$justs = array();
		$resultJust = mysqli_query($connect, "select  * from justificativa j
			where j.fk_pedido = '{$id_pedido}'
			order by j.id_just desc");
			while ($just = mysqli_fetch_assoc($resultJust)){
			array_push($justs, $just);
		}
		return $justs;
	}

	function buscaDirecao($connect, $id_pedido){
		$direcoes = array();
		$resultDirecao = mysqli_query($connect, "select * from direcao");
			while ($direcao = mysqli_fetch_assoc($resultDirecao)){
			array_push($direcoes, $direcao);
		}
		return $direcoes;
	}

	function buscaPedido($connect, $id_pedido){
		$pedidos = array();
		$result_pedido = mysqli_query($connect, "select * from pedido p
			left join justificativa just on just.fk_pedido = p.id_pedido
			left join solicitante s on s.fk_pedido = p.id_pedido
			left join publico pub on pub.fk_pedido = p.id_pedido
			left join objetivo o on o.fk_pedido = p.id_pedido
			left join servico sv on sv.fk_pedido = p.id_pedido
			left join data d on d.fk_pedido = p.id_pedido
			left join data_trat dt on dt.fk_pedido = p.id_pedido
			left join data_inicia di on di.fk_pedido = p.id_pedido
			left join direcao dir on dir.fk_pedido = p.id_pedido
			left join arquivo arq on arq.fk_pedido = p.id_pedido
			left join rd_sociais rs on rs.fk_pedido = p.id_pedido
			left join proj_banner bn on bn.fk_pedido = p.id_pedido
			left join proj_camisa cm on cm.fk_pedido = p.id_pedido
			left join proj_cartao ct on ct.fk_pedido = p.id_pedido
			left join proj_cartaz cr on cr.fk_pedido = p.id_pedido
			left join proj_convite cv on cv.fk_pedido = p.id_pedido
			left join proj_evento ev on ev.fk_pedido = p.id_pedido
			left join proj_flyer fy on fy.fk_pedido = p.id_pedido
			left join proj_folder fl on fl.fk_pedido = p.id_pedido
			left join proj_placa pl on pl.fk_pedido = p.id_pedido 
			left join proj_backdrop back on back.fk_pedido = p.id_pedido
			where p.id_pedido = $id_pedido");
		while($pedido = mysqli_fetch_assoc($result_pedido)){
			array_push($pedidos, $pedido);
		}
		return $pedidos;
	}
	



	