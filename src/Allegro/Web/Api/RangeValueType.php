<?php

/**
 * Class Allegro_Web_Api_RangeValueType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_RangeValueType extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $rangeValueMin
     */
    protected $rangeValueMin = null;

    /**
     * @var string $rangeValueMax
     */
    protected $rangeValueMax = null;

    /**
     * @param string $rangeValueMin
     * @param string $rangeValueMax
     */
    public function __construct($rangeValueMin, $rangeValueMax)
    {
        $this->rangeValueMin = $rangeValueMin;
        $this->rangeValueMax = $rangeValueMax;
    }

    /**
     * @return string
     */
    public function getRangeValueMin()
    {
        return $this->rangeValueMin;
    }

    /**
     * @param string $rangeValueMin
     * @return Allegro_Web_Api_RangeValueType
     */
    public function setRangeValueMin($rangeValueMin)
    {
        $this->rangeValueMin = $rangeValueMin;
        return $this;
    }

    /**
     * @return string
     */
    public function getRangeValueMax()
    {
        return $this->rangeValueMax;
    }

    /**
     * @param string $rangeValueMax
     * @return Allegro_Web_Api_RangeValueType
     */
    public function setRangeValueMax($rangeValueMax)
    {
        $this->rangeValueMax = $rangeValueMax;
        return $this;
    }
}
