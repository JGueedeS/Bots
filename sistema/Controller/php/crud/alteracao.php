<?php
session_start();
include("../../../Model/connection/conn.php");
require_once("../../../Model/connection/config.php");

if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM usuarios WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Este usuário foi deletado";
        header("Location: index-crud.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Usuário não foi deletado";
        header("Location: index-crud.php");
        exit(0);
    }
}

if (isset($_POST['update_student'])) {
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);

    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $rua = mysqli_real_escape_string($conn, $_POST['rua']);
    $numero = mysqli_real_escape_string($conn, $_POST['numero']);
    $cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
    $bairro = mysqli_real_escape_string($conn, $_POST['bairro']);

    // Atualizar tabela 'usuarios'
    $query_usuarios = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$student_id'";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    // Atualizar tabela 'telefones'
    $query_telefones = "UPDATE telefones SET telefone = '$telefone' WHERE usuario_id = '$student_id'";
    $result_telefones = mysqli_query($conn, $query_telefones);

    // Atualizar tabela 'enderecos'
    $query_enderecos = "UPDATE enderecos SET rua = '$rua', numero = '$numero', cidade = '$cidade', bairro = '$bairro' WHERE usuario_id = '$student_id'";
    $result_enderecos = mysqli_query($conn, $query_enderecos);

    if ($result_usuarios && $result_telefones && $result_enderecos) {
        $_SESSION['message'] = "Informações do estudante alteradas";
        header("Location: index-crud.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Não foi possível fazer a alteração";
        header("Location: index-crud.php");
        exit(0);
    }
}


if (isset($_POST['save_student'])) {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $ddd = mysqli_real_escape_string($conn, $_POST['ddd']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $estado = mysqli_real_escape_string($conn, $_POST['estado']);
    $cep = mysqli_real_escape_string($conn, $_POST['cep']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $rua = mysqli_real_escape_string($conn, $_POST['rua']);
    $numero = mysqli_real_escape_string($conn, $_POST['numero']);
    $cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
    $bairro = mysqli_real_escape_string($conn, $_POST['bairro']);

    // Verificar se todos os campos foram preenchidos
    if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($senha) && !empty($rua) && !empty($numero) && !empty($cidade) && !empty($bairro)) {

        $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $usuario_id = mysqli_insert_id($conn);

            $query_telefones = "INSERT INTO telefones (usuario_id, ddd, telefone) VALUES ('$usuario_id', '$ddd', '$telefone')";
            $query_enderecos = "INSERT INTO enderecos (usuario_id, cep, rua, numero, cidade,estado, bairro) VALUES ('$usuario_id', '$cep', '$rua', '$numero', '$cidade', '$estado', '$bairro')";

            $query_run_telefones = mysqli_query($conn, $query_telefones);
            $query_run_enderecos = mysqli_query($conn, $query_enderecos);

            if ($query_run_telefones && $query_run_enderecos) {
                $_SESSION['message'] = "Estudante criado com sucesso";
                header("Location: index.php");
                exit(0);
            } else {
                $_SESSION['message'] = "Estudante não foi criado";
                header("Location: index.php");
                exit(0);
            }
        } else {
            $_SESSION['message'] = "Estudante não foi criado";
            header("Location: criar.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Todos os campos devem ser preenchidos";
        header("Location: criar.php");
        exit(0);
    }
}

?>
