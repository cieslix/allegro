<?php

/**
 * Class Allegro_Web_Api_DoSetUserLicenceDateResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSetUserLicenceDateResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $setDateValue
     */
    protected $setDateValue = null;

    /**
     * @param int $setDateValue
     */
    public function __construct($setDateValue)
    {
        $this->setDateValue = $setDateValue;
    }

    /**
     * @return int
     */
    public function getSetDateValue()
    {
        return $this->setDateValue;
    }

    /**
     * @param int $setDateValue
     * @return Allegro_Web_Api_DoSetUserLicenceDateResponse
     */
    public function setSetDateValue($setDateValue)
    {
        $this->setDateValue = $setDateValue;
        return $this;
    }
}
