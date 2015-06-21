<?php

/**
 * Class Allegro_Web_Api_ParameterInfoType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ParameterInfoType extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $parameterName
     */
    protected $parameterName = null;

    /**
     * @var Allegro_Web_Api_ArrayOfString $parameterValue
     */
    protected $parameterValue = null;

    /**
     * @var string $parameterUnit
     */
    protected $parameterUnit = null;

    /**
     * @var boolean $parameterIsRange
     */
    protected $parameterIsRange = null;

    /**
     * @param string                        $parameterName
     * @param Allegro_Web_Api_ArrayOfString $parameterValue
     * @param string                        $parameterUnit
     * @param boolean                       $parameterIsRange
     */
    public function __construct($parameterName, $parameterValue, $parameterUnit, $parameterIsRange)
    {
        $this->parameterName    = $parameterName;
        $this->parameterValue   = $parameterValue;
        $this->parameterUnit    = $parameterUnit;
        $this->parameterIsRange = $parameterIsRange;
    }

    /**
     * @return string
     */
    public function getParameterName()
    {
        return $this->parameterName;
    }

    /**
     * @param string $parameterName
     * @return Allegro_Web_Api_ParameterInfoType
     */
    public function setParameterName($parameterName)
    {
        $this->parameterName = $parameterName;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getParameterValue()
    {
        return $this->parameterValue;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $parameterValue
     * @return Allegro_Web_Api_ParameterInfoType
     */
    public function setParameterValue($parameterValue)
    {
        $this->parameterValue = $parameterValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getParameterUnit()
    {
        return $this->parameterUnit;
    }

    /**
     * @param string $parameterUnit
     * @return Allegro_Web_Api_ParameterInfoType
     */
    public function setParameterUnit($parameterUnit)
    {
        $this->parameterUnit = $parameterUnit;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getParameterIsRange()
    {
        return $this->parameterIsRange;
    }

    /**
     * @param boolean $parameterIsRange
     * @return Allegro_Web_Api_ParameterInfoType
     */
    public function setParameterIsRange($parameterIsRange)
    {
        $this->parameterIsRange = $parameterIsRange;
        return $this;
    }
}
