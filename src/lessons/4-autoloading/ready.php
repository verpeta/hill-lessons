<?php

namespace App;

use App\Fruit\Banana;

require_once "autoloader.php";


$loader = new Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('App\\', './src');


$loader = new Psr0AutoloaderClass();
$loader->addNamespace('AppOld\\', './vendorOld-common/CommonClasses');

$b = new Banana();
