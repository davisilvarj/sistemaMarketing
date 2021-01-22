<?php
	$pedidos = buscaPedido($connect, $id_pedido);

	$drt = userlog();
	$usuarios = buscaUsuario($connect, $drt);

	foreach ($usuarios as $usuario) {
		$funcao = $usuario['funcao'];
		$drt_user = $usuario['drt'];
	}

	foreach ($pedidos as $pedido) {
?>

<div class="areaformulario">
	<div class="card bg-secondary text-white">
		<div class="card-header text-center">
			<h2> Informações Gerais </h2>
		</div>
		<div class="card-body bg-white text-dark">
	
			<input type="hidden" name="file" value="<?= $pedido['id_pedido']?> ">

			<p>Nome: <?=$pedido['nome']?></p>
			<p>Telefone: <?=$pedido['telefone'] ?></p>
			<p>Ramal: <?=$pedido['ramal']?></p>
			<p>E-mail: <?=$pedido['email']?></p>
			<p>Data do Pedido: <?=$pedido['dt_pedido']?></p>
			<p>Data do Evento: <?=$pedido['dt_evento']?></p>
			<p>Status: <?=$pedido['status']?></p>
			<?php if($pedido['cf_evento']==1){?>
				<p>Esse pedido está relacionado ao evento: <?=$pedido['cod_evento']?> </p>
			<?php }?>
			<p>Arquivo: 
				<a href="../regras/download.php?file=<?=$pedido['doc']?>"><h5><?= $pedido['nome_arq']?></h5></a>
			</p>		
			<p>Publico Alvo: 
				<?php 
					if ($pedido['funcionario'] == 1) { echo "Funcionarios;"; }
					if ($pedido['nv_aluno'] == 1) { echo " Novos Alunos;"; }
					if ($pedido['professor'] == 1) { echo " Professores;"; }
					if ($pedido['aluno'] == 1) { echo " Alunos;"; }
				?>
			</p>
			<p>Objetivo: 
				<?php 
					if ($pedido['comunica'] == 1) { echo "Comunicação;"; }
					if ($pedido['divulga'] == 1) { echo " Divulgação;"; }
				?>
			</p>
			<p>Descrição Geral: <?=$pedido['desc_pedido']?></p>


			<div class="card-header bg-secondary text-white text-center">
				<h2> Serviço(s) Socilicitado(s): </h2>
			</div>
			<div class="card-body bg-white text-dark">
				<!-- SEVIÇOS -->
					<p>
						<?php 
							if ($pedido['news'] == 1) { echo "Cobertura Jornalística: News (Prazo - 3 dias);"; }
						?>
					</p>
					<p>
						<?php 
							if ($pedido['tv_indoor'] == 1) { echo "Tv Indoor (Prazo - 3 dias);"; }
						?>
					</p>
					<p>
						<?php 
							if ($pedido['email_mark'] == 1) { echo "Comunicação | E-mail Marketing (Prazo - 3 dias);"; }
						?>
					</p>
					<p>
						<?php 
							if ($pedido['site'] == 1) { echo "Conteúdo para Site: Atualizações site (Ex: substituições, documentos, notícias | Prazo - 2 dias);"; }
						?>
					</p>

				<!-- REDES SOCIAIS -->	
					<p>
						<?php 	
							if ($pedido['cf_social'] == 1){?>
								Redes Sociais: 
							<?php	
								if ($pedido['face'] == 1) { echo "Facebook;"; }
								if ($pedido['insta'] == 1) { echo " Instagram;"; }
								if ($pedido['linkedin'] == 1) { echo " Linkedin;"; }
								if ($pedido['whatsapp'] == 1) { echo " Whatsapp;"; }
							}
						?>
					</p>

				<!-- PROJETO BANNER -->	
					<p>
						<?php 	
							if ($pedido['cf_banner'] == 1){?>
							<h5>Projeto Grafico (Banner): 	</h5>
							<p>Tamanho: <?=$pedido['tam_banner']?></p>	
							<p>Orientação: <?=$pedido['orient_banner']?></p>
							<p>Quantidade: <?=$pedido['qnt_banner']?></p>
							<p>Descrição: <?=$pedido['desc_banner']?></p>
						<?php		
					 		}
					 	?>
					</p>

				<!-- PROJETO BACKDROP -->		
					<p>
						<?php 	
							if ($pedido['cf_backdrop'] == 1){?>
							<h5>Projeto Grafico (Backdrop): </h5>
							<p>Largura: <?=$pedido['larg_backdrop']?></p>	
							<p>Altura: <?=$pedido['alt_backdrop']?></p>
							<p>Descrição: <?=$pedido['desc_backdrop']?></p>
						<?php		
					 		}
					 	?>
					</p>

				<!-- PROJETO CAMISA -->
					<p>
						<?php 	
							if ($pedido['cf_camisa'] == 1){?>
							<h5>Projeto Grafico (Camisa): </h5>	
							<p>Tamanho: <?=$pedido['tp_camisa']?></p>	
							<p>Cor: <?=$pedido['camisa_cor']?></p>
							<p>Descrição: <?=$pedido['desc_camisa']?></p>
							<p>Quantidade de camisa Masculina:</p>
							<p>P: <?=$pedido['qnt_masc_p']?></p>
							<p>M: <?=$pedido['qnt_masc_m']?></p>
							<p>G: <?=$pedido['qnt_masc_g']?></p>
							<p>EG: <?=$pedido['qnt_masc_eg']?></p>
							<p>Quantidade de camisa Feminina:</p>
							<p>P: <?=$pedido['qnt_fem_p']?></p>
							<p>M: <?=$pedido['qnt_fem_m']?></p>
							<p>G: <?=$pedido['qnt_fem_g']?></p>
							<p>EG: <?=$pedido['qnt_fem_eg']?></p>							
						<?php		
					 		}
					 	?>
					</p>

				<!-- PROJETO CARTAO -->
					<p>
						<?php 	
							if ($pedido['cf_cartao'] == 1){?>
							<h5>Projeto Grafico (Cartão): </h5>
							<p>Descrição: <?=$pedido['desc_cartao']?></p>
						<?php		
					 		}
					 	?>
					</p>

				<!-- PROJETO CARTAZ -->
					<p>
						<?php 	
							if ($pedido['cf_cartaz'] == 1){?>
							<h5>Projeto Grafico (Cartaz): </h5>	
							<p>Tamanho: <?=$pedido['tam_cartaz']?></p>
							<p>Orientação: <?=$pedido['orient_cartaz']?></p>
								<?php if($pedido['imp_cartaz']==1){?>
									<p>Quantidade para impressão: <?=$pedido['qnt_cartaz']?></p>
								<?php }?>
								<?php if($pedido['env_cartaz']==1){?>
									<p>Solicitante deseja que seja enviado para o e-mail: <?=$pedido['email']?></p>
								<?php }?>		
							<p>Descrição: <?=$pedido['desc_cartaz']?></p>
						<?php		
					 		}
					 	?>
					</p>

				<!-- PROJETO CONVITE-->		
					<p>
						<?php 	
							if ($pedido['cf_convite'] == 1){?>
							<h5>Projeto Grafico (Convite): </h5>	
							<p>Tamanho: <?=$pedido['tam_convite']?></p>	
							<p>Orientação: <?=$pedido['orient_convite']?></p>
							<?php if($pedido['imp_convite']==1){?>
								<p>Quantidade para impressão: <?=$pedido['qnt_convite']?></p>
							<?php }?>
							<?php if($pedido['env_convite']==1){?>
								<p>Solicitante deseja que seja enviado para o e-mail: <?=$pedido['email']?></p>
							<?php }?>		
							<p>Descrição: <?=$pedido['desc_convite']?></p>
						<?php		
					 		}
					 	?>
					</p>	
				
				<!-- PROJETO FLYER-->		
					<p>
						<?php 	
							if ($pedido['cf_flyer'] == 1){?>
							<h5>Projeto Grafico (Flyer): </h5>	
							<p>Tamanho: <?=$pedido['tam_flyer']?></p>	
							<p>Orientação: <?=$pedido['orient_flyer']?></p>
							<p>Tipo de impressão: <?=$pedido['imp_flyer']?></p>
							<p>Quantidade para impressão: <?=$pedido['qnt_flyer']?></p>	
							<p>Descrição: <?=$pedido['desc_flyer']?></p>
						<?php		
					 		}
					 	?>
					</p>		
				
				<!-- PROJETO FOLDER-->		
					<p>
						<?php 	
							if ($pedido['cf_folder'] == 1){?>
							<h5>Projeto Grafico (Folder):</h5>
							<?php if($pedido['def_marketing'] == 1){?>
									<h6>Projeto será definido pelo Marketing. </h6>
								<?php } else{?> 	
									<p>Orientação: <?=$pedido['orient_folder']?></p>	
									<p>Tipo: <?=$pedido['tp_folder']?></p>										
								<?php }	?>
								<p>Quantidade: <?=$pedido['qnt_folder']?></p>	
								<p>Descrição: <?=$pedido['desc_folder']?></p>
					 		<?php }
					 	?>
					</p>

				<!-- PROJETO PLACA -->		
					<p>
						<?php 	
							if ($pedido['cf_placa'] == 1){?>
							<h5>Projeto Grafico (Placas e Sinalização Interna/Externa):</h5>
							 	<?php if($pedido['imp_placa']==1){?>
									<p>Quantidade para impressão: <?=$pedido['qnt_placa']?></p>
								<?php }?>
								<?php if($pedido['env_placa']==1){?>
									<p>Solicitante deseja que seja enviado para o e-mail: <?=$pedido['email']?></p>
								<?php }?>	
							<p>Descrição: <?=$pedido['desc_placa']?> </p>

						<?php		
					 		}
					 	?>
					</p>

				<!-- PROJETO EVENTO-->		
					<p>
						<?php 	
							if ($pedido['conf_evento'] == 1){?>
							<h5>Projeto Grafico (Evento): </h5>	
							<?php
								if ($pedido['cf_midia'] == 1){echo "Peça de Mídias Sociais - Feed e Stories; </br>";}
								if ($pedido['cf_email'] == 1){echo "E-mail Marketing; </br>";}
								if ($pedido['cf_site'] == 1){echo "Material Site; </br>";}
								if ($pedido['cf_sympla'] == 1){echo "Cadastro no Sympla; </br>";}
								if ($pedido['lv_face'] == 1){echo "Live pelo Stream Yard: Facebook; </br>";}
								if ($pedido['lv_youtube'] == 1){echo "Live pelo Stream Yard: Youtube; ";}
							?>								
						<?php		
					 		}
					 	?>
					</p>

				<!-- ÁREA JUSTIFICATIVA-->	
				<div class="card-header bg-secondary text-white text-center">
					<h2> Justificativas: </h2>
				</div>
				<div class="card-body bg-white text-dark">
					<?php 
						$id_pedido = $pedido['id_pedido'];
						$justs = buscaJust($connect, $id_pedido);
						foreach ($justs as $just){?>
							<div class="card-body border border-secondary rounded" style="margin:.5em 0;">
								<p>Drt: <?= $just['drt_just']?></p>
								<p>Data Justificativa: <?= $just['dt_just']?></p>
								<p>Justificativa: <?= $just['desc_just']?></p>
							</div>	
					<?php }?>	
				</div>		


				<!--BOTÕES PARA ATUALIZAÇÃO E EXCLUSÃO DO PEDIDO-->		
				<?php if(userlog() == $pedido['drt']){?>

					<div class="card form-row col-md-12" style="margin:.5em 0;">	
						<div class="form-row">
							<?php if($pedido['dt_trat'] != null){?>	
								<div class="card-body col-md-12">
									<h4 class="text-center">O pedido não pode ser mais modificado. Em caso de dúvida, favor entrar em contato com o Marketing através do Ramal: 5236.</h4>
									<button class="btn btn-primary "  style="margin: .5em;" disabled> Atualizar Pedido</button>
									<button class="btn btn-primary"  style="margin: .5em;" data-toggle="modal" data-target="#deleta"> Deletar Pedido</button>
								</div>		
							<?php }else {?>
								<div class="card-body col-md-12">
									<h4 class="text-center">A atualização só poderá ser feita até a inicialização para tratamento do serviço.</h4>
									<button class="btn btn-primary col-2" data-toggle="modal" data-target="#atualiza" style="margin: .5em;"> Atualizar Pedido</button>
									<button class="btn btn-primary col-2" data-toggle="modal" data-target="#deleta" style="margin: .5em; "> Deletar Pedido</button>
								</div>	
							<?php }?>
						</div>
					</div>
				<?php }?>
				

				<!--BOTÕES PARA ENVIO DO PEDIDO AOS COLABORADORES-->
				<?php 
					$func_colab = 'Colaborador(a)';
					$colabs = buscaSetor($connect, $func_colab);
					
					/*ACESSO ANALISTA CHEFE*/
					if($funcao == 'Analista Chefe'){?>	
					<div class="card form-row col-md-12" style="margin:.5em 0;">
						<h4>Selecione o colaborador que será responsável pela elaboração do pedido acima: </h4>	
						<div class="form-row">	
							<?php foreach($colabs as $colab){
								?>
									<form action="../regras/email_colab.php" method="post">
										<input type="hidden" name="id_pedido" value="<?= $pedido['id_pedido']?>">
										<?php if($colab['drt_user'] == $pedido['drt_trat']){?>
											<button class="btn btn-primary " disabled style="margin: .5em;"> <?= $colab['nome']?> </button>
										<?php }else{?>
											<button class="btn btn-primary " name="drt" value="<?= $colab['drt_user']?>" style="margin: .5em;"> <?= $colab['nome']?> </button>
										<?php }?>	
									</form>
							<?php }?>
						</div>	
					</div> 
				<?php }

					/*ACESSO COLABORADOR*/
					if($funcao == 'Colaborador(a)'){?>
						<div  style="height: 3em; margin:.5em 0;">	
							<?php if($pedido['cf_inicial'] == 0){?>
								<form class="col-md-12" action="../regras/regInicializa.php" method="post">
									<input type="hidden" name="id_pedido" value="<?=$pedido['id_pedido']?>">
									<input type="hidden" name="drt" value="<?=userlog()?>">
									<button class="btn btn-primary col-2" name="cf_inicial" value="1"> Inicializar Pedido</button>
								</form>
							<?php } else {
								$colab_drt = userlog();
								$colabs = buscaColab($connect, $colab_drt);
									foreach($colabs as $colab){}?>
							 
								<form class="col-md-12" action="../regras/regJustificativa.php" method="post">
									<input type="hidden" name="drt" value="<?=userlog()?>">
									<input type="hidden" name="cf_inicial" value="<?=$pedido['cf_inicial']?>">
									<input type="hidden" name="id_pedido" value="<?=$pedido['id_pedido']?>">
									<div class="bg-secondary col-md-12">
			        					<h3 class="card-title text-light">Justificativa: <?= $colab['nome']?> </h3>
			        				</div>
			        				<div class="form-row col-md-12">
										<label>Caso queira insira uma justificativa: </label>
										<textarea class=" form-control col-md-10" name="desc_just" style="width: 50vw; height: 20vh; margin: .5em 1em; text-align: justify;" ></textarea>
									</div>	
									<button class="btn btn-primary col-2">Ok</button>
								</form>
		
							<?php }?>	
						</div>	
				<?php }

					/*ACESSO ANALISTA CHEFE*/

					if($funcao == 'Analista Chefe'){
						$colab_drt = userlog();
						$colabs = buscaColab($connect, $colab_drt);

						foreach($colabs as $colab){	
							}?>
					<div class="card form-row col-md-12" style="margin: .5em 0;">
						<h4>Justificativa: </h4>
						<div class="form-row" >
							<form class="col-md-12" action="../regras/regJustAnalista.php" method="post">
								<input type="hidden" name="drt" value="<?=userlog()?>">
								<input type="hidden" name="cf_inicial" value="<?=$pedido['cf_inicial']?>">
								<input type="hidden" name="id_pedido" value="<?=$pedido['id_pedido']?>">
								<div class="bg-secondary col-md-12">
		        					<h3 class="card-title text-light">Justificativa: <?= $colab['nome']?> </h3>
		        				</div>
		        				<div class="form-row col-md-12">
									<label>Caso queira insira uma justificativa: </label>
									<textarea class=" form-control col-md-10" name="desc_just" style="width: 50vw; height: 20vh; margin: .5em 1em; text-align: justify;" ></textarea>
								</div>	
								<button class="btn btn-primary col-2">Ok</button>
							</form>
						</div>	
					</div>

					<!-- ENCAMINHAR
						<div class="card form-row col-md-12" style="margin:.5em 0;">
						<h4>Encaminhar para: </h4>	
						<div class="form-row" style="height: 3em; position: relative; align-items: right;">	
							<?php 
								$func_colab = 'Diretor/Coordenador';
						   		$dirs = buscaSetor($connect, $func_colab);
								foreach($dirs as $dir){
								if($dir['funcao']=='Diretor/Coordenador')?>
									<form action="../regras/email_direcao.php" method="post">
										<input type="hidden" name="id_pedido" value="<?= $pedido['id_pedido']?>">
											<button class="btn btn-primary " name="drt" value="<?= $dir['drt_user']?>" style="margin: .5em;  float: right; "> <?= $dir['nome']?></button>
									</form>	
							<?php }?>
						</div>	
					</div> -->					
										
					<div class="card form-row col-md-12" style="margin: .5em 0;">
						<h4>Deseja Finalizar / Entregar o pedido: </h4>	
						<div class="form-row" style="height: 3em;">
							<form action="../regras/regFinaliza.php" method="post">
								<input type="hidden" name="id_pedido" value="<?= $pedido['id_pedido']?>">
								<input type="hidden" name="drt" value="<?=userlog()?>">
								<?php if($pedido['dt_entrega'] != null){?>
									<button class="btn btn-primary " disabled style="margin: .5em;"> Entregar Pedido </button>
								<?php }else{?>
									<button class="btn btn-primary " name="send_final" value="Entregue" style="margin: .5em;"> Entregar Pedido </button>
								<?php }	
									if($pedido['dt_finalizado'] != null){?>
										<button class="btn btn-primary " disabled style="margin: .5em; "> Finalizar Pedido </button>
								<?php }else{?>
									<button class="btn btn-primary " name="send_final" value="Finalizado" style="margin: .5em;"> Finalizar Pedido </button>
								<?php }?>	
							</form>
						</div>	
					</div> 
				<?php }

						/*DETALHAMENTO DO PEDIDO*/
						if(($funcao == 'Analista Chefe')||($funcao == 'Diretor/Coordenador')){?>
							<div class="card form-row col-md-12" style="margin:.5em 0;">
								<h4>Detalhamento do Pedido: </h4>
								<p>Drt para tratamento: <?= $pedido['drt_trat']?></p>
								<p>Data de envio para tratamento: <?= $pedido['dt_trat']?></p>
								<p>Iniciado em: <?= $pedido['dt_inicial']?></p>
								<p>Iniciado por (DRT): <?= $pedido['drt_inicial']?></p>
								<p>Finalizado em: <?= $pedido['dt_finalizado']?></p>
								<p>Finalizado por (DRT): <?= $pedido['drt_finalizou']?></p>
								<p>Entregue em: <?= $pedido['dt_entrega']?></p>
							</div>	
					<?php }?>
					
			</div>
		</div>		
	</div>
</div>	

		<!-- ATUALIZAR-->
			<div class="modal" id="atualiza">
				<div class="modal-dialog">
				  <div class="modal-content"  style="width: 30vw;">   
				    <!-- Modal Header -->
				    <div class="modal-header">
				      <button type="button" class="close" data-dismiss="modal">×</button>
				    </div>
				    
				    <!-- Modal body -->
				    <div class="modal-body">
				      	<form action="../pages/atualiza.php" method="post"  enctype="multipart/form-data">
				      		<input type="hidden" name="file" value="<?= $pedido['id_pedido']?> ">
				      		<p>Deseja realmente atualizar esse pedido? </p>
							<div class="controle_button form-row">
								<button class="btn btn-primary col-2" name="button" value="atualiza" style="margin: .5em;"> Sim </button>
								<button class="btn btn-primary col-2" name="button" data-dismiss="modal" style="margin: .5em;"> Não </button>
							</div>		
				      	</form>
				    </div>
				  </div>
				</div>
			</div>	

		<!-- DELETAR -->
			<div class="modal" id="deleta">
				<div class="modal-dialog">
				  <div class="modal-content"  style="width: 30vw;">   
				    <!-- Modal Header -->
				    <div class="modal-header">
				      <button type="button" class="close" data-dismiss="modal">×</button>
				    </div>
				    
				    <!-- Modal body -->
				    <div class="modal-body">
				      	<form action="../regras/deletaPedido.php" method="post"  enctype="multipart/form-data">
				      		<input type="hidden" name="file" value="<?= $pedido['id_pedido']?> ">
				      		<p>Deseja realmente deletar esse pedido? </p>
							<div class="controle_button form-row">
								<button class="btn btn-dark col-2" name="button" value="delete" style="margin: .5em;"> Sim </button>
								<button class="btn btn-dark col-2" name="button" data-dismiss="modal" style="margin: .5em; "> Não </button>
							</div>		
				      	</form>
				    </div>
				  </div>
				</div>
			</div>

		<!-- DIRECAO -->
			<div class="modal" id="direcao">
				<div class="modal-dialog">
				  <div class="modal-content"  style="width: 30vw;">   
				    <!-- Modal Header -->
				    <div class="modal-header">
				      <button type="button" class="close" data-dismiss="modal">×</button>
				    </div>
				    
				    <!-- Modal body -->
				    <div class="modal-body">
				      	<form action="" method="post"  enctype="multipart/form-data">
				      		<input type="hidden" name="file" value="<?= $pedido['id_pedido']?> ">
				      		<input type="text" name="dir_valor" id="dir_valor"  >
				      		<p>Deseja realmente deletar esse pedido? </p>
							<div class="controle_button form-row">
								<?php  if(($pedido['drt_dir'])==($dir['nome'])){?>
									<p>TESTE</p>
								<?php } else {?>
								<button class="btn btn-dark col-2" name="button" data-dismiss="modal" style="margin: .5em; "> Não </button>
								<?php }?>
							</div>		
				      	</form>
				    </div>
				  </div>
				</div>
			</div>	
<?php
	break;
	}
?>