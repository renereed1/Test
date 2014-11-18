<?php

chdir(dirname(__DIR__));

require_once 'vendor/autoload.php';

use Salestream\Framework\Application;

$application = new Application(require 'app/config/application.config.php');

$application->run();