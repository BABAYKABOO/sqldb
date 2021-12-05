<?php


class Controller_Shop extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_Shop();
    }

    public function action_index() : bool
    {
        $data = $this->model->get_data();
        if (!file_exists("application/views/shop_view.php"))
            return false;
        $this->view->generate('shop_view.php', 'Shop', $data);
        return true;
    }
}
{

}