<?php
    // require "../../Model/connection/verifica.php";
    // Inicia a sessão
    session_start();

    // Verifica se o usuário está autenticado
    if (!isset($_SESSION['UsuarioNome'])) {
        header("Location: ../../../View/html/index-login.html");
        exit;
    }

    // Obtém o nome do usuário da sessão
    $nomeuser = $_SESSION['UsuarioNome'];
?>


<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações | Bots</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../../View/style/css/reset.css">
    <link rel="stylesheet" href="../../../View/style/css/css-config/config-perfil.css">
    <link rel="stylesheet" href="../../../View/style/css/css-dashboard/avatar.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


     <!--Icone do title-->
     <link rel="icon" href="../../../View/assets/img/logo_sem_nome.png">
</head>

<body id="body">
    <!-- =============== Navigation ================ -->
    <div class="container1">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        
                    </a>
                </li>

                <li>
                    <a href="../dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title-slidebar">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="../../../View/html/controle-financeiro.html">
                        <span class="icon">
                            <ion-icon name="trending-up-outline"></ion-icon>
                        </span>
                        <span class="title-slidebar">Controle Financeiro</span>
                    </a>
                </li>

                <li>
                    <a href="../../../View/html/noticias.html">
                        <span class="icon">
                            <ion-icon name="newspaper-outline"></ion-icon>
                        </span>
                        <span class="title-slidebar">Noticias</span>
                    </a>
                </li>

                <li>
                    <a href="../../../View/html/taxa-de-cambio.html">
                        <span class="icon">
                            <ion-icon name="cash-outline"></ion-icon>
                        </span>
                        <span class="title-slidebar">Taxa de câmbio </span>
                    </a>
                </li>

               

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="school-outline"></ion-icon>
                        </span>
                        <span class="title-slidebar">Aulas</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title-slidebar">Configurações</span>
                    </a>
                </li>
                <li>
                    <a href="../../Model/utils/sair.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title-slidebar">Sair</span>
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
               <div class="">
                <div class="nav">
                    <div class="userBx">
                      <div class="imgBx">
                        <img src="../../../View/assets/img/robo.png" alt="user avatar" />
                      </div>
                      <label class="label-name" style="padding-left:15px;"><?php echo $nomeuser;?></label>
                    </div>
                    <div class="menuToggle"></div>
                    <ul class="menu">
                      <li>
                        <a href="#"><ion-icon name="person-add-outline" style="margin-left: 10px; margin-right: 25px; z-index: 999;"></ion-icon>Meu perfil</a>
                      </li>
                      <li>
                        <a href="#"><ion-icon name="options-outline" style="margin-left: 10px; margin-right: 25px; z-index: 999;"></ion-icon>Configurações</a
                        >
                      </li>
                      <li>
                        <a href="#"><ion-icon name="help-outline" style="margin-left: 10px; margin-right: 25px; z-index: 999;"></ion-icon>Central de ajuda</a>
                      </li>
                      <li>
                      <a href="#"><ion-icon name="exit-outline" style="margin-left: 10px; margin-right: 25px; z-index: 999;"></ion-icon>Sair</a>
                      </li>
                    </ul>
                  </div>
               </div>


            </div>

        <div class="title-minha-conta">
            <a href=""><h2>Minha Conta</h2></a> <br><br>          
        </div>

        <hr>
            <!-- ======================= Cards ================== -->
            <div class="cardBox"  data-bs-toggle="modal" data-bs-target="#cadUsuarioModal">
            
            
                <div class="card">
                    <div>
                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user" 
                            class="iconBx svg-inline--fa fa-user main__card__icon_blue" role="img" 
                            xmlns="http://www.w3.org/2000/svg" viewBox="-40 100 550 302">
                            <path fill="currentColor" d="M224 256c70.7 0 128-57.31 
                            128-128s-57.3-128-128-128C153.3 0 96 57.31 96 
                            128S153.3 256 224 256zM224 32c52.94 0 96 43.06 
                            96 96c0 52.93-43.06 96-96 96S128 180.9 128 128C128 
                            75.06 171.1 32 224 32zM274.7 304H173.3C77.61 304 0 
                            381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 
                            512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM413.3 
                            480H34.66C33.2 480 32 478.8 32 477.3C32 399.4 95.4 336 173.3 
                            336h101.3C352.6 336 416 399.4 416 477.3C416 478.8 414.8 480 413.3 480z"></path></svg>
                            <div class="cardName">Perfil</div>
                            <div class="cardNameP">Dados pessoais, endereço, foto, etc</div>
                    </div>
                </div>
    

                
                    <div class="card" data-bs-toggle="modal" data-bs-target="#cadUsuarioModal">
                        <div>
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="lock-keyhole" 
                            class="iconBx svg-inline--fa fa-lock-keyhole main__card__icon_green" role="img" 
                            xmlns="http://www.w3.org/2000/svg" viewBox="-40 100 550 302">
                            <path fill="currentColor" d="M240 392C240 400.8 232.8 408 224 408C215.2 
                            408 208 400.8 208 392V312C208 303.2 215.2 296 224 296C232.8 296 240 303.2 
                            240 312V392zM224 0C294.7 0 352 57.31 352 128V192H368C412.2 192 448 227.8 448 
                            272V432C448 476.2 412.2 512 368 512H80C35.82 512 0 476.2 0 432V272C0 227.8 
                            35.82 192 80 192H96V128C96 57.31 153.3 0 224 0zM224 32C170.1 32 128 74.98 
                            128 128V192H320V128C320 74.98 277 32 224 32zM80 224C53.49 224 32 245.5 32 
                            272V432C32 458.5 53.49 480 80 480H368C394.5 480 416 458.5 416 432V272C416 2
                            45.5 394.5 224 368 224H80z"></path></svg>
                                <div class="cardName">Alterar Senha </div>
                                <div class="cardNameP">Altere sua senha de acesso</div>
                        </div>
                    </div>
                
            </div>

            <div class="cardBox cardBox-top">
               
            
                <div class="card" data-bs-toggle="modal" data-bs-target="#cadUsuarioModal">
                    <div>
                        <svg aria-hidden="true" focusable="false" data-prefix="fal" 
                        data-icon="user-shield" class="iconBx svg-inline--fa fa-user-shield main__card__icon_purple" 
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="-40 100 550 302">
                        <path fill="currentColor" d="M224 256c70.7 0 128-57.31 128-128S294.7 0 
                        224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM224 32c52.94 0 96 43.06 
                        96 96c0 52.93-43.06 96-96 96S128 180.9 128 128C128 75.06 171.1 32 224 
                        32zM394.3 486.4C391.3 482.4 386.6 480 381.6 480H34.66C33.21 480 32 478.8 
                        32 477.3C31.99 399.4 95.4 336 173.3 336H274.7c9.516 0 18.76 1.062 27.71 
                        2.971c10.27 2.191 19.9-6.207 18.1-16.67c-.0098-.1172-.0195-.2363-.0313-.
                        3555c-.6172-7.242-5.881-13.08-13.01-14.52C297.4 305.2 286.2 304 274.7 
                        304H173.3C77.54 304-.1152 381.6 0 477.4C.0234 496.4 15.63 512 34.66 5
                        12h347.3c12.97 0 20.41-14.78 12.67-25.2L394.3 486.4zM622.3 271.1l-115.1
                        -45.01C503.6 224.7 499.7 224 495.1 224s-7.471 .7224-11.1 2.097L369.8 271
                        .1C359 275.2 352 285.1 352 295.1c0 111.6 68.75 188.8 132.9 213.9C488.4 511.3 4
                        92.2 512 495.1 512s7.55-.7214 11.17-2.096C558.4 489.9 640 420.5 640 295.1C640 
                        285.1 633 275.2 622.3 271.1zM480 472c-48.25-26.75-94.63-87.63-96-172.1l96-37.5V472
                        zM496.6 480C496.5 480 496.6 480 496.6 480C496.5 480 496.6 480 496.6 480zM512 472.
                        5V262.4l96 37.5C606.5 394.8 550.9 450.1 512 472.5z"></path></svg>
                            <div class="cardName">Central de Privacidade</div>
                            <div class="cardNameP">Direitos de privacidade, termos, permissões</div>
                    </div>
                </div>
            

                
                    <div class="card" data-bs-toggle="modal" data-bs-target="#cadUsuarioModal">
                        <div>
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" 
                            data-icon="circle-question" class="iconBx svg-inline--fa fa-circle-question main__card__icon_pink"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 
                            256s256-114.6 256-256S397.4 0 256 0zM256 480c-123.5 0-224-100.5-224-224s100.
                            5-224 224-224s224 100.5 224 224S379.5 480 256 480zM240 344c-13.25 0-24 10.75-2
                            4 24s10.75 24 24 24s24-10.75 24-24S253.3 344 240 344zM285.6 128H226.4C189.8 128 1
                            60 157.8 160 194.4V204c0 8.844 7.156 16 16 16S192 212.8 192 204V194.4C192 175.4 207.
                            4 160 226.4 160h59.25C304.6 160 320 175.4 320 194.4c0 12.48-6.781 24-17.06 29.72L242.5 254
                            .3C231.1 260.7 224 272.7 224 285.8V304C224 312.8 231.2 320 240 320S256 312.8 256 304V
                            285.8c0-1.453 .7813-2.797 1.438-3.172l60.41-30.22C338.9 240.7 352 218.5 352 194.4C352 157
                            .8 322.2 128 285.6 128z"></path></svg>
                            <div class="cardName">Central de ajuda</div>
                            <div class="cardNameP">Desconecte todos os dispositivos da sua conta.</div>
                        </div>
                    </div>
                
                </div>
            </div>   
        </div>
    </div>

    

    <!-- Inicio Modal cadastrar usuario -->
    <div class="modal fade" id="cadUsuarioModal" tabindex="-1" aria-labelledby="cadUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadUsuarioModalLabel">Alterar Perfil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="msgAlertaErro"></span>
                    <form class="row g-3" id="cad-usuario-form">
                        <div class="col-12">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo" >
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Melhor e-mail" >
                        </div>

                        <div class="col-12">
                            <label for="logradouro" class="form-label">Logradouro</label>
                            <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Endereço do usuário" >
                        </div>

                        <div class="col-12">
                            <label for="numero" class="form-label">Número</label>
                            <input type="text" name="numero" class="form-control" id="numero" placeholder="Número" >
                        </div>

                        <div class="modal-footer">
                            <button type="subimit" class="btn-salvar">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Inicio Modal cadastrar usuario -->
    <div class="modal fade" id="cadSenhaModal" tabindex="-1" aria-labelledby="cadSenhaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadSenhaModalLabel">Alterar Senha</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="msgAlertaErro"></span>
                    <form class="row g-3" id="cad-usuario-form">
                        <div class="col-12">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo" >
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Melhor e-mail" >
                        </div>

                        <div class="col-12">
                            <label for="logradouro" class="form-label">Logradouro</label>
                            <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Endereço do usuário" >
                        </div>

                        <div class="col-12">
                            <label for="numero" class="form-label">Número</label>
                            <input type="text" name="numero" class="form-control" id="numero" placeholder="Número" >
                        </div>

                        <div class="col-12">
                            <input type="submit" class="btn btn-outline-success btn-sm" id="cad-usaurio-btn" value="Cadastrar" >
                        </div>
                    </form>
                </div>
            </div>
        </div>


   
<!-- =============== JS ================ -->
<!-- Script para avatar -->
    <!-- Script para avatar -->
    <script>
        let menuToggle = document.querySelector(".menuToggle");
        let nav = document.querySelector(".nav");
        menuToggle.onclick = function () {
        nav.classList.toggle("active");
        };
    </script>

    
    <script src="../../../js/main-dashboard.js"></script>
    <script defer src="../../js/taxa-cambio.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      <!-- Fim Modal cadastrar usuario -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../../js/custom.js"></script>
</body>
</html>
