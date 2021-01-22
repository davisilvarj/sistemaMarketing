<?php
	include "../banco/connect.php";
	include "../banco/upDados.php";
	
	$id_pedido   =  $_POST['file'];
		$nome	 =  $_POST['nome'];
	$telefone	 =  $_POST['telefone'];
		$ramal	 =  $_POST['ramal'];
	$dt_evento	 =  $_POST['dt_evento'];
	$desc_pedido = 	$_POST['desc_pedido'];

	/*PUBLICO*/	
		if(array_key_exists('funcionario', $_POST)){
				$funcionario =	1;
			}else{
				$funcionario =	0;
			}

			if(array_key_exists('nv_aluno', $_POST)){
				$nv_aluno =	1;
			}else{
				$nv_aluno =	0;
			}

			if(array_key_exists('professor', $_POST)){
				$professor =	1;
			}else{
				$professor =	0;
			}

			if(array_key_exists('aluno', $_POST)){
				$aluno =	1;
			}else{
				$aluno =	0;
			}

	/*OBJETIVO*/
		if(array_key_exists('comunica', $_POST)){
			$comunica =	1;
		}else{
			$comunica =	0;
		}
		if(array_key_exists('divulga', $_POST)){
			$divulga =	1;
		}else{
			$divulga =	0;
		}

	/*EVENTO*/
		if(array_key_exists('cf_evento', $_POST)){
				$cf_evento =	1;
				$cod_evento = $_POST['cod_evento'];
			}else{
				$cf_evento =	0;
			}

	/*REDES SOCIAIS*/
		if(array_key_exists('face', $_POST)){
				$face =	1;
			}else{
				$face =	0;
			}
			if(array_key_exists('insta', $_POST)){
				$insta =	1;
			}else{
				$insta=	0;
			}
			if(array_key_exists('linkedin', $_POST)){
				$linkedin =	1;
			}else{
				$linkedin =	0;
			}
			if(array_key_exists('whatsapp', $_POST)){
				$whatsapp =	1;
			}else{
				$whatsapp =	0;
			}		
			
	/*BANNER*/
		$cf_banner = $_POST['cf_banner'];
		if($cf_banner == 1){
			$tam_banner = $_POST['tam_banner'];
			$orient_banner = $_POST['orient_banner'];
			$qnt_banner =	$_POST['qnt_banner'];
			$desc_banner = $_POST['desc_banner'];	

			upBanner($connect, $tam_banner, $orient_banner, $qnt_banner, $desc_banner, $id_pedido);
		}

	/*BACKDROP*/
		$cf_backdrop = $_POST['cf_backdrop'];
		if($cf_backdrop==1){
			$larg_backdrop = $_POST['larg_backdrop'];
			$alt_backdrop = $_POST['alt_backdrop'];
			$desc_backdrop = $_POST['desc_backdrop'];

			upBackdrop($connect, $larg_backdrop, $alt_backdrop, $desc_backdrop, $id_pedido);
		}	

	/*CARTAO*/
		$cf_cartao = $_POST['cf_cartao'];

		if($cf_cartao == 1){
			$desc_cartao = $_POST['desc_cartao'];
			upCartao($connect, $desc_cartao, $id_pedido);
		}	
	
	/*CARTAZ*/
		$cf_cartaz = $_POST['cf_cartaz'];
		if($cf_cartaz == 1){
			$tam_cartaz = $_POST['tam_cartaz'];
			$orient_cartaz = $_POST['orient_cartaz'];
			$desc_cartaz = $_POST['desc_cartaz'];

			if(array_key_exists('imp_cartaz', $_POST)){
			$imp_cartaz =	1;
			$qnt_cartaz = $_POST['qnt_cartaz'];
				}else{
				$imp_cartaz =	0;
				$qnt_cartaz = 0;
			}

			if(array_key_exists('env_cartaz', $_POST)){
				$env_cartaz =	1;
				}else{
				$env_cartaz =	0;
			}

		upCartaz($connect, $tam_cartaz, $orient_cartaz, $imp_cartaz, $env_cartaz, $qnt_cartaz, $desc_cartaz, $id_pedido);
		}

	/*FOLDER*/

	
	/*CAMISA*/
		$cf_camisa = $_POST['cf_camisa'];
		if($cf_camisa == 1){
			$tp_camisa = $_POST['tp_camisa'];
			$camisa_cor = $_POST['camisa_cor'];
			$qnt_masc_p = $_POST['qnt_masc_p'];
			$qnt_masc_m = $_POST['qnt_masc_m'];
			$qnt_masc_g = $_POST['qnt_masc_g'];
			$qnt_masc_eg = $_POST['qnt_masc_eg'];
			$qnt_fem_p = $_POST['qnt_fem_p'];
			$qnt_fem_m = $_POST['qnt_fem_m'];
			$qnt_fem_g = $_POST['qnt_fem_g'];
			$qnt_fem_eg = $_POST['qnt_fem_eg'];
			$desc_camisa = $_POST['desc_camisa'];

			upCamisa($connect, $tp_camisa, $camisa_cor, $qnt_masc_p, $qnt_masc_m, $qnt_masc_g, $qnt_masc_eg, $qnt_fem_p, $qnt_fem_m, $qnt_fem_g, $qnt_fem_eg, $desc_camisa, $id_pedido);
		}	
	
	/*FLYER*/
		$cf_flyer = $_POST['cf_flyer'];
		if($cf_flyer==1){
			$tam_flyer		= 	$_POST['tam_flyer'];
			$orient_flyer	= 	$_POST['orient_flyer'];
			$imp_flyer		=	$_POST['imp_flyer'];
			$qnt_flyer		=	$_POST['qnt_flyer'];
			$desc_flyer		=	$_POST['desc_flyer'];

			upFlyer($connect, $tam_flyer, $orient_flyer,  $imp_flyer, $qnt_flyer, $desc_flyer, $id_pedido);
		}	
	
	/*PLACA*/
		$cf_placa = $_POST['cf_placa'];
		if($cf_placa == 1){
			$imp_placa = $_POST['imp_placa'];
			$qnt_placa = $_POST['qnt_placa'];
			$env_placa = $_POST['env_placa'];
			$desc_placa	= $_POST['desc_placa'];

			upPlaca($connect, $imp_placa, $qnt_placa, $env_placa, $desc_placa, $id_pedido);
		}	

    /*CONVITE*/
	    $cf_convite = $_POST['cf_convite'];
	   
	    if($cf_convite == 1){
	    	$tam_convite 	= 	$_POST['tam_convite'];
			$orient_convite	= 	$_POST['orient_convite'];
			$imp_convite	= 	$_POST['imp_convite'];
			$qnt_convite	= 	$_POST['qnt_convite'];
			$env_convite	=	$_POST['env_convite'];
			$desc_convite 	= 	$_POST['desc_convite'];		

			upConvite($connect, $tam_convite, $orient_convite, $imp_convite, $qnt_convite,$env_convite, $desc_convite, $id_pedido);			
		}
			
	/*DEMAIS EVENTOS*/

		$cf_midia = $_POST['cf_midia'];
		$cf_email = $_POST['cf_email'];
		$cf_site  = $_POST['cf_site'];
		$cf_sympla = $_POST['cf_sympla'];
		$lv_face	= $_POST['lv_face'];
		$lv_youtube	= $_POST['lv_youtube'];

		

	if(upPedido($connect, $desc_pedido, $cf_evento, $cod_evento, $id_pedido)
		and upSolicitante($connect, $nome, $telefone, $ramal, $id_pedido)
		and upData($connect, $dt_evento, $id_pedido)
		and upPublico($connect, $funcionario, $nv_aluno, $professor, $aluno, $id_pedido)
		and upObjetivo ($connect, $comunica, $divulga, $id_pedido)
		and upSociais($connect, $face, $insta, $linkedin, $whatsapp, $id_pedido)
		and upEvento($connect, $cf_midia, $cf_email, $cf_site, $cf_sympla, $lv_face, $lv_youtube, $id_pedido)){			
			header("Location: ../pages/pedido.php?file=$id_pedido");
		}else {
		$msg = mysqli_error($connect);
		echo $msg;
	}