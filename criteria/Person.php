<?php

/**
 * Author: Karen
 * Date: 2019/10/10 0010
 */
class Person
{
    private $name;
    private $gender;
    private $maritalStatus;

    public function __construct ($name, $gender, $maritalStatus)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->maritalStatus = $maritalStatus;
    }

    /**
     * @return mixed
     */
    public function getName ()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getGender ()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getMaritalStatus ()
    {
        return $this->maritalStatus;
    }
}