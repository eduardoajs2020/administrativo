import json

# Carrega o arquivo JSON
with open('dados.json') as json_file:
    dados = json.load(json_file)

# Acessa os valores do arquivo JSON
print(dados['assets']['images']['logo'])  # /assets/images/logo.png
print(dados['css']['pages']['index'])     # /css/index.css
print(dados['dao']['user'])               # userDAO.php
