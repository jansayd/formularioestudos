<?php
include dirname(__DIR__) . "/config.php";

use App\Classes\Form\Combobox;
use eftec\bladeone\BladeOne;

$views = dirname(__DIR__) . '/views';
$cache = dirname(__DIR__) . '/cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.

$ufs        = (new Combobox())->UF();
$genero     = (new Combobox())->genero();
$oncologico = (new Combobox())->simNao('oncologico', 'N');
$cronico    = (new Combobox())->simNao('cronico', 'N');
$deficiente = (new Combobox())->simNao('deficiente', 'N');

echo $blade->run("forms.index", compact('ufs', 'genero', 'oncologico', 'cronico', 'deficiente'));
