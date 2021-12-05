<?php


class Controller_Exit extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_Exit();
    }

    public function action_index() : bool
    {
        $data = $this->model->get_data();
        header("Location: http://pattern-hmvc.com");
        return true;
    }
}