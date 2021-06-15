<?php
include(dirname(dirname(__FILE__)) . "/config.php");

use App\Classes\Dependentes;

$retorno = ['success' => true];

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($_GET['action'] == 'get-dependentes') {
        $retorno['dependentes'] = (new Dependentes())->getDependentesTable();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_GET['action'] == 'delete-dependente') {
        (new Dependentes())->deleteDependenteDataFromSession($_POST['dependente']);
    }
    if ($_GET['action'] == 'save-dependente') {
        (new Dependentes())->saveDependenteDataToSession($_POST);
        $retorno['teste'] = 20;
    }
}
echo \json_encode($retorno);
exit();

