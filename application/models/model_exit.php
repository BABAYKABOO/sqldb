<?php


class Model_Exit extends Model
{
    public function get_data() : array
    {
        session_start();
        session_destroy();
        return [];
    }
}