<?php
include(dirname(dirname(__FILE__)) . "/vendor/autoload.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $retorno = ['success' => true];
    if ($_GET['action'] == 'get-dependentes') {
        $retorno['teste'] = 20;
    }

    echo \json_encode($retorno);
    exit();
}

