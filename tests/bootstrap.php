<?php
require_once __DIR__ . '/../app/Joindin/Service/Autoload.php';

spl_autoload_register('Joindin\Service\Autoload::autoload');
require __DIR__ . '/../vendor/predis-0.8/autoload.php';
