<?php
include("../../../Model/connection/conn.php");

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) && (empty($_POST['email']) || empty($_POST['senha']))) {
    header("Location: index.php");
    exit;
}

$email = $_POST['email'];
$senha = $_POST['senha'];

// Validação do usuário/senha digitados
$sql = "SELECT id, nome, nivel FROM usuarios WHERE (email = ?) AND (senha = ?) AND (ativo = 1) LIMIT 1";
$stmt = $conn->prepare($sql);

// Bind dos parâmetros por referência usando variáveis
$stmt->bind_param("ss", $email, $senha); // Remova a função sha1() se necessário

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows != 1) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    echo "Login inválido!";
    header("Location:../../../View/html/index-login.html");
    exit;
} else {
    // Salva os dados encontrados na variável $resultado
    $resultado = $result->fetch_assoc();

    // Se a sessão não existir, inicia uma
    if (!isset($_SESSION)) {
        session_start();
    }

    // Salva os dados encontrados na sessão
    $_SESSION['UsuarioID'] = $resultado['id'];
    $_SESSION['UsuarioNome'] = $resultado['nome'];
    $nomeuser = $_SESSION['UsuarioNivel'] = $resultado['nivel'];
    
    // Fechar conexão com o banco de dados após todas as operações necessárias
    $stmt->close();
    $conn->close();

    // Redireciona o visitante
    require_once("../../Model/connection/conn.php");
    exit;
}
?>
