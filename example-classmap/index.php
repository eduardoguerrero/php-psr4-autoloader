<?php

/**
 *  Normaly we use the sentences: 
 *      require_once 'src/Message.php';
 *      require_once 'src/Log.php'
 *
 *  Autoloading classes from file paths:
 *  	Add classmap to composer.json 
 *  	Update composer:     $composer self-update
 *  	Generate class map:  $composer dump-autoload -o
 *
 *  References:
 * 	https://www.php-fig.org/psr/
 * 	https://www.youtube.com/watch?v=VGSerlMoIrY
 */

//Autoloading classes from file paths
require_once __DIR__ . '/vendor/autoload.php';

$messenger = new Message();
echo $messenger->send();

$log = new Log();
echo $log->setLog();


?>