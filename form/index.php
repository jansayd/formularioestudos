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

$oncologico_dep = (new Combobox())->simNao('oncologico_dep', 'N');
$cronico_dep    = (new Combobox())->simNao('cronico_dep', 'N');
$deficiente_dep = (new Combobox())->simNao('deficiente_dep', 'N');

echo $blade->run("forms.index",
    compact('ufs', 'genero', 'oncologico', 'cronico', 'deficiente', 'oncologico_dep', 'cronico_dep', 'deficiente_dep'));
