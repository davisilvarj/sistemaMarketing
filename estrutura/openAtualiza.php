<?php

	$pedidos = buscaPedido($connect, $id_pedido);

	foreach ($pedidos as $pedido) {
?>

<div class="areaformulario">

	<div class="form">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<form action="../regras/atualizaPedido.php" method="post" enctype="multipart/form-data">
				<div class="card">
					<div class="card bg-secondary text-white">
						<div class="card-body form-group " style="margin: .5em;">
					        <div class="card-header  text-center">
								<h2> Informações Gerais </h2>
							</div>

							<div class="card-body bg-white text-dark">
					        	<div class="form-row d-flex align-items-center">
									<input type="hidden" name="file" value="<?= $pedido['id_pedido']?> ">
									<label class="col-md-1">Nome: </label>
									<input type="text" class="form-control col-md-11" name="nome" value="<?=$pedido['nome']?>">
									<label class="col-md-1">Telefone: </label>
									<input type="text" class="form-control col-md-3" name="telefone" value="<?=$pedido['telefone']?>">
									<label class="col-md-1">Ramal: </label>
									<input type="text" class="form-control col-md-2" name="ramal" value="<?=$pedido['ramal']?>">
									<label class="col-md-1">Data do Evento: </label>
									<input type="text" class="form-control col-md-2" name="dt_evento" value="<?=$pedido['dt_evento']?>">
								</div>

								
								<div class="form-row  col-md-12">	
									<!--PUBLICO-->
									<div class="col-md-5">	
										<label class="">Público Alvo: </label>
										<div class="form-group col-md-10"  style="margin: .3em .5em">
											<?php if($pedido['funcionario'] == 1){?>
							                	<input type="checkbox" name="funcionario" value="1" checked> Funcionários <br>
											<?php } else{ ?>
							                	<input type="checkbox" name="funcionario" value="0"> Funcionários <br>
											<?php }?>

											<?php if($pedido['nv_aluno'] == 1){?>
							                	<input type="checkbox" name="nv_aluno" value="1" checked> Novos Alunos <br>
											<?php } else{ ?>
							                	<input type="checkbox" name="nv_aluno" value="0"> Novos Alunos <br>
											<?php }?>


											<?php if($pedido['professor'] == 1){?>
							                	<input type="checkbox" name="professor" value="1" checked> Professores <br>
											<?php } else{ ?>
							                	<input type="checkbox" name="professor" value="0"> Professores <br>
											<?php }?>		

											<?php if($pedido['aluno'] == 1){?>
							                	<input type="checkbox" name="aluno" value="1" checked> Alunos <br>
											<?php } else{ ?>
							                	<input type="checkbox" name="aluno" value="0"> Alunos <br>
											<?php }?>

							         	</div>	
									</div>

									<!--OBJETIVO-->
									<div class="col-md-6">
										<label > Objetivo: </label>
										<div class="form-group col-md-10" style="margin: .3em .5em">
											<?php if($pedido['comunica'] == 1){?>
							            		<input type="checkbox" name="comunica" value="1" checked> Comunicado <br>
											<?php } else{?> 
												<input type="checkbox" name="comunica" value="0"> Comunicado <br>
											<?php }?>	
							                <?php if($pedido['divulga'] == 1){?>
							            		<input type="checkbox" name="divulga" value="1" checked> Divulgação <br>
											<?php } else{?> 
												<input type="checkbox" name="divulga" value="0"> Divulgação <br>
											<?php }?>	
					                	</div>
									</div>
								</div>

								<!--DESCRIÇÂO-->
								<div>
						            <label class="card-title text-light">Descrição: </label>
				        	
					            	<textarea class="char-count form-control col-md-10" name="desc_pedido" style="width: 50vw; height: 30vh; margin: .5em 1em; text-align: justify;" maxlength="1000" autocorrect="on" placeholder="<?=$pedido['desc_pedido']?>"> <?=$pedido['desc_pedido']?> </textarea>
									<p class="text-muted col-md-12" style="text-align: left;">
											<small><span name="descricao">1000</span> caracteres restantes.</small> 
									
									</p>
										
									<div class="form-group col-md-12">
					                    <label  for="questEvento">Este pedido está associado a algum evento solicitado através do Sistema de Eventos do Mackenzie?</label>
					                    <?php if($pedido['cf_evento']==1){?>
					                    	<input id="questEvento" type="radio" name="cf_evento" style="margin: .3em .5em" value="1" checked/> Sim
					                	<?php } else{?>
					                		<input id="questEvento" type="radio" name="cf_evento" style="margin: .3em .5em" value="1"/> Sim
					                	<?php }
					                		if($pedido['cf_evento']==1){?>	
					                    		<input id="questEvento" type="radio" name="cf_evento" style="margin: .3em .5em" value="0" checked /> Não
					                    <?php } else{?>
					                    	<input id="questEvento" type="radio" name="cf_evento" style="margin: .3em .5em" value="0" /> Não
					                    <?php }?>	
					                </div>

					                <div class="form-group col-md-12">
					                    <label for="numEvento">Caso esteja relacionado, informe o número do evento?</label>
					                    <input id="numEvento" type="text" class="form-control col-md-6" name="cod_evento" style="margin: .3em .5em"/> 
					                </div>
					            </div>	
				        	</div>

				            <div class="card-header  text-center">
								<h2> Serviço(s) Socilicitado(s): </h2>
							</div>

							<!--SERVIÇOS-->
							<?php 
								if ($pedido['news'] == 1) { ?>
									<div class="card bg-white text-dark col-md-12">
										<div class="form-row d-flex align-items-center">
											<div>	
												<input class= "item-selecionado" />
									            <h4 >Cobertura Jornalística</h4>
									            <div  style="margin: .3em 1em">
									                <input type="checkbox" name="news" value="true" checked disabled> News (Prazo - 3 dias) <br>
									            </div>
								            </div>
								        </div>
								    </div>

							<?php }
								if ($pedido['tv_indoor'] == 1) { ?>
									<div class="card bg-white text-dark col-md-12">
										<div class="form-row d-flex align-items-center">
											<div>	
												<input class= "item-selecionado" />
									            <h4 >Tv Indoor</h4>
									            <div  style="margin: .3em 1em">
									                <input type="checkbox" name="tv_indoor" value="true" checked disabled> Tv Indoor(Prazo - 3 dias) <br>
									            </div>
								            </div>
								        </div>
								    </div>         
							<?php }
								if ($pedido['email_mark'] == 1) { ?>
									<div class="card bg-white text-dark col-md-12">
										<div class="form-row d-flex align-items-center">	
											<div>	
												<input class= "item-selecionado" />
									              <h4 >Comunicação | e-mail Marketing </h4>
									              <div  style="margin: .3em 1em">
									                    <input type="checkbox" name="email_mark" value="true" checked disabled>  E-mail Marketing (Prazo - 3 dias) <br>
									              </div>
								            </div>
								        </div>
								    </div>        
								<?php }
								if ($pedido['site'] == 1) { ?>
									<div class="card-body bg-white text-dark">
										<div class="form-row d-flex align-items-center">
											<div>	
												<input class= "item-selecionado" />
									              <h4 >Conteúdo para Site </h4>
									              <div  style="margin: .3em 1em">
									                    <input type="checkbox" name="site" value="true" checked disabled>  Atualizações site (Ex:  substituições, documentos, notícias | Prazo - 2 dias) <br>
									              </div>
								             </div>
								        </div>
								    </div>          
								<?php }
							?>

							<!--REDES SOCIAIS-->
							<?php 
								if ($pedido['cf_social'] == 1) { ?>
								<div class="card bg-white text-dark col-md-12">
									<div class="form-row d-flex align-items-center">
										<div>	
											<input class= "item-selecionado" />
								              <h4> Divulgação nas Redes Sociais </h4>
								              	<div  style="margin: .3em 1em">
								              		<?php 
								              			if ($pedido['face'] == 1){?>
								              				<input type="checkbox" name="face" value="1" checked > Facebook (Prazo -  3 dias) <br>
								              			<?php } else{?>
								              				<input type="checkbox" name="face" value="0"> Facebook (Prazo -  3 dias) <br>
								              			<?php }

								              			if ($pedido['insta'] == 1){?>
								              				<input type="checkbox" name="insta" value="1" checked > Instagram (Prazo -  3 dias) <br>
								              			<?php } else{?>
								              				<input type="checkbox" name="insta" value="0"> Instagram (Prazo -  3 dias) <br>
								              			<?php }

								              			if ($pedido['linkedin'] == 1){?>
								              				<input type="checkbox" name="linkedin" value="1" checked > Linkedin (Prazo -  3 dias) <br>
								              			<?php } else{?>
								              				<input type="checkbox" name="linkedin" value="0"> Linkedin (Prazo -  3 dias) <br>
								              			<?php }

								              			if ($pedido['whatsapp'] == 1){?>
								              				<input type="checkbox" name="whatsapp" value="1" checked > Whatsapp (Prazo -  3 dias) <br>
								              			<?php } else{?>
								              				<input type="checkbox" name="whatsapp" value="0"> Whatsapp (Prazo -  3 dias) <br>
								              			<?php }
								              		?>
								            	</div>
							            </div> 
									</div>
								</div>
							<?php }?>

							<!--BANNER-->
							<?php 
								if($pedido['cf_banner']==1){?>
								<input type="hidden" name="cf_banner" value="<?=$pedido['cf_banner']?>">
								
								<div class="card bg-light text-dark form-row col-md-12">
									<h5>Projeto Gráfico Banner: </h5>
						            
		            				<div class="form-row ">
		            					<div class="form-row col-md-12" style="text-align: center;">
		            					<div class="form-group card bg-light col-md-4" style="position: relative; margin: 0 auto;">	
		            						<p class="card-title">Modelo: </p>
		            						<img src="../figure/banner/IMGMODELO_BANNER.png">
		            					</div>	
	        							</div>

	            						<div class="form-row col-md-12">
	            						<div class="form-group card bg-light col-md-12">	
	            							<h5 class="card-title">Passo 1: </h5>
	            							<p class="card-text" style="margin-left: 1em;">Tamanho(Proporções reais em relação a uma pessoa de 1,70m de altura. Imagens criadas para melhor compreensão). </p>
											<div class="form-row col-md-12">
												<div class="form-group col-md-5" style="text-align:center;">					
													<img src="../figure/banner/IMGMODELO_BANNER_60x90_thumb.jpg" >
													<ul style="list-style: none;">
														<?php if($pedido['tam_banner'] == 'L: 60 cm x A: 90 cm [P]'){?>
															<input type="radio" name="tam_banner" value="L: 60 cm x A: 90 cm [P]" checked>L: 60 cm x A: 90 cm [P]
														<?php } if($pedido['tam_banner'] != 'L: 60 cm x A: 90 cm [P]'){?>
															<input type="radio" name="tam_banner" value="L: 60 cm x A: 90 cm [P]">L: 60 cm x A: 90 cm [P]
														<?php }?>
													</ul>
												</div>

												<div class="form-group col-md-5" style="text-align:center;">	
													<img src="../figure/banner/IMGMODELO_BANNER_80x120_thumb.jpg" >
													<ul style="list-style: none;">
														<?php if($pedido['tam_banner'] == 'L: 60 cm x A: 120 cm [M]'){?>
															<input type="radio" name="tam_banner" value="L: 60 cm x A: 120 cm [M]" checked>L: 60 cm x A: 120 cm [M]
														<?php } if($pedido['tam_banner'] != 'L: 60 cm x A: 120 cm [M]'){?>
															<input type="radio" name="tam_banner" value="L: 60 cm x A: 120 cm [M]">L: 60 cm x A: 120 cm [M]
														<?php }?>
													</ul>
												</div>

												<div class="form-group col-md-5" style="text-align:center;">
													<img src="../figure/banner/IMGMODELO_BANNER_80x160_thumb.jpg" >
													<ul style="list-style: none;">
														<?php if($pedido['tam_banner'] == 'L: 80 cm x A: 160 cm [G]'){?>
															<input type="radio" name="tam_banner" value="L: 80 cm x A: 160 cm [G]" checked>L: 80 cm x A: 160 cm [G]
														<?php } if($pedido['tam_banner'] != 'L: 80 cm x A: 160 cm [G]'){?>
															<input type="radio" name="tam_banner" value="L: 80 cm x A: 160 cm [G]">L: 80 cm x A: 160 cm [G]
														<?php }?>
													</ul>

												</div>
												<div class="form-group col-md-5" style="text-align:center;">											<img src="../figure/banner/IMGMODELO_BANNER_140x300_thumb.jpg" >
													<ul style="list-style: none;">
														<?php if($pedido['tam_banner'] == 'L: 140 cm x A: 300 cm [EG]'){?>
															<input type="radio" name="tam_banner" value="L: 140 cm x A: 300 cm [EG]" checked>L: 140 cm x A: 300 cm [EG]	
														<?php } if($pedido['tam_banner'] != 'L: 140 cm x A: 300 cm [EG]'){?>
															<input type="radio" name="tam_banner" value="L: 140 cm x A: 300 cm [EG]">	L: 140 cm x A: 300 cm [EG]
														<?php }?>
													</ul>
												</div>
											</div>
		            					</div>	
	            						</div>

	        							<div class="form-row col-md-12">
	        								<div class="form-group card bg-light col-md-6">	
			            						<h5 class="card-title">Passo 2:</h5>
			            						<p class="card-text" style="margin-left: 1em;">Orientação: </p>
												<div class="form-row col-md-12">
													<div class="form-group col-md-5" style="text-align:center;">
														<img src="../figure/banner/IMGMODELO_horizontal.jpg" >
														<ul style="list-style: none;">
															<?php if($pedido['orient_banner'] == 'Horizontal'){?>
																<input type="radio" name="orient_banner" value="Horizontal" checked>Horizontal
															<?php } if($pedido['orient_banner'] != 'Horizontal'){?>
																<input type="radio" name="orient_banner" value="Horizontal">Horizontal
															<?php }?>
														</ul>	
													</div>
													<div class="form-group col-md-5" style="text-align:center;">
												
														<img src="../figure/banner/IMGMODELO_vertical.jpg" >
														<ul style="list-style: none;">
															<?php if($pedido['orient_banner'] == 'Vertical'){?>
																<input type="radio" name="orient_banner" value="Vertical" checked>Vertical
															<?php } if($pedido['orient_banner'] != 'Vertical'){?>
																<input type="radio" name="orient_banner" value="Vertical">Vertical
															<?php }?>
														</ul>
													</div>
												</div>
	        								</div>
	        								<div class="form-group card bg-light col-md-6">	
			            						<div class="form-group col-md-12">
													<div class="form-group col-md-12" style="text-align:left;">
														<h5 class="card-title">Passo 3:</h5>
			            								<p class="card-text" style="margin-left: 1em;">Quantidade: <input type="text" name="qnt_banner" value="<?=$pedido['qnt_banner']?>"> </p>
			            								
													</div>
													<div class="form-group col-md-12" style="text-align:left;">
														<h5 class="card-title">Passo 4:</h5>
			            								<p class="card-text" style="margin-left: 1em;">Briefing: </p>
			            								<textarea class="char-count form-control" type="text" name="desc_banner" maxlength="1000" style="width: 35vw; height: 20vh;"  placeholder ="<?=$pedido['desc_banner']?>"><?=$pedido['desc_banner']?></textarea>
			            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_banner">1000</span></small> caracteres restantes</p>
			            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
													</div>
												</div>
	        								</div>		
	        							</div>		
	        						</div>	
				            	</div>
				            <?php }?>	
			            	
			            	<!--BACKDROP-->
			            	<?php 
								if($pedido['cf_backdrop']==1){?>
									<input type="hidden" name="cf_backdrop" value="<?=$pedido['cf_backdrop']?>">	

				            		<div class="card bg-light text-dark form-row col-md-12">
										<h5>Projeto Gráfico Backdrop: </h5>
										
										<div class="form-row ">
											<div class="form-row col-md-12">
												<div class="form-group card bg-light col-md-6"  style="text-align:center;">	
													<p class="card-title" style="margin-left: 1em;">Modelo Padrão do Instituto Presbiteriano Mackenzie </p>
													<div class="form-group col-md-12"  style="text-align:center;">
															<img src="../figure/backdrop/IMGMODELO_BACKDROP.png">
													</div>
												</div>
				
												<div class="form-row card bg-light col-md-6">
													<div class="form-group col-md-12">
				            							<h5 class="card-title">Passo 1:</h5>
														<div class="form-row col-md-6" style="text-align:left;">
															<p>Largura: <input type="text" name="larg_backdrop" value ="<?=$pedido['larg_backdrop']?>"></p>
				            								<p>Altura: <input type="text"  name="alt_backdrop" value ="<?=$pedido['alt_backdrop']?>"></p>	
														</div>
														<h5 class="card-title">Passo 2:</h5>
														<div class="form-group col-md-12" style="text-align:left;">
															<p class="card-text" style="margin-left: 1em;">Briefing: </p>
				            								<textarea class="char-count form-control" type="text" name="desc_backdrop" maxlength="1000" style="width: 35vw; height: 20vh;" placeholder="<?=$pedido['desc_backdrop']?>"><?=$pedido['desc_backdrop']?></textarea>
				            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_backdrop">1000</span></small> caracteres restantes</p>
				            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
														</div>
												 	</div>
												</div>
											</div>	
										</div>
									</div>
							<?php }?>	

							<!--CARTAZ-->
							<?php 
								if($pedido['cf_cartaz'] == 1){?>
									<input type="hidden" name="cf_cartaz" value="<?=$pedido['cf_cartaz']?>">

				 					<div class="card bg-light text-dark form-row col-md-12">
							    		<h5>Projeto Gráfico Cartaz: </h5>
				            			<div class="form-row">	
			            					<div class="form-row col-md-12" style="text-align: center;">
				            					<div class="form-group card bg-light col-md-4" style="position: relative; margin: 0 auto;">	
				            						<p class="card-title">Modelo: </p>
				            						<img src="../figure/cartaz/IMGMODELO_CARTAZ.png" >
				            					</div>	
			            					</div>

			            					<div class="form-row col-md-12">
				            					<div class="form-group card bg-light col-md-6">	
				            						<h5 class="card-title">Passo 1:</h5>
				            						<p class="card-text" style="margin-left: 1em;">Formato: </p>
													<div class="form-row col-md-12">
														<div class="form-group col-md-12" style="text-align:center;">
															<img src="../figure/cartaz/IMGMODELO_MALHA_REFTAMANHOPAPEL2.png" >
															<div class="form-group col-md-12">
																<ul style="list-style: none;">
																	<?php if($pedido['tam_cartaz'] == "A3 (29,7 cm x 42 cm)" ){?>
																		<li><input type="radio" name="tam_cartaz" value="A3 (29,7 cm x 42 cm)" checked> A3 (29,7 cm x 42 cm) </li>
																	<?php} else {?>
																		<li><input type="radio" name="tam_cartaz" value="A3 (29,7 cm x 42 cm)"> A3 (29,7 cm x 42 cm) </li>
																	<?php }?>

																	<?php if($pedido['tam_cartaz'] == "A4 (21 cm x 29,7 cm)" ){?>	
																		<li><input type="radio" name="tam_cartaz" value="A4 (21 cm x 29,7 cm)" checked> A4 (21 cm x 29,7 cm) </li>
																	<?php} else {?>
																		<li><input type="radio" name="tam_cartaz" value="A4 (21 cm x 29,7 cm)"> A3 (29,7 cm x 42 cm) </li>	
																	<?php }?>	
																</ul>	
															</div>	
														</div>
													</div>
				            					</div>

				            					<div class="form-group card bg-light col-md-6">	
				            						<h5 class="card-title">Passo 2:</h5>
				            						<p class="card-text" style="margin-left: 1em;">Orientação: </p>
													<div class="form-row col-md-12">
														<div class="form-group col-md-5" style="text-align:center;">
															<img src="../figure/cartaz/IMGMODELO_horizontal.jpg" >
															<ul style="list-style: none;">
															<?php if($pedido['orient_cartaz'] == "Horizontal" ){?>
																<li><input type="radio" name="orient_cartaz" value="Horizontal" checked> Horizontal</li>
															<?php } else {?>
																<li><input type="radio" name="orient_cartaz" value="Horizontal"> Horizontal</li>
															<?php }?>	
															</ul>
														</div>
														<div class="form-group col-md-5" style="text-align:center;">
															<img src="../figure/cartaz/IMGMODELO_vertical.jpg" >
															<uL style="list-style: none;">
															<?php if($pedido['orient_cartaz'] == "Vertical" ){?>
																<li><input type="radio" name="orient_cartaz" value="Vertical" checked> Vertical </li>
															<?php } else {?>
																<li><input type="radio" name="orient_cartaz" value="Vertical"> Vertical </li>
															<?php }?>		
															</ul>
														</div>
													</div>
				            					</div>
				            				</div>

				            				<div class="form-row col-md-12">
				            					<div class="form-group card bg-light col-md-6">	
				            						<h5 class="card-title">Passo 3:</h5>
				            						<div class="form-group col-md-12" style="text-align:left;">
				            							<div class="form-group">
				            								<?php if($pedido['imp_cartaz'] == 1){?>
				            								<p><input  type="checkbox" name="imp_cartaz" value="true" checked> Receber Impresso.</p>
				            								<p> Quantidade:  <input type="text" name="qnt_cartaz" value="<?=$pedido['qnt_cartaz']?>"></p>
				            								<?php } else {?>
				            									<p><input  type="checkbox" name="imp_cartaz" value="true"> Receber Impresso.</p>
				            									<p> Quantidade:  <input type="text" name="qnt_cartaz"></p>
				            								<?php }?>
				            							</div>

				            							<div class="form-group">
				            								<?php if($pedido['env_cartaz'] == 1){?>
				            									<input type="checkbox" name="env_cartaz" value="true" checked> Receber por e-mail:
				            								<?php } else {?>
				            									<input type="checkbox" name="env_cartaz" value="true"> Receber por e-mail:
				            								<?php }?>	
				            							</div>
				            						</div>	
				            					</div>

				            					<div class="form-group card bg-light col-md-6">	
				            						<h5 class="card-title">Passo 4:</h5>
													<div class="form-group col-md-12" style="text-align:left;">
			            								<p class="card-text" style="margin-left: 1em;">Briefing: </p>
			            								<textarea class="char-count form-control" type="text" name="desc_cartaz" maxlength="1000" style="width: 35vw; height: 20vh;" placeholder="<?= $pedido['desc_cartaz']?>"><?= $pedido['desc_cartaz']?></textarea>
			            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_cartaz">1000</span></small> caracteres restantes</p>
			            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
													</div>	
				            					</div>	
				            				</div>	
				            			</div>	
							    	</div>	
							<?php }?>	

							<!--FOLDER -->
							<?php 
								if($pedido['cf_folder']== 1){?>
									<input type="hidden" name="cf_folder" value="<?=$pedido['cf_folder']?>">
									<div class="card bg-light text-dark form-row col-md-12">
										<h5>Projeto Gráfico Folder: </h5>
				            			<div class="form-row">	
				            				<div class="form-row col-md-12">
				            					<ul style=" list-style: none;">
				            					<?php /*MARKETING DEFINE*/
				            						if($pedido['def_marketing'] == 1){?>
				            						<li><input type="radio" name="esc_folder"  value= "1" checked> Marketing define.</li>
				            					<?php }else {?>
				            						<li><input type="radio" name="esc_folder"  value= "1"> Marketing define.</li>
				            					
				            					<?php } /*SOLICITANTE DEFINE*/
				            						if($pedido['def_solicitante'] == 1){?>
				            						<li><input type="radio" name="esc_folder" value = "2" checked> Solicitante define (se escolhida está opção,  preencha os passos 1 e 2)</li>

						            				<div class="form-row col-md-12" >
						            					<div class="form-group card bg-light col-md-6">	
						            						<h5 class="card-title">Passo 1:</h5>
						            						<div class="form-row col-md-12" style="text-align:left;">
						            							<div class="form-row col-md-6">
						            								<h4>Simples (1 Dobra)</h4>
						            								<img src="../figure/folder/IMGMODELO_MALHA_FOLDERSIMPLES.png">
						            								<ul style=" list-style: none;">
						            								<?php if($pedido['tp_folder'] == "Simples - A5 (14,8 cm x 21,0 cm)"){?>
						            									<li><input type="radio" name="tp_folder" value="Simples - A5 (14,8 cm x 21,0 cm)" checked> A5 (14,8 cm x 21,0 cm)</li>
						            								<?php } else{?>
						            									<li><input type="radio" name="tp_folder" value="Simples - A5 (14,8 cm x 21,0 cm)" > A5 (14,8 cm x 21,0 cm)</li>
						            								<?php }
						            									if($pedido['tp_folder'] == "Simples - A6 (10,5 cm x 14,8 cm)"){?>
						            										<li><input type="radio" name="tp_folder" value="Simples - A6 (10,5 cm x 14,8 cm)" checked> A6 (10,5 cm x 14,8 cm)</li>
						            									<?php } else{?>
						            										<li><input type="radio" name="tp_folder" value="Simples - A6 (10,5 cm x 14,8 cm)"> A6 (10,5 cm x 14,8 cm)</li>
						            									<?php }?>	
						            								</ul>
						            							</div>

						            							<div class="form-group col-md-6">
						            								<h4>Sanfona</h4>
						            								<img src="../figure/folder/IMGMODELO_MALHA_FOLDERSANFONA.png">
						            								<ul style=" list-style: none;">
						            									<?php if($pedido['tp_folder'] == "Sanfona - 10 cm x 20 cm"){?>
						            										<li><input type="radio" name="tp_folder" value="Sanfona - 10 cm x 20 cm" checked> 10 cm x 20 cm</li>
						            									<?php } else{?>
						            										<li><input type="radio" name="tp_folder" value="Sanfona - 10 cm x 20 cm"> 10 cm x 20 cm</li>
						            									<?php }?>	
						            								</ul>	
						            							</div>
						            						</div>	
						            					</div>

						            					<div class="form-group card bg-light col-md-6">	
						            						<h5 class="card-title">Passo 2:</h5>
						            						<p class="card-text" style="margin-left: 1em;">Orientação: </p>
															<div class="form-row col-md-12">
																<div class="form-group col-md-5" style="text-align:center;">
																	<img src="../figure/folder/IMGMODELO_horizontal.jpg" >
																	<ul style="list-style: none;">
																		<input type="radio" name="orient_folder" value="Horizontal">
																		<p>Horizontal</p>
																	</ul>	
																</div>
																<div class="form-group col-md-5" style="text-align:center;">
																	<img src="../figure/folder/IMGMODELO_vertical.jpg" >
																	<ul style="list-style: none;">
																		<input type="radio" name="orient_folder" value="Vertical">
																		<p>Vertical </p>
																	</ul>	
																</div>
															</div>
						            					</div>
						            				</div>

				            					<?php }else {?>	
				            						<li><input type="radio" name="esc_folder" id="emp_folder_solicitante" onclick="habilitar()" value = "2"> Solicitante define (se escolhida está opção,  preencha os passos 1 e 2)</li>

				            						<div class="form-row col-md-12" id="exp_folder_solicitante">
						            					<div class="form-group card bg-light col-md-6">	
						            						<h5 class="card-title">Passo 1:</h5>
						            						<div class="form-row col-md-12" style="text-align:left;">
						            							<div class="form-row col-md-6">
						            								<h4>Simples (1 Dobra)</h4>
						            								<img src="../figure/folder/IMGMODELO_MALHA_FOLDERSIMPLES.png">
						            								<ul style=" list-style: none;">
						            									<li><input type="radio" name="tp_folder" value="Simples - A5 (14,8 cm x 21,0 cm)" > A5 (14,8 cm x 21,0 cm)</li>
						            									<li><input type="radio" name="tp_folder" value="Simples - A6 (10,5 cm x 14,8 cm)"> A6 (10,5 cm x 14,8 cm)</li>
						            								</ul>
						            							</div>
						            							<div class="form-group col-md-6">
						            								<h4>Sanfona</h4>
						            								<img src="../figure/folder/IMGMODELO_MALHA_FOLDERSANFONA.png">
						            								<ul style=" list-style: none;">
						            									<li><input type="radio" name="tp_folder" value="Sanfona - 10 cm x 20 cm"> 10 cm x 20 cm</li>
						            								</ul>	
						            							</div>
						            						</div>	
						            					</div>

						            					<div class="form-group card bg-light col-md-6">	
						            						<h5 class="card-title">Passo 2:</h5>
						            						<p class="card-text" style="margin-left: 1em;">Orientação: </p>
															<div class="form-row col-md-12">
																<div class="form-group col-md-5" style="text-align:center;">
																	<img src="../figure/folder/IMGMODELO_horizontal.jpg" >
																	<ul style="list-style: none;">
																		<input type="radio" name="orient_folder" value="Horizontal">
																		<p>Horizontal</p>
																	</ul>	
																</div>
																<div class="form-group col-md-5" style="text-align:center;">
																	<img src="../figure/folder/IMGMODELO_vertical.jpg" >
																	<ul style="list-style: none;">
																		<input type="radio" name="orient_folder" value="Vertical">
																		<p>Vertical </p>
																	</ul>	
																</div>
															</div>
						            					</div>
						            				</div>
				            					<?php }?>	
				            					</ul>		
				            				</div>



				            				<div class="form-row col-md-12">
				            					<div class="form-group card bg-light col-md-6">	
				            						<div class="form-group col-md-12">
														<div class="form-group col-md-12" style="text-align:left;">
															<h5 class="card-title">Passo 3:</h5>
				            								<p class="card-text" style="margin-left: 1em;">Quantidade: </p>
				            								<input type="text" name="qnt_folder" value="<?=$pedido['qnt_folder']?>">
														</div>
														<div class="form-group col-md-12" style="text-align:left;">
															<h5 class="card-title">Passo 4:</h5>
				            								<p class="card-text" style="margin-left: 1em;">Briefing: </p>
				            								<textarea class="char-count form-control" type="text" name="desc_folder" maxlength="1000" style="width: 35vw; height: 20vh;" placeholder="<?=$pedido['desc_folder']?>" ><?=$pedido['desc_folder']?></textarea>
				            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_folder">1000</span></small> caracteres restantes</p>
				            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
														</div>
													</div>
				            					</div>		
				            				</div>	
				            			</div>	
									</div>	 	
							<?php }?>

							<!--CAMISA-->
							<?php 
								if($pedido['cf_camisa']){?>
									<input type="hidden" name="cf_camisa" value="<?=$pedido['cf_camisa']?>">
									<div class="card bg-light text-dark form-row col-md-12">
										<h5>Projeto Gráfico Camisa: </h5>
										<div class="form-row ">
											<div class="form-group col-md-12">
				            					<h5 class="card-title">Passo 1: </h5>
												<div class="form-row col-md-12">
													<div class="form-group col-md-5" style="text-align:center;">					
														<img src="../figure/camisa/IMGMODELO_CPOLO_F.png" >
														<ul style="list-style: none;">
															<?php if($pedido['tp_camisa'] == "Polo – ARTE na FRENTE"){?>
																<input type="radio" name="tp_camisa" value="Polo – ARTE na FRENTE" checked> Polo – ARTE na FRENTE
															<?php } else {?>
																<input type="radio" name="tp_camisa" value="Polo – ARTE na FRENTE"> Polo – ARTE na FRENTE
															<?php }?>	
														</ul>
													</div>
													<div class="form-group col-md-5" style="text-align:center;">	
														<img src="../figure/camisa/IMGMODELO_CPOLO_FeC.png" >
														<ul style="list-style: none;">
															<?php if($pedido['tp_camisa'] == "Polo – ARTE na FRENTE e COSTAS"){?>
																<input type="radio" name="tp_camisa" value="Polo – ARTE na FRENTE e COSTAS" checked>	Polo – ARTE na FRENTE e COSTAS
															<?php } else {?>
																<input type="radio" name="tp_camisa" value="Polo – ARTE na FRENTE e COSTAS">	Polo – ARTE na FRENTE e COSTAS
															<?php }?>			
														</ul>
													</div>
													<div class="form-group col-md-5" style="text-align:center;">
														<img src="../figure/camisa/IMGMODELO_MALHA_F.png" >
														<ul style="list-style: none;">
															<?php if($pedido['tp_camisa'] == "Malha Comum – ARTE na FRENTE"){?>
																<input type="radio" name="tp_camisa" value="Malha Comum – ARTE na FRENTE" checked>	Malha Comum – ARTE na FRENTE
															<?php } else {?>
																<input type="radio" name="tp_camisa" value="Malha Comum – ARTE na FRENTE">	Malha Comum – ARTE na FRENTE
															<?php }?>		
														</ul>

													</div>
													<div class="form-group col-md-5" style="text-align:center;">														
														<img src="../figure/camisa/IMGMODELO_MALHA_FeC.png" >
														<ul style="list-style: none;">
															<?php if($pedido['tp_camisa'] == "Malha Comum – ARTE na FRENTE e COSTAS"){?>
																<input type="radio" name="tp_camisa" value= "Malha Comum – ARTE na FRENTE e COSTAS" checked>	Malha Comum – ARTE na FRENTE e COSTAS
															<?php } else {?>	
																<input type="radio" name="tp_camisa" value= "Malha Comum – ARTE na FRENTE e COSTAS">	Malha Comum – ARTE na FRENTE e COSTAS
															<?php }?>		
														</ul>
													</div>
												</div>
											</div>

											<div class="form-row col-md-12">
												<div class="form-group card bg-light col-md-6">	
													<h5 class="card-title">Passo 2: </h5>				
													<p> Cor: <input type="text" name="camisa_cor" value="<?= $pedido['camisa_cor']?>"> </p>		
														
													<h5 class="card-title">Passo 3: </h5>
													<div class="form-row col-md-12" style="text-align: center;">
														<div class="form-group col-md-6" >														
															<h5>Masculino: </h5>
															<ul style="list-style: none;">
																<li>P  | Qtd: <input type="text" name="qnt_masc_p"  value="<?= $pedido['qnt_masc_p']?>"></li>
																<li>M  | Qtd: <input type="text" name="qnt_masc_m"  value="<?= $pedido['qnt_masc_m']?>"></li>
																<li>G  | Qtd: <input type="text" name="qnt_masc_g"  value="<?= $pedido['qnt_masc_g']?>"></li>
																<li>EG | Qtd: <input type="text" name="qnt_masc_eg"  value="<?= $pedido['qnt_masc_eg']?>"></li>
															</ul>
														</div>
														<div class="form-group col-md-6" >														
															<h5>Feminino (Baby Look): </h5>
															<ul style="list-style: none;">
																<li>P  | Qtd: <input type="text" name="qnt_fem_p"  value="<?= $pedido['qnt_fem_p']?>"></li>
																<li>M  | Qtd: <input type="text" name="qnt_fem_m"  value="<?= $pedido['qnt_fem_m']?>"></li>
																<li>G  | Qtd: <input type="text" name="qnt_fem_g"  value="<?= $pedido['qnt_fem_g']?>"></li>
																<li>EG | Qtd: <input type="text" name="qnt_fem_eg"  value="<?= $pedido['qnt_fem_eg']?>"></li>
															</ul>
														</div>
													</div>	
												</div>

												<div class="form-group card bg-light col-md-6">	
													<div class="form-group col-md-12" style="text-align:left;">
														<h5 class="card-title">Passo 4:</h5>
			            								<p class="card-text" style="margin-left: 1em;">Briefing: </p>

						
			            								<textarea class="char-count form-control" type="text" name="desc_camisa" maxlength="1000" style="width: 35vw; height: 20vh;" autocorrect="on"  placeholder="<?= $pedido['desc_camisa']?>"><?= $pedido['desc_camisa']?></textarea>
			            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_camisa">1000</span></small> caracteres restantes</p>
			            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
													</div>
												</div>	
											</div>			
										</div>	
									</div>
							<?php }?>

							<!--CARTAO-->
							<?php
								if($pedido['cf_cartao'] == 1){ ?>
									<input type="hidden" name="cf_cartao" value="<?=$pedido['cf_cartao']?>">
									<div class="card bg-light text-dark form-row col-md-12">
										<h5>Projeto Gráfico Cartão: </h5>
										<div class="form-row ">
											<div class="form-row col-md-12">
												<div class="form-group card bg-light col-md-6"  style="text-align:center;">	
													<p class="card-title" style="margin-left: 1em;">Modelo Padrão do Instituto Presbiteriano Mackenzie </p>
													<div class="form-group col-md-12"  style="text-align:center;">
														<img src="../figure/cartao/IMGMODELO_CV.png">
													</div>
												</div>

												
												<div class="form-row card bg-light col-md-6">
													<div class="form-group col-md-12">	
														<h5 class="card-title">Passo Único : </h5>
														<p class="card-text" style="margin-left: 1em;">Informar Detalhes a Serem Inseridos no Cartão:</p>
														<textarea class="char-count form-control" type="text" name="desc_cartao" maxlength="1000" placeholder="<?= $pedido['desc_cartao']?>" style="width: 35vw; height: 20vh;" autocorrect="on"><?= $pedido['desc_cartao']?></textarea>
			            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_cartao">1000</span></small> caracteres restantes</p>
		            								</div>
												</div>
											</div>	
										</div>
									</div>
							<?php  }?>	

							<!--CONVITE-->	
							<?php
								if($pedido['cf_convite'] == 1){?>
									<input type="hidden" name="cf_convite" value="<?=$pedido['cf_convite']?>">
									
									<div class="card bg-light text-dark form-row col-md-12">
										<h5>Projeto Gráfico Covite: </h5>
				            			<div class="form-row ">
				            				<div class="form-group card bg-light col-md-12">
					            				<h5 class="card-title">Passo 1: </h5>
					            				<div class="form-row col-md-12" style="text-align: center;">	
					            					<div class="form-group col-md-6" style="text-align:center;">					
														<img src="../figure/convite/IMGMODELO_CONVITE.png">
														<ul style="list-style: none;">
															<?php if($pedido['tam_convite'] == "CONVITE (Tamanho Padrão)"){?>
																<input type="radio" name="tam_convite" value="CONVITE (Tamanho Padrão)" checked> CONVITE (Tamanho Padrão)
															<?php }else{?>
																<input type="radio" name="tam_convite" value="CONVITE (Tamanho Padrão)"> CONVITE (Tamanho Padrão)
															<?php }?>		
														</ul>
													</div>

													<div class="form-group col-md-6" style="text-align:center;">					
														<img src="../figure/convite/IMGMODELO_CERTIFICADO.png">
														<ul style="list-style: none;">
															<?php if($pedido['tam_convite'] == "CERTIFICADO (Tamanho Padrão)"){?>
																<input type="radio" name="tam_convite" value="CERTIFICADO (Tamanho Padrão)" checked> CERTIFICADO (Tamanho Padrão)
															<?php }else{?>
																<input type="radio" name="tam_convite" value="CERTIFICADO (Tamanho Padrão)"> CERTIFICADO (Tamanho Padrão)
															<?php }?>			
														</ul>
													</div>
												</div>	
											</div>

											<div class="form-row col-md-12">
				            					<div class="form-group card bg-light col-md-6">	
				            						<h5 class="card-title">Passo 2:</h5>
				            						<p class="card-text" style="margin-left: 1em;">Orientação: </p>
													<div class="form-row col-md-12">
														<div class="form-group col-md-5" style="text-align:center;">
															<img src="../figure/banner/IMGMODELO_horizontal.jpg">
															<ul>
																<?php if($pedido['orient_convite'] == "Horizontal"){?>
																	<input type="radio" name="orient_convite" value="Horizontal" checked>Horizontal
																<?php }else{?>
																	<input type="radio" name="orient_convite" value="Horizontal">Horizontal
																<?php }?>	
															</ul>	
														</div>
														<div class="form-group col-md-5" style="text-align:center;">
															<img src="../figure/banner/IMGMODELO_vertical.jpg">
															<ul>
																<?php if($pedido['orient_convite'] == "Vertical"){?>
																	<input type="radio" name="orient_convite" value="Vertical" checked>Vertical 
																<?php }else{?>
																	<input type="radio" name="orient_convite" value="Vertical">Vertical	
																<?php }?>
															</ul>	
														</div>
													</div>
				            					</div>

				            					<div class="form-group card bg-light col-md-6">	
				            						<div class="form-group col-md-12">
														<div class="form-group col-md-12" style="text-align:left;">
															<h5 class="card-title">Passo 3:</h5>
															<?php if($pedido['imp_convite']==1){?>
				            									<p class="card-text" style="margin-left: 1em;"><input type="checkbox" name="imp_convite" value="1" checked> Enviar Impresso -
				            									Quantidade: <input type="text" name="qnt_convite" value = "<?= $pedido['qnt_convite']?>"></p>
				            								<?php } else{?>
				            									<p class="card-text" style="margin-left: 1em;"><input type="checkbox" name="imp_convite" value="1"> Enviar Impresso -
				            									Quantidade: <input type="text" name="qnt_convite"></p>
				            								<?php }
				            									 if($pedido['env_convite']==1){?>
				            									<p class="card-text" style="margin-left: 1em;"><input type="checkbox" name="env_convite" value="1" checked> Enviar por e-mail </p>
				            								<?php } else{?>	
				            									<p class="card-text" style="margin-left: 1em;"><input type="checkbox" name="env_convite" value="1"> Enviar por e-mail </p>
				            								<?php }?>
														</div>
														<div class="form-group col-md-12" style="text-align:left;">
															<h5 class="card-title">Passo 4:</h5>
				            								<p class="card-text" style="margin-left: 1em;">Briefing: </p>
				            								<textarea class="char-count form-control" type="text" name="desc_convite" maxlength="1000" style="width: 35vw; height: 20vh;" autocorrect="on" placeholder="<?= $pedido['desc_convite']?>"><?= $pedido['desc_convite']?></textarea>
				            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_convite">1000</span></small> caracteres restantes</p>
				            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
														</div>
													</div>
				            					</div>

				            				</div>	
										</div>
									</div>	
							<?php }?>	

							<!--FLYER-->
							<?php
								if($pedido['cf_flyer'] == 1){?>
									<input type="hidden" name="cf_flyer" value="<?=$pedido['cf_flyer']?>">

									<div class="card bg-light text-dark form-row col-md-12">
										<h5>Projeto Gráfico Flyer: </h5>
				            			<div class="form-row ">
				            				<div class="form-row card bg-light col-md-12" style="text-align: center;">
				            					<div class="form-group  col-md-4" style="position: relative; margin: 0 auto;">	
				            						<p class="card-title">Modelo: </p>
				            						<img src="../figure/flyer/IMGMODELO_FLYER.png">
				            					</div>	
				            				</div>

				            				<div class="form-row  col-md-12">
				            					<div class="form-group  card bg-light col-md-6">	
				            						<h5 class="card-title">Passo 1: </h5>
				            						<p class="card-text" style="margin-left: 1em;">Formato: </p>
													<div class="form-row col-md-12">
														<div class="form-group col-md-12" style="text-align:center;">					
															<img src="../figure/flyer/IMGMODELO_MALHA_REFTAMANHOPAPEL.png">
															<ul style="list-style: none;">
																<?php if($pedido['tam_flyer']=="A5 (14,8 cm x 21,0 cm)"){?>
																	<li><input type="radio" name="tam_flyer" value="A5 (14,8 cm x 21,0 cm)" checked> A5 (14,8 cm x 21,0 cm)</li>
																<?php } else {?>
																	<li><input type="radio" name="tam_flyer" value="A5 (14,8 cm x 21,0 cm)"> A5 (14,8 cm x 21,0 cm)</li>
																<?php }
																	if($pedido['tam_flyer']=="A6 (10,5 cm x 14,8 cm)"){?>	
																		<li><input type="radio" name="tam_flyer" value="A6 (10,5 cm x 14,8 cm)" checked> A6 (10,5 cm x 14,8 cm)</li>
																<?php } else {?>
																		<li><input type="radio" name="tam_flyer" value="A6 (10,5 cm x 14,8 cm)"> A6 (10,5 cm x 14,8 cm)</li>	
																<?php } ?>			
															</ul>
														</div>
													</div>
				            					</div>

				            					<div class="form-group card bg-light col-md-6">	
				            						<h5 class="card-title">Passo 2:</h5>
				            						<p class="card-text" style="margin-left: 1em;">Orientação: </p>
													<div class="form-row col-md-12">
														<div class="form-group col-md-5" style="text-align:center;">
															<img src="../figure/flyer/IMGMODELO_FLYER_ORIENTAÇÃO_HORIZONTAL.jpg">
															<ul style="list-style: none;">
																<?php if($pedido['orient_flyer'] == "Horizontal"){?>
																	<li><input type="radio" name="orient_flyer" value="Horizontal" checked>Horizontal</li>
																<?php } else {?>
																	<li><input type="radio" name="orient_flyer" value="Horizontal">Horizontal</li>	
																<?php }?>
															</ul>		
														</div>
														<div class="form-group col-md-5" style="text-align:center;">
															<img src="../figure/flyer/IMGMODELO_FLYER_ORIENTAÇÃOVERTICAL.jpg">
															<ul style="list-style: none;">
																<?php if($pedido['orient_flyer'] == "Vertical"){?>
																	<li><input type="radio" name="orient_flyer" value="Vertical" checked>Vertical </li>
																<?php } else {?>
																	<li><input type="radio" name="orient_flyer" value="Vertical">Vertical </li>	
																<?php }?>	
															</ul>
														</div>
													</div>
				            					</div>
				            				</div>

				            				<div class="form-row col-md-12">
				            					<div class="form-group card bg-light col-md-6">	
				            						<h5 class="card-title">Passo 3:</h5>
				            						<p class="card-text" style="margin-left: 1em;">Impressão: </p>
													<div class="form-row col-md-12">
														<div class="form-group col-md-5" style="text-align:center;">
															<img src="../figure/flyer/IMGMODELO_FLYER_IMPFRENTE.jpg">	
															<ul style="list-style: none;">
																<?php if($pedido['imp_flyer']=="Frente"){?>
																	<input type="radio" name="imp_flyer" value="Frente" checked> Frente
																<?php } else{?>
																	<li><input type="radio" name="imp_flyer" value="Vertical">Vertical </li>
																<?php }?>			
															</ul>
														</div>
														<div class="form-group col-md-5" style="text-align:center;">
															<img src="../figure/flyer/IMGMODELO_FLYER_IMPFRENTExVERSO.jpg">
															<ul style="list-style: none;">
																<?php if($pedido['imp_flyer']=="Frente e Verso"){?>	
																	<input type="radio" name="imp_flyer" value="Frente e Verso" checked> Frente e Verso
																<?php } else{?>
																	<input type="radio" name="imp_flyer" value="Frente e Verso"> Frente e Verso	
																<?php }?>	
															</ul>
														</div>
													</div>
				            					</div>
				            					<div class="form-group card bg-light col-md-6">	
				            						<div class="form-group col-md-12">
														<div class="form-group col-md-12" style="text-align:left;">
															<h5 class="card-title">Passo 4:</h5>
				            								<p class="card-text" style="margin-left: 1em;">Quantidade: <input type="text" name="qnt_flyer" value="<?=$pedido['qnt_flyer']?>"></p>
														</div>
														<div class="form-group col-md-12" style="text-align:left;">
															<h5 class="card-title">Passo 5:</h5>
				            								<p class="card-text" style="margin-left: 1em;">Briefing: </p>
				            								<textarea class="char-count form-control" type="text" name="desc_flyer" maxlength="1000" style="width: 35vw; height: 20vh;" autocorrect="on" placeholder="<?=$pedido['desc_flyer']?>"><?=$pedido['desc_flyer']?></textarea>
				            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_flyer">1000</span></small> caracteres restantes</p>
				            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
														</div>
													</div>
				            					</div>		
				            				</div>		
				            			</div>	
				            		</div>  
							<?php }?>	

							<!--PLACA-->
							<?php
								if($pedido['cf_placa']==1){?>
									<input type="hidden" name="cf_placa" value="<?=$pedido['cf_placa']?>">

									<div class="card bg-light text-dark form-row col-md-12">
										<h5>Projeto Gráfico Placas e Sinalização Interna/Externa: </h5>
										<div class="form-row ">
											<div class="form-row col-md-12">
												<div class="form-group card bg-light col-md-6"  style="text-align:center;">	
													<p class="card-title" style="margin-left: 1em;">Modelo Padrão do Instituto Presbiteriano Mackenzie </p>
													<div class="form-group col-md-12"  style="text-align:center;">
														<img src="../figure/placa/IMGMODELO_PLACA.png">
													</div>
												</div>
												<div class="form-row card bg-light col-md-6">
													<div class="form-group col-md-12">
				            							<h5 class="card-title">Passo 1:</h5>
														<div class="form-row col-md-6" style="text-align:left;">
															<?php if($pedido['imp_placa']==1){?>
																<p><input type="checkbox" name="imp_placa" value="1" checked>Enviar Impresso </p>
																<p> Quantidade:  <input type="text" name="qnt_placa" value="<?=$pedido['qnt_placa']?>"></p>
															<?php } else{?>
																<p><input type="checkbox" name="imp_placa" value="1">Enviar Impresso </p>
																<p> Quantidade:  <input type="text" name="qnt_placa" ></p>
															<?php } 
																if($pedido['env_placa']==1){?>	
																	<p><input type="checkbox" name="env_placa" value="1" checked> Enviar por e-mail </p>
															<?php } else{?>
																<p><input type="checkbox" name="env_placa" value="1"> Enviar por e-mail </p>
															<?php }?>	
														</div>
														<h5 class="card-title">Passo 2:</h5>
														<div class="form-group col-md-12" style="text-align:left;">
															<p class="card-text" style="margin-left: 1em;">Briefing: </p>
				            								<textarea class="char-count form-control" type="text" name="desc_placa" maxlength="1000" placeholder="<?=$pedido['desc_placa']?>" style="width: 35vw; height: 20vh;"><?=$pedido['desc_placa']?></textarea>
				            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_placa">1000</span></small> caracteres restantes</p>       								
														</div>
												 	</div>
												</div>
											</div>	
										</div>
									</div>	
							<?php }?>

							<!--EVENTOS-->
							<?php 
								if($pedido['conf_evento']==1){?>
									<input type="hidden" name="conf_evento" value="<?=$pedido['conf_evento']?>">

									<div class="card bg-light text-dark form-row col-md-12">
										<h5>Projeto Gráfico Eventos: </h5>
										<div class="form-row"> 
											<div style="margin: .5em;">
												<?php if($pedido['cf_midia']==1){?>
													<input type="checkbox" name="cf_midia" value="1" checked> Peça de Mídias Sociais - Feed e Stories <br>
												<?php }else {?>
													<input type="checkbox" name="cf_midia" value="1"> Peça de Mídias Sociais - Feed e Stories <br>
												<?php }
													if($pedido['cf_email']==1){?>	
								               			<input type="checkbox" name="cf_email" value="1" checked> E-mail Marketing <br>
								               	<?php }else {?>
								               	        <input type="checkbox" name="cf_email" value="1"> E-mail Marketing <br>
								               	<?php }
								               		if($pedido['cf_site']==1){?> 
														<input type="checkbox" name="cf_site" value="1" checked> Material Site <br>
												<?php }else {?>
														<input type="checkbox" name="cf_site" value="1"> Material Site <br>
												<?php }
								               		if($pedido['cf_sympla']==1){?> 				
														<input type="checkbox" name="cf_sympla" value="1" checked> Cadastro no Sympla <br>
												<?php }else {?>
														<input type="checkbox" name="cf_sympla" value="1"> Cadastro no Sympla <br>
												<?php }
													if ($pedido['lv_face']==1){?>
														<input type="checkbox" name="emp_stream_face" id="emp_stream_face" checked value="true">  Live pelo Stream Yard: 
														<div name="exp_stream_face" id="exp_stream_face">
															<input  type="radio" name="lv_face" value="1" checked style="margin: .3em .5em" /> Facebook
							                    			<input  type="radio" name="lv_youtube" value="1" style="margin: .3em .5em"/> Youtube
							                    		</div>	
												<?php }
													if ($pedido['lv_youtube']==1){?>
														<input type="checkbox" name="emp_stream_you" id="emp_stream_you" checked value="true">  Live pelo Stream Yard: 
														<div name="exp_stream_you" id="exp_stream_you">
															<input type="radio" name="lv_face" value="1" style="margin: .3em .5em" /> Facebook
							                    			<input type="radio" name="lv_youtube" value="1" checked style="margin: .3em .5em"/> Youtube
							                    		</div>	
												<?php }
													if (($pedido['lv_youtube']==0) and ($pedido['lv_face']==0)){?>		
													<input type="checkbox" name="emp_stream" id="emp_stream" onclick="habilitar()" value="true">  Live pelo Stream Yard: 
													
													<div name="exp_stream" id="exp_stream">
														<input id="" type="radio" name="lv_face" value="1" style="margin: .3em .5em" /> Facebook
						                    			<input id="" type="radio" name="lv_youtube" value="1" style="margin: .3em .5em"/> Youtube
						                    		</div>
						                    	<?php }?>		
											</div>
										</div>
									</div>
							<?php }?>
							<button class="btn btn-primary col-2">Ok</button>
				        </div>

					</div>
						
				</div>

			</form>

		</div>	
	</div>
	
</div>	
<?php
	}
?>
<script type="text/javascript">
	$('#exp_folder_solicitante').hide();
	$('#exp_stream').hide();
	function habilitar(){
		if(document.getElementById('emp_stream').checked){
            $('#exp_stream').show();
        } else{
           $('#exp_stream').hide();
        }
        if(document.getElementById('emp_stream_you').checked){
            $('#exp_stream_you').show();
        } else{
           $('#exp_stream_you').hide();
        }
        if(document.getElementById('emp_stream_face').checked){
            $('#exp_stream_face').show();
        } else{
           $('#exp_stream_face').hide();
        }
        if(document.getElementById('emp_folder_solicitante').checked){
            $('#exp_folder_solicitante').show();
        } else{
           $('#exp_folder_solicitante').hide();
        }
        
	}
</script>  

<script type="text/javascript">
	$(document).ready(function(){
	    $('.char-count').keyup(function() {
	        var maxLength = parseInt($(this).attr('maxlength')); 
	        var length = $(this).val().length;
	        var newLength = maxLength-length;
	        var name = $(this).attr('name');
	        $('span[name="'+name+'"]').text(newLength);
	    });
	});
</script> 

