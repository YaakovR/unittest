<?php namespace Unit;


class CalculateAverage
{
    /**
     * @var BaseSerializer
     */
    private $serializer;

    public function __construct(BaseSerializer $serializer = null)
    {
        if (isset($serializer)) {
            $this->serializer = $serializer;
        }
    }

    public function getAverage()
    {
        $args = func_get_args();

        $argsLength = count($args);

        return array_sum($args) / $argsLength;
    }

    public function getAverageAndSerialize()
    {
        $args = func_get_args();

        $avg = call_user_func_array(array($this, 'getAverage'), $args);
        $serializedData = $this->serializer->serializeData($avg);

        return $serializedData;
    }
}
