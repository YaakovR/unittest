<?php

use Unit\CalculateAverage;

class CalculateAverageTest extends PHPUnit_Framework_TestCase
{
    /*public function test_calculate_average()
    {
        $calcAvg = new CalculateAverage();

        $expected = 7.5;

        $actual = $calcAvg->getAverage( 5, 10 );

        $this->assertEquals($expected, $actual, 'CalculateAverage not working as expected');
    }*/

    public function test_calculate_average()
    {
        $mock = Mockery::mock(CalculateAverage::class);
        echo CalculateAverage::class;
        $mock->shouldReceive('getAverage')
            ->once()
            ->andReturn(7.5);

        $calcAvg = new CalculateAverage( 5, 10 );
        $this->assertEquals(7.5, $calcAvg->getAverage());
    }

    public function tearDown()
    {
        Mockery::close();
    }
}
