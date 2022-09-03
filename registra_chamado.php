<?php

session_start();

$arquivo = fopen('arquivo.txt', 'a');

$_POST['titulo'] = str_replace('#', '_', $_POST['titulo']);
$_POST['categoria'] = str_replace('#', '_', $_POST['categoria']);
$_POST['descricao'] = str_replace('#', '_', $_POST['descricao']);

//$texto = $titulo . '#' . $categoria. '#' . $descricao;

$texto = implode('#', $_POST);
$texto = $_SESSION['id'] . '#' . $texto . PHP_EOL;

fwrite($arquivo, $texto);
fclose($arquivo);

header('Location: abrir_chamado.php');

?>