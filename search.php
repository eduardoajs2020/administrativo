<!DOCTYPE html>
<html>
<head>
	<title>Busca no banco de dados usando PDO</title>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>

	<h1>Busca no banco de dados usando PDO</h1>

	<form method="post" action="">
		<label for="search">Digite sua busca:</label>
		<input type="text" id="search" name="search">
		<button type="submit">Buscar</button>
	</form>

	<?php
		// Verifica se o formulário foi submetido
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Configurações do banco de dados
			$servername = "localhost";
			$username = "usuario";
			$password = "senha";
			$dbname = "nome_do_banco";

			// Conecta ao banco de dados usando PDO
			try {
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
				echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
			}

			// Escapa caracteres especiais da busca para evitar injeção de SQL
			$search = $_POST["search"];
			$search = "%$search%";

			// Prepara e executa a consulta no banco de dados
			$sql = "SELECT * FROM tabela WHERE coluna LIKE :search";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':search', $search);
			$stmt->execute();

			// Exibe os resultados da busca
			$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if (count($resultado) > 0) {
				echo "<ul>";
				foreach ($resultado as $row) {
					echo "<li>" . $row["coluna"] . "</li>";
				}
				echo "</ul>";
			} else {
				echo "Nenhum resultado encontrado.";
			}

			// Fecha a conexão com o banco de dados
			$conn = null;
		}
	?>

</body>
</html>
