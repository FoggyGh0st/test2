<?php

class Сalculator
{
    public int $result;
    public function sum(int $sum_): self
    {
        $this->result += $sum_;
        return $this;
    }
    public function minus(int $minus_): self
    {
        $this->result -= $minus_;
        return $this;
    }
    public function product(int $product_): self
    {
        $this->result *= $product_;
        return $this;
    }
    public function division(int $division_): self
    {
        $this->result /= $division_;
        if ($division_ == 0) {
            $this->result == 0;
        }
        return $this;
    }
    public function getResult():string
    {
        return $this->result;
    }
}

$calculator = new Сalculator();

echo $calculator->sum(1)->sum(2)->product(3)->division(3)->getResult();
echo $calculator->sum(3)->sum(3)->minus(3)->division(3)->getResult();
echo $calculator->sum(1)->sum(2)->product(4)->getResult();
echo $calculator->sum(1)->sum(2)->product(3)->division(0)->getResult();
