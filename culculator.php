<?php

class Сalculator
{
    private int $result;
    public function sum(int $sum): self
    {
        $this->result += $sum;
        return $this;
    }
    public function minus(int $minus): self
    {
        $this->result -= $minus;
        return $this;
    }
    public function product(int $product): self
    {
        $this->result *= $product;
        return $this;
    }
    public function division(int $division): self
    {
        $this->result /= $division;
        if ($division == 0) {
            $this->result == 0;
        }
        return $this;
    }
    public function getResult(): string
    {
        return $this->result;
    }
}

$calculator = new Сalculator();

echo $calculator->sum(1)->sum(2)->product(3)->division(3)->getResult();
echo $calculator->sum(3)->sum(3)->minus(3)->division(3)->getResult();
echo $calculator->sum(1)->sum(2)->product(4)->getResult();
echo $calculator->sum(1)->sum(2)->product(3)->division(0)->getResult();
