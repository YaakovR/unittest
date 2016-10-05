<?php

namespace Unit;


class CalculateAverage
{

    /*public function __construct($number1, $number2)
    {
        $total = $this->getAverage($number1, $number2);

        return $total;
    }*/
    public function __construct($number1, $number2)
    {
        $this->$number1 = $number1;
        $this->$number2 = $number2;
    }

    public function getAverage()
    {
        $args = func_get_args();
        $argsLength = count($args);

        return array_sum($args) / $argsLength;
    }
}
