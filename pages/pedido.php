<?php
	include "../estrutura/head.php";
	include "../regras/acessoUser.php";
	include "../banco/acessoBanco.php";

?>
<div style="display: contents; position: relative;">
	<?php
		$id_pedido = $_REQUEST['file'];

		include "../estrutura/menu.php";
		include "../estrutura/openPedido.php"
	?>
</div>