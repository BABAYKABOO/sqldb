<?php


class Controller_Comments extends Controller
{
    public function __construct(string $title)
    {
        parent::__construct();
        $this->model = new Model_Comments($title);
    }

    public function action_index() : bool
    {
        if (!file_exists("application/views/comments_view.php"))
            return false;

        $comments = $this->model->get_data();
        include "application/views/comments_view.php";
        return true;
    }
}