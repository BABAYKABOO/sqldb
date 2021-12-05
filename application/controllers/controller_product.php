<?php


class Controller_Product extends Controller
{

    public function __construct(int $id)
    {
        parent::__construct();
        $this->model = new Model_Product($id);
        session_start();
        if(!($_SESSION["order_id"]))
        {
            $this->view->generate('auth_view.php', 'Authorization', ['id' => $id]);
            exit;
        }
    }

    public function action_index() : bool
    {

        $this->model->get_data();
        header("Location: http://pattern-hmvc.com/shop");
        return true;
    }
}