<?php
/**
 * Author: Karen
 * Date: 2019/10/16 0016
 */
abstract class AbstractLogger
{
    public static $INFO = 1;
    public static $DEBUG = 2;
    public static $ERROR = 3;
    public $level;

    //责任链中的下一个元素
    protected $nextLogger;

    public function setNextLogger($nextLogger)
    {
        $this->nextLogger = $nextLogger;
    }

    public function logMessage($level, $message)
    {
        if ($this->level <= $level) {
            $this->write($message);
        }
        if ($this->nextLogger != null) {
            $this->nextLogger->logMessage($level, $message);
        }
    }

    abstract public function write($message);
}

class ConsoleLogger extends AbstractLogger
{
    public function __construct($level)
    {
        $this->level = $level;
    }

    public function write($message)
    {
        // TODO: Implement write() method.
        echo "Standard Console::Logger: " . $message . "\n";
    }
}

class ErrorLogger extends AbstractLogger
{
    public function __construct($level)
    {
        $this->level = $level;
    }

    public function write($message)
    {
        // TODO: Implement write() method.
        echo "Error Console::Logger: " . $message . "\n";
    }
}

class FileLogger extends AbstractLogger
{
    public function __construct($level)
    {
        $this->level = $level;
    }

    public function write($message)
    {
        // TODO: Implement write() method.
        echo "File::Logger: " . $message . "\n";
    }
}
