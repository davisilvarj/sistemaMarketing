<?php
	$drt = userlog();
?>
<div class="areaformulario">
	<section class="form">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<form  action="../regras/regPedido.php" method="post" enctype="multipart/form-data">
				<div class="card">
					<!--DADOS SOLICITANTE-->
					<div class="card text-left">
							<?php  mostraAlerta("success"); ?>
					    	<?php mostraAlerta("danger"); ?>
						<div class="card-header bg-secondary">
				            <h3 class="card-title text-light">Dados Solicitante</h3>
				        </div>

				        <div class="form-group" style="margin: .5em;">
							<div class="form-row">
								<label class="col-md-1">DRT: </label>
								<input type="text" class="form-control col-md-3" value="<?= $drt ?>" disabled />
								<input type="hidden" name="drt" value="<?= $drt ?>"/>

								<label class="col-md-1">Solicitante: </label>
								<input type="text" class="form-control col-md-7" name="nome" required/>
								<label class="col-md-1">E-mail: </label>
								<input type="email" class="form-control col-md-3" placeholder="E-mail Institucional"  value="<?= $drt ?>@mackenzie.br" disabled />
								<input type="hidden" name="email" value="<?= $drt ?>@mackenzie.br">
								<label class="col-md-1">Telefone: </label>
								<input type="text" class="form-control col-md-3" id="telefone" name="telefone"  placeholder="ex.: (00) 0000-00000"  required />
								<label class="col-md-1">Ramal: </label>
								<input type="text" class="form-control col-md-3" name="ramal" required>
								<label class="col-md-1">Data evento: </label>
								<input type="text" class="form-control col-md-3 data1" name="dt_evento" placeholder="ex.: XX/XX/XXXX"  required/>
							</div>
						</div>	 
					</div>
					<!--DETALHES DA SOLICITAÇÃO-->
					<div class="card ">
						<div class="card-header bg-secondary">
					   		<h3 class="card-title text-light">Detalhes da Solicitação</h3>
						</div>

						<!-- DATA 
			            <div class="form-group col-md-6">
		                    <label class="rotuloFormulario" for="data">Data Sugerida:</label>
		                    <input  type="text" class="form-control col-md-4 data1" name="dt_sugerido" style="margin: .3em .5em"  placeholder="ex.: XX/XX/XXXX"/>
		                </div>--> 

		                <div class="form-row" style="height: 15em;">	
							<!-- PUBLICO ALVO --> 
							<div class="col-md-6" style="height: 15em;">	
								<label class="rotuloFormulario">Público Alvo</label>
								<div class="form-group col-md-10"  style="margin: .3em .5em">
				                	<input type="checkbox" name="funcionario" value="true"> Funcionário <br>
					                <input type="checkbox" name="nv_aluno" value="true"> Novos Alunos <br>
					                <input type="checkbox" name="professor" value="true"> Professores <br>
									<input type="checkbox" name="aluno" value="true"> Alunos <br>
			                	</div>	
							</div>
							<!-- OBJETIVO --> 
							<div class="col-md-6" style="height: 15em; ">
								<label class="rotuloFormulario"> Objetivo: </label>
								<div class="form-group col-md-10" style="margin: .3em .5em">
					                <input type="checkbox" name="comunica" value="true"> Comunicado <br>
						            <input type="checkbox" name="divulga" value="true"> Divulgação <br>
			                	</div>
							</div>
						</div>

						<!--COBERTURA JORNALÍSTICA-->
			          	<div class="accordion-item" >
			              <input class= "item-selecionado" type="radio" name="accordion" id="accordion-1" value="jornal"/>
			              <label for= "accordion-1">Cobertura Jornalística</label>
			              <div class="accordion-content" style="margin: .3em 1em">
			                    <input type="checkbox" name="news" value="true"> Matéria News (Prazo - 3 dias) <br>
			              </div>
			          	</div>

			          	<!--REDES SOCIAIS-->
			          	<div class="accordion-item">
			             	<input class= "item-selecionado" type="radio" name="accordion" id="accordion-2" value="social" />
			              	<label for= "accordion-2">Divulgação nas Redes Sociais</label>
			              	<div class="accordion-content" style="margin: .3em 1em">
			              		<input type="checkbox" name="face" value="true"> Facebook (Prazo -  3 dias)	<i class="fab fa-facebook"></i> <br>
							    <input type="checkbox" name="insta" value="true"> Instagram (Prazo -  3 dias)<i class="fab fa-instagram"></i><br>
							    <input type="checkbox" name="linkedin" value="true"> Linkedin (Prazo - 3 dias)	<i class="fab fa-linkedin"></i><br>
							    <input type="checkbox" name="whatsapp" value="true"> WhatsApp (Prazo -  3 dias)	<i class="fab fa-whatsapp"></i>
			              	</div>
			         	</div>

			         	<!--PROJETOS GRÁFICOS-->
			        	<div class="accordion-item">
			              	<input class= "item-selecionado" type="radio" name="accordion" id="accordion-3" value="grafico"/>
			              	<label for= "accordion-3">Projeto Gráfico</label>
			              	<div class="accordion-content">
			              		<div class="form-row col-md-12" >	
					                <div class="col-md-12">
					                	<ul style="list-style: none;">
					              			<!--BANNER-->
					                		<li>
					                			<input type="checkbox" name="emp_banner" id="emp_banner" onclick="habilitar()" value="1"> Banner (Prazo - 5 dias) <br>
				            					<div class="card bg-light form-row col-md-12" name="exp_banner" id="exp_banner">
						            				<h4 class="card-header">Especificações Banner (Prazo – 5 dias): </h4>
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
														<div class="form-row ">
															<div class="form-group col-md-5" style="text-align:center;">					
																<img src="../figure/banner/IMGMODELO_BANNER_60x90_thumb.jpg" >
																<ul style="list-style: none;">
																	<input type="radio" name="tam_banner" value="L: 60 cm x A: 90 cm [P]"> L: 60 cm x A: 90 cm [P]
																</ul>
															</div>
															<div class="form-group col-md-5" style="text-align:center;">	
																<img src="../figure/banner/IMGMODELO_BANNER_80x120_thumb.jpg" >
																<ul style="list-style: none;">
																	<input type="radio" name="tam_banner" value="L: 60 cm x A: 120 cm [M]"> L: 60 cm x A: 120 cm [M] 
																</ul>
															</div>
															<div class="form-group col-md-5" style="text-align:center;">
																<img src="../figure/banner/IMGMODELO_BANNER_80x160_thumb.jpg" >
																<ul style="list-style: none;">
																	<input type="radio" name="tam_banner" value="L: 80 cm x A: 160 cm [G]">	L: 80 cm x A: 160 cm [G]
																</ul>

															</div>
															<div class="form-group col-md-5" style="text-align:center;">														
																<img src="../figure/banner/IMGMODELO_BANNER_140x300_thumb.jpg" >
																<ul style="list-style: none;">
																	<input type="radio" name="tam_banner" value="L: 140 cm x A: 300 cm [EG]">	L: 140 cm x A: 300 cm [EG]
																</ul>
															</div>
														</div>
					            						</div>	
					            						</div>

				            							<div class="form-row col-md-12">
				            								<div class="form-group card bg-light col-md-6">	
							            						<h5 class="card-title">Passo 2:</h5>
							            						<p class="card-text" style="margin-left: 1em;">Orientação: </p>
																<div class="form-row ">
																	<div class="form-group col-md-5" style="text-align:center;">
																		
																		<img src="../figure/banner/IMGMODELO_horizontal.jpg" >
																		<ul style="list-style: none;">
																			<li><input type="radio" name="orient_banner" value="Horizontal"> Horizontal </li>
																		</ul>	
																	</div>
																	<div class="form-group col-md-5" style="text-align:center;">
																
																		<img src="../figure/banner/IMGMODELO_vertical.jpg" >
																		<ul style="list-style: none;">
																			<li><input type="radio" name="orient_banner" value="Vertical"> Vertical </li>
																		</ul>
																	</div>
																</div>
				            								</div>
				            								<div class="form-group card bg-light col-md-6">	
							            						<div class="form-group ">
																	<div class="form-group col-md-12" style="text-align:left;">
																		<h5 class="card-title">Passo 3:</h5>
							            								<p class="card-text" style="margin-left: 1em;">Quantidade: <input type="text" name="qnt_banner"> </p>
							            								
																	</div>
																	<div class="form-group col-md-12" style="text-align:left;">
																		<h5 class="card-title">Passo 4:</h5>
							            								<p class="card-text" style="margin-left: 1em;">Briefing: </p>
							            								<textarea class="char-count form-control" type="text" name="desc_banner" maxlength="1000" style="width: 35vw; height: 20vh;"></textarea>
							            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_banner">1000</span></small> caracteres restantes</p>
							            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
																	</div>
																</div>
				            								</div>		
				            							</div>		
				            						</div>	
				            					</div>
				            				</li>

				            				<!--BACKDROP-->
						                	<li>
						                		<input type="checkbox" name="emp_backdrop" id="emp_backdrop" onclick="habilitar()" value="true"> Backdrop (Prazo - 7 dias) <br>
								            	<div class="card bg-light form-row col-md-12" name="exp_backdrop" id="exp_backdrop" >
													<h4 class="card-header">Especificações Backdrop (Prazo - 7 dias) : </h4>
													<div class="form-row ">
														<div class="form-row col-md-12">
															<div class="form-group card bg-light col-md-6"  style="text-align:center;">	
																<p class="card-title" style="margin-left: 1em;">Modelo Padrão do Instituto Presbiteriano Mackenzie </p>
																<div class="form-group "  style="text-align:center;">
																		<img src="../figure/backdrop/IMGMODELO_BACKDROP.png">
																
																</div>
															</div>
							
															<div class="form-row card bg-light col-md-6">
																<div class="form-group ">
							            							<h5 class="card-title">Passo 1:</h5>
																	<div class="form-row col-md-6" style="text-align:left;">
																		<p>Largura: <input type="text" name="larg_backdrop"></p>
							            								<p>Altura: <input type="text"  name="alt_backdrop"></p>	
																	</div>
																	<h5 class="card-title">Passo 2:</h5>
																	<div class="form-group col-md-12" style="text-align:left;">
																		<p class="card-text" style="margin-left: 1em;">Briefing: </p>
							            								<textarea class="char-count form-control" type="text" name="desc_backdrop" maxlength="1000" style="width: 35vw; height: 20vh;"></textarea>
							            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_backdrop">1000</span></small> caracteres restantes</p>
							            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
																	</div>
															 	</div>
															</div>
														</div>	
													</div>
												</div>
											</li>

											<!--CARTAZ-->
											<li>
												<input type="checkbox" name="emp_cartaz" id="emp_cartaz" onclick="habilitar()" value="true"> Cartaz (Prazo - 3 dias)<br>
 
										    	<div class="card bg-light form-row col-md-12" name="exp_cartaz" id="exp_cartaz">
										    		<h4 class="card-header">Especificações Cartaz (Prazo – 3 dias): </h4>
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
																<div class="form-row">
																	<div class="form-group col-md-12" style="text-align:center;">
																		<img src="../figure/cartaz/IMGMODELO_MALHA_REFTAMANHOPAPEL2.png" >
																		<div class="form-group col-md-12">
																			<ul style="list-style: none;">
																				<li><input type="radio" name="tam_cartaz" value="A3 (29,7 cm x 42 cm)"> A3 (29,7 cm x 42 cm) </li>
																				<li><input type="radio" name="tam_cartaz" value="A4 (21 cm x 29,7 cm)"> A4 (21 cm x 29,7 cm) </li>
																			</ul>	
																		</div>	
																	</div>
																</div>
							            					</div>

							            					<div class="form-group card bg-light col-md-6">	
							            						<h5 class="card-title">Passo 2:</h5>
							            						<p class="card-text" style="margin-left: 1em;">Orientação: </p>
																<div class="form-row ">
																	<div class="form-group col-md-5" style="text-align:center;">
																		<img src="../figure/cartaz/IMGMODELO_horizontal.jpg" >
																		<ul style="list-style: none;">
																			<li><input type="radio" name="orient_cartaz" value="Horizontal"> Horizontal</li>
																		</ul>
																	</div>
																	<div class="form-group col-md-5" style="text-align:center;">
																		<img src="../figure/cartaz/IMGMODELO_vertical.jpg" >
																		<uL style="list-style: none;">
																			<li><input type="radio" name="orient_cartaz" value="Vertical"> Vertical </li>
																		</ul>
																	</div>
																</div>
							            					</div>
							            				</div>

							            				<div class="form-row col-md-12">
							            					<div class="form-group card bg-light col-md-6">	
							            						<h5 class="card-title">Passo 3:</h5>
							            						<div class="form-group" style="text-align:left;">
							            							<div class="form-group">
							            								<p><input  type="checkbox" name="imp_cartaz" value="true"> Receber Impresso.</p>
							            								<p> Quantidade:  <input type="text" name="qnt_cartaz"></p>
							            							</div>
							            							<div class="form-group">
							            								<input type="checkbox" name="env_cartaz" value="true"> Receber por e-mail:
							            							</div>
							            						</div>	
							            					</div>

							            					<div class="form-group card bg-light col-md-6">	
							            						<h5 class="card-title">Passo 4:</h5>
																<div class="form-group" style="text-align:left;">
						            								<p class="card-text" style="margin-left: 1em;">Briefing: </p>
						            								<textarea class="char-count form-control" type="text" name="desc_cartaz" maxlength="1000" style="width: 35vw; height: 20vh;"></textarea>
						            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_cartaz">1000</span></small> caracteres restantes</p>
						            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
																</div>	
							            					</div>	
							            				</div>	
							            			</div>	
										    	</div>	
											</li>

											<!--FOLDER-->
											<li>
												<input type="checkbox" name="emp_folder" id="emp_folder" onclick="habilitar()" value="true"> Folder | Flyer  (Prazo - 5 dias) <br>
												<div class="card bg-light form-row col-md-12" name="exp_folder" id="exp_folder">
													<h4 class="card-header">Especificações Folder | Flyer (Prazo – 5 dias): </h4>
							            			<div class="form-row">	
							            				<div class="form-row col-md-12">
							            					<ul style=" list-style: none;">
							            						<li><input type="radio" name="esc_folder" id="emp_folder_marketing" onclick="habilitar()" value= "1"> Marketing define.</li>
							            						<li><input type="radio" name="esc_folder" id="emp_folder_solicitante" onclick="habilitar()" value = "2"> Solicitante define (se escolhida está opção,  preencha os passos 1 e 2)</li>
							            					</ul>		
							            				</div>

							            				<div class="form-row col-md-12" id="exp_folder_solicitante">
							            					<div class="form-group card bg-light col-md-6">	
							            						<h5 class="card-title">Passo 1:</h5>
							            						<div class="form-row" style="text-align:left;">
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
																<div class="form-row ">
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

							            				<div class="form-row col-md-12">
							            					<div class="form-group card bg-light col-md-6">	
							            						<div class="form-group ">
																	<div class="form-group col-md-12" style="text-align:left;">
																		<h5 class="card-title">Passo 3:</h5>
							            								<p class="card-text" style="margin-left: 1em;">Quantidade: </p>
							            								<input type="text" name="qnt_folder">
																	</div>
																	<div class="form-group col-md-12" style="text-align:left;">
																		<h5 class="card-title">Passo 4:</h5>
							            								<p class="card-text" style="margin-left: 1em;">Briefing: </p>
							            								<textarea class="char-count form-control" type="text" name="desc_folder" maxlength="1000" style="width: 35vw; height: 20vh;"></textarea>
							            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_folder">1000</span></small> caracteres restantes</p>
							            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
																	</div>
																</div>
							            					</div>		
							            				</div>	
							            			</div>	
												</div>	 											
											</li>

											<!--CAMISA-->
											<li>
					                   			<input type="checkbox" name="emp_camisa" id="emp_camisa" onclick="habilitar()" value="1"> Camisa  (Prazo - 5 dias) <br>
												<div class="card bg-light form-row col-md-12" name="exp_camisa" id="exp_camisa" >
													<h4 class="card-header">Especificações Camisa (Prazo - 5 Dias): </h4>
													<div class="form-row ">
														<div class="form-group col-md-12">
							            					<h5 class="card-title">Passo 1: </h5>
															<div class="form-row col-md-12">
																<div class="form-group col-md-5" style="text-align:center;">					
																	<img src="../figure/camisa/IMGMODELO_CPOLO_F.png" >
																	<ul style="list-style: none;">
																		<input type="radio" name="tp_camisa" value="Polo – ARTE na FRENTE"> Polo – ARTE na FRENTE
																	</ul>
																</div>
																<div class="form-group col-md-5" style="text-align:center;">	
																	<img src="../figure/camisa/IMGMODELO_CPOLO_FeC.png" >
																	<ul style="list-style: none;">
																		<input type="radio" name="tp_camisa" value="Polo – ARTE na FRENTE e COSTAS">	Polo – ARTE na FRENTE e COSTAS
																	</ul>
																</div>
																<div class="form-group col-md-5" style="text-align:center;">
																	<img src="../figure/camisa/IMGMODELO_MALHA_F.png" >
																	<ul style="list-style: none;">
																		<input type="radio" name="tp_camisa" value="Malha Comum – ARTE na FRENTE">	Malha Comum – ARTE na FRENTE
																	</ul>

																</div>
																<div class="form-group col-md-5" style="text-align:center;">														
																	<img src="../figure/camisa/IMGMODELO_MALHA_FeC.png" >
																	<ul style="list-style: none;">
																		<input type="radio" name="tp_camisa" value= "Malha Comum – ARTE na FRENTE e COSTAS">	Malha Comum – ARTE na FRENTE e COSTAS
																	</ul>
																</div>
															</div>
														</div>

														<div class="form-row col-md-12">
															<div class="form-group card bg-light col-md-6">	
																<h5 class="card-title">Passo 2: </h5>				
																<p> Cor: <input type="text" name="camisa_cor"> </p>		
																	
																<h5 class="card-title">Passo 3: </h5>
																<div class="form-row " style="text-align: center;">
																	<div class="form-group col-md-5" >														
																		<h5>Masculino: </h5>
																		<ul style="list-style: none;">
																			<li>P  | Qtd: <input type="text" name="qnt_masc_p"></li>
																			<li>M  | Qtd: <input type="text" name="qnt_masc_m"></li>
																			<li>G  | Qtd: <input type="text" name="qnt_masc_g"></li>
																			<li>EG | Qtd: <input type="text" name="qnt_masc_eg"></li>
																		</ul>
																	</div>
																	<div class="form-group col-md-5" >														
																		<h5>Feminino (Baby Look): </h5>
																		<ul style="list-style: none;">
																			<li>P  | Qtd: <input type="text" name="qnt_fem_p"></li>
																			<li>M  | Qtd: <input type="text" name="qnt_fem_m"></li>
																			<li>G  | Qtd: <input type="text" name="qnt_fem_g"></li>
																			<li>EG | Qtd: <input type="text" name="qnt_fem_eg"></li>
																		</ul>
																	</div>
																</div>	
															</div>

															<div class="form-group card bg-light col-md-6">	
																<div class="form-group " style="text-align:left;">
																	<h5 class="card-title">Passo 4:</h5>
						            								<p class="card-text" style="margin-left: 1em;">Briefing: </p>								
						            								<textarea class="char-count form-control" type="text" name="desc_camisa" maxlength="1000" style="width: 35vw; height: 20vh;" autocorrect="on"></textarea>
						            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_camisa">1000</span></small> caracteres restantes</p>
						            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
																</div>
															</div>	
														</div>			
													</div>	
												</div>
											</li>

											<!--CARTÃO VISITA-->
											<li>
												<input type="checkbox" name="emp_cartao" id="emp_cartao" onclick="habilitar()" value="1"> Cartão de Visita  (Prazo - 3 dias) <br>	
												<div class="card bg-light form-row col-md-12" name="exp_cartao" id="exp_cartao" >
													<h4 class="card-header">Especificações Cartão Visita (Prazo - 3 dias) : </h4>
													<div class="form-row ">
														<div class="form-row col-md-12">
															<div class="form-group card bg-light col-md-6"  style="text-align:center;">	
																<p class="card-title" style="margin-left: 1em;">Modelo Padrão do Instituto Presbiteriano Mackenzie </p>
																<div class="form-group"  style="text-align:center;">
																	<img src="../figure/cartao/IMGMODELO_CV.png">
																</div>
															</div>

															
															<div class="form-row card bg-light col-md-6">
																<div class="form-group">	
																	<h5 class="card-title">Passo Único : </h5>
																	<p class="card-text" style="margin-left: 1em;">Informar Detalhes a Serem Inseridos no Cartão:</p>
																	<textarea class="char-count form-control" type="text" name="desc_cartao" maxlength="1000" placeholder="Ex: Nome | Cargo | Telefones | E-mail, etc" style="width: 35vw; height: 20vh;" autocorrect="on"></textarea>
						            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_cartao">1000</span></small> caracteres restantes</p>
					            								</div>
															</div>
														</div>	
													</div>
												</div>
											</li>

								            <!--CONVITE-->
											<li>
					                    		<input type="checkbox" name="emp_convite" id="emp_convite" onclick="habilitar()" value="1"> Convite | Certificado (Prazo - 3 dias) <br>	
												<div class="card bg-light form-row col-md-12" name="exp_convite" id="exp_convite" >
							            			<h4 class="card-header">Especificações Convite (Prazo - 3 dias uteis) : </h4>
							            			<div class="form-row ">
							            				<div class="form-group card bg-light col-md-12">
								            				<h5 class="card-title">Passo 1: </h5>
								            				<div class="form-row " style="text-align: center;">	
								            					<div class="form-group col-md-6" style="text-align:center;">					
																	<img src="../figure/convite/IMGMODELO_CONVITE.png">
																	<ul style="list-style: none;">
																		<input type="radio" name="tam_convite" value="CONVITE (Tamanho Padrão)"> CONVITE (Tamanho Padrão)
																	</ul>
																</div>

																<div class="form-group col-md-6" style="text-align:center;">					
																	<img src="../figure/convite/IMGMODELO_CERTIFICADO.png">
																	<ul style="list-style: none;">
																		<input type="radio" name="tam_convite" value="CERTIFICADO (Tamanho Padrão)"> CERTIFICADO (Tamanho Padrão)
																	</ul>
																</div>
															</div>	
														</div>

														<div class="form-row col-md-12">
							            					<div class="form-group card bg-light col-md-6">	
							            						<h5 class="card-title">Passo 2:</h5>
							            						<p class="card-text" style="margin-left: 1em;">Orientação: </p>
																<div class="form-row ">
																	<div class="form-group col-md-5" style="text-align:center;">
																		<img src="../figure/banner/IMGMODELO_horizontal.jpg">
																		<ul>
																			<input type="radio" name="orient_convite" value="Horizontal">Horizontal
																		</ul>	
																	</div>
																	<div class="form-group col-md-5" style="text-align:center;">
																		<img src="../figure/banner/IMGMODELO_vertical.jpg">
																		<ul>
																			<input type="radio" name="orient_convite" value="Vertical">Vertical 
																		</ul>	
																	</div>
																</div>
							            					</div>

							            					<div class="form-group card bg-light col-md-6">	
							            						<div class="form-group ">
																	<div class="form-group " style="text-align:left;">
																		<h5 class="card-title">Passo 3:</h5>
							            								<p class="card-text" style="margin-left: 1em;"><input type="checkbox" name="imp_convite" value="1"> Enviar Impresso -
							            								Quantidade: <input type="text" name="qnt_convite"></p>
							            								<p class="card-text" style="margin-left: 1em;"><input type="checkbox" name="env_convite" value="1"> Enviar por e-mail </p>
																	</div>
																	<div class="form-group " style="text-align:left;">
																		<h5 class="card-title">Passo 4:</h5>
							            								<p class="card-text" style="margin-left: 1em;">Briefing: </p>
							            								<textarea class="char-count form-control" type="text" name="desc_convite" maxlength="1000" style="width: 35vw; height: 20vh;" autocorrect="on"></textarea>
							            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_convite">1000</span></small> caracteres restantes</p>
							            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
																	</div>
																</div>
							            					</div>

							            				</div>	
													</div>
												</div>											
											</li>

											<!--FLYER-->
											<li>
						                   		<input type="checkbox" name="emp_adesivo" id="emp_flyer" onclick="habilitar()"value="true"> Flyer  (Prazo - 5 dias) <br>												
							            		<div class="card bg-light form-row col-md-12" name="exp_flyer" id="exp_flyer">
							            			<h4 class="card-header">Especificações Flyer (Prazo – 5 dias): </h4>
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
																<div class="form-row ">
																	<div class="form-group col-md-12" style="text-align:center;">					
																		<img src="../figure/flyer/IMGMODELO_MALHA_REFTAMANHOPAPEL.png">
																		<ul style="list-style: none;">
																			<li><input type="radio" name="tam_flyer" value="A5 (14,8 cm x 21,0 cm)"> A5 (14,8 cm x 21,0 cm)</li>
																			<li><input type="radio" name="tam_flyer" value="A6 (10,5 cm x 14,8 cm)"> A6 (10,5 cm x 14,8 cm)</li>
																		</ul>
																	</div>
																</div>
							            					</div>

							            					<div class="form-group card bg-light col-md-6">	
							            						<h5 class="card-title">Passo 2:</h5>
							            						<p class="card-text" style="margin-left: 1em;">Orientação: </p>
																<div class="form-row ">
																	<div class="form-group col-md-5" style="text-align:center;">
																		<img src="../figure/flyer/IMGMODELO_FLYER_ORIENTAÇÃO_HORIZONTAL.jpg">
																		<ul style="list-style: none;">
																			<li><input type="radio" name="orient_flyer" value="Horizontal">Horizontal</li>
																		</ul>		
																	</div>
																	<div class="form-group col-md-5" style="text-align:center;">
																		<img src="../figure/flyer/IMGMODELO_FLYER_ORIENTAÇÃOVERTICAL.jpg">
																		<ul style="list-style: none;">
																			<li><input type="radio" name="orient_flyer" value="Vertical">Vertical </li>
																		</ul>
																	</div>
																</div>
							            					</div>
							            				</div>

							            				<div class="form-row col-md-12">
							            					<div class="form-group card bg-light col-md-6">	
							            						<h5 class="card-title">Passo 3:</h5>
							            						<p class="card-text" style="margin-left: 1em;">Impressão: </p>
																<div class="form-row ">
																	<div class="form-group col-md-5" style="text-align:center;">
																		<img src="../figure/flyer/IMGMODELO_FLYER_IMPFRENTE.jpg">	
																		<ul style="list-style: none;">
																				<input type="radio" name="imp_flyer" value="Frente"> Frente
																		</ul>
																	</div>
																	<div class="form-group col-md-5" style="text-align:center;">
																		<img src="../figure/flyer/IMGMODELO_FLYER_IMPFRENTExVERSO.jpg">
																		<ul style="list-style: none;">	
																			<input type="radio" name="imp_flyer" value="Frente e Verso"> Frente e Verso
																		</ul>
																	</div>
																</div>
							            					</div>
							            					<div class="form-group card bg-light col-md-6">	
							            						<div class="form-group ">
																	<div class="form-group col-md-12" style="text-align:left;">
																		<h5 class="card-title">Passo 4:</h5>
							            								<p class="card-text" style="margin-left: 1em;">Quantidade: <input type="text" name="qnt_flyer"></p>
																	</div>
																	<div class="form-group col-md-12" style="text-align:left;">
																		<h5 class="card-title">Passo 5:</h5>
							            								<p class="card-text" style="margin-left: 1em;">Briefing: </p>
							            								<textarea class="char-count form-control" type="text" name="desc_flyer" maxlength="1000" style="width: 35vw; height: 20vh;" autocorrect="on"></textarea>
							            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_flyer">1000</span></small> caracteres restantes</p>
							            								<p class="card-text">Orientação: Descrever sobre o objetivo do material, local de uso, tipo de público, detalhes do evento, informações que serão inseridas na peça (capa/parte interna). Tente detalhar, o máximo possível, o conteúdo deste briefing.</p>
																	</div>
																</div>
							            					</div>		
							            				</div>		
							            			</div>	
							            		</div>  	
											</li>
											
											<!--PLACAS-->
											<li>
												<input type="checkbox" name="emp_placa" id="emp_placa" onclick="habilitar()" value="true"> Placas e Sinalização Interna/Externa  (Prazo - 7 dias) </br>
												<div class="card bg-light form-row col-md-12" name="exp_placa" id="exp_placa" >
													<h4 class="card-header">Especificações Placa (Prazo - 2 dias) : </h4>
													<div class="form-row ">
														<div class="form-row col-md-12">
															<div class="form-group card bg-light col-md-6"  style="text-align:center;">	
																<p class="card-title" style="margin-left: 1em;">Modelo Padrão do Instituto Presbiteriano Mackenzie </p>
																<div class="form-group "  style="text-align:center;">
																	<img src="../figure/placa/IMGMODELO_PLACA.png">
																</div>
															</div>
															<div class="form-row card bg-light col-md-6">
																<div class="form-group ">
							            							<h5 class="card-title">Passo 1:</h5>
																	<div class="form-row col-md-6" style="text-align:left;">
																		<p><input type="checkbox" name="imp_placa" value="1">Enviar Impresso </p>
																		<p> Quantidade:  <input type="text" name="qnt_placa"></p>
																		<p><input type="checkbox" name="env_placa" value="1"> Enviar por e-mail </p>
																		
																	</div>
																	<h5 class="card-title">Passo 2:</h5>
																	<div class="form-group col-md-12" style="text-align:left;">
																		<p class="card-text" style="margin-left: 1em;">Briefing: </p>
							            								<textarea class="char-count form-control" type="text" name="desc_placa" maxlength="1000" placeholder="Exemplo na imagem." style="width: 35vw; height: 20vh;"></textarea>
							            								<p class="text-muted col-md-12" style="text-align: justify;"><small><span name="desc_placa">1000</span></small> caracteres restantes</p>
							            								
																	</div>
															 	</div>
															</div>
														</div>	
													</div>
												</div>
											</li>
											
											<!--EVENTOS-->
											<li>
												<input type="checkbox" name="emp_evento" id="emp_evento" onclick="habilitar()" value="true"> Eventos </br>
												<div class="form-row col-md-12">
													<div name="exp_evento" id="exp_evento" class="card bg-light form-row col-md-5">
														<h6 class="card-header">Expecificações Eventos: </h6> 
														<div class="form-row"> 
															<div style="margin: .5em;">
																<input type="checkbox" name="cf_midia" value="1"> Peça de Mídias Sociais - Feed e Stories <br>
												                <input type="checkbox" name="cf_email" value="1"> E-mail Marketing <br>
												                <input type="checkbox" name="cf_site" value="1"> Material Site <br>
																<input type="checkbox" name="cf_sympla" value="1"> Cadastro no Sympla <br>
																<input type="checkbox" name="emp_stream" id="emp_stream" onclick="habilitar()" value="true">  Live pelo Stream Yard: 
																<div name="exp_stream" id="exp_stream">
																	<input id="" type="checkbox" name="lv_face" value="1" style="margin: .3em .5em" /> Facebook
									                    			<input id="" type="checkbox" name="lv_youtube" value="1" style="margin: .3em .5em"/> Youtube
									                    		</div>	
															</div>
														</div>
													</div>
												</div>
											</li>											
					                	</ul>
					                </div>
					            </div>
					        </div>
					    </div>

				        <!--TV Indoor-->
			          	<div class="accordion-item">
			              	<input class= "item-selecionado" type="radio" name="accordion" id="accordion-5" value="tv_indoor" />
			              	<label for= "accordion-5">Tv Indoor</label>
			              	<div class="accordion-content" style="margin: .3em 1em">
			                    <input type="checkbox" name="tv_indoor" value="true" > Tv Indoor  (Prazo - 3 dias) <br>
			              	</div>
			          	</div>
				        <!--E-mail Marketing-->
			          	<div class="accordion-item">
			              	<input class= "item-selecionado" type="radio" name="accordion" id="accordion-6" value="email" />
			              	<label for= "accordion-6">Comunicação | e-mail Marketing</label>
			              	<div class="accordion-content" style="margin: .3em 1em">
			                    <input type="checkbox" name="email_mark" value="true" >  E-mail Marketing  (Prazo - 3 dias) <br>
			              	</div>
			          	</div>

				        <!--Conteúdo para Site-->
			          	<div class="accordion-item">
			              	<input class= "item-selecionado" type="radio" name="accordion" id="accordion-7" value="site" />
			              	<label for= "accordion-7">Conteúdo para Site</label>
			              	<div class="accordion-content" style="margin: .3em 1em">
			                    <input type="checkbox" name="site" value="true" > Atualizações site (Ex:  substituições, documentos, notícias | Prazo - 2 dias) <br>
			              	</div>
			          	</div>

				       	<!--Descrição-->
				       	<div>
				         	<div class="card-header bg-secondary">
				            	<h3 class="card-title text-light">Descrição</h3>
				            </div>
			        	
			            	<textarea class="char-count form-control col-md-10" name="descricao" style="width: 50vw; height: 30vh; margin: .5em 1em; text-align: justify;" maxlength="1000" autocorrect="on"></textarea>
							<p class="text-muted col-md-12" style="text-align: left;"><small><span name="descricao">1000</span></small> caracteres restantes</p>
								
							<div class="form-group col-md-12">
			                    <label class="rotuloFormulario" for="questEvento">Este pedido está associado a algum evento solicitado através do Sistema de Eventos do Mackenzie?</label>
			                    <input id="questEvento" type="radio" name="cf_evento" style="margin: .3em .5em" value="1" /> Sim
			                    <input id="questEvento" type="radio" name="cf_evento" style="margin: .3em .5em" value="0" /> Não
			                </div>
			                <div class="form-group col-md-12">
			                    <label class="rotuloFormulario" for="numEvento">Caso esteja relacionado, informe o número do evento?</label>
			                    <input id="numEvento" type="text" class="form-control col-md-6" name="cod_evento" style="margin: .3em .5em"/> 
			                </div>
			            </div>    
						<!-- ARQUIVOS -->
						<div> 
							<div class="card-header bg-secondary">
				        		<h3 class="card-title text-light">Arquivo</h3>
				        	</div>
				    		<input type="file" class="form-control-file col-md-8" name="arquivo">
				    	</div>		  	 					                		
					</div> 	
					<button type="submit" class="btn btn-primary col-md-3" name="setor" value="Analista Chefe">Solicitar</button> 
				</div>
			</form>
		</div>
	</section>	 	
