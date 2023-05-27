<?php

namespace Controllers;

use Database\Database;
use Utils\Views\JsonView;
use Utils\Views\View;

class UserController extends Controller
{
    public function __construct(Database $db = null)
    {
        parent::__construct($db);
    }

    public function index() : View
    {
        $stmt = $this->database->getConn()->prepare("SELECT * FROM users");

        $users = $stmt->fetchAll();
        return new JsonView($users);
    }
}