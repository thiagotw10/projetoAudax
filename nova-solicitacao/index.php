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
<body>
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

        <div class='container-modal-cadastro'>
                                <div class='container-modal-h1'>
                                    <h1> Nova solicitação </h1>
        
                                 </div>
                                 <div class='container-p'>
                                 <p> Solicitações de materiais </p>
                                 </div>
                                 <form action='' method='post' class='container-modal-form'>
                                    <div class='modal-input-nomes-solicitacao'> 
                                    
                                    <?php 
                                    $buscar_dados = mysqli_query($conexao, "select * from materiais");
                                    $usuario = $_SESSION['usuario'];

                                    if(isset($_POST['enviarSolicitacao'])){
                                        $material = $_POST['material'];
                                        foreach($material as $key => $value){

                                        $enviar = mysqli_query($conexao, "INSERT INTO solicitacoes (solicitador, data_atual, materiais) VALUES ('$usuario', now(), '$value');");
                                        echo "<script> alert('SOLICITAÇÃO ENVIADA COM SUCESSO!!'); location.href = '../solicitador'; </script>";
                                    }
                                    }


                                     while($row_buscar = mysqli_fetch_assoc($buscar_dados)){

                                        $nome_material = $row_buscar['nome_material'];
                                        echo "<label><input style='margin-left: 5px; margin-right: 5px;' type='checkbox' name='material[]' value='$nome_material' id=''>$nome_material</label>";

                                     }


                                    
                                    ?>
                                    </div>

                                    <div class='modal-input-botoes'>
                                        <div>
                                        <a href="../solicitador"> Cancelar </a>
                                        <input style='background-color: #1473E6;' type="submit" value="Enviar solicitação" name="enviarSolicitacao">
                                        </div>
                                    </div>
                                 </form>
                                 
                                 </div>



        </div>


        <!--modal do card aqui-->
        <div class="modal" id="modal"><div class='modal-card' id="card"></div></div>
        <!--fim modal card -->
    </div>


<script src="../js/script.js"></script>    
</body>
</html>