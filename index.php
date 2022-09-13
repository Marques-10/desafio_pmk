<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
require "config.php";

spl_autoload_register(function($class){

    if (file_exists('controllers/'.$class.'.php')) {
        require 'controllers/'.$class.'.php';
    }
    else if (file_exists('models/'.$class.'.php')) {
        require 'models/'.$class.'.php';
    } 
    else if (file_exists('middleware/'.$class.'.php')) {
        require 'middleware/'.$class.'.php';
    }
    else if (file_exists('core/'.$class.'.php')) {
        require 'core/'.$class.'.php';
    }

});

$core = new Core();
$core->run();