<?php

session_start();

// Funções de autenticação de usuário
function login($email, $password) {
    // Lógica para realizar o login do usuário
}

function logout() {
    // Lógica para realizar o logout do usuário
}

function isLoggedIn() {
    // Verifica se o usuário está logado
    return isset($_SESSION['user']);
}
