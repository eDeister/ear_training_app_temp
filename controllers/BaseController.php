<?php
// controllers/BaseController.php
/*@author Sajal Khadgi
Description: For learboard database and quiz*/

class BaseController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
}
