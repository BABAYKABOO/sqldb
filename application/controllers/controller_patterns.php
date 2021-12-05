<?php


class Controller_Patterns extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_Patterns();
    }

    public function action_index() : bool
    {
        $data = $this->model->get_data();
        if (!file_exists("application/views/patterns_view.php"))
            return false;

        $this->view->generate('patterns_view.php', 'Patterns', $data);
        return true;
    }
}