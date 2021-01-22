<?php

	$pagina = (!isset($_GET['pagina'])) ? 1: $_GET['pagina'];
	
	$qntExibir = 20; // número de registros por página

	$qntTitulos = contPedido($connect);

	$total = ceil($qntTitulos/$qntExibir);

	$inicio = ($qntExibir*$pagina)-$qntExibir;

	$pedidos = listaPedido($connect, $inicio, $qntExibir);

?>

<div class="areaformulario">
	<div class="card">
	<table class="table bg-white text-dark">
			<thead class="bg-secondary text-white text-center">
				<tr>
					<th> Códido do Serviço </th>
					<th> DRT </th>
					<th> Solicitante </th>
					<th> Data da Solicitação </th>
					<th> Data do Evento </th>
					<th> Status </th>
				</tr>	
			</thead>

		<?php 
			foreach ($pedidos as $pedido){
		?>
			<tbody>
				<tr>
					<input type="hidden" name="pesquisar" value="<?=$pedido['id_pedido']?>">
					<td><a class="text-danger"href="pedido.php?file=<?=$pedido['id_pedido']?>"><?=$pedido['id_pedido']?></td>
					<td><?=$pedido['drt']?></td>
					<td><?=$pedido['nome']?></td>
					<td><?=$pedido['dt_pedido']?></td>
					<td><?=$pedido['dt_evento']?></td>
					<td><?=$pedido['status']?></td>
				</tr>	
			</tbody>
		<?php 
			}
		?>	
	</table>

	<nav aria-label="..."  style="width: 100vw; height: 5vh; margin: .5em 2em;">
			<ul class="pagination pagination">
				<?php if($pagina == 1 ){?>
					<li class="page-item" >
						<a class="page-link">
							Anterior	
						</a>
					</li>		
				<?php } 
					else{?>
						<li class="page-item" >
							<a class="page-link" href="?pagina=<?=$pagina-1?>">
								Anterior	
							</a>
						</li>	
				<?php		
					}
					
		
					for ($i= 1; $i <= $total ; $i++) {
						$cont = $i;
						if($i == $pagina){?>
	    					<li class="page-item active" aria-current="page">
								<span class="page-link">
									<?php
										echo $i;
									?>
									<span class="sr-only">(current)</span>
								</span>
							</li>
						<?php } 
							else{
								if($i >= 1 && $i <= 20 ){?>
								<li class="page-item">
									<a class="page-link" href="?pagina=<?=$i?>">
									<?php	
										echo $i;
									}}?>
									</a>
								</li>
							<?php
					}	
				?>
				<li class="page-item">
					<a class="page-link" href="?pagina=<?=$pagina+1?>">
						Próximo
					</a>
				</li>
			</ul>
		</nav>
	</div>	
</div>
