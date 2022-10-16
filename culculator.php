<?php

class calculator
{
    public $result;
    public function sum($s)
    {
        $this->result += $s;
        return $this;
    }
    public function minus($m)
    {
        $this->result -= $m;
        return $this;
    }
    public function product($p)
    {
        $this->result *= $p;
        return $this;
    }
    public function division($d)
    {
        $this->result /= $d;
        if ($d == 0) {
            $this == 0;
        }
        return $this;
    }
    public function getResult()
    {
        return $this->result;
    }
}

$calculator = new calculator();

echo $calculator->sum(1)->sum(2)->product(3)->division(3)->getResult();
echo $calculator->sum(3)->sum(3)->minus(3)->division(3)->getResult();
echo $calculator->sum(1.4)->sum(2.6)->product(4)->getResult();
echo $calculator->sum(1)->sum(2)->product(3)->division(0)->getResult();
