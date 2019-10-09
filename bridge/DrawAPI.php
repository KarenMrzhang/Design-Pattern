<?php
/**
 * Author: Karen
 * Date: 2019/10/9 0009
 */
interface DrawAPI{
    public function drawCircle($radius, $x, $y);
}

class RedCircle implements DrawAPI{
    public function drawCircle ($radius, $x, $y)
    {
        // TODO: Implement drawCircle() method.
        echo "Drawing Circle[ color: red, radius: " . $radius . ", x: " . $x . ", " . $y . "]" . "\n";
    }
}

class GreenCircle implements DrawAPI{
    public function drawCircle ($radius, $x, $y)
    {
        // TODO: Implement drawCircle() method.
        echo "Drawing Circle[ color: green, radius: " . $radius . ", x: " . $x . ", " . $y . "]". "\n";
    }
}