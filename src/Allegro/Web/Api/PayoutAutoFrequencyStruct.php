<?php

/**
 * Class Allegro_Web_Api_PayoutAutoFrequencyStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PayoutAutoFrequencyStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $frequencyType
     */
    protected $frequencyType = null;

    /**
     * @var int $frequencyWeekValue
     */
    protected $frequencyWeekValue = null;

    /**
     * @var int $frequencyMonthValue
     */
    protected $frequencyMonthValue = null;

    /**
     * @param int $frequencyType
     * @param int $frequencyWeekValue
     * @param int $frequencyMonthValue
     */
    public function __construct($frequencyType, $frequencyWeekValue, $frequencyMonthValue)
    {
        $this->frequencyType = $frequencyType;
        $this->frequencyWeekValue = $frequencyWeekValue;
        $this->frequencyMonthValue = $frequencyMonthValue;
    }

    /**
     * @return int
     */
    public function getFrequencyType()
    {
        return $this->frequencyType;
    }

    /**
     * @param int $frequencyType
     * @return Allegro_Web_Api_PayoutAutoFrequencyStruct
     */
    public function setFrequencyType($frequencyType)
    {
        $this->frequencyType = $frequencyType;
        return $this;
    }

    /**
     * @return int
     */
    public function getFrequencyWeekValue()
    {
        return $this->frequencyWeekValue;
    }

    /**
     * @param int $frequencyWeekValue
     * @return Allegro_Web_Api_PayoutAutoFrequencyStruct
     */
    public function setFrequencyWeekValue($frequencyWeekValue)
    {
        $this->frequencyWeekValue = $frequencyWeekValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getFrequencyMonthValue()
    {
        return $this->frequencyMonthValue;
    }

    /**
     * @param int $frequencyMonthValue
     * @return Allegro_Web_Api_PayoutAutoFrequencyStruct
     */
    public function setFrequencyMonthValue($frequencyMonthValue)
    {
        $this->frequencyMonthValue = $frequencyMonthValue;
        return $this;
    }
}
