<?php

class Сalculator
{
    public $result;
    public function sum(int $sum)
    {
        $this->result += $sum;
        return $this;
    }
    public function minus(int $minus)
    {
        $this->result -= $minus;
        return $this;
    }
    public function product(int $product)
    {
        $this->result *= $product;
        return $this;
    }
    public function division(int $division)
    {
        $this->result /= $division;
        if ($division == 0) {
            $this->result == 0;
        }
        return $this;
    }
    public function getResult()
    {
        return $this->result;
    }
}

$calculator = new Сalculator();

echo $calculator->sum(1)->sum(2)->product(3)->division(3)->getResult();
echo $calculator->sum(3)->sum(3)->minus(3)->division(3)->getResult();
echo $calculator->sum(1)->sum(2)->product(4)->getResult();
echo $calculator->sum(1)->sum(2)->product(3)->division(0)->getResult();
