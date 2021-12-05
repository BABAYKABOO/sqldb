<?php

class Model_Patterns extends Model
{
    public function get_data() : array
    {
        $query = $this->mysqli->query("SELECT * FROM articles");
        $arr = $query->fetch_all();
        if ($arr == null)
            $arr[] = "Sorry patterns didn't find";

        return $arr;
    }
}