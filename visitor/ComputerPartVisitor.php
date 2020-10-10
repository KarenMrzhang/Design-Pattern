<?php
require_once "./ComputerPart.php";
class ComputerPartDisplayVisitor
{
    public function visitKeyboard()
    {
        echo "Displaying Keyboard."."\n";
    }

    public function visitMouse()
    {
        echo "Displaying Mouse."."\n";
    }

    public function visitMonitor()
    {
        echo "Displaying Monitor."."\n";
    }
}
