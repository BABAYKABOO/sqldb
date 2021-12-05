<?php


class Model_Comments extends Model
{
    private string $article_title;
    public function __construct(string $article_title)
    {
        parent::__construct();
        $this->article_title = $article_title;
    }

    public function get_data() : array
    {
        $query = $this->mysqli->query("SELECT * FROM `comments` WHERE `article_title` LIKE '$this->article_title'");

        return $query->fetch_all();
    }
}