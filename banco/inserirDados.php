<?php
	function inserirFuncionario($connect, $nome, $drt, $email, $funcao){
		$query = "insert into usuarios (nome, drt_user, email, funcao) values ('{$nome}','{$drt}','{$email}','{$funcao}')";
		return mysqli_query($connect, $query);
	}

	function inserirSolicitante ($connect, $drt, $nome, $email, $telefone, $ramal, $fk_pedido){
		$query 	= "insert into solicitante (drt, nome, email, telefone, ramal, fk_pedido) values ('{$drt}','{$nome}','{$email}','{$telefone}','{$ramal}','{$fk_pedido}')";
		return mysqli_query($connect, $query);
	}

	function inserirPedido($connect, $desc_pedido, $cf_evento, $cod_evento, $fk_pedido){
		$query = "insert into pedido (id_pedido, desc_pedido, cf_evento, cod_evento) values ('{$fk_pedido}','{$desc_pedido}', '{$cf_evento}', '{$cod_evento}')";
		return mysqli_query($connect, $query);
	}

	function inserirPublico($connect, $funcionario, $nv_aluno, $professor, $aluno, $fk_pedido){
		$query = "insert into publico (funcionario, nv_aluno, professor, aluno, fk_pedido) values ('{$funcionario}', '{$nv_aluno}', '{$professor}', '{$aluno}', '{$fk_pedido}')";
		return mysqli_query($connect, $query);	
	}

	function inserirObjetivo($connect, $comunica, $divulga, $fk_pedido){
		$query = "insert into objetivo (comunica, divulga, fk_pedido) values ('{$comunica}', '{$divulga}', '{$fk_pedido}')";
		return mysqli_query($connect, $query);	
	}
	function inserirData($connect, $dt_evento, $dt_pedido, $fk_pedido){
		$query = "insert into data (dt_evento, dt_pedido, fk_pedido) values ('{$dt_evento}', '{$dt_pedido}', '{$fk_pedido}')";
		return mysqli_query($connect, $query);			
	}
	function inserirServico($connect, $news, $tv_indoor, $email_mark, $site, $fk_pedido){
		$query = "insert into servico (news, tv_indoor, email_mark, site, fk_pedido) values ('{$news}', '{$tv_indoor}', '{$email_mark}', '{$site}', '{$fk_pedido}')";
		return mysqli_query($connect, $query);			
	}

	function inserirSocial($connect, $face, $insta, $linkedin, $whatsapp, $cf_social, $fk_pedido){
		$query = "insert into rd_sociais (face, insta, linkedin, whatsapp, cf_social, fk_pedido) values ('{$face}', '{$insta}', '{$linkedin}', '{$whatsapp}', '{$cf_social}', '{$fk_pedido}')";
		return mysqli_query($connect, $query);			
	}

	function inserirBanner($connect, $tam_banner, $orient_banner, $qnt_banner, $desc_banner, $cf_banner, $fk_pedido){
		$query = "insert into proj_banner(tam_banner, orient_banner, qnt_banner, desc_banner, cf_banner, fk_pedido) 
			values ('{$tam_banner}', '{$orient_banner}', '{$qnt_banner}','{$desc_banner}', '{$cf_banner}', '{$fk_pedido}')";
		return mysqli_query($connect, $query);
	}

	function inserirBackdrop($connect, $larg_backdrop, $alt_backdrop, $desc_backdrop, $cf_backdrop, $fk_pedido){
		$query = "insert into proj_backdrop (larg_backdrop, alt_backdrop, desc_backdrop, cf_backdrop, fk_pedido) values ('{$larg_backdrop}', '{$alt_backdrop}', '{$desc_backdrop}','{$cf_backdrop}','{$fk_pedido}')";
		return mysqli_query($connect, $query);
	}

	function inserirCartaz($connect, $tam_cartaz, $orient_cartaz, $imp_cartaz, $env_cartaz, $qnt_cartaz, $desc_cartaz, $cf_cartaz,$fk_pedido){
		$query = "insert into proj_cartaz (tam_cartaz, orient_cartaz, imp_cartaz, env_cartaz, qnt_cartaz, desc_cartaz, cf_cartaz, fk_pedido) 
			values ('{$tam_cartaz}', '{$orient_cartaz}','{$imp_cartaz}', '{$env_cartaz}', '{$qnt_cartaz}', '{$desc_cartaz}', '{$cf_cartaz}', '{$fk_pedido}')";
		return mysqli_query($connect, $query);
	}

	function inserirFolder($connect, $def_marketing, $def_solicitante, $orient_folder, $tp_folder, $qnt_folder, $desc_folder, $cf_folder, $fk_pedido){
		$query = "insert into proj_folder (def_marketing, def_solicitante, orient_folder, tp_folder, qnt_folder, desc_folder, cf_folder, fk_pedido)
			values ('{$def_marketing}','{$def_solicitante}', '{$orient_folder}', '{$tp_folder}', '{$qnt_folder}', '{$desc_folder}', '{$cf_folder}', '{$fk_pedido}')";
		return mysqli_query($connect, $query);		
	}

	function inserirFlyer($connect, $tam_flyer, $orient_flyer,  $imp_flyer, $qnt_flyer, $desc_flyer, $cf_flyer, $fk_pedido){
		$query = "insert into proj_flyer (tam_flyer, orient_flyer, imp_flyer, qnt_flyer, desc_flyer, cf_flyer, fk_pedido) values ('{$tam_flyer}','{$orient_flyer}', '{$imp_flyer}', '{$qnt_flyer}', '{$desc_flyer}', '{$cf_flyer}', '{$fk_pedido}')";
		return mysqli_query($connect, $query);
	}

	function inserirConvite($connect, $tam_convite, $orient_convite, $imp_convite, $qnt_convite, $env_convite, $desc_convite, $cf_convite, $fk_pedido){
		$query = "insert into proj_convite (tam_convite, orient_convite, imp_convite, qnt_convite, env_convite, desc_convite, cf_convite, fk_pedido) values ('{$tam_convite}', '{$orient_convite}','{$imp_convite}', '{$qnt_convite}', '{$env_convite}', '{$desc_convite}', '{$cf_convite}', '{$fk_pedido}')";
		return mysqli_query($connect, $query);
	}

	function inserirCamisa($connect, $tp_camisa, $camisa_cor, $qnt_masc_p, $qnt_masc_m, $qnt_masc_g, $qnt_masc_eg, $qnt_fem_p, $qnt_fem_m, $qnt_fem_g, $qnt_fem_eg, $desc_camisa, $cf_camisa, $fk_pedido){
		$query = "insert into proj_camisa (tp_camisa, camisa_cor, qnt_masc_p, qnt_masc_m,  qnt_masc_g, qnt_masc_eg, qnt_fem_p, qnt_fem_m, qnt_fem_g, qnt_fem_eg, desc_camisa, cf_camisa, fk_pedido) values ('{$tp_camisa}','{$camisa_cor}', '{$qnt_masc_p}', '{$qnt_masc_m}', '{$qnt_masc_g}', '{$qnt_masc_eg}', '{$qnt_fem_p}', '{$qnt_fem_m}', '{$qnt_fem_g}', '{$qnt_fem_eg}', '{$desc_camisa}', '{$cf_camisa}', '{$fk_pedido}')";
		return mysqli_query($connect, $query);			
	}

	function inserirCartao($connect, $desc_cartao, $cf_cartao, $fk_pedido){
		$query = "insert into proj_cartao (desc_cartao, cf_cartao, fk_pedido) values ('{$desc_cartao}', '{$cf_cartao}','{$fk_pedido}')";
		return mysqli_query($connect, $query);
	}


	function inserirPlaca($connect, $imp_placa, $qnt_placa, $env_placa, $desc_placa, $cf_placa, $fk_pedido){
		$query = "insert into proj_placa (imp_placa, qnt_placa, env_placa, desc_placa, cf_placa, fk_pedido) values ('{$imp_placa}','{$qnt_placa}','{$env_placa}', '{$desc_placa}', '{$cf_placa}', '{$fk_pedido}')";
		return mysqli_query($connect, $query);	
	}

	function inserirEvento($connect, $cf_midia, $cf_email, $cf_site, $cf_sympla, $lv_face, $lv_youtube, $conf_evento, $fk_pedido){
		$query = "insert into proj_evento (cf_midia, cf_email, cf_site, cf_sympla, lv_face, lv_youtube, cf_evento, fk_pedido)
		 values ('{$cf_midia}', '{$cf_email}', '{$cf_site}', '{$cf_sympla}', '{$lv_face}', '{$lv_youtube}', '{$conf_evento}', '{$fk_pedido}')";
		return mysqli_query($connect, $query);		
	}

	function inserirJust($connect, $dt_just, $drt_just, $desc_just, $id_pedido){
		$query = "insert into justificativa (dt_just, drt_just, desc_just, fk_pedido) values ('{$dt_just}', '{$drt_just}', '{$desc_just}', '{$id_pedido}')";
		return mysqli_query($connect, $query);			
	}

	function inserirTrat($connect, $dt_trat, $colab_drt, $conf_trat, $id_pedido){
		$query = "insert into data_trat (dt_trat, drt_trat, conf_trat, fk_pedido) values ('{$dt_trat}', '{$colab_drt}', '{$conf_trat}', '{$id_pedido}')";
		return mysqli_query($connect, $query);

	}

	function inserirInicial($connect, $dt_inicial, $drt_inicial, $cf_inicial, $id_pedido){
		$query = "insert into data_inicia (dt_inicial, drt_inicial, cf_inicial, fk_pedido) values ('{$dt_inicial}','{$drt_inicial}', '{$cf_inicial}', '{$id_pedido}')";
		return mysqli_query($connect, $query);
	}

	function inserirDirecao($connect, $drt_dir, $dt_dir, $conf_dir, $id_pedido){
		$query = "insert into direcao (drt_dir, dt_dir, conf_dir, fk_pedido)values('{$drt_dir}', '{$dt_dir}', '{$conf_dir}', '{$id_pedido}')";
		return mysqli_query($connect, $query);
	}