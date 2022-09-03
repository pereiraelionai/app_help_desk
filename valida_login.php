<?php

    //Method GET
    /*
    print_r($_GET);

    echo '<br>';

    echo $_GET['email'];
    echo '<br>';
    echo $_GET['senha'];
    */

    //iniciando sessão
    session_start();

    /*
    //É possível criar variáveis no array session, aqui e tbm em outros arquivos php do app
    $_SESSION['x'] = 'Oi, sou um valor de sessão!';
    print_r($_SESSION);
    echo '<hr>';
    */

    $usuario_autenticado = false;
    $usuario_id = null;
    $perfis = array(1 => 'administrativo', 2 => 'usuario');
    $usuario_perfil = null;

    //Usuário do sistema -> vem do banco de dados
    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
        array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '123456', 'perfil_id' => 2)
    );

    //Method POST
    //print_r($_POST);

    //echo '<br>';

    //echo $_POST['email'];
    //echo '<br>';
    //echo $_POST['senha'];

    foreach($usuarios_app as $user) {

        if ($user['email'] == $_POST['email'] and $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil = $user['perfil_id'];
        }

    }

    if ($usuario_autenticado) {
        $_SESSION['autenticado'] = 'sim';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil;
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'não';
        header('Location: index.php?login=erro');
    }
?>