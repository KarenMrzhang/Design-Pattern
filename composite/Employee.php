<?php

/**
 * Author: Karen
 * Date: 2019/9/26 0026
 */
class Employee
{
    private $name;
    private $dept;
    private $salary;
    private $subordinates = [];

    /**
     * Employee constructor.
     */
    public function __construct($name, $dept, $sal)
    {
        $this->name = $name;
        $this->dept = $dept;
        $this->salary = $sal;
    }

    public function add($employee)
    {
        $this->subordinates[] = $employee;
    }

    public function remove($employee)
    {
        $is_exists = array_search($employee, $this->subordinates);
        if ($is_exists === false) {
            echo 'Employee name : ' . $employee->name . 'not found !';
        } else {
            unset($this->subordinates[$is_exists]);
        }
    }

    public function getSubordinates()
    {
        return $this->subordinates;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Employee :[ Name : " . $this->name
        . ", dept : " . $this->dept . ", salary : "
        . $this->salary ." ]";
    }
}
