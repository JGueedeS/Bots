<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações | Bots</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../../View/style/css/css-config/edit-senha.css">

    <!-- Icone do title -->
    <link rel="icon" href="../../View/assets/img/logo_sem_nome.png">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">

                    </a>
                </li>

                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="../../../View/html/controle-financeiro.html">
                        <span class="icon">
                            <ion-icon name="trending-up-outline"></ion-icon>
                        </span>
                        <span class="title">Controle Financeiro</span>
                    </a>
                </li>

                <li>
                    <a href="../../../View/html/noticias.html">
                        <span class="icon">
                            <ion-icon name="newspaper-outline"></ion-icon>
                        </span>
                        <span class="title">Noticias</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard.php?pg=taxa-de-cambio">
                        <span class="icon">
                            <ion-icon name="cash-outline"></ion-icon>
                        </span>
                        <span class="title">Taxa de câmbio</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="school-outline"></ion-icon>
                        </span>
                        <span class="title">Aulas</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Configurações</span>
                    </a>
                </li>
                <li>
                    <a href="../../Model/utils/sair.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sair</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="avatar">
                    <img src="../../../View/assets/img/robo.avif" alt="" class="user">
                </div>
            </div>

            <div class="title-minha-conta">
                <a href="../../../Controller/php/config-perfil/config.php"><h2>Minha Conta </h2></a> <h2 class="alterar-traço">/</h2> <h2 class="alterar-senha"> Alterar senha</h2>
            </div>

            <br><br><hr>

            <div class="password">
                <div class="password__card">
                    <div class="password__title_block">
                        <div class="password__title">Senha de acesso</div>
                        <div class="senha-atual">
                            Senha atual* <br>
                            <input type="password" name="" id="" placeholder="Insira sua senha atual">
                        </div>

                        <div class="password-display-flex">
                            <div class="senha-atual">
                                Nova senha* <br>
                                <input type="password" name="" id="" placeholder="Digite sua senha atual">
                            </div>
                            <div class="senha-atual">
                                Repetir senha* <br>
                                <input type="password" name="" id="" placeholder="Digite sua nova senha">
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="password__footer">
                <button type="submit">Salvar</button>
            </div>

        </div>
    </div>


    <!-- =============== JS ================ -->

    <script src="https://static.hotmart.com/ask/widget.js" id="ask-script"></script>

    <script src="../../js/main-dashboard.js"></script>
    <script defer src="../../js/taxa-cambio.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
