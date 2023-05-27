<?php

namespace Utils\Views;

class JsonView extends View
{
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        echo json_encode($this->data);
    }
}