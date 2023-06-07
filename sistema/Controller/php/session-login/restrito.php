<?php

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['UsuarioID'])) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: index.php"); exit;
  }
    // Verifica se o usuário possui nível de acesso de administrador
    if ($_SESSION['UsuarioNivel'] == '2') {
    // Código para recursos disponíveis apenas para administradores
    header("Location: ../crud/index-crud.php");
} else {
    // Código para recursos disponíveis para usuários normais
    header("Location: ../dashboard.php");
}

  ?>
