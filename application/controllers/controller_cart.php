<?php


class Controller_Cart extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_Cart();
        session_start();
        if(!isset($_SESSION["order_id"]))
        {
            header('Location: http://pattern-hmvc.com/shop');
            exit;
        }
    }

    public function action_index() : bool
    {

        $data = $this->model->get_data();
        $this->view->generate('cart_view.php', 'Cart', $data);
        return true;
    }
}