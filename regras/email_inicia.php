<?php
	require ("PHPMailerAutoload.php");
	require ("email_cred.php");
	
	$pedidos = buscaPedido($connect, $id_pedido);
	foreach ($pedidos as $pedido) {}

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
	$mail->Body    = ("<p> ".$pedido['nome'].", sua solicitação foi inicializada.</p>
						<p>Consulte o pedido através do link: ".'<a href="http://172.18.0.170/Nucom/estrutura/login.php">'."http://172.18.0.170/Nucom/estrutura/login.php</a> </p>
						<p>Código do serviço solicitado: ".$id_pedido."</p>	");
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else {
	header("Location: ../pages/pedido.php?file=$id_pedido");
}