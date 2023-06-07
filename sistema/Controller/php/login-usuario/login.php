<?php
include("../../../Model/connection/conn.php");
require_once("../../../Model/connection/config.php");
require_once("class-login.php");

if (isset($_POST['email']) && isset($_POST['senha'])) {
    if (strlen($_POST['email']) == 0) {
        echo "Preencha o email";
    } elseif (strlen($_POST['senha']) == 0) {
        echo "Preencha a senha";
    } else {
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        $query = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();

        $result = $stmt->get_result();
        $quantidade = $result->num_rows;

        if ($quantidade == 1) {
            $usuario = $result->fetch_assoc();
            $nivel = $usuario['nivel'];

            $user = new Usuario();
            if ($user->login($email, $senha) == true) {
                if (isset($_SESSION['id'])) {
                    if ($email === "admin@admin.com" && $senha === "admin") {
                        header("Location: ../crud/index.php"); // Usuário admin redireciona para o admin_dashboard.php
                    } else {
                        header("Location: /dashboard.php"); // Outros usuários redirecionam para o user_dashboard.php
                    }
                }
            }
        } else {
            // Senha ou email inválidos
            header("Location: ../../View/html/erro-login.html");
            exit;
        }
    }
}
?>
