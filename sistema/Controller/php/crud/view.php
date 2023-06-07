<?php
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

    <title>Student View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do Úsuarios
                            <a href="index-crud.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT usuarios.nome, usuarios.email, enderecos.rua, enderecos.numero, enderecos.cidade, enderecos.bairro, telefones.ddd, telefones.telefone
                            from telefones INNER JOIN usuarios ON telefones.usuario_id = usuarios.id
                            INNER JOIN enderecos ON usuarios.id = enderecos.usuario_id";
                            
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Nome de estudante</label>
                                        <p class="form-control">
                                            <?=$student['nome'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email de estudante</label>
                                        <p class="form-control">
                                            <?=$student['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefone do estudante</label>
                                        <p class="form-control">
                                            <?=$student['telefone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Endereço Residencial</label>
                                        <p class="form-control">
                                            <?=$student['rua'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Número Residencial</label>
                                        <p class="form-control">
                                            <?=$student['numero'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Cidade</label>
                                        <p class="form-control">
                                            <?=$student['cidade'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Bairro</label>
                                        <p class="form-control">
                                            <?=$student['bairro'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
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