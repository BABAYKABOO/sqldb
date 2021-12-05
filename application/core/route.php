<?php
class Route
{
    static function start()
    {

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if ($routes[1] == '' && !isset($routes[2]) && !isset($routes[3])) {
            include 'application/controllers/controller_main.php';
            $main = new Controller_Main();
            $main->action_index();
        }
        else if (isset($routes[1]) && !isset($routes[2]) && !isset($routes[3])) {
            include 'application/controllers/controller_'.$routes[1].'.php';
            include 'application/models/model_'.$routes[1].'.php';
            $routes[1] = 'Controller_'.ucfirst($routes[1]);
            $patterns = new $routes[1];
            $patterns->action_index();
        }
        else if ($routes[1] == 'shop' && is_numeric($routes[2]) && !isset($routes[3])) {
            include 'application/controllers/controller_product.php';
            include 'application/models/model_product.php';
            $product = new Controller_Product($routes[2]);
            $product->action_index();
        }
        else if ($routes[1] == 'patterns' && isset($routes[2]) && !isset($routes[3])) {
            include 'application/controllers/controller_articles.php';
            include 'application/models/model_articles.php';
            $articles = new Controller_Articles($routes[2]);
            if(!$articles->action_index())
                self::ErrorPage404();
        }
        else if ($routes[1] == 'patterns' && isset($routes[2]) && $routes[3] == 'comments') {
            include 'application/controllers/controller_comments.php';
            include 'application/models/model_comments.php';
            $comments = new Controller_Comments($routes[2]);
            $comments->action_index();
        }
        else if ($routes[1] == 'exit') {
            include 'application/controllers/controller_exit.php';
            include 'application/models/model_exit.php';
            $comments = new Controller_Exit();
            $comments->action_index();
        }

    }
    static private function ErrorPage404() : void
    {
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        exit;
    }
}

