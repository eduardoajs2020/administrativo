<?php

// Arquivo de rota para a página principal do sistema
require_once('../utils/globals.php');
require_once('../utils/db.php');
require_once('../utils/auth.php');
require_once('../models/nomedaclasse.php');
require_once('../dao/nomedoarquivoDAO.php');

$nomedoarquivoDAO = new nomedoarquivoDAO($connection);
$nomedaclasse = new nomedaclasse($nomedoarquivoDAO);

// Lógica para exibir a página principal
require_once('../templates/header.php');
require_once('../templates/body.php');
require_once('../templates/footer.php');
