<?php



class Controller_Main extends Controller
{
    public function action_index() : bool
    {
        if (!file_exists("application/views/main_view.php"))
            return false;

        $this->view->generate('main_view.php', 'Home');
        return true;
    }
}