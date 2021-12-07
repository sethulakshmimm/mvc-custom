<?php
spl_autoload_register(function ($class) {
    
    if(file_exists('Web/' . $class . '.php')){
        require_once 'Web/' . $class . '.php';
    }
    else if(file_exists('Controllers/' . $class . '.php')){
        require_once 'Controllers/' . $class . '.php';
    }
});
require_once('Web/Routes.php');