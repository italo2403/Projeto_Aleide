<?php
// Iniciar a sessão
session_start();

// Destruir todas as variáveis de sessão
$_SESSION = array();

// Se desejar destruir completamente a sessão, descomente a linha abaixo
// session_destroy();

// Redirecionar o usuário para a página de login
header("Location: login.html");
exit();
?>
