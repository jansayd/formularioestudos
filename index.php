<?php

use App\Classes\Usuario;

include('config.php');

$usuario = new Usuario();

if ($usuario->isLoggedIn()) {
    $redirect = "form/index.php";
} else {
    $redirect = 'login.php';
}

header("Location: {$redirect}");
