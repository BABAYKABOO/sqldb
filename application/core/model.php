<?php


class Model
{
    protected $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli("pattern-hmvc.com", "root", "", "hmvc");
    }

    public function get_info() : array
    {
        return ['Sorry happened a magic mistake'];
    }
}