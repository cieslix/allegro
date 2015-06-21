<?php

/**
 * Class Allegro_Web_Api_DurationTimeInfo
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DurationTimeInfo extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $durationOption
     */
    protected $durationOption = null;

    /**
     * @var int $durationValue
     */
    protected $durationValue = null;

    /**
     * @param int $durationOption
     * @param int $durationValue
     */
    public function __construct($durationOption, $durationValue)
    {
        $this->durationOption = $durationOption;
        $this->durationValue  = $durationValue;
    }

    /**
     * @return int
     */
    public function getDurationOption()
    {
        return $this->durationOption;
    }

    /**
     * @param int $durationOption
     * @return Allegro_Web_Api_DurationTimeInfo
     */
    public function setDurationOption($durationOption)
    {
        $this->durationOption = $durationOption;
        return $this;
    }

    /**
     * @return int
     */
    public function getDurationValue()
    {
        return $this->durationValue;
    }

    /**
     * @param int $durationValue
     * @return Allegro_Web_Api_DurationTimeInfo
     */
    public function setDurationValue($durationValue)
    {
        $this->durationValue = $durationValue;
        return $this;
    }
}
