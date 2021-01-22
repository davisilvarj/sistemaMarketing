<?php
	include "../regras/alertShow.php";
	include "../banco/acessoBanco.php";
	
	$servico = $_POST['accordion'];


if( $servico == null){
	$_SESSION["danger"] = "Selecione pelo menos um serviço";
	header("Location: ".$_SERVER['HTTP_REFERER']."");
}else{
	$drt			=	$_POST['drt'];
	$nome			= 	$_POST['nome'];	
	$email			=	$_POST['email'];
	$telefone		= 	$_POST['telefone'];
	$ramal			=	$_POST['ramal'];
	$dt_evento		=	$_POST['dt_evento'];
	$desc_pedido	=	$_POST['descricao'];
	$cf_evento		=	$_POST['cf_evento'];
	$cod_evento		=	$_POST['cod_evento'];
	$dt_evento		=	$_POST['dt_evento'];
	$dt_pedido		=   date("d/m/Y");

	/*CONFIRMAÇÂO PUBLICO ALVO*/

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
	
	/*CONFIRMAÇÂO OBJETIVO*/
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

	
	/*CONFIRMAÇÂO SERVIÇOS*/
		switch ($servico){
			/*CONFIRMAÇÂO NEWS*/	
			case 'jornal':
				if(array_key_exists('news', $_POST)){
					$news =	1;
				}else{
					$news =	0;
				}	
			break;

			/*CONFIRMAÇÃO REDES SOCIAIS*/
			case 'social':	
				$cf_social = 1;	
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
			break;

			/*CONFIRMAÇÂO TV INDOOR*/
			case 'tv_indoor':
				if(array_key_exists('tv_indoor', $_POST)){
					$tv_indoor =	1;
				}else{
					$tv_indoor =	0;
				}
		
			break;
			/*CONFIRMAÇÂO EMAIL MARKETING*/
			case 'email':
				if(array_key_exists('email_mark', $_POST)){
					$email_mark =	1;
				}else{
					$email_mark =	0;
				}
			break;
			
			/*CONFIRMAÇÂO SITE*/	
			case 'site':
				if(array_key_exists('site', $_POST)){
					$site =	1;
				}else{
					$site =	0;
				}
			break;

			/*CONFIRMAÇÂO PROJETO GRAFICO*/	
			case 'grafico':
				/*BANNER*/
				if(array_key_exists('emp_banner', $_POST)){

					$cf_banner =	1;
					$tam_banner = $_POST['tam_banner'];
					$orient_banner = $_POST['orient_banner'];
					$qnt_banner =	$_POST['qnt_banner'];
					$desc_banner = $_POST['desc_banner'];	
					
					inserirBanner($connect, $tam_banner, $orient_banner, $qnt_banner, $desc_banner, $cf_banner, $fk_pedido);
					}else{
						$cf_banner =	0;
				}
				
				/*BACKDROP*/
				if(array_key_exists('emp_backdrop', $_POST)){
					$cf_backdrop =	1;
					$larg_backdrop = $_POST['larg_backdrop'];
					$alt_backdrop = $_POST['alt_backdrop'];
					$desc_backdrop = $_POST['desc_backdrop'];

					inserirBackdrop($connect, $larg_backdrop, $alt_backdrop, $desc_backdrop, $cf_backdrop, $fk_pedido);
					}else{
						$cf_backdrop =	0;
				}

				/*CARTAZ*/	
				if(array_key_exists('emp_cartaz', $_POST)){
					$cf_cartaz =	1;
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
					inserirCartaz($connect, $tam_cartaz, $orient_cartaz, $imp_cartaz, $env_cartaz, $qnt_cartaz, $desc_cartaz, $cf_cartaz, $fk_pedido);
				}

				/*FOLDER*/
				if(array_key_exists('emp_folder', $_POST)){	
					$cf_folder = 1;
					
					$esc_folder = $_POST['esc_folder'];
					$qnt_folder = $_POST['qnt_folder'];	
					$desc_folder = $_POST['desc_folder'];	
					
					if($esc_folder == '1'){
						$def_marketing = 1;	
					}

					if($esc_folder == '2'){
						$def_solicitante = 1;
						$tp_folder	= $_POST['tp_folder'];
						$orient_folder = $_POST['orient_folder'];	
					}
					inserirFolder($connect, $def_marketing, $def_solicitante, $orient_folder, $tp_folder, $qnt_folder, $desc_folder, $cf_folder, $fk_pedido);
				}

				
				/*CAMISA*/
				if(array_key_exists('emp_camisa' , $_POST)){
					$cf_camisa = 1;
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
					
					inserirCamisa($connect, $tp_camisa, $camisa_cor, $qnt_masc_p, $qnt_masc_m, $qnt_masc_g, $qnt_masc_eg, $qnt_fem_p, $qnt_fem_m, $qnt_fem_g, $qnt_fem_eg, $desc_camisa, $cf_camisa, $fk_pedido);
				}
				

				/*CARTAO*/	
				if(array_key_exists('emp_cartao' , $_POST)){
					$cf_cartao = 1;
					$desc_cartao = $_POST['desc_cartao'];
				
					inserirCartao($connect, $desc_cartao, $cf_cartao, $fk_pedido);
				}
					
				/*CONVITE*/	
				if(array_key_exists('emp_convite' , $_POST)){
					$cf_convite = 1;
					$tam_convite 	= 	$_POST['tam_convite'];
					$orient_convite	= 	$_POST['orient_convite'];
					$imp_convite	= 	$_POST['imp_convite'];
					$qnt_convite	= 	$_POST['qnt_convite'];
					$env_convite	=	$_POST['env_convite'];
					$desc_convite 	= 	$_POST['desc_convite'];					
					
					inserirConvite($connect, $tam_convite, $orient_convite, $imp_convite, $qnt_convite,$env_convite, $desc_convite, $cf_convite, $fk_pedido);
				}

				/*FLYER*/	
				if(array_key_exists('emp_adesivo' , $_POST)){
					$cf_flyer	=	1;
					$tam_flyer		= 	$_POST['tam_flyer'];
					$orient_flyer	= 	$_POST['orient_flyer'];
					$imp_flyer		=	$_POST['imp_flyer'];
					$qnt_flyer		=	$_POST['qnt_flyer'];
					$desc_flyer		=	$_POST['desc_flyer'];
				
					inserirFlyer($connect, $tam_flyer, $orient_flyer,  $imp_flyer, $qnt_flyer, $desc_flyer, $cf_flyer, $fk_pedido);
				}

				/*PLACA*/
				if(array_key_exists('emp_placa' , $_POST)){
					$cf_placa = 1;

					$imp_placa = $_POST['imp_placa'];
					$qnt_placa = $_POST['qnt_placa'];
					$env_placa = $_POST['env_placa'];
					$desc_placa	= $_POST['desc_placa'];

					inserirPlaca($connect, $imp_placa, $qnt_placa, $env_placa, $desc_placa, $cf_placa, $fk_pedido);
				}

				/*EVENTOS*/
				if(array_key_exists('emp_evento' , $_POST)){
					$conf_evento = 1;

					$cf_midia = $_POST['cf_midia'];
					$cf_email = $_POST['cf_email'];
					$cf_site  = $_POST['cf_site'];
					$cf_sympla = $_POST['cf_sympla'];
					$lv_face	= $_POST['lv_face'];
					$lv_youtube	= $_POST['lv_youtube'];

					inserirEvento($connect, $cf_midia, $cf_email, $cf_site, $cf_sympla, $lv_face, $lv_youtube, $conf_evento, $fk_pedido);
				}
			break;
		}
	
	/*UPLOAD*/
		if(isset($_FILES['arquivo'])){

			$nome_arq = $_FILES['arquivo']['name'];

			$point = substr($nome_arq, -4,1);

			if($point == '.'){
				$extencao = strtolower(substr($nome_arq, -4));
			}else{
				$extencao = strtolower(substr($nome_arq, -5));
			}
			
			$novo_nome = md5(time()).$extencao;

			$local = '../upload/';

			if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $local.$novo_nome)){
				$img = mysqli_query($connect,"INSERT INTO arquivo (nome_arq, doc, fk_pedido) values ('{$nome_arq}','{$novo_nome}', '{$fk_pedido}')");
				
			}else{
				$msg = mysqli_error($connect);
				echo $msg;
				echo "Algum erro ocorreu";
			}
		}

	/*DADOS GERAIS*/
	if(inserirSolicitante($connect, $drt, $nome, $email, $telefone, $ramal, $fk_pedido) 
		and inserirPedido($connect, $desc_pedido, $cf_evento, $cod_evento, $fk_pedido) 
		and inserirPublico($connect, $funcionario, $nv_aluno, $professor, $aluno, $fk_pedido) 
		and inserirObjetivo($connect, $comunica, $divulga, $fk_pedido)
		and inserirServico($connect, $news, $tv_indoor, $email_mark, $site, $fk_pedido) 
		and inserirSocial($connect, $face, $insta, $linkedin, $whatsapp, $cf_social, $fk_pedido)
		and	inserirData($connect, $dt_evento, $dt_pedido, $fk_pedido)
		){
			$_SESSION["success"] = "Pedido Solicitado";
			header("Location: ../perfil/geral.php");
		}else{
			$msg = mysqli_error($connect);
			echo $msg;
	}

$setor = $_POST['setor'];
require "email_envio.php";
}











