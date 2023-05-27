<?php

use Database\Database;
use Utils\Debugger;
use Controllers\Controller;
use Controllers\UserController;
use Utils\Views\JsonView;
use Utils\Views\View;

class Core
{
    private Database $database;

    public function __construct()
    {
        $database = new Database("root", "root", "db");
        $url = explode("/", $_SERVER['REQUEST_URI']);
        array_shift($url);
        $routing = require_once("./Routing.php");

        foreach ($routing as $urlController => $nameController) {
            if ($urlController == $url[0]) {
                $controller = new $nameController($database);
                if (isset($url[1]))
                    $controller->$url[1]()->render();
                else
                    $controller->index()->render();
            }
        }
    }
}