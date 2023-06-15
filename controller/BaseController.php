<?php
// controllers/BaseController.php

class BaseController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
}
?>
