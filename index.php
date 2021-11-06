<?php
session_start();
include ('conexao.php');
date_default_timezone_set('America/Sao_Paulo'); $date = date('H:i');
if(isset($_POST['enviar'])){
   
$login = $_POST['login'];
$senha = $_POST['senha'];
if($login == '' && $senha == ''){

    echo "<script> alert('PREENCHA TODOS OS CAMPOS ...'); location.href = './'; </script>";

}


else{
    
    
$logar = mysqli_query($conexao, "select * from login_usuario where usuario = '$login' and senha = '$senha'");
$row = mysqli_fetch_assoc($logar);
$logado = $row['usuario'];
$acesso = $row['senha'];
$nivel = $row['nivel'];
$nome_usuario = $row['nome'];


if($logado == $login && $acesso == $senha){

if($nivel == 'administrador'){
    $_SESSION['login'] = $login;    
    $_SESSION['nivel'] = $nivel;
    echo "<script> location.href = './carregando';</script>";
}

if($nivel == 'solicitador'){
$_SESSION['nivel'] = $nivel;
$_SESSION['login'] = $login;
$_SESSION['usuario'] = $nome_usuario;
echo "<script> location.href = './carregando';</script>";
}

if($nivel == 'aprovador'){
    $_SESSION['nivel'] = $nivel;
    $_SESSION['login'] = $login;
    $_SESSION['usuario'] = $nome_usuario;
    echo "<script> location.href = './carregando';</script>";
    }

}


else{
    echo "<script> alert('senha errada'); location.href = './'; </script>";
}
}



}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@500&display=swap" rel="stylesheet"><title>Tela login</title>
</head>
<body>

<div class="container-mae">
    <form action="" method="post" class="login">
        <h1>Solicite os materiais do seu almoxarifado de forma facilitada.</h1>
        <div class="input-email">
            <label for="">E-mail</label><input type="email" name="login" id="">
        </div>
        <div class="input-senha">
            <label for="">Senha</label><input type="password" name="senha" id="">
        </div>
        
            <input class="input-entrar" type="submit" value="Entrar" name="enviar">
        
    </form>
</div>




<script src="js/script.js"></script>
</body>
</html>