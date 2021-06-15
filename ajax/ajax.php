<?php
include(dirname(dirname(__FILE__)) . "/config.php");

use App\Classes\Cidadao;
use App\Classes\Declaracao;
use App\Classes\Dependentes;
use App\Classes\Endereco;

$retorno = ['success' => true];

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($_GET['action'] == 'get-dependentes') {
        $retorno['dependentes'] = (new Dependentes())->getDependentesTable();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_GET['action'] == 'save-cadastro') {
        $cidadao_id = (new Cidadao())->load($_POST)->save();
        $_POST      = array_merge($_POST, compact('cidadao_id'));

        $endereco_id   = (new Endereco())->load($_POST)->save();
        $declaracao_id = (new Declaracao())->load($_POST)->save();

        if (count($_SESSION['dependentes']) > 0) {
            foreach ($_SESSION['dependentes'] as $unique => $dependente) {
                $dependente_id = (new Dependentes())->load(array_merge($dependente, compact('cidadao_id')))->save();
                (new Dependentes())->deleteDependenteDataFromSession($unique);
            }
        }
        $retorno['cidadao_id'] = $cidadao_id;
        $retorno['mensagem']   = "Cidadão com id de número {$cidadao_id} cadastrado";
    }
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

