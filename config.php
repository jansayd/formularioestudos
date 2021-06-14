<?php
session_start();
include("vendor/autoload.php");

if (!isLogged()) {
    header("Location: login.php");
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servidor = "localhost";
$usuario  = "root";
$senha    = "testeuvb";
$dbname   = "jan";

/**
 * Vê se o usuário está logado
 * @return bool
 */
function isLogged()
{
    $page = basename($_SERVER['SCRIPT_NAME']);
    if ($page == 'login.php' || $page == 'cadastrar.php') {
        return true;
    }

    if ($_SESSION['logado'] != true) {
        return false;
    }
}
