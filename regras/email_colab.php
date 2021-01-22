<?php 
	require "PHPMailerAutoload.php";
	require "email_cred.php";
	include "alertShow.php";
	require "../banco/acessoBanco.php";

	$id_pedido = $_POST['id_pedido'];
	$colab_drt = $_POST['drt'];
	$dt_trat = date("d/m/Y");
	$conf_trat = 1;


	$pedidos = buscaPedido($connect, $id_pedido);
	foreach ($pedidos as $pedido) {}

	inserirTrat($connect, $dt_trat, $colab_drt, $conf_trat, $id_pedido);

	$usuarios =  buscaColab($connect, $colab_drt);

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
	$mail->Body    = ("<p> ".$pedido['nome']." fez a solicitação de um serviço para o dia ".$pedido['dt_evento'].". Código do evento: ".$id_pedido.".</p>
					  <p>Consulte o pedido através do link: ".'<a href="http://172.18.0.170/Nucom/estrutura/login.php">'."http://172.18.0.170/Nucom/estrutura/login.php</a> </p>");
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}else {
			$_SESSION["success"] = "Solicitação foi encaminhada para tratamento!";
			header("Location: ../perfil/geral.php");
		}

