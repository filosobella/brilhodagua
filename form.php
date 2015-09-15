<?php
	$nome = $_GET["cd-name"];
	$email = $_GET["cd-email"];
	$tel = $_GET["cd-phone"];
	$unidade = $_GET["radio-button"];
	if($unidade == "tijuca"){
		$estabelecimento = 'Tijuca';
		$unidadeemail = 'contato@tijuca';
	}else{
		$estabelecimento = 'Ipanema';
		$unidadeemail = 'contato@ipanema';
	}

	$msg = $_GET["cd-textarea"];

	mail($unidadeemail,'Contato - Site', 'Olá, esse é um e-mail automático do Site Brilho Dagua, por favor não responda.
	Nome - '.$nome.'
	Email - '.$email .'
	Telefone - '.$tel.'
	Estabelecimento - '.$estabelecimento.'
	Mensagem: '.$msg);

	header('Location: resposta');


?>
