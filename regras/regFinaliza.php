<?php
	require ("PHPMailerAutoload.php");
	require ("email_cred.php");
	include "../banco/acessoBanco.php";

	$id_pedido = $_POST['id_pedido'];
	$dt_final = date("d/m/Y");
	$status = $_POST['send_final'];
	$drt = $_POST['drt'];

	$pedidos = buscaPedido($connect, $id_pedido);

	foreach ($pedidos as $pedido) {}
switch ($status) {
	case 'Finalizado':
		$dt_final = date("d/m/Y");
		echo $drt;
		if(upFinal($connect, $dt_final, $drt, $status, $id_pedido)){
		
			$mail = new PHPMailer;

			//$mail->SMTPDebug = 4;					// Enable verbose debug output

			$mail->isSMTP();						// Set mailer to use SMTP
			$mail->Host = 'smtp.office365.com';		// Specify main and backup SMTP servers
			$mail->SMTPAuth = TRUE;					// Enable SMTP authentication
			$mail->Username = EMAIL;				// SMTP username
			$mail->Password = PASS;					// SMTP password
			$mail->SMTPSecure = 'starttls';			// Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;						// TCP port to connect to

			$mail->setFrom(EMAIL);

			$mail->addAddress($pedido['email']);     	// Add a recipient
			
			$mail->addReplyTo(EMAIL);

			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			$mail->isHTML(TRUE);					// Set email format to HTML

			$mail->CharSet  = 'utf-8';
			$mail->Subject = ('Pedido de Evento');
			$mail->Body    = ("<p> ".$pedido['nome'].", Solicitação finalizada com sucesso!</p>
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
		break;
	
	case 'Entregue':
		$dt_entrega = date("d/m/Y");

		if(upEntrega($connect, $dt_entrega, $status, $id_pedido)){
			$mail = new PHPMailer;

			//$mail->SMTPDebug = 4;					// Enable verbose debug output

			$mail->isSMTP();						// Set mailer to use SMTP
			$mail->Host = 'smtp.office365.com';		// Specify main and backup SMTP servers
			$mail->SMTPAuth = TRUE;					// Enable SMTP authentication
			$mail->Username = EMAIL;				// SMTP username
			$mail->Password = PASS;					// SMTP password
			$mail->SMTPSecure = 'starttls';			// Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;						// TCP port to connect to

			$mail->setFrom(EMAIL);

			$mail->addAddress($pedido['email']);     	// Add a recipient
			
			$mail->addReplyTo(EMAIL);

			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			$mail->isHTML(TRUE);					// Set email format to HTML

			$mail->CharSet  = 'utf-8';
			$mail->Subject = ('Pedido de Evento');
			$mail->Body    = ("<p> ".$pedido['nome'].", pedido foi entregue.</p>
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
	break;
}
