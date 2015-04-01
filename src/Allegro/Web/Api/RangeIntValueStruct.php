<?php

/**
 * Class Allegro_Web_Api_RangeIntValueStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_RangeIntValueStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $fvalueRangeIntMin
     */
    protected $fvalueRangeIntMin = null;

    /**
     * @var int $fvalueRangeIntMax
     */
    protected $fvalueRangeIntMax = null;

    /**
     * @param int $fvalueRangeIntMin
     * @param int $fvalueRangeIntMax
     */
    public function __construct($fvalueRangeIntMin, $fvalueRangeIntMax)
    {
        $this->fvalueRangeIntMin = $fvalueRangeIntMin;
        $this->fvalueRangeIntMax = $fvalueRangeIntMax;
    }

    /**
     * @return int
     */
    public function getFvalueRangeIntMin()
    {
        return $this->fvalueRangeIntMin;
    }

    /**
     * @param int $fvalueRangeIntMin
     * @return Allegro_Web_Api_RangeIntValueStruct
     */
    public function setFvalueRangeIntMin($fvalueRangeIntMin)
    {
        $this->fvalueRangeIntMin = $fvalueRangeIntMin;
        return $this;
    }

    /**
     * @return int
     */
    public function getFvalueRangeIntMax()
    {
        return $this->fvalueRangeIntMax;
    }

    /**
     * @param int $fvalueRangeIntMax
     * @return Allegro_Web_Api_RangeIntValueStruct
     */
    public function setFvalueRangeIntMax($fvalueRangeIntMax)
    {
        $this->fvalueRangeIntMax = $fvalueRangeIntMax;
        return $this;
    }
}
