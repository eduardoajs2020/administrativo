<!DOCTYPE html>
<html>
<head>
	<title>Busca de endereço por CEP</title>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">
</head>
<body>

	<h1>Busca de endereço por CEP</h1>

	<form method="post" action="">
		<label for="cep">CEP:</label>
		<input type="text" id="cep" name="cep" maxlength="8" onblur="pesquisacep(this.value);">
		<br>
		<label for="logradouro">Logradouro:</label>
		<input type="text" id="logradouro" name="logradouro">
		<br>
		<label for="bairro">Bairro:</label>
		<input type="text" id="bairro" name="bairro">
		<br>
		<label for="cidade">Cidade:</label>
		<input type="text" id="cidade" name="cidade">
		<br>
		<label for="uf">Estado:</label>
		<input type="text" id="uf" name="uf">
		<br>
		<button type="submit">Salvar</button>
	</form>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		function limpa_formulario_cep() {
			// Limpa valores do formulário de endereço
			$("#logradouro").val("");
			$("#bairro").val("");
			$("#cidade").val("");
			$("#uf").val("");
		}

		function pesquisacep(valor) {

			// Verifica se o CEP possui 8 dígitos
			if (valor.length != 8) {
				limpa_formulario_cep();
				return false;
			}

			// Faz a busca do endereço através da API ViaCEP
			$.ajax({
				url: "https://viacep.com.br/ws/"+valor+"/json/",
				dataType: "json",
				success: function(resultado) {

					if (resultado.erro) {
						// Caso o CEP não seja encontrado, limpa o formulário de endereço
						limpa_formulario_cep();
						alert("CEP não encontrado.");
						return false;
					}

					// Preenche os campos do formulário de endereço
					$("#logradouro").val(resultado.logradouro);
					$("#bairro").val(resultado.bairro);
					$("#cidade").val(resultado.localidade);
					$("#uf").val(resultado.uf);
				},
				error: function() {
					// Caso ocorra um erro durante a busca, limpa o formulário de endereço
					limpa_formulario_cep();
					alert("Erro ao buscar o CEP.");
				}
			});
		}
	</script>


</body>
</html>
