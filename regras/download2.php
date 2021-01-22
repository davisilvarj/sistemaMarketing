<?php
	include "../estrutura/head.php";

	$nome =  $_GET['file'];
	$point = substr($nome, -4,1);
	
	if($point == '.'){
		$extencao = strtolower(substr($nome, -4));
	}else{
		$extencao = strtolower(substr($nome, -5));
	}

	switch ($extencao) {
		case '.jpg'||'.jpeg'||'.png':?>
				<div class="" style="width: 100vw; height: 90vh;">
					<input class="btn btn-dark col-2" type="button" value="Voltar" onClick="history.go(-1)"> 
					
					<iframe src="../upload/<?= $nome?>" width="100%" height="100%" >
			    	
			    	</iframe>
		    	</div>	
		<?php
			echo $_GET['file']."</br>";	
			break;
		
		default:
				$pasta = '../upload/';

				if(isset($_GET['file']) and file_exists("{$pasta}/".$_GET['file'])){
					$file = $_GET['file'];
					
					$type = filetype("{$pasta}/{$file}");
					$size = filesize("{$pasta}/{$file}");
					
					header("Content-Description: File Transfer");
					header("Content-Type: application/octet-stream");
					header("Content-Disposition: attachment; filename= $file");
					header("Expires: 0");
					header("Cache-Control: must-revalidate");
			        header("Pragma: public");
					header("Content-Length: {$size}");
					readfile("{$pasta}/{$file}");

					exit;
				}
			break;
	}
	
	/*if($extencao == '.jpg' || '.jpeg' || '.png'){?>
		<div class="" style="width: 100vw; height: 90vh;">
			<input class="btn btn-dark col-2" type="button" value="Voltar" onClick="history.go(-1)"> 
			
			<iframe src="../upload/<?= $nome?>" width="100%" height="100%" >
	    	
	    	</iframe>
    	</div>	
    	<?php
    	echo $_GET['file']."</br>";

	}
	else{
		$pasta = '../upload/';

		if(isset($_GET['file']) and file_exists("{$pasta}/".$_GET['file'])){
			$file = $_GET['file'];
			
			$type = filetype("{$pasta}/{$file}");
			$size = filesize("{$pasta}/{$file}");
			
			header("Content-Description: File Transfer");
			header("Content-Type: application/octet-stream");
			header("Content-Disposition: attachment; filename= $file");
			header("Expires: 0");
			header("Cache-Control: must-revalidate");
	        header("Pragma: public");
			header("Content-Length: {$size}");
			readfile("{$pasta}/{$file}");

			exit;
		}
	}	*/


	