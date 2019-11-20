<?php
require_once './DrawAPI.php';
/**
 * Author: Karen
 * Date: 2019/10/9 0009
 */
abstract class Shape
{
    protected $drawAPI;
    protected function Shape($drawAPI)
    {
        $this->drawAPI = $drawAPI;
    }
    abstract public function draw();
}

class Circle extends Shape
{
    private $x, $y, $radius;

    public function __construct($x, $y, $radius, $drawAPI)
    {
        parent::__construct($drawAPI);
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    public function draw()
    {
        // TODO: Implement draw() method.
        $this->drawAPI->drawCircle($this->x, $this->y, $this->radius);
    }
}
