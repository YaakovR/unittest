<?php

use Unit\BaseSerializer;

Class BaseSerializerTest extends \PHPUnit_Framework_TestCase
{
    public function test_the_base_serializer()
    {
        $serializer = new BaseSerializer();

        $expected = 'Horse';

        $actual =  $serializer->serializeData($expected);

        $this->assertEquals($expected, $actual, 'Serialize Data not serializing as expected');
    }
}
