<?php
//chamados
$chamados = array();
//abrir o arquivo
$arquivo = fopen('../../app_help_desk/arquivo.txt', 'r');

//enquanto houver registros funciona o while
while (!feof($arquivo)) {
    $registro = fgets($arquivo);

    $chamado_dados = explode('#', $registro);
              
    if ($_SESSION['perfil_id'] == 2) {
      if ($_SESSION['id'] != $chamado_dados[0]) {
        continue;
      };
    }
  
    $chamados[] = $chamado_dados;

}
//fechar arquivo
fclose($arquivo);
?>