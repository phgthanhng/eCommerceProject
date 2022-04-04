<?php 
    //adding our config file 
    require_once 'config/config.php';

    require_once 'core/helper.php';

    spl_autoload_register(function($className){
        require_once 'core/'. $className .'.php';
    });
