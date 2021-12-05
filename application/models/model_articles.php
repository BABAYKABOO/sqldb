<?php


class Model_Articles extends Model
{
    private string $title;
    public function __construct(string $title)
    {
        parent::__construct();
        $this->title = $title;
    }

    public function get_data() : array
    {
        $query = $this->mysqli->query("SELECT * FROM articles WHERE  title LIKE '$this->title'");
        $arr = $query->fetch_assoc();
        if($arr == null)
            return [];
        return $arr;
    }
}