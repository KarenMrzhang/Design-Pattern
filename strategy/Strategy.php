<?php
/**
 * Author: Karen
 * Date: 2019/11/1
 * Time: 22:29
 */
interface Strategy {
    public function doOperation($num1, $num2);
}

class OperationAdd implements Strategy{
    public function doOperation($num1, $num2)
    {
        // TODO: Implement doOperation() method.
        return $num1 + $num2;
    }
}


class OperationSubstract implements Strategy{
    public function doOperation($num1, $num2)
    {
        // TODO: Implement doOperation() method.
        return $num1 - $num2;
    }
}

class OperationMultiply implements Strategy{
    public function doOperation($num1, $num2)
    {
        // TODO: Implement doOperation() method.
        return $num1 * $num2;
    }
}