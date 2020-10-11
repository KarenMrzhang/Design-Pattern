<?php
/**
 * Author: Karen
 * Date: 2019/10/16 0016
 */
interface Image
{
    public function display();
}

class RealImage implements Image
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        $this->loadFromDisk($this->fileName);
    }

    public function display()
    {
        // TODO: Implement display() method.
        echo "Displaying " . $this->fileName . "\n";
    }

    private function loadFromDisk($fileName)
    {
        echo "Loading " . $fileName . "\n";
    }
}

class ProxyImage implements Image
{
    private $realImage;
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function display()
    {
        // TODO: Implement display() method.
        if ($this->realImage == null) {
            $this->realImage = new RealImage($this->fileName);
        }
        $this->realImage->display();
    }
}
