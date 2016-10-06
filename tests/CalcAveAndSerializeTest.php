<?php

use Unit\CalculateAverage;

class CalcAveAndSerialize extends PHPUnit_Framework_TestCase
{
    public function test_calculate_average_and_serialize()
    {
        $mockSerializer = Mockery::mock(Unit\BaseSerializer::class);
        $mockSerializer->shouldReceive('serializeData')
            ->once()
            ->andReturn(7.5);

        $calcAvg = new CalculateAverage($mockSerializer);
        $serialized = $calcAvg->getAverageAndSerialize(5, 10);

        $this->assertEquals(7.5, $serialized);
    }

    public function tearDown()
    {
        Mockery::close();
    }
}
