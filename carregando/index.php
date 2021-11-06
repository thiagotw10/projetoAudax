<?php 
session_start();
include('../verifica-administracao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleCarrega.css">
    
    <title>Carregando</title>
</head>

<style>

  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .loading{
    display: flex;
    width: 100%;
    min-height: 100vh;
    justify-content: center;
    align-items: center;
    background-color: black;
  }
</style>

<body>

<div class="loading">
  <img src="../img/audax-logo-w.png" alt="">
</div>
    <?php $nivel = $_SESSION['nivel']; if($nivel == 'administrador'){
      echo '<meta http-equiv="refresh" content="5;url=../administracao">';
    } else if($nivel == 'solicitador'){
      echo '<meta http-equiv="refresh" content="5;url=../solicitador">';
    }else{
      echo '<meta http-equiv="refresh" content="5;url=../aprovador">';
    }
    
     
    ?>
    
</body>
</html>