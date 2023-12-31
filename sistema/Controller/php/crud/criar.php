<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD | Bots</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar Estudante
                            <a href="index-crud.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="alteracao.php" method="POST">
                        <input type="hidden" name="student_id" value="<?=$student['id'];?>">

                        <div class="mb-3">
                            <label>Nome do Estudante</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Email do Estudante</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Senha do Estudante</label>
                            <input type="password" name="senha" class="form-control" minlength="8" required>
                        </div>
                        <div class="mb-3">
                            <label>DDD</label>
                            <input type="text" name="ddd" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Telefone do Estudante</label>
                            <input type="text" name="telefone" class="form-control" maxlength="9" required>
                        </div>
                        <div class="mb-3">
                            <label>CEP</label>
                            <input type="number" name="cep" class="form-control" maxlength="8" required>
                        </div>
                        <div class="mb-3">
                            <label>Endereço Residencial</label>
                            <input type="text" name="rua" class="form-control" required>
                        </div>
                       
                        <div class="mb-3">
                            <label>Número Residencial</label>
                            <input type="text" name="numero" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Cidade</label>
                            <input type="text" name="cidade" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Estado</label>
                            <input type="text" name="estado" class="form-control" maxlength="3" required> 
                        </div>
                       
                        <div class="mb-3">
                            <label>Bairro</label>
                            <input type="text" name="bairro" class="form-control" required>
                        </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Salvar Estudante</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
