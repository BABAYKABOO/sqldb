<?php

class View
{
    public string $template_view = 'template_view.php';

    public function generate($content_view, $title = null, $data = null)
    {
        return include 'application/views/'.$this->template_view;
    }
}