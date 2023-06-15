<?php
// controllers/HomeController.php

class HomeController extends BaseController
{
    public function index()
    {
        // Example code for retrieving data from a model
        $data = $this->model->getData();

        // Example code for passing data to the view for rendering
        $this->view->render('home/index', $data);
    }
}
?>
