<?php
require_once "./Order.php";
require_once "./Broker.php";
/**
 * Author: Karen
 * Date: 2019/10/17 0017
 */
$abcStock = new Stock();
$buyStockOrder = new BuyStock($abcStock);
$sellStockOrder = new SellStock($abcStock);

$broke = new Broker();
$broke->takeOrder($buyStockOrder);
$broke->takeOrder($sellStockOrder);

$broke->placeOrders();
