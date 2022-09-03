<?php

include('menu.php'); // gera um warning em caso de erro

// require 'menu.php'; //gera um fatal error em caso de erro

?>

conteúdo da página (inicio)
<br>

<?php

include_once('menu.php'); // não funciona pois já foi enviado via include acima

// require_onde 'menu.php'; // não funciona pois já foi enviado via require acima


?>