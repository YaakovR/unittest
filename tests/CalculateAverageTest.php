<?php

use Unit\CalculateAverage;

class CalculateAverageTest extends PHPUnit_Framework_TestCase
{
    public function test_calculate_average()
    {
        $calcAvg = new CalculateAverage();

        $expected = 7.5;

        $actual = $calcAvg->getAverage( 5, 10 );

        $this->assertEquals($expected, $actual, 'CalculateAverage not working as expected');
    }
}
