<?php
	function listaPedido($connect, $inicio, $qntExibir){
		$pedidos = array();
		$result_pedido = mysqli_query($connect, "select * from pedido p
			join solicitante s on s.fk_pedido = p.id_pedido
			join publico pub on pub.fk_pedido = p.id_pedido
			join objetivo o on o.fk_pedido = p.id_pedido
			left join data d on d.fk_pedido = p.id_pedido
			order by p.id_pedido desc
			limit $inicio, $qntExibir");
		while($pedido = mysqli_fetch_assoc($result_pedido)){
			array_push($pedidos, $pedido);
		}
		return $pedidos;
	}

/*CAPTURA ID*/
	function capturaIdPedido($connect){
			$pedidos = array();
			$resultado = mysqli_query($connect, "select * from pedido");
				while($pedido = mysqli_fetch_assoc($resultado)){
					array_push($pedidos, $pedido);
				}
				return $pedidos;
		}

		$pedidos = capturaIdPedido($connect);

		foreach ($pedidos as $pedido){
			$fk_pedido 	= $pedido['id_pedido']+1;
		}

/*CONTADORES*/
	function contPedido($connect){
		$result_pedido = mysqli_query($connect, "select * from pedido");
		$num_rows = mysqli_num_rows($result_pedido);
		return $num_rows;
	}