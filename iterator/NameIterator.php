<?php
/**
 * Author: Karen
 * Date: 2019/10/21
 */
class NameIterator implements Iterator{
    private $index;
    private $names;

    public function __construct($names)
    {
        $this->index = 0;
        $this->names = $names;
    }

    public function hasNext()
    {
        if ($this->index < count($this->names)){
            return true;
        }
        return false;
    }

    public function next()
    {
        if ($this->hasNext()){
            return $this->names[$this->index++];
        }
        return null;
    }

    public function current()
    {
        // TODO: Implement current() method.
    }

    public function key()
    {
        // TODO: Implement key() method.
    }

    public function valid()
    {
        // TODO: Implement valid() method.
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }
}

interface Container {
    public function getIterator();
}

class NameRepository implements Container{
    public $names = ["Robert" , "John" ,"Julie" , "Lora"];

    public function getIterator()
    {
        return new NameIterator($this->names);
    }
}