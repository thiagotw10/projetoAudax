<?php 

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'projetoaudax');


$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('não conectou');

?>