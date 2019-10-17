<?php
/**
 * Author: Karen
 * Date: 2019/10/17 0017
 */
interface Order {
    public function execute();
}

class Stock {
    private $name = "ABC";
    private $quantity  = 10;

    public function buy(){
        echo "Stock [ Name: " . $this->name . ", 
         Quantity: " . $this->quantity . " ] bought" . "\n";
    }

    public function sell(){
        echo "Stock [ Name: " . $this->name . ", 
         Quantity: " . $this->quantity . " ] sold" . "\n";
    }
}

class BuyStock implements Order{
    private $abcStock;

    public function __construct ($abcStock)
    {
        $this->abcStock = $abcStock;
    }

    public function execute ()
    {
        // TODO: Implement execute() method.
        $this->abcStock->buy();
    }
}

class SellStock implements Order{
    private $abcStock;

    public function __construct ($abcStock)
    {
        $this->abcStock = $abcStock;
    }

    public function execute ()
    {
        // TODO: Implement execute() method.
        $this->abcStock->sell();
    }
}