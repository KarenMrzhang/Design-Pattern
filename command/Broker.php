<?php
require_once "./Order.php";
/**
 * Author: Karen
 * Date: 2019/10/17 0017
 */
class Broker{
    private $orderList;

    public function takeOrder($order){
        $this->orderList[] = $order;
    }

    public function placeOrders(){
        foreach($this->orderList as $order){
            $order->execute();
        }
        $this->orderList = [];
    }
}