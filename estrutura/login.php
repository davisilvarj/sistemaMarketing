<?php
	include "head.php";
	include ("../regras/acessoUser.php");
?>

<div class="painel-login">
	<div class="painel-box jumbotron jumbotron-flex">
		<div class="painel-card card">

			<img class="card-img-top" src="../figure/img5.jpg">
			<div class="form-group">
				<div>
					<?php  mostraAlerta("success"); ?>
		    		<?php mostraAlerta("danger"); ?>
		   		</div>
				<form action="../regras/controleAcesso.php" class="form-row col-md-12" method="post">
					<label class="col-md-2">DRT: </label>
					<input class="form-control col-md-10" type="text" name="drt"/>
					<label class="col-md-2">Senha: </label>
					<input class="form-control col-md-10" type="password" name="pass"/>
					<button type="submit" class="btn  btn-primary"> Entrar </button>
				</form>	
			</div>
		</div>
	</div>	
</div>