</div>

<script type="text/javascript">
	$('#exp_banner').hide();
	$('#exp_backdrop').hide();
	$('#exp_cartaz').hide();
	$('#exp_folder').hide();
		$('#exp_folder_solicitante').hide();
	$('#exp_camisa').hide();
	$('#exp_cartao').hide();
	$('#exp_convite').hide();
	$('#exp_flyer').hide();	
	$('#exp_placa').hide();
	$('#exp_evento').hide();
		$('#exp_stream').hide();
	function habilitar(){
		if(document.getElementById('emp_banner').checked){
            $('#exp_banner').show();
        }
        else {
           $('#exp_banner').hide();
        }
        if(document.getElementById('emp_backdrop').checked){
            $('#exp_backdrop').show();
        }
        else {
           $('#exp_backdrop').hide();
        }
        if(document.getElementById('emp_cartaz').checked){
            $('#exp_cartaz').show();
        }
        else {
           $('#exp_cartaz').hide();
        }
        if(document.getElementById('emp_folder').checked){
            $('#exp_folder').show();
        }
        else {
           $('#exp_folder').hide();
        }
        if(document.getElementById('emp_folder_solicitante').checked){
            $('#exp_folder_solicitante').show();
        }
        else {
           $('#exp_folder_solicitante').hide();
        }
        if(document.getElementById('emp_camisa').checked){
            $('#exp_camisa').show();
        }
        else {
           $('#exp_camisa').hide();
        }
        if(document.getElementById('emp_cartao').checked){
            $('#exp_cartao').show();
        }
        else {
           $('#exp_cartao').hide();
        }
        if(document.getElementById('emp_convite').checked){
            $('#exp_convite').show();
        }
        else {
           $('#exp_convite').hide();
        }
       	if(document.getElementById('emp_flyer').checked){
            $('#exp_flyer').show();
        }
        else {
           $('#exp_flyer').hide();
        }
        if(document.getElementById('emp_placa').checked){
            $('#exp_placa').show();
        }
        else {
           $('#exp_placa').hide();
        }
        if(document.getElementById('emp_evento').checked){
            $('#exp_evento').show();
        }
        else {
           $('#exp_evento').hide();
        }
        if(document.getElementById('emp_stream').checked){
            $('#exp_stream').show();
        }
        else {
           $('#exp_stream').hide();
        }
	}
</script>  

<script>
    $(function() {
        $(".data1").datepicker({
            dateFormat: 'dd/mm/yy',
            dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
            dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
            dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
            monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
        });
    });
</script>

<script type="text/javascript" src="../js/jquery.mask.min.js"/></script>
<script type="text/javascript">
	var input = document.getElementById("telefone");
	var telefone = input.value[6];
	if(telefone == 9){
	$("#telefone").mask("(00) 90000-0000");
	
	}else{
		$("#telefone").mask("(00) 0000-00000");
		die();
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

<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

