<?php
session_start();
include("../../../Model/connection/conn.php");
require_once("../../../Model/connection/config.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Edição de Usuários</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edição de Usuários
                            <a href="index-crud.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT usuarios.id, usuarios.nome, usuarios.email, enderecos.rua, enderecos.numero, enderecos.cidade, enderecos.bairro, CONCAT(t.ddd, ' ', t.telefone)
                            FROM telefones 
                            INNER JOIN usuarios ON telefones.usuario_id = usuarios.id
                            INNER JOIN enderecos ON usuarios.id = enderecos.usuario_id
                            WHERE usuarios.id = '$student_id'";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="alteracao.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?=$student['id'];?>">

                                    <div class="mb-3">
                                        <label>Nome do Estudante</label>
                                        <input type="text" name="nome" value="<?=$student['nome'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email do Estudante</label>
                                        <input type="email" name="email" value="<?=$student['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefone do Estudante</label>
                                        <input type="text" name="telefone" value="<?=$student['telefone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Endereço Residencial</label>
                                        <input type="text" name="rua" value="<?=$student['rua'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DDD</label>
                                        <input type="text" name="ddd" value="<?=$student['ddd'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Número Residencial</label>
                                        <input type="text" name="numero" value="<?=$student['numero'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Cidade</label>
                                        <input type="text" name="cidade" value="<?=$student['cidade'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Bairro</label>
                                        <input type="text" name="bairro" value="<?=$student['bairro'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Alterar
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>Nenhum ID Encontrado</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
