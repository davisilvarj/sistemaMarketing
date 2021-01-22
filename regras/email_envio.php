<?php
	require ("PHPMailerAutoload.php");
	require ("email_cred.php");

	$usuarios =  buscaSetor($connect, $setor);

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

	$mail->addAddress($email);     	// Add a recipient

	$mail->addReplyTo(EMAIL);

	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(TRUE);					// Set email format to HTML

	$mail->CharSet  = 'utf-8';
	$mail->Subject = ('Pedido de Evento');
	$mail->Body    = ("<p> ".$nome.", solicitação realizada com sucesso!</p>
						<p>O seu pedido será analisado pelo Marketing e Direção Geral. Após a análise dos setores, você receberá um e-mail com a informação da aprovação. </p>
						<p>Caso precise editar ou adicionar mais informações ao seu pedido, favor entrar em contato com o Marketing através do Ramal: 5236. </p>
						<p>Consulte o pedido através do link: ".'<a href="http://172.18.0.170/Nucom/estrutura/login.php">'."http://172.18.0.170/Nucom/estrutura/login.php</a> </p>
						<p>Código do serviço solicitado: ".$fk_pedido."</p>	");
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


$mail2 = new PHPMailer;

	//$mail->SMTPDebug = 4;					// Enable verbose debug output

	$mail2->isSMTP();						// Set mailer to use SMTP
	$mail2->Host = 'smtp.office365.com';		// Specify main and backup SMTP servers
	$mail2->SMTPAuth = TRUE;					// Enable SMTP authentication
	$mail2->Username = EMAIL;				// SMTP username
	$mail2->Password = PASS;					// SMTP password
	$mail2->SMTPSecure = 'starttls';			// Enable TLS encryption, `ssl` also accepted
	$mail2->Port = 587;						// TCP port to connect to

	$mail2->setFrom(EMAIL);

	$mail2->addAddress($email_setor);     	// Add a recipient

	$mail->addReplyTo(EMAIL);

	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail2->isHTML(TRUE);					// Set email format to HTML

	$mail2->CharSet  = 'utf-8';
	$mail2->Subject = ('Pedido de Evento');
	$mail2->Body    = ("<p> ".$nome." fez a solicitação de um serviço para o dia: ".$dt_evento." código do evento: ".$fk_pedido.".</p>
					<p>Consulte o pedido através do link: ".'<a href="http://172.18.0.188/Nucom/estrutura/login.php">'."http://172.18.0.188/Nucom/estrutura/login.php</a> </p>");
	$mail2->AltBody = 'This is the body in plain text for non-HTML mail clients';

if((!$mail->send())||(!$mail2->send())) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else {
	$_SESSION["success"] = "Solicitação realizada! Cógido do pedido: ". $fk_pedido;
	header("Location: ../perfil/geral.php");
}
