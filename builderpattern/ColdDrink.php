<?php
/**
 * Author: zhangkailang
 * Date: 2019/9/24 0024
 */
abstract class ColdDrink implements Item{
    public function packing()
    {
        return new Bottle();
    }
}