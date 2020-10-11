<?php
/**
 * Author: Karen
 * Date: 2019/10/17 0017
 */
interface Expression
{
    public function interpret($context);
}

class TerminalExpression implements Expression
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function interpret($context)
    {
        // TODO: Implement interpret() method.
        if (strpos($context, $this->data) !== false) {
            return true;
        }
        return false;
    }
}

class OrExpression implements Expression
{
    private $expr1 = null;
    private $expr2 = null;

    public function __construct($expr1, $expr2)
    {
        $this->expr1 = $expr1;
        $this->expr2 = $expr2;
    }

    public function interpret($context)
    {
        return $this->expr1->interpret($context) || $this->expr2->interpret($context);
    }
}

class AndExpression implements Expression
{
    private $expr1 = null;
    private $expr2 = null;

    public function __construct($expr1, $expr2)
    {
        $this->expr1 = $expr1;
        $this->expr2 = $expr2;
    }

    public function interpret($context)
    {
        return $this->expr1->interpret($context) && $this->expr2->interpret($context);
    }
}
