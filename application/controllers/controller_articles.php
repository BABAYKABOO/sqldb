<?php


class Controller_Articles extends Controller
{

    public function __construct(string $title)
    {
        parent::__construct();
        $this->model = new Model_Articles($title);
    }

    public function action_index() : bool
    {
        if (!file_exists("application/views/articles_view.php"))
            return false;

        $data = $this->model->get_data();
        if ($data == [])
            return false;

        $this->view->generate('articles_view.php', 'Patterns', $data);
        return true;
    }
}