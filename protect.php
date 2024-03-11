<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['id'])) {
        die("Você não pode acessar está pagina sem efetuar o login. <a href=\"index.php\">Clique Aqui</a> para Logar.");
    }

?>