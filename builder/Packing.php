<?php
/**
 * Author: zhangkailang
 * Date: 2019/9/24 0024
 */
interface Packing
{
    public function pack();
}

class Bottle implements Packing
{
    public function pack()
    {
        return "Bottle";
    }
}

class Wrapper implements Packing
{
    public function pack()
    {
        return "Wrapper";
    }
}
