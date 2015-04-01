<?php

/**
 * Class Allegro_Web_Api_DoGetAdminUserLicenceDateResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetAdminUserLicenceDateResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var float $getDateValue
     */
    protected $getDateValue = null;

    /**
     * @param float $getDateValue
     */
    public function __construct($getDateValue)
    {
        $this->getDateValue = $getDateValue;
    }

    /**
     * @return float
     */
    public function getGetDateValue()
    {
        return $this->getDateValue;
    }

    /**
     * @param float $getDateValue
     * @return Allegro_Web_Api_DoGetAdminUserLicenceDateResponse
     */
    public function setGetDateValue($getDateValue)
    {
        $this->getDateValue = $getDateValue;
        return $this;
    }
}
