<?php

/**
 * Class Allegro_Web_Api_ItemBilling
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemBilling extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $biName
     */
    protected $biName = null;

    /**
     * @var string $biValue
     */
    protected $biValue = null;

    /**
     * @param string $biName
     * @param string $biValue
     */
    public function __construct($biName, $biValue)
    {
        $this->biName = $biName;
        $this->biValue = $biValue;
    }

    /**
     * @return string
     */
    public function getBiName()
    {
        return $this->biName;
    }

    /**
     * @param string $biName
     * @return Allegro_Web_Api_ItemBilling
     */
    public function setBiName($biName)
    {
        $this->biName = $biName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBiValue()
    {
        return $this->biValue;
    }

    /**
     * @param string $biValue
     * @return Allegro_Web_Api_ItemBilling
     */
    public function setBiValue($biValue)
    {
        $this->biValue = $biValue;
        return $this;
    }
}
