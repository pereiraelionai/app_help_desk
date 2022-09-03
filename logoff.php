<?php

session_start();
/* Explicação aula
echo '<pre>';
print_r($_SESSION);
echo '<pre>';

// remover índices do array de sessão
//unset() -> remove itens de arrays

unset($_SESSION['x']);

echo '<pre>';
print_r($_SESSION);
echo '<pre>';

//destruir a variável de sessão
//session_destroy() -> destroi todo o session

session_destroy();
// é necessário forçar um redirecionamento após utilizar o destroy

echo '<pre>';
print_r($_SESSION);
echo '<pre>';
*/

session_destroy();
header('Location: index.php');


?>