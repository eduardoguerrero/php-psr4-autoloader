<?php

/**
 *  Normaly we use these sentences: 
 *      require_once 'Src/Repositories/Message.php';
 *      require_once 'Src/Repositories/Log.php'
 *      require_once 'Src/AutFilter/AuthFilter.php'
 *
 *  Autoloading classes from file paths:
 *  	Add psr-4 to composer.json 
 *  	Update composer:     $composer self-update
 *  	Generate class map:  $composer dump-autoload -o
 *
 *  References:
 * 	https://www.php-fig.org/psr/
 * 	https://www.youtube.com/watch?v=VGSerlMoIrY
 */


//Autoloading classes from file paths
require_once __DIR__ . '/vendor/autoload.php';

use Src\Repositories\Message;
use Src\Repositories\Log;
use Src\AuthFilter\AuthFilter;

$messenger = new Message();
echo $messenger->send();

$log = new Log();
echo $log->setLog();


$filter = new AuthFilter();
echo $filter->messageFilter();


?>