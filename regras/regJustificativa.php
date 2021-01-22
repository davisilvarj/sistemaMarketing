<?php
	require ("PHPMailerAutoload.php");
	require ("email_cred.php");
	include "../banco/acessoBanco.php";

	$dt_just = date("d/m/Y");
 	$drt_just = $_POST['drt'];
 	$desc_just = $_POST['desc_just'];
 	$id_pedido = $_REQUEST['id_pedido'];

 	$setor = "Analista Chefe";
	$usuarios =  buscaSetor($connect, $setor);

	foreach($usuarios as $usuario){
		$email_setor = $usuario['email'];
	}

	$pedidos = buscaPedido($connect, $id_pedido);

	foreach ($pedidos as $pedido) {}	

 	if(inserirJust($connect, $dt_just, $drt_just, $desc_just, $id_pedido)){
 		$mail = new PHPMailer;	
		$mail->isSMTP();						// Set mailer to use SMTP
		$mail->Host = 'smtp.office365.com';		// Specify main and backup SMTP servers
		$mail->SMTPAuth = TRUE;					// Enable SMTP authentication
		$mail->Username = EMAIL;				// SMTP username
		$mail->Password = PASS;					// SMTP password
		$mail->SMTPSecure = 'starttls';			// Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;						// TCP port to connect to

		$mail->setFrom(EMAIL);

		$mail->addAddress($pedido['email']);     	// Add a recipient
		$mail->addCC($email_setor);

		$mail->addReplyTo(EMAIL);

		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(TRUE);					// Set email format to HTML

		$mail->CharSet  = 'utf-8';
		$mail->Subject = ('Pedido de Evento');
		$mail->Body    = ("<p> ".$pedido['nome'].", foi inserido uma nova informação ao seu pedido pela equipe do Marketing.</p>
							<p>Consulte o evento através do link ".'<a href="http://172.18.0.170/Nucom/estrutura/login.php">'."http://172.18.0.170/Nucom/estrutura/login.php</a> </p>
							<p>Código do pedido: ".$id_pedido.".");
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			}else {
				$_SESSION["success"] = "Solicitação realizada! Cógido do pedido: ". $id_pedido;
				header("Location: ../pages/pedido.php?file=$id_pedido");
			}	
 	}else{
			$msg = mysqli_error($connect);
			echo $msg;
	}


	