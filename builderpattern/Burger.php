<?php
/**
 * Author: zhangkailang
 * Date: 2019/9/24 0024
 */
abstract class Burger implements Item{
    public function packing()
    {
        return new Wrapper();
    }
}