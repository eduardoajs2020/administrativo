<!DOCTYPE html>
<html>
<head>
	<title>Página Inicial</title>
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="/home.php">Home</a></li>
				<li><a href="/search.php">Buscar Usuários</a></li>
				<li><a href="/profile.php">Meu Perfil</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>Usuários Cadastrados</h1>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>E-mail</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($userInfo as $user) { ?>
				<tr>
					<td><?php echo $user['id']; ?></td>
					<td><?php echo $user['name']; ?></td>
					<td><?php echo $user['email']; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</main>
	<footer>
		<p>&copy; 2023 - Todos os direitos reservados</p>
	</footer>
</body>
</html>





<?php
require_once('../utils/globals.php');
require_once('../utils/show.php');
require_once('../models/userDAOInterface.php');
require_once('../dao/userDAO.php');
require_once('../templates/header.php');
require_once('../templates/body.php');
require_once('../templates/footer.php');


// Cria uma instância do DAO do usuário
$userDAO = new UserDAO();

// Obtém todos os usuários cadastrados
$users = $userDAO->getAllUsers();

// Cria um array com as informações de cada usuário
$userInfo = array();
foreach ($users as $user) {
    $userInfo[] = array(
        'id' => $user->getId(),
        'name' => $user->getName(),
        'email' => $user->getEmail()
    );
}

// Define as variáveis para o template
$title = 'Página Inicial';
$body = '<h1>Usuários Cadastrados</h1>';
$body .= showTable($userInfo, array('ID', 'Nome', 'E-mail'));

// Carrega o template
require_once('../templates/header.php');
echo showPage($title, $body);
require_once('../templates/footer.php');
?>
