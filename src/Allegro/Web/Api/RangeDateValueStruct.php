<?php

/**
 * Class Allegro_Web_Api_RangeDateValueStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_RangeDateValueStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $fvalueRangeDateMin
     */
    protected $fvalueRangeDateMin = null;

    /**
     * @var string $fvalueRangeDateMax
     */
    protected $fvalueRangeDateMax = null;

    /**
     * @param string $fvalueRangeDateMin
     * @param string $fvalueRangeDateMax
     */
    public function __construct($fvalueRangeDateMin, $fvalueRangeDateMax)
    {
        $this->fvalueRangeDateMin = $fvalueRangeDateMin;
        $this->fvalueRangeDateMax = $fvalueRangeDateMax;
    }

    /**
     * @return string
     */
    public function getFvalueRangeDateMin()
    {
        return $this->fvalueRangeDateMin;
    }

    /**
     * @param string $fvalueRangeDateMin
     * @return Allegro_Web_Api_RangeDateValueStruct
     */
    public function setFvalueRangeDateMin($fvalueRangeDateMin)
    {
        $this->fvalueRangeDateMin = $fvalueRangeDateMin;
        return $this;
    }

    /**
     * @return string
     */
    public function getFvalueRangeDateMax()
    {
        return $this->fvalueRangeDateMax;
    }

    /**
     * @param string $fvalueRangeDateMax
     * @return Allegro_Web_Api_RangeDateValueStruct
     */
    public function setFvalueRangeDateMax($fvalueRangeDateMax)
    {
        $this->fvalueRangeDateMax = $fvalueRangeDateMax;
        return $this;
    }
}
