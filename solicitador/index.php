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
    <title>Solicitador</title>
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
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.1532 9.5H2.1532C1.60091 9.5 1.1532 9.94772 1.1532 10.5V16.5C1.1532 17.0523 1.60091 17.5 2.1532 17.5H6.1532C6.70548 17.5 7.1532 17.0523 7.1532 16.5V10.5C7.1532 9.94772 6.70548 9.5 6.1532 9.5Z" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.1532 5.5H8.1532C7.60091 5.5 7.1532 5.94772 7.1532 6.5V16.5C7.1532 17.0523 7.60091 17.5 8.1532 17.5H12.1532C12.7055 17.5 13.1532 17.0523 13.1532 16.5V6.5C13.1532 5.94772 12.7055 5.5 12.1532 5.5Z" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.1532 1.5H14.1532C13.6009 1.5 13.1532 1.94772 13.1532 2.5V16.5C13.1532 17.0523 13.6009 17.5 14.1532 17.5H18.1532C18.7055 17.5 19.1532 17.0523 19.1532 16.5V2.5C19.1532 1.94772 18.7055 1.5 18.1532 1.5Z" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.1532 17.5H16.1532" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                    <a href="../solicitador">Solicitações</a>
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
                <h1>Solicitações</h1>
                <h1></h1>
            </div>

            <div class="filter-novo" id="trocaTelaB">
                <form action="" method="post" class="filter-novo-input">
                        <input type="text"  name="pesquisar" id="pesquisar">
                        <input type="hidden"  name="" id="url" value="solicitador">
                        <input style="display: none;" type="submit" value="ola" id="rodar" name="rodar">
                        <svg width="56" height="46" viewBox="0 0 56 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0397339 0.205322H51.544C53.7207 0.205322 55.4853 1.96991 55.4853 4.14663V41.2455C55.4853 43.7332 53.4686 45.7499 50.9809 45.7499H0.0397339V0.205322Z" fill="#1473E6"/>
                        <path d="M37.3356 30.9722L32.1068 25.7433C33.0985 24.5189 33.6955 22.9624 33.6955 21.2676C33.6955 17.3389 30.4992 14.1426 26.5705 14.1426C22.6418 14.1426 19.4455 17.3389 19.4455 21.2676C19.4455 25.1963 22.6418 28.3926 26.5705 28.3926C28.2653 28.3926 29.8219 27.7956 31.0462 26.8039L36.2751 32.0328C36.4216 32.1792 36.659 32.1792 36.8055 32.0328L37.3357 31.5025C37.4821 31.3561 37.4821 31.1186 37.3356 30.9722ZM26.5705 26.8926C23.4687 26.8926 20.9455 24.3694 20.9455 21.2676C20.9455 18.1658 23.4687 15.6426 26.5705 15.6426C29.6723 15.6426 32.1955 18.1658 32.1955 21.2676C32.1955 24.3694 29.6723 26.8926 26.5705 26.8926Z" fill="white"/>
                        </svg>

                </form>
                <div class="filter-novo-add">
                    <button id="ir" onclick="trocaTelasSolicitacoes()">+ &nbsp;Nova solicitação</button>
                </div>
            </div>

            <div class="lista-usuario"  id="trocaTelaC">
                <ul>
                    <li style="font-size: 16px; color: #535353; font-family: 'Open Sans', sans-serif;">Data da solicitação</li>
                    <li style="font-size: 16px; color: #535353; font-family: 'Open Sans', sans-serif;">Solicitador</li>
                    <li style="font-size: 16px; color: #535353; font-family: 'Open Sans', sans-serif;">Status</li>
                    <li style="font-size: 16px; color: #535353; font-family: 'Open Sans', sans-serif;">Ações</li>
                </ul>
                <div class="borda-lista">
                <?php 

                    $usuario = $_SESSION['usuario'];
                    $c = 1;
                    


                    if(empty($_POST['rodar'])){ $buscar_dados = mysqli_query($conexao, "select * from solicitacoes where solicitador = '$usuario'");
                                        
                                    
                    }  if(isset($_POST['rodar'])){ $nome_cliente = $_POST['pesquisar'];
                        $buscar_dados = mysqli_query($conexao, "SELECT * from solicitacoes where solicitador = '$usuario' and status_solicitacao like '$nome_cliente%'");

                    }

                


                if(isset($_POST['cadastrarUsuario'])){
                   
                    echo "<script>  location.href = '../solicitador'; </script>";


                }


                while($row_buscar = mysqli_fetch_assoc($buscar_dados)){






                $solicitador = $row_buscar['solicitador'];
                $data_solicitacao = $row_buscar['data_atual'];
                $status = $row_buscar['status_solicitacao'];
                $id = $row_buscar['id'];
                $materiais = $row_buscar['materiais'];
                $observacao = $row_buscar['observacao'];


                    echo "

                            <input type='hidden' name='' id='nome$c' value='$solicitador'>
                            <input type='hidden' name='' id='data$c' value='$data_solicitacao'>
                            <input type='hidden' name='' id='status$c' value='$status'>
                            <input type='hidden' name='' id='id$c' value='$id'>
                            <input type='hidden' name='' id='materiais$c' value='$materiais'>
                            <input type='hidden' name='' id='observacao$c' value='$observacao'>

                         <ul> 
                            <li id='usuario$c' name='usuario$c'>$data_solicitacao</li>
                            <li>$solicitador</li>";
                            if($status == 'reprovado'){
                                echo "<li style='color: red;'> $status </li>";
                            }elseif($status == 'aprovado'){
                                echo "<li style='color: green;'> $status </li>";
                            }else{
                                echo "<li style='color: black;'> $status </li>";
                            }
                            echo"  
                            <li> <button class='botao-icone' onclick='visualizarSolicitacaoDetalhes($c)'> <svg width='22' height='14' viewBox='0 0 22 14' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path d='M21.7733 7.51864L22 7.1486L21.7733 6.77837C21.7353 6.71657 20.8233 5.24451 19.0514 3.7693C16.6948 1.80747 13.9186 0.770386 11.0226 0.770386C8.12735 0.770386 5.34426 1.80692 2.9742 3.76783C1.19223 5.24229 0.269879 6.71325 0.231509 6.77523L0 7.1486L0.231509 7.52196C0.269879 7.58395 1.19223 9.0549 2.9742 10.5294C5.34426 12.4903 8.12735 13.5268 11.0226 13.5268C13.9186 13.5268 16.6948 12.4897 19.0514 10.5279C20.8233 9.05269 21.7353 7.58063 21.7733 7.51864ZM18.1073 9.47015C15.9874 11.2219 13.6037 12.1099 11.0226 12.1099C8.44058 12.1099 6.04912 11.2213 3.91481 9.46848C2.81094 8.562 2.06255 7.64408 1.69601 7.1486C2.06274 6.65274 2.81113 5.73501 3.91481 4.82853C6.04912 3.07588 8.4404 2.18711 11.0226 2.18711C13.6037 2.18711 15.9872 3.07533 18.1073 4.82687C19.2062 5.73483 19.9481 6.65404 20.3097 7.1486C19.9478 7.64335 19.206 8.56256 18.1073 9.47015Z' fill='#757575'/>
                            <path d='M11.0014 2.89258C8.65444 2.89258 6.745 4.80202 6.745 7.14902C6.745 9.49603 8.65444 11.4055 11.0014 11.4055C13.3484 11.4055 15.2579 9.49603 15.2579 7.14902C15.2579 4.80202 13.3484 2.89258 11.0014 2.89258ZM11.0014 9.98875C9.43567 9.98875 8.16172 8.7148 8.16172 7.14902C8.16172 5.58325 9.43567 4.3093 11.0014 4.3093C12.5672 4.3093 13.8412 5.58325 13.8412 7.14902C13.8412 8.7148 12.5672 9.98875 11.0014 9.98875Z' fill='#757575'/>
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