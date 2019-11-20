<?php
require_once "./ComputerPartVisitor.php";
interface ComputerPart
{
    public function accept($computerPartVisitor);
}

class Keyboard implements ComputerPart
{
    public function accept($computerPartVisitor)
    {
        $computerPartVisitor->visitKeyboard();
    }
}

class Monitor implements ComputerPart
{
    public function accept($computerPartVisitor)
    {
        $computerPartVisitor->visitMonitor();
    }
}
class Mouse implements ComputerPart
{
    public function accept($computerPartVisitor)
    {
        $computerPartVisitor->visitMouse();
    }
}
class Computer
{
    private $parts;
    public function __construct()
    {
        $this->parts = [new Keyboard(),new Monitor(),new Mouse()];
    }

    public function handleVisitor($computerPartVisitor)
    {
        foreach ($this->parts as $computerpart) {
            $computerpart->accept($computerPartVisitor);
        }
    }
}
