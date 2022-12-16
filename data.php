<?php

class Date
{
    private int $day, $month, $year;

    public static array $daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

    public function __construct(int $day, int $month, int $year)
    {
        if ($day >= 1 && $day <= 31) {
            $this->day = $day;
        } else {
            $this->day = 1;
        }
        if ($month >= 1 && $month <= 12) {
            $this->month = $month;
        } else {
            $this->month = 1;
        }
        if ($year >= 1 && $year <= 9999) {
            $this->year = $year;
        } else {
            $this->year = 1;
        }
    }

    public function diffDay(Date $dateTwo): void
    {
        $dateOneSum = $dateTwoSum = $dayDifference = 0;
        $dateOneSum = ($this->year * 365) + ($this->month * 31) + $this->day;
        $dateTwoSum = ($dateTwo->year * 365) + ($dateTwo->month * 31) + $dateTwo->day;
        $dayDifference = $dateOneSum - $dateTwoSum;
        if ($dayDifference < 0) {
            $dayDifference = $dayDifference * (-1);
            echo "$dayDifference" . "\n";
        } else {
            echo "$dayDifference" . "\n";
        }
    }

    public function minusDay(int $removedDays)
    {
        $this->day = $this->day - $removedDays;
        while ($this->day < 1) {
            $this->month--;
            $this->day = $this->day + 31;
        }
        while ($this->month < 1) {
            $this->year--;
            $this->month = $this->month + 12;
        }
        $this->format('ru');
    }

    public function getDateOfWeek(): void
    {
        $dateSum = $dateName = 0;
        $dateSum = ($this->year * 365) + ($this->month * 31) + $this->day;
        $dateName = $dateSum % 7;
        echo self::$daysOfWeek[$dateName] . "\n";
    }

    public function format(string $mode): void
    {
        switch ($mode) {
            case 'ru':
                echo "$this->day.$this->month.$this->year" . "\n";
                break;
            case 'en':
                echo "$this->year-$this->month-$this->day" . "\n";
                break;
            default:
                echo "Wrong mode" . "\n";
        }
    }
}

$date = new Date(1, 2, 2001);
$date2 = new Date(1, 4, 2001);
$date->diffDay($date2);
$date->minusDay(4);
$date->getDateOfWeek();
$date->format('ru');
$date->format('en');
