<?php

if(!$_SESSION['nivel']){
    echo "<script> alert('não foi dessa vez, tente novamente'); location.href = '../'; </script>";
    exit();
}

?>