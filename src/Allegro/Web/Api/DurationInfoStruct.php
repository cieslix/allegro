<?php

/**
 * Class Allegro_Web_Api_DurationInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DurationInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $durationType
     */
    protected $durationType = null;

    /**
     * @param int $durationType
     */
    public function __construct($durationType)
    {
        $this->durationType = $durationType;
    }

    /**
     * @return int
     */
    public function getDurationType()
    {
        return $this->durationType;
    }

    /**
     * @param int $durationType
     * @return Allegro_Web_Api_DurationInfoStruct
     */
    public function setDurationType($durationType)
    {
        $this->durationType = $durationType;
        return $this;
    }
}
