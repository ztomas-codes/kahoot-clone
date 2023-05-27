<?php

namespace Utils;

class Debugger
{
    public static function debug($object)
    {
        echo '<pre>' . print_r($object, true) . '</pre>';
    }

}