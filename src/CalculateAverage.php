<?php

namespace Unit;


class CalculateAverage
{
    public function getAverage()
    {
        $args = func_get_args();
        $argsLength = count($args);

        return array_sum($args) / $argsLength;
    }
}
