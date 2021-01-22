<?php
	include "../regras/acessoUser.php";

	$drt = userlog();

	if($drt == 'dti'){
		include "../estrutura/head.php";
		include "../estrutura/controleFuncionario.php";
	}else{
		verifyUser();
	
		if(userIsLog()){
			switch (userlog()){
			case $drt:
					include "../estrutura/head.php";
					include "../estrutura/menu.php";
					?>
					<div class="areaformulario">
						<div class="card text-left">
							<?php  mostraAlerta("success"); 
					    			mostraAlerta("danger"); ?>
					    </div>		
					</div>
				<?php	
				break;			
			}
		}
	}

?>
