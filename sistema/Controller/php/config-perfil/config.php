<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações | Bots</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../../View/style/css/css-config/config-perfil.css">

     <!--Icone do title-->
     <link rel="icon" href="../../View/assets/img/logo_sem_nome.png">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <!-- Insert content for the first navigation item here -->
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
                        <span class="title">Taxa de câmbio </span>
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
            <a href=""><h2>Minha Conta</h2></a> <br><br>          
            <hr>
        </div>
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
            
            <a href="#">
                <div class="card">
                    <div class="imgBox">
                        <img src="../../../View/assets/img/robo.jpg" alt="">
                    </div>
                    <div class="content">
                        <h2>Bots</h2>
                        <p>
                            <!-- Insert content for the Bots card here -->
                        </p>
                        <a href="meus-bots.php" class="btn">Configurar</a>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="card">
                    <div class="imgBox">
                        <img src="../../../View/assets/img/financeiro.jpg" alt="">
                    </div>
                    <div class="content">
                        <h2>Financeiro</h2>
                        <p>
                            <!-- Insert content for the Financeiro card here -->
                        </p>
                        <a href="config-financeiro.php" class="btn">Configurar</a>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>
</body>

</html>
