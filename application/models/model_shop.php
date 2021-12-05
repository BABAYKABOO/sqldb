<?php


class Model_Shop extends Model
{
    public function get_data(): array
    {
        $this->mysqli = new mysqli("pattern-hmvc.com", "root", "", "shop");
        $query = $this->mysqli->query("SELECT * FROM products");
        $arr = $query->fetch_all();
        if ($arr == null)
            $arr[] = "Sorry products didn't find";

        return $arr;
    }
}