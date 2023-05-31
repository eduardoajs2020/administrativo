<!DOCTYPE html>
<html>
<head>
	<title>Perfil de usuário</title>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>

	<?php
		// Dados do usuário
		$nome = "Maria da Silva";
		$email = "maria.silva@email.com";
		$telefone = "(00) 0000-0000";
	?>

	<h1>Perfil de usuário</h1>

	<h2>Dados pessoais</h2>

	<p>Nome: <?php echo $nome; ?></p>
	<p>Email: <?php echo $email; ?></p>
	<p>Telefone: <?php echo $telefone; ?></p>

	<h2>Histórico de compras</h2>

	<ul>
		<li>Item 1</li>
		<li>Item 2</li>
		<li>Item 3</li>
	</ul>

</body>
</html>
