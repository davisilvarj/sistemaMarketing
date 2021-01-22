
<?php
	include "../banco/acessoBanco.php";

	$usuarios = buscarUsuarios($connect);	
?>

<div class="areacontrole">
	<div style="width: 100vw; height: 5vh;">
				<button class="btn btn-primary col-2" data-toggle="modal" data-target="#myModal" style="margin: .5em; position:  relative; float: right;">Inserir Novo Colaborador</button>
		
		<a href="../regras/logout.php"><button class="btn btn-primary col-2" data-toggle="modal" data-target="#myModal" style="margin: .5em; position:  relative; float: right;">Sair</button></a>
	
	</div>	

	<div id="areadados" class="form-group" style="width: 80em; margin: 1em auto; position: relative;">
		<?php 
		foreach ($usuarios as $usuario){?>
			<form action="../regras/atualizaFuncionarios.php" method="post">
				<div class="card text-left" style="margin-top: .5em;">
					<div class="card-header"> 		
					</div>
					<div class="card-body">
						<input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?>">
						<label> Nome: </label>
						<input class="form-control" type="text" name="nome" value="<?=$usuario['nome']?>" />
						<label> Drt: </label>
						<input class="form-control" type="text" name="drt" value="<?=$usuario['drt_user']?>" />
						<label> E-mail: </label>
						<input class="form-control" type="text" name="email" value="<?=$usuario['email']?>" />
						<label> Função: </label>
						<input class="form-control" type="text" value="<?=$usuario['funcao']?>" disabled/>
						<input class="form-control" type="hidden" name="funcao" value="<?=$usuario['funcao']?>"/>
					</div>
					<div class="controle_button form-row">
						<button class="btn btn-primary col-2" name="button" value="atualiza" style="margin: .5em; position:  relative; float: right;">Atualizar</button>	
						<button class="btn btn-primary col-2" name="button" value="deleta" style="margin: .5em; position:  relative; float: right;">Deletar</button>
					</div>		
				</div>	
			</form>
		<?php } ?>	
	</div>

		<div class="modal" id="myModal">
			<div class="modal-dialog">
			 	<div class="modal-content"  style="width: 30vw;">   
				    <!-- Modal Header -->
				    <div class="modal-header">
				      <button type="button" class="close" data-dismiss="modal">×</button>
				    </div>
			    
				    <!-- Modal body -->
				    <div class="modal-body">
				      	<form action="../regras/regFuncionario.php" method="post">
				      		<div class="card text-left">
								<div class="card-header">
									<h3>Novo Usuário</h3> 		
								</div>
								<div class="card-body">
									<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
									<label> Nome: </label>
									<input class="form-control" type="text" name="nome" />
									<label> Drt: </label>
									<input class="form-control" type="text" name="drt"  />
									<label> E-mail: </label>
									<input class="form-control" type="text" name="email"/>
									<label> Função: </label>
									<select name="funcao">
										<?php 
											$funcoes = buscaFuncao($connect);
											foreach ($funcoes as $funcao) {?>
												<option class="form-control" ><?= $funcao['cargo']?></option>
										<?php }?>
									</select>
								</div>
								<div class="controle_button form-row">
									<button class="btn btn-primary col-2" name="button" style="margin: .5em; position:  relative; float: right;">OK</button>
								</div>		
							</div>	
				      	</form>
				    </div>
		  		</div>
			</div>
		</div>		
	
</div>