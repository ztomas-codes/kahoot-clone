<?php
    define("__DIR__",dirname(__FILE__));

    spl_autoload_register(function ($class_name) {
        $parts = str_replace('\\', '/', $class_name);
        require $parts.'.php';
    });


    new Core();
?>