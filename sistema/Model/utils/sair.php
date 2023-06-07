<?php
require_once("../../Model/connection/conn.php");

// Destruir todas as variáveis de sessão
$_SESSION = array();

// Se desejar destruir a sessão completamente, também pode usar o seguinte código
 session_destroy();

// Redirecionar o usuário para a página de login
header("Location: ../../../View/html/index-login.html");
exit;
?>
