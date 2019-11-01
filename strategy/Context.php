<?php
require_once "./Strategy.php";
/**
 * Author: Karen
 * Date: 2019/11/1
 * Time: 22:33
 */
class Context {
    private $strategy;

    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy($num1, $num2)
    {
        return $this->strategy->doOperation($num1, $num2);
    }
}