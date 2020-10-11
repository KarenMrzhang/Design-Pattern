<?php
require_once "./Subject.php";
/**
 * Author: Karen
 * Date: 2019/11/2
 * Time: 12:45
 */
abstract class Observer
{
    protected $subject;
    abstract public function update();
}

class BinaryObserver extends Observer
{
    public function __construct($subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        // TODO: Implement update() method.
        echo "Binary String: " . decbin(intval($this->subject->getState())) . "\n";
    }
}

class OctalObserver extends Observer
{
    public function __construct($subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        // TODO: Implement update() method.
        echo "Octal String: " . decoct(intval($this->subject->getState())) . "\n";
    }
}

class HexaObserver extends Observer
{
    public function __construct($subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        // TODO: Implement update() method.
        echo "Hex String: " . dechex(intval($this->subject->getState())) . "\n";
    }
}
