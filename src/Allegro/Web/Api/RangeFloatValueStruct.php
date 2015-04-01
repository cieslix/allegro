<?php

/**
 * Class Allegro_Web_Api_RangeFloatValueStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_RangeFloatValueStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var float $fvalueRangeFloatMin
     */
    protected $fvalueRangeFloatMin = null;

    /**
     * @var float $fvalueRangeFloatMax
     */
    protected $fvalueRangeFloatMax = null;

    /**
     * @param float $fvalueRangeFloatMin
     * @param float $fvalueRangeFloatMax
     */
    public function __construct($fvalueRangeFloatMin, $fvalueRangeFloatMax)
    {
        $this->fvalueRangeFloatMin = $fvalueRangeFloatMin;
        $this->fvalueRangeFloatMax = $fvalueRangeFloatMax;
    }

    /**
     * @return float
     */
    public function getFvalueRangeFloatMin()
    {
        return $this->fvalueRangeFloatMin;
    }

    /**
     * @param float $fvalueRangeFloatMin
     * @return Allegro_Web_Api_RangeFloatValueStruct
     */
    public function setFvalueRangeFloatMin($fvalueRangeFloatMin)
    {
        $this->fvalueRangeFloatMin = $fvalueRangeFloatMin;
        return $this;
    }

    /**
     * @return float
     */
    public function getFvalueRangeFloatMax()
    {
        return $this->fvalueRangeFloatMax;
    }

    /**
     * @param float $fvalueRangeFloatMax
     * @return Allegro_Web_Api_RangeFloatValueStruct
     */
    public function setFvalueRangeFloatMax($fvalueRangeFloatMax)
    {
        $this->fvalueRangeFloatMax = $fvalueRangeFloatMax;
        return $this;
    }
}
