<?php
/**
 * Author: Karen
 * Date: 2019/11/2
 * Time: 12:46
 */
class Subject {
    private $observers;
    private $state;

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
        $this->notifyAllObservers();
    }

    public function attach($observer)
    {
        $this->observers[] = $observer;
    }

    public function notifyAllObservers()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update();
        }
    }
}