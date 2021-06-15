<?php
include dirname(__DIR__) . "/config.php";

use App\Classes\Form\Combobox;
use eftec\bladeone\BladeOne;

$views = dirname(__DIR__) . '/views';
$cache = dirname(__DIR__) . '/cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.

echo $blade->run("forms.list", []);
