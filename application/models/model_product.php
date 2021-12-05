<?php


class Model_Product extends Model
{
    private string $id;
    public function __construct(int $id)
    {
        parent::__construct();
        $this->mysqli = new mysqli("pattern-hmvc.com", "root", "", "shop");
        $this->id = $id;
    }

    public function get_data() : array
    {
        session_start();
        if(!$this->mysqli->query("INSERT into `shoppingcarts`(`order_id`, `product_id`, `count`) values (".$_SESSION["order_id"].", ".$this->id.", 1)"))
        {
            $this->mysqli->query("UPDATE shoppingcarts SET `count` =`count`+1 WHERE `order_id` = ".$_SESSION["order_id"].
                                      " AND `product_id` = ".$this->id);
        }
        return [];
    }
}