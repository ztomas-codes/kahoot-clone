<?php

namespace Controllers;

use Database\Database;

class Controller
{
    protected Database $database;
    public function __construct(Database $db = null)
    {
        $this->database = $db;
    }

}