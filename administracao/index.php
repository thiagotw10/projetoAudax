<?php 
session_start();
include('../conexao.php');
include('../verifica-administracao.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>Admistração</title>
</head>
<body onload="pesquisar()">
    <div class="container-mae">
  <!-- menu hamburguer-->
    <div class="hamburguer" id="hamburguer" onclick="celular()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    <!-- menu hamburguer-->
        <div class="menu" id="menuCelular">
            <div class="menuTop">
                <li>
                    <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.89404 8.79041C9.10318 8.79041 10.894 6.99954 10.894 4.79041C10.894 2.58127 9.10318 0.790405 6.89404 0.790405C4.6849 0.790405 2.89404 2.58127 2.89404 4.79041C2.89404 6.99954 4.6849 8.79041 6.89404 8.79041Z" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M0.894043 18.7904V16.7904C0.894043 15.7295 1.31547 14.7121 2.06562 13.962C2.81576 13.2118 3.83318 12.7904 4.89404 12.7904H8.89404C9.95491 12.7904 10.9723 13.2118 11.7225 13.962C12.4726 14.7121 12.894 15.7295 12.894 16.7904V18.7904" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a href="../administracao">Usuários</a>
                </li>

                <li>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.89404 0.790405H1.89404C1.34176 0.790405 0.894043 1.23812 0.894043 1.79041V5.79041C0.894043 6.34269 1.34176 6.79041 1.89404 6.79041H5.89404C6.44633 6.79041 6.89404 6.34269 6.89404 5.79041V1.79041C6.89404 1.23812 6.44633 0.790405 5.89404 0.790405Z" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5.89404 10.7904H1.89404C1.34176 10.7904 0.894043 11.2381 0.894043 11.7904V15.7904C0.894043 16.3427 1.34176 16.7904 1.89404 16.7904H5.89404C6.44633 16.7904 6.89404 16.3427 6.89404 15.7904V11.7904C6.89404 11.2381 6.44633 10.7904 5.89404 10.7904Z" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.894 10.7904H11.894C11.3418 10.7904 10.894 11.2381 10.894 11.7904V15.7904C10.894 16.3427 11.3418 16.7904 11.894 16.7904H15.894C16.4463 16.7904 16.894 16.3427 16.894 15.7904V11.7904C16.894 11.2381 16.4463 10.7904 15.894 10.7904Z" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.894 3.79041H16.894" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13.894 0.790405V6.79041" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a href="../materiais">Materiais</a>
                </li>
            </div>


            <div class="menuBottom">
                <li>    
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.894 5.6991V3.6991C11.894 3.16866 11.6833 2.65996 11.3083 2.28488C10.9332 1.90981 10.4245 1.6991 9.89404 1.6991H2.89404C2.36361 1.6991 1.8549 1.90981 1.47983 2.28488C1.10476 2.65996 0.894043 3.16866 0.894043 3.6991V15.6991C0.894043 16.2295 1.10476 16.7382 1.47983 17.1133C1.8549 17.4884 2.36361 17.6991 2.89404 17.6991H9.89404C10.4245 17.6991 10.9332 17.4884 11.3083 17.1133C11.6833 16.7382 11.894 16.2295 11.894 15.6991V13.6991" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.89404 9.6991H18.894M18.894 9.6991L15.894 6.6991M18.894 9.6991L15.894 12.6991" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a class="sair" href="../logout.php"> Sair </a>
                </li>
            </div>
            
        </div>




        <div class="lista" id="listaUsuario">

            <div class="titutlo" id="trocaTelaA">
                <h1>Usuários</h1>
                <h1></h1>
            </div>

            <div class="filter-novo" id="trocaTelaB">
                <form action="" method="post" class="filter-novo-input">
                        <input type="text"  name="pesquisar" id="pesquisar">
                        <input type="hidden"  name="" id="url" value="administracao">
                        <input style="display: none;" type="submit" value="ola" id="rodar" name="rodar">
                        <svg width="56" height="46" viewBox="0 0 56 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0397339 0.205322H51.544C53.7207 0.205322 55.4853 1.96991 55.4853 4.14663V41.2455C55.4853 43.7332 53.4686 45.7499 50.9809 45.7499H0.0397339V0.205322Z" fill="#1473E6"/>
                        <path d="M37.3356 30.9722L32.1068 25.7433C33.0985 24.5189 33.6955 22.9624 33.6955 21.2676C33.6955 17.3389 30.4992 14.1426 26.5705 14.1426C22.6418 14.1426 19.4455 17.3389 19.4455 21.2676C19.4455 25.1963 22.6418 28.3926 26.5705 28.3926C28.2653 28.3926 29.8219 27.7956 31.0462 26.8039L36.2751 32.0328C36.4216 32.1792 36.659 32.1792 36.8055 32.0328L37.3357 31.5025C37.4821 31.3561 37.4821 31.1186 37.3356 30.9722ZM26.5705 26.8926C23.4687 26.8926 20.9455 24.3694 20.9455 21.2676C20.9455 18.1658 23.4687 15.6426 26.5705 15.6426C29.6723 15.6426 32.1955 18.1658 32.1955 21.2676C32.1955 24.3694 29.6723 26.8926 26.5705 26.8926Z" fill="white"/>
                        </svg>

                </form>
                <div class="filter-novo-add">
                    <button onclick="trocaTelas()">+ &nbsp;Novo usuário</button>
                </div>
            </div>

            <div class="lista-usuario"  id="trocaTelaC">
                <ul>
                    <li style="font-size: 16px; color: #535353; font-family: 'Open Sans', sans-serif;">Nome</li>
                    <li style="font-size: 16px; color: #535353; font-family: 'Open Sans', sans-serif;">E-mail</li>
                    <li style="font-size: 16px; color: #535353; font-family: 'Open Sans', sans-serif;">Função</li>
                    <li style="font-size: 16px; color: #535353; font-family: 'Open Sans', sans-serif;">Ações</li>
                </ul>
                <div class="borda-lista" id="listaBusc">
                <?php
                
                
                    if(empty($_POST['rodar'])){$buscar_dados = mysqli_query($conexao, "select * from login_usuario");
                    
                
                    }  if(isset($_POST['rodar'])){ $nome_cliente = $_POST['pesquisar'];
                        $buscar_dados = mysqli_query($conexao, "SELECT * from login_usuario where nome like '$nome_cliente%'");
                    
                    }


                    $c = 1;
                


                if(isset($_POST['cadastrarUsuario'])){
                    $nomeNovo = $_POST['nome'];
                    $funcaoNovo = $_POST['funcao'];
                    $emailNovo = $_POST['email'];
                    $senhaNovo = $_POST['senha'];
                    
                    $logar = mysqli_query($conexao, "select * from login_usuario where usuario = '$emailNovo'");
                    $nome_buscar = mysqli_query($conexao, "select * from login_usuario where nome = '$nomeNovo'");
                    $row = mysqli_fetch_assoc($logar);
                    $row_nome = mysqli_fetch_assoc($nome_buscar);
                    $logando = $row['usuario'];
                    $nome = $row_nome['nome'];
                    if($emailNovo == $logando || $nomeNovo == $nome){
                        echo "<script> alert('LOGIN OU NOME JÁ EXISTE, TENTE OUTRO!!!'); </script>";
                    }else{

                    $inserir = mysqli_query($conexao, "INSERT INTO login_usuario (usuario, senha, nivel, nome) VALUES ('$emailNovo', '$senhaNovo', '$funcaoNovo', '$nomeNovo')");

                    echo "<script> alert('USUARIO CADASTRADO COM SUCESSO'); location.href = '../administracao'; </script>";
                    }    

                }


                while($row_buscar = mysqli_fetch_assoc($buscar_dados)){






                $nome_usuario = $row_buscar['nome'];
                $email_usuario = $row_buscar['usuario'];
                $nivel_usuario = $row_buscar['nivel'];


                if(isset($_POST[$c])){
                    $delete = mysqli_query($conexao, "delete from login_usuario where nome = '$nome_usuario'");
                    echo "<script> location.href = '../administracao'; </script>";
                  }

                    echo "

                         <ul id='nomesUl'> 
                            <li id='usuario$c' name='usuario$c'>$nome_usuario</li>
                            <li>$email_usuario</li>
                            <li>$nivel_usuario</li>
                            <li><button class='botao-icone'><svg width='21' height='20' viewBox='0 0 21 20' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path d='M19.393 7.13451H18.2193C18.1223 6.85885 18.0107 6.58855 17.8851 6.32475L18.717 5.49281C18.9877 5.22211 18.9877 4.78323 18.717 4.51252L15.7727 1.57367C15.5019 1.30301 15.0631 1.30301 14.7924 1.57367L13.9604 2.40561C13.6975 2.27936 13.4281 2.16688 13.1534 2.06869V0.894958C13.1534 0.512054 12.843 0.20166 12.4601 0.20166H8.30043C7.91752 0.20166 7.60713 0.512054 7.60713 0.894958V2.06869C7.33135 2.16586 7.0608 2.27741 6.79668 2.40285L5.96474 1.57091C5.69399 1.30029 5.25515 1.30029 4.98444 1.57091L2.04629 4.51528C1.77562 4.78599 1.77562 5.22487 2.04629 5.49557L2.87823 6.32752C2.75169 6.59034 2.63925 6.85975 2.54131 7.13451H1.36761C0.98471 7.13451 0.674316 7.44491 0.674316 7.82777V11.9875C0.674316 12.3704 0.98471 12.6808 1.36761 12.6808H2.54135C2.63831 12.9564 2.74982 13.2267 2.87551 13.4905L2.04357 14.3225C1.77294 14.5932 1.77294 15.0321 2.04357 15.3028L4.98518 18.2444C5.25592 18.515 5.69476 18.515 5.96547 18.2444L6.79741 17.4124C7.06133 17.5378 7.33163 17.6494 7.60717 17.7466V18.9203C7.60717 19.3032 7.91756 19.6136 8.30047 19.6136H12.4602C12.8431 19.6136 13.1535 19.3032 13.1535 18.9203V17.7466C13.4293 17.6494 13.6998 17.5379 13.9639 17.4124L14.7959 18.2444C15.0666 18.515 15.5055 18.515 15.7762 18.2444L18.7178 15.3028C18.9884 15.0321 18.9884 14.5932 18.7178 14.3225L17.8858 13.4905C18.0113 13.2267 18.1226 12.9564 18.2193 12.6808H19.393C19.7759 12.6808 20.0863 12.3704 20.0863 11.9875V7.82777C20.0863 7.44491 19.7759 7.13451 19.393 7.13451ZM18.6997 11.2942H17.7118C17.4018 11.2942 17.1294 11.5 17.0448 11.7982C16.8992 12.3159 16.6936 12.8147 16.432 13.2846C16.2789 13.5563 16.326 13.8967 16.547 14.1166L17.2403 14.8133L15.2825 16.7711L14.5858 16.0778C14.3659 15.8568 14.0255 15.8097 13.7538 15.9628C13.2841 16.2241 12.7855 16.4298 12.2681 16.5756C11.9696 16.66 11.7635 16.9324 11.7634 17.2426V18.227H8.99373V17.2391C8.99364 16.9289 8.78753 16.6565 8.489 16.5722C7.97163 16.4263 7.47304 16.2207 7.00328 15.9593C6.73164 15.8062 6.39123 15.8533 6.17134 16.0744L5.47804 16.7677L3.51673 14.8099L4.21007 14.1131C4.43113 13.8932 4.47825 13.5528 4.32515 13.2812C4.06354 12.8113 3.85787 12.3125 3.71228 11.7948C3.62673 11.4992 3.35655 11.2953 3.0488 11.2942H2.06087V8.52107H3.0488C3.35879 8.52107 3.63112 8.31528 3.71573 8.01707C3.86132 7.49938 4.06699 7.00054 4.3286 6.53067C4.48171 6.25903 4.43458 5.91861 4.21352 5.69873L3.52022 5.00543L5.47804 3.04411L6.17134 3.73741C6.39123 3.95847 6.73164 4.0056 7.00328 3.85249C7.473 3.59113 7.97163 3.38546 8.489 3.23963C8.78627 3.15562 8.99206 2.88504 8.99373 2.57614V1.58821H11.7669V2.57614C11.767 2.88634 11.9731 3.15871 12.2716 3.24308C12.789 3.38891 13.2876 3.59458 13.7573 3.85594C14.029 4.00905 14.3694 3.96193 14.5893 3.74086L15.286 3.04756L17.2438 5.00539L16.5505 5.69869C16.3295 5.91857 16.2823 6.25899 16.4355 6.53063C16.6971 7.00046 16.9027 7.49934 17.0483 8.01703C17.1329 8.31524 17.4053 8.52103 17.7153 8.52103H18.6997V11.2942H18.6997Z' fill='#7D7D7D'/>
                            <path d='M10.3803 5.05469C7.7001 5.05469 5.52734 7.22744 5.52734 9.90769C5.52734 12.5879 7.70014 14.7607 10.3803 14.7607C13.0606 14.7607 15.2333 12.5879 15.2333 9.90765C15.2303 7.2287 13.0593 5.05773 10.3803 5.05469ZM10.3803 13.3741C8.46591 13.3741 6.91394 11.8221 6.91394 9.90769C6.91394 7.99325 8.46591 6.44128 10.3803 6.44128C12.2948 6.44128 13.8468 7.99325 13.8468 9.90769C13.8445 11.8212 12.2938 13.3718 10.3803 13.3741Z' fill='#7D7D7D'/>
                            </svg>
                            </button> <button class='botao-icone' onclick='deletarUsuario($c)'> <svg width='16' height='20' viewBox='0 0 16 20' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path d='M10.5145 17.0697C10.781 17.0697 10.997 16.8537 10.997 16.5871V8.31521C10.997 8.04866 10.781 7.83263 10.5145 7.83263C10.2479 7.83263 10.0319 8.04866 10.0319 8.31521V16.5871C10.0319 16.8537 10.2479 17.0697 10.5145 17.0697Z' fill='#7D7D7D' stroke='#757575' stroke-width='0.133816'/>
                            <path d='M5.57632 17.0697C5.84286 17.0697 6.0589 16.8537 6.0589 16.5871V8.31521C6.0589 8.04866 5.84286 7.83263 5.57632 7.83263C5.30977 7.83263 5.09374 8.04866 5.09374 8.31521V16.5871C5.09374 16.8537 5.30977 17.0697 5.57632 17.0697Z' fill='#7D7D7D' stroke='#757575' stroke-width='0.133816'/>
                            <path d='M4.46976 2.32954H2.50815H2.50808C1.55329 2.33055 0.779564 3.10428 0.778551 4.05907V4.05914V6.38691C0.778551 6.65346 0.994585 6.86949 1.26113 6.86949H1.96744V17.4105C1.96744 18.0315 2.18657 18.6063 2.58701 19.0278C2.98349 19.4469 3.53576 19.6833 4.11272 19.6805C4.11283 19.6805 4.11294 19.6805 4.11305 19.6805L4.46976 2.32954ZM4.46976 2.32954V1.86435V1.86428C4.47078 0.909495 5.2445 0.135766 6.19929 0.134752L6.19936 0.134752L9.89057 0.134752H9.89065C10.8453 0.135766 11.619 0.909498 11.6202 1.86427V1.86435V2.32954H4.46976ZM5.43493 1.86442C5.43537 1.44246 5.77747 1.10036 6.19943 1.09991H9.8905C10.3124 1.10036 10.6544 1.44244 10.655 1.86445V2.32954H5.43493V1.86442ZM13.1573 17.4105C13.1573 18.1617 12.6451 18.7153 11.9772 18.7153H4.11272C3.44466 18.7153 2.9326 18.1617 2.9326 17.4105V6.86949H13.1573V17.4105ZM14.3461 5.90433H1.74371L1.74371 4.05921C1.74371 4.05919 1.74371 4.05918 1.74371 4.05916C1.74419 3.63706 2.08627 3.29515 2.50822 3.2947H13.5816C14.0037 3.29515 14.3456 3.63708 14.3461 4.05921V5.90433Z' fill='#7D7D7D' stroke='#757575' stroke-width='0.133816'/>
                            </svg>
                            </button></li>
                            
      
                         </ul>
                         
                      
                         


                    
                         ";
                       $c++; }
                ?>
                </div>


            </div>






        </div>


        <!--modal do card aqui-->
        <div class="modal" id="modal"><div class='modal-card' id="card"></div></div>
        <!--fim modal card -->
    </div>


<script src="../js/script.js"></script>    
</body>
</html>