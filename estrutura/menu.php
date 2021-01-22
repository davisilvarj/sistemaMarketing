<div class="painel col-md-3">
	<figure>
		<img class="img-painel img-fluid" src="../figure/img6.jpg">
	</figure>
	
	<nav class="navbar nav-tabs navbar">
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link" href="../pages/solicitacao.php"> Solicitação </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../pages/listaGeral.php"> Lista de Pedidos </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../regras/logout.php"> Sair </a>
			</li>
		</ul>
	</nav>
	<nav class="campo-pesquisa">
		<label>Pesquisa: </label>
		<form action="../pages/pedido.php" method="post">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Código do Serviço" name="file" id="file">
				<div class="input-group-append">
					<button class="botao-pesquisa btn btn-outline-danger" type="submit">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
						  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
						</svg>
					</button>
				</div>
			</div>
		</form>
	</nav>
</div>