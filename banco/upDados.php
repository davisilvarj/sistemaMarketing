<?php
	function upControle($connect, $nome, $drt, $email, $funcao, $id_usuario){
		$query = "update usuarios set nome = '{$nome}', drt_user = '{$drt}', email = '{$email}', funcao = '{$funcao}' where id_usuario = '{$id_usuario}'";
		return  mysqli_query($connect, $query);

	}

/*ATUALIZAÇÃO PEDIDO*/	
	function upPedido($connect, $desc_pedido, $cf_evento, $cod_evento, $id_pedido){
		$query = "update pedido set desc_pedido = '{$desc_pedido}', cf_evento = '{$cf_evento}', cod_evento = '{$cod_evento}'
			where id_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);
	}

	function upSolicitante($connect, $nome, $telefone, $ramal, $id_pedido){
		$query = "update solicitante set nome = '{$nome}', telefone = '{$telefone}', ramal = '{$ramal}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}

	function upData($connect, $dt_evento, $id_pedido){
		$query = "update data set dt_evento = '{$dt_evento}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}
	function upPublico($connect, $funcionario, $nv_aluno, $professor, $aluno, $id_pedido){
		$query = "update publico set funcionario = '{$funcionario}', nv_aluno = '{$nv_aluno}', professor = '{$professor}', aluno = '{$aluno}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);
	}

	function upObjetivo ($connect, $comunica, $divulga, $id_pedido){
		$query = "update objetivo set comunica = '{$comunica}', divulga = '{$divulga}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}

	function upSociais($connect, $face, $insta, $linkedin, $whatsapp, $id_pedido){
		$query = "update rd_sociais set face = '{$face}', insta = '{$insta}', linkedin = '{$linkedin}', whatsapp = '{$whatsapp}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}

	function upBanner($connect, $tam_banner, $orient_banner,$qnt_banner, $desc_banner, $id_pedido){
		$query = "update proj_banner set tam_banner = '{$tam_banner}', orient_banner = '{$orient_banner}', 
			qnt_banner ='{$qnt_banner}', desc_banner = '{$desc_banner}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}

	function upBackdrop($connect, $larg_backdrop, $alt_backdrop, $desc_backdrop, $id_pedido){
		$query = "update proj_backdrop set larg_backdrop = '{$larg_backdrop}', alt_backdrop = '{$alt_backdrop}', desc_backdrop = '{$desc_backdrop}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}
	function upCartaz($connect, $tam_cartaz, $orient_cartaz, $imp_cartaz, $env_cartaz, $qnt_cartaz, $desc_cartaz, $id_pedido){
		$query = "update proj_cartaz set tam_cartaz = '{$tam_cartaz}', orient_cartaz = '{$orient_cartaz}', imp_cartaz = '{$imp_cartaz}',
			env_cartaz = '{$env_cartaz}', qnt_cartaz = '{$qnt_cartaz}', desc_cartaz = '{$desc_cartaz}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}

	function upCamisa($connect, $tp_camisa, $camisa_cor, $qnt_masc_p, $qnt_masc_m, $qnt_masc_g, $qnt_masc_eg, $qnt_fem_p, $qnt_fem_m, $qnt_fem_g, $qnt_fem_eg, $desc_camisa, $id_pedido){
		$query = "update proj_camisa set tp_camisa = '{$tp_camisa}', camisa_cor = '{$camisa_cor}', qnt_masc_p = '{$qnt_masc_p}', qnt_masc_m = '{$qnt_masc_m}', qnt_masc_g = '{$qnt_masc_g}', qnt_masc_eg = '{$qnt_masc_eg}', qnt_fem_p = '{$qnt_fem_p}', qnt_fem_m = '{$qnt_fem_m}', qnt_fem_g = '{$qnt_fem_g}', qnt_fem_eg = '{$qnt_fem_eg}', desc_camisa = '{$desc_camisa}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}

	function upCartao($connect, $desc_cartao, $id_pedido){
		$query = "update proj_cartao set desc_cartao = '{$desc_cartao}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}

	function upFlyer($connect, $tam_flyer, $orient_flyer,  $imp_flyer, $qnt_flyer, $desc_flyer, $id_pedido)	{
		$query = "update proj_flyer set tam_flyer = '{$tam_flyer}', orient_flyer = '{$orient_flyer}', imp_flyer = '{$imp_flyer}', 
			qnt_flyer = '{$qnt_flyer}', desc_flyer = '{$desc_flyer}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}

	function upPlaca($connect, $imp_placa, $qnt_placa, $env_placa, $desc_placa, $id_pedido){
		$query = "update proj_placa set imp_placa = '{$imp_placa}', qnt_placa = '{$qnt_placa}', env_placa = '{$env_placa}', desc_placa = '{$desc_placa}'where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}

	function upConvite($connect, $tam_convite, $orient_convite, $imp_convite, $qnt_convite,$env_convite, $desc_convite, $id_pedido){
		$query = "update proj_convite set tam_convite = '{$tam_convite}', orient_convite = '{$orient_convite}', imp_convite = '{$imp_convite}', qnt_convite = '{$qnt_convite}', env_convite = '{$env_convite}', desc_convite = '{$desc_convite}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}

	function upEvento($connect, $cf_midia, $cf_email, $cf_site, $cf_sympla, $lv_face, $lv_youtube, $id_pedido){
		$query = "update proj_evento set cf_midia = '{$cf_midia}', cf_email = '{$cf_email}', cf_site = '{$cf_site}', cf_sympla = '{$cf_sympla}',
			lv_face = '{$lv_face}', lv_youtube = '{$lv_youtube}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}

	function upEntrega($connect, $dt_entrega, $status, $id_pedido){
		$query = "update data set dt_entrega = '{$dt_entrega}', status = '{$status}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}

	function upFinal($connect, $dt_final, $drt, $status, $id_pedido){
		$query = "update data set dt_finalizado = '{$dt_final}', drt_finalizou = '{$drt}', status = '{$status}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}

	function upInicial($connect, $status, $id_pedido){
		$query = "update data set  status = '{$status}'
			where fk_pedido = '{$id_pedido}'";
		return  mysqli_query($connect, $query);	
	}