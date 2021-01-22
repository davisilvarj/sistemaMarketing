<?php
	include "../estrutura/head.php";
	include "../regras/acessoUser.php";
	include "../banco/acessoBanco.php";
	include "../estrutura/menu.php";
?>
<div style="display: contents; position: relative;">
	<?php
		$id_pedido = $_REQUEST['file'];

		include "../estrutura/openAtualiza.php";
		
	?>
</div>