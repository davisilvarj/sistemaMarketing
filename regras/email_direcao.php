<?php
	require "PHPMailerAutoload.php";
	require "email_cred.php";
	include "alertShow.php";
	require "../banco/acessoBanco.php";

	$id_pedido = $_POST['id_pedido'];
	$drt_dir = $_POST['drt'];
	$dt_dir = date("d/m/Y");
	$conf_dir = 1;

	inserirDirecao($connect, $drt_dir, $dt_dir, $conf_dir, $id_pedido);

	$pedidos = buscaPedido($connect, $id_pedido);
	foreach ($pedidos as $pedido) {}

	$usuarios =  buscaColab($connect, $drt_dir);

	foreach($usuarios as $usuario){
		$email_setor = $usuario['email'];
	}

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

	$mail->addAddress($email_setor);     	// Add a recipient

	$mail->addReplyTo(EMAIL);

	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(TRUE);					// Set email format to HTML

	$mail->CharSet  = 'utf-8';
	$mail->Subject = ('Pedido de Evento');
	$mail->Body    = ("<p> ".$pedido['nome']." fez a solicitação de um serviço para o dia: ".$pedido['dt_evento']." código do evento: ".$id_pedido.".</p>
					<p>Consulte o pedido através do link: ".'<a href="http://172.18.0.170/Nucom/estrutura/login.php">'."http://172.18.0.170/Nucom/estrutura/login.php</a> </p>");
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}else {
			$_SESSION["success"] = "Solicitação foi encaminhada para tratamento!";
			header("Location: ../perfil/geral.php");
		}
