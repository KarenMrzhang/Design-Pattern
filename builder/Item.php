<?php
require_once './Packing.php';
/**
 * Author: zhangkailang
 * Date: 2019/9/24 0024
 */

interface Item{
    public function name();

    public function packing();

    public function price();
}

abstract class Burger implements Item{
    public function packing()
    {
        return new Wrapper();
    }
}

class VegBurger extends Burger{
    public function price()
    {
        return 25.0;
    }

    public function name()
    {
        return 'Veg Burger';
    }
}

class ChickenBurger extends Burger{
    public function price()
    {
        return 50.5;
    }

    public function name()
    {
        return 'Chichen Burger';
    }
}

abstract class ColdDrink implements Item{
    public function packing()
    {
        return new Bottle();
    }
}

class Coke extends ColdDrink {
    public function price()
    {
        return 30.0;
    }

    public function name()
    {
        return 'Coke';
    }
}

class Pepsi extends ColdDrink{
    public function price()
    {
        return 35.0;
    }

    public function name()
    {
        return 'Pepsi';
    }
}