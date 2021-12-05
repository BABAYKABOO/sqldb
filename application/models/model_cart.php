<?php


class Model_Cart extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->mysqli = new mysqli("pattern-hmvc.com", "root", "", "shop");
    }

    public function get_data() : array
    {
        session_start();
        $query = $this->mysqli->query("SELECT shop.products.product_name, shoppingcarts.count, shop.products.price*shoppingcarts.count FROM shoppingcarts 
                                        JOIN products ON shoppingcarts.product_id = products.product_id
                                        WHERE shop.shoppingcarts.order_id =".$_SESSION['order_id']);
        $arr['products'] = $query->fetch_all();
        $query = $this->mysqli->query("SELECT sum(shop.products.price * shoppingcarts.count) as sum FROM shoppingcarts
                                        JOIN products ON shoppingcarts.product_id = products.product_id
                                        WHERE shop.shoppingcarts.order_id =".$_SESSION['order_id']);
        $arr['sum'] = $query->fetch_all();
        $arr['sum'] = $arr['sum'][0][0];
        return $arr;
    }
}