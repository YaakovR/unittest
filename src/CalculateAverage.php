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

        $avg = $this->getAverage($args);

        return $this->serializer->serializeData($avg);
    }
}